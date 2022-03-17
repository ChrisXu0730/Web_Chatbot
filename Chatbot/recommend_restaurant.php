<?php

function query($text)
{
require_once("recommend.php");
require_once("sample_list.php");
$re = new Recommend();
$ratinglist=$re->getRecommendations($restaurants, "Driver");
arsort($ratinglist);
echo "<pre>";
print_r($ratinglist);
echo " My recommendation will be: </pre>";
$i=1;
foreach($ratinglist as $key=>$value)
{
 if($i<4)
 {
echo $i.":".$key."<br/>";
 }
$i++;
}
}

$text = $_GET['text'];
echo query($text);
?>