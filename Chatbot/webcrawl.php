<?php
function query($text)
{
	$curl = curl_init();
//Initialize curl

	curl_setopt($curl, CURLOPT_URL,"https://www.broadsheet.com.au/melbourne/guides/best-restaurants");

//Set request parametersand return by the file stream

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	$contents = curl_exec($curl);
//Send the requestand get response

	$dom = new DOMDocument();@$dom->loadHTML($contents);
	return $dom;
//Using DOM method to parse the responses (HTML file
}

//use HTTP get request method

$text = $_GET['text'];
foreach(query($text)->getElementsByTagName('p') as $para) 
{echo $para->textContent;echo "<br />";}
//Iterate over all the <p>tags



