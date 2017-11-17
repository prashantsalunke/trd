function openHomePage() {
	$("#main-page-lock").slideUp("slow");
	$("#main-page").show();
	$('.slider').slick('unslick'); /* ONLY remove the classes and handlers added on initialize */
    $('.slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
    });
}

function termscondition(type)
{
	 $.post(base_url+'account/termscondition',{type:type},function(data) {
		 document.getElementById('termsconditiondiv').innerHTML = data;
		 if(type == 3) {
			 privacyterms();
		 }
		 if(type == 2) {
			 generalterms();
		 }
	 },'html');
	$('#myTermCondition').modal('show');
	if(type == 1) {
		$('#myModal').modal('hide');
	}
	document.getElementById('termstitle').innerHTML = "TrdStation Terms of Use. <br/> Legal Information &amp; Conditions, was updated on Oct. 1st, 2017.";
}
function generalterms()
{
	document.getElementById('generalterms').style.display = 'block';
	document.getElementById('paidservice').style.display = 'none';
	document.getElementById('privacyterms').style.display = 'none';
	document.getElementById('generalterms').style.color = '#ff5c33';
	document.getElementById('termstitle').innerHTML = "TrdStation Terms of Use. <br/> Legal Information &amp; Conditions, was updated on Oct. 1st, 2017.";
	$("#gtcterms").addClass("active");
	$("#prterms").removeClass("active");
	$("#pstterms").removeClass("active");
}
function paidserviceterms()
{
	document.getElementById('paidservice').style.display = 'block';
	document.getElementById('generalterms').style.display = 'none';
	document.getElementById('privacyterms').style.display = 'none';
	document.getElementById('paidservice').style.color = '#ff5c33';
	document.getElementById('termstitle').innerHTML = "TrdStation Terms of Use. <br/> Legal Information &amp; Conditions For Black Horse Members, was updated on Oct. 1st, 2017.";
	$('.termslink').css( {" color" : "#ff5c33" });
	$("#pstterms").addClass("active");
	$("#gtcterms").removeClass("active");
	$("#prterms").removeClass("active");
}
function privacyterms()
{
	document.getElementById('privacyterms').style.display = 'block';
	document.getElementById('paidservice').style.display = 'none';
	document.getElementById('generalterms').style.display = 'none';
	document.getElementById('privacyterms').style.color = '#ff5c33';
	document.getElementById('termstitle').innerHTML = "Privacy Policy <br/>The TrdStation Privacy Policy was updated on Oct. 1st, 2017.";
	$("#prterms").addClass("active");
	$("#gtcterms").removeClass("active");
	$("#pstterms").removeClass("active");
	
}
function closeterms()
{
	var termsopentype = $('#termsopentype').val();
	$('#myTermCondition').modal('hide');
	if(termsopentype == 1) {
		$('#myModal').modal('show');
	}
 	
}