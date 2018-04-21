<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if(!function_exists('getHost')) {
	function getHost()
	{
		$pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
		if ($_SERVER["SERVER_PORT"] != "80")
		{
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
		}
		else
		{
			$pageURL .= $_SERVER["SERVER_NAME"];
		}
		return $pageURL;
	}
}
if (!function_exists('cropDetail')) {

	function cropDetail($string = null, $character = 100, $appendText = '...')
	{
		if (strlen($string) > ($character - 1)) {
			return substr($string, 0, ($character - 1)) . $appendText;
		}
		return $string;
	}
}
if (!function_exists('pr')) {
    function pr($array) {
        if (!empty($array)) {
            echo "<pre>";
            print_r($array);
            echo "</pre>";
        } else {
            return false;
        }
    }

}
function get_coordinates($street,$city,$state,$pincode)
{
    $address = urlencode($street.','.$city.','.$state.' '.$pincode." India");
    $url = "https://maps.google.com/maps/api/geocode/json?key=AIzaSyDnd4J4HYZXGTLWPDF49qUGYC68sSaptLo&address=$address&sensor=false";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $response_a = json_decode($response);
    $status = $response_a->status;

    if ( $status == 'ZERO_RESULTS' )
    {
        return FALSE;
    }
    else
    {
        $return = array('lat' => $response_a->results[0]->geometry->location->lat, 'long' => $long = $response_a->results[0]->geometry->location->lng);
        return $return;
    }
}
function GetDrivingDistance($lat1,$long1, $lat2, $long2)
{
    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$lat1.",".$long1."&destinations=".$lat2.",".$long2."&mode=driving";
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $response_a = json_decode($response, true);
    //$dist = $response_a['rows'][0]['elements'][0]['distance']['text'];
    $dist = $response_a['rows'][0]['elements'][0]['distance']['value'];
    $time = $response_a['rows'][0]['elements'][0]['duration']['text'];
    //$time = $response_a['rows'][0]['elements'][0]['duration']['value'];

    return array('distance' => $dist, 'time' => $time);
}
function getShippingCharge($distance,$charge,$free){
	$distance = ($distance - ($free*1000))/1000;
	if($distance>0){
		return array(
			'distance' => $distance,
			'per_km_cost' => $charge,
			'charge' => $distance * $charge,
		);
	}
	return array(
			'distance' => 0,
			'per_km_cost' => $charge,
			'charge' => 0,
		);;
}
function getUserId(){
	$CI = & get_instance();
	//$md['sess']=$CI->session->userdata('clinte');			
	$d = $CI->session->userdata('clinte');
	return $d['Admin_ID'];
}
function sendSms($mobileNo,$message){
	$url = "login.bulksmsgateway.in/sendmessage.php?user=securemetasys&password=9429089148&mobile=" . urlencode($mobileNo) . "&sender=PIZACO&message=" . urlencode($message) . "&type=" . urlencode('3');
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$curl_scraped_page = curl_exec($ch);
	curl_close($ch);
}
function getPrice($price,$discount = 0){
	return $price - ($price * $discount)/100;
}
function getImgUrl($img){
	$re=str_ireplace("<img src='"," ",$img);
	$img_array=explode("'",$re);
	$img_array[0] = trim($img_array[0]);
	return isset($img_array[0])?$img_array[0]:"";
}