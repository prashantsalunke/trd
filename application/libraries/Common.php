<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * trdStation Common Class
 *
 * @package CodeIgniter
 * @subpackage Libraries
 * @category Common
 * @author Rajesh
 */
class Common
{
    // instance for CodeIgniter
    private $CI;
    
    // busiId
    private $busiId = '';
    
    // logged in user category id - Shipper/Seller/Buyer
    private $categoryId = '';

    /**
     * Constructor - set CodeIgniter instance to CI variable & business id to busiId
     */
    function __construct()
    {
        // Assign by reference with "&" so we don't create a copy
        $this->CI = & get_instance();
        
        // load community and session libraries
        $this->CI->load->library(array('mylib/CommunityLib','mylib/InquiryLib','mylib/OfferLib', 'session'));
        
        // get busiId from session
        $this->busiId = $this->CI->session->userdata('busi_id');
        
        // get logged-in user category id
        $this->categoryId = $this->CI->session->userdata('tsuser')['category_id'];
    }

    /**
     * get add to community count
     *
     * @access public
     * @param
     *            -
     * @return int|count of add to community request
     */
    public function getTotalAddToCommunityCount()
    {
        $sendcommunityrequest = $this->CI->communitylib->getInvitationCommunityRequest($this->busiId);
        $totalAlertCount = 0;
        foreach ($sendcommunityrequest as $value) {
            if ($value['alert_viewed'] == 0) {
                $totalAlertCount ++;
            }
        }
        return $totalAlertCount;
    }

    /**
     * get inquiry alert count
     *
     * @access public
     * @param
     *            -
     * @return int|inquiry alert count
     */
    public function getTotalInquiryCount()
    {
        $totalInquiryAlertCount = 0;
        
        if (in_array($this->categoryId, array(SELLER_ID, SHIPPER_ID))) {
            $inquiry = $this->CI->inquirylib->getInquiryByBusiId($this->busiId);
        } else {
            $inquiry = $this->CI->inquirylib->getBuyerInquiryByBusiId($this->busiId);
        }
        
        foreach ($inquiry as $value) {
            if ($value['alert_viewed'] == 0) {
                $totalInquiryAlertCount ++;
            }
        }
        return $totalInquiryAlertCount;
    }

    /**
     * get offer alert count
     *
     * @access public
     * @param
     *            -
     * @return int|offer alert count
     */
    public function getTotalOfferCount()
    {
        $totalOfferAlertCount = 0;
        
        if (in_array($this->categoryId, array(SELLER_ID, SHIPPER_ID))) {
            $offer = $this->CI->offerlib->getOfferByBusiId($this->busiId);
        } else {
            $offer = $this->CI->offerlib->getBuyerOfferByBusiId($this->busiId);
        }
        
        foreach ($offer as $key => $value) {
            if ($value['alert_viewed'] == 0) {
                $totalOfferAlertCount ++;
            }
        }
        return $totalOfferAlertCount;
    }
}