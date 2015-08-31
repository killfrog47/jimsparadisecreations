<?php

/**
* This class is to tie into flickr's api
*/
class FlickrPHP
{
	private $apiKey = "";
	private $userID = "";
	private $url_base = "https://api.flickr.com/services/rest/?";
	private $params = array();

	function __construct($apiKey, $userID){
		$this->apiKey = $apiKey;
		$this->userID = $userID;
	}

	function getAlbums(){
		$method = "flickr.photosets.getList";
		$params['method'] = $method;
		$thisURL = self::createURL($params);
		unset($params);
		$result = self::curl_download($thisURL);
		self::cacheAlbumList($result);
		return $result;
	}
	function getPhotos($photosetID){
		$method = "flickr.photosets.getPhotos";;
		$params['method'] = $method;
		$params['photoset_id'] = $photosetID;
		$thisURL = self::createURL($params);
		unset($params);
		$result = self::curl_download($thisURL);
		return $result;
	}
	function getSizes($photoID){
		$method = "flickr.photos.getSizes";
		$params['method'] = $method;
		$params['photo_id'] = $photoID;
		$thisURL = self::createURL($params);
		unset($params);
		$result = self::curl_download($thisURL);
		return $result;
	}
	function cacheAlbumList($jsonFile){
		// $newFile = fopen("album-list.json", "w");
		file_put_contents("album-list.json", $jsonFile);
	}
	// function cacheSizeList($imageID){

	// }
	// function checkCacheAge(){

	// }

	function createURL($parameters){

		$query = http_build_query($parameters);
		$url = "https://api.flickr.com/services/rest/?api_key=".$this->apiKey."&user_id=".$this->userID."&".$query."&format=json&nojsoncallback=1";
		return $url;
	}

	function curl_download($url){
		if (!function_exists('curl_init')){
		    die('Sorry cURL is not installed!');
		}

		$ch = curl_init();
		$timeout = 5;
		
		//remove for prod
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$response = curl_exec($ch);
		$errno = curl_errno($ch);
		$error = curl_error($ch);
		if( $errno == CURLE_OK) {
			$pics = json_decode($response);
		}
		return $pics;
	}
}