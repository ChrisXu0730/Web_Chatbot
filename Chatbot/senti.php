

<?php
function query($text){
if (PHP_SAPI != 'cli') {
echo "<pre>";
}
$string = $text;
require_once __DIR__ . '/./autoload.php';
$sentiment = new \PHPInsight\Sentiment();


// calculations:
$scores = $sentiment->score($string);
$class = $sentiment->categorise($string);

// output:
echo "String: $string\n";
echo "Dominant: $class, scores: ";
print_r($scores);
echo "\n";

if ($class == "pos"){
echo "Thanks for using the web application.";
}
else{
echo "Please leave a comment.";}
}

$text = $_GET['text'];
echo query($text);
