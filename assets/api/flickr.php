<?php

/**
* This class is to tie into flickr's api
*/
class FlickrPHP
{
	private $apiKey;
	private $userID;
	private $url_base = "https://api.flickr.com/services/rest/?";
	private $params = array();

	function __construct($apiKey, $userID){
		$apiKey = $this->apiKey;
		$userID = $$this->userID;
	}

	function getAlbums(){
		$thisURL = $url_base."method=flickr.photosets.getList&api_key=".$apiKey."&user_id=".$userID."&format=json&nojsoncallback=1";
		$result = curl_download($thisURL);
		return $result;
	}
	function getPhotos($photosetID){
		$thisURL = $url_base."method=flickr.photosets.getPhotos&api_key=".$apiKey."&photoset_id=".$photosetID."&user_id=".$userID."&format=json&nojsoncallback=1";
		$result = curl_download($thisURL);
		return $result;
	}
	function getSizes($photoID){
		$method = "method=flickr.photos.getSizes";
		$photoIDVar = "photoset_id=".$photoID;
		array_push($params, $method, $photoIDVar);

		$thisURL = createURL($params)
		// $result = curl_download($thisURL);
		return $result;
	}

	function createURL($parameters){

		$query = http_build_query($parameters);
		$url = "https://api.flickr.com/services/rest/?api_key=".$apiKey."&user_id=".$userID."&".$query."&format=json&nojsoncallback=1";
		return $url;
	}

	function curl_download($url){
		if (!function_exists('curl_init')){
		    die('Sorry cURL is not installed!');
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		$output = curl_exec($ch);
		curl_close($ch);

		return $output;
	}
}