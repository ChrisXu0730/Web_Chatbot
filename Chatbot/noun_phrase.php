<?php
function query($text)
{
  $curl = curl_init();

  curl_setopt_array($curl, [
	CURLOPT_URL => "https://textanalysis.p.rapidapi.com/spacy-noun-chunks-extraction",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POST => 1,
	CURLOPT_POSTFIELDS => "text=$text",
	CURLOPT_HTTPHEADER => [
	"X-Mashape-Key: 3fab609c54mshe93c5b9fa38cad1p1fd269jsn017719b7e1e3",
     "Content-Type: application/x-www-form-urlencoded",
     "Accept: application/json"
	],
  ]);

  $response = curl_exec($curl);
  return $response;
}

//use HTTP get request method(can also change to POST if ajax using “POST”)
$text = $_GET['text'];
echo query($text);

