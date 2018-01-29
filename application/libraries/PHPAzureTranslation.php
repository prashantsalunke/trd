<?php
class PHPAzureTranslation {
	public function __construct(){
		$this->CI =& get_instance();
		$this->azure_key = "54db7a942ec34177ba922139e72425b4";
	}
	public function getToken($azure_key)
	{
    	$url = 'https://api.cognitive.microsoft.com/sts/v1.0/issueToken';
    	$ch = curl_init();
    	$data_string = '';
    	$data_string = json_encode('{body}');
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            //'Content-Type: application/json',
            	'Content-Length: ' . strlen($data_string),
            	'Ocp-Apim-Subscription-Key: ' . $azure_key
        	)
    	);
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_HEADER, false);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$strResponse = curl_exec($ch); //print_r($strResponse);
    	curl_close($ch);
    	return $strResponse;
	}

	// Request the translation
	public function curlRequest($url)
	{ //echo $url;
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/xml"));
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    $curlResponse = curl_exec($ch);
	    curl_close($ch);
	    return $curlResponse;
	}

	public function translate($inputStr,$fromLanguage,$toLanguage){
		if(!empty($inputStr)){
			// Get the translation
			$accessToken = $this->getToken($this->azure_key);

			$params = "text=" . urlencode($inputStr) . "&to=" . $toLanguage . "&from=" . $fromLanguage . "&appId=Bearer+" . $accessToken . "&contentType=text/plain";
			$translateUrl = "http://api.microsofttranslator.com/v2/Http.svc/Translate?$params";
			$curlResponse = $this->curlRequest($translateUrl);
			$xmlObj = simplexml_load_string($curlResponse);
			foreach ((array)$xmlObj[0] as $val) {
	    		$translatedStr = $val;
			}
			// Translation output:
			//echo "<p>From " . $fromLanguage . ": " . $inputStr . "<br>";
			//echo "To " . $toLanguage . ": " . $translatedStr . "<br>";
			return $translatedStr;
		}else
		{
			return $inputStr;
		}
		
	}

}