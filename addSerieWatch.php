<?php
// Array with names
/*$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";*/

// get the q parameter from URL
$serie = $_REQUEST["serie"];
$watchlist = 'BD/watchlist_'.$_REQUEST['watch'].'.json';
$tabl = json_decode(file_get_contents($watchlist), true);
 

$url = $_REQUEST["image"];
$nomImage = $serie.'.jpg';
$img = 'Images/watchlist_'.$_REQUEST['watch'].'/'.$nomImage;
file_put_contents($img, file_get_contents($url));




$hint = "";




if(file_exists($watchlist)){
	$final_data=fileWriteAppend();
	if(file_put_contents($watchlist, $final_data)){
		$hint = "Data added Success fully";
	}
}else{
	$final_data=fileCreateWrite();
	if(file_put_contents($watchlist, $final_data)){
		$hint = "File createed and  data added Success fully";
	}
}
function fileWriteAppend(){
	$current_data = file_get_contents($watchlist);
	$array_data = json_decode($current_data, true);
	$extra = array(
		'id'	=>	$_REQUEST['serie'],
		'nom'	=>	$_REQUEST["name"],
		'rated'	=>	$_REQUEST["rated"],
		'type'	=>	$_REQUEST["type"],
		'image'	=>	$nomImage,
		'etat'	=>	3
	);
	$array_data[] = $extra;
	$final_data = json_encode($array_data);
	return $final_data;
}
function fileCreateWrite(){
	$file=fopen("file.json","w");
	$array_data=array();
	$extra = array(
		'id'	=>	$_REQUEST['serie'],
		'nom'	=>	$_REQUEST["name"],
		'rated'	=>	$_REQUEST["rated"],
		'type'	=>	$_REQUEST["type"],
		'image'	=>	$nomImage,
		'etat'	=>	3
	);
	$array_data[] = $extra;
	$final_data = json_encode($array_data);
	fclose($file);
	return $final_data;
}



// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>