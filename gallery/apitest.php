<?php
require_once('../assets/api/flickr.php');

$flickr = new FlickrPHP("XXX", "133398630@N03");
$photosReturn = $flickr->getAlbums();
// $photosetID = $photosReturn->photosets->photoset[3]->id;

// $photo = $flickr->getPhotos($photosetID);

// // $photosizes = $flickr->getSizes($photo->photoset->primary);
// foreach ($photo->photoset->photo as $single) {
// 	$photosizes = $flickr->getSizes($single->id);
// 	echo "<img src='".$photosizes->sizes->size[3]->source."' />";
// }
$contents = file('album-list.json');
echo "<pre>";
var_dump($contents);
// var_dump($photosReturn->photosets->photoset[0]);
echo "</pre>";
