<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

echo "stropos: $pos<br>";

$email  = 'name@example.com';
$domain = strstr($email, '@');
echo "strstr: $domain<br>"; // prints @example.com

$user = strstr($email, '@', true); // A partir do PHP 5.3.0
echo $user; // prints name



$str = 'abcdef';
echo strlen($str); // 6

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
echo $onlyconsonants;

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
$result = count($a);
echo "count: $res";
$var = '';
if (isset($var)) {
    echo "Essa variável existe.";
}

?>
</body>
</html>