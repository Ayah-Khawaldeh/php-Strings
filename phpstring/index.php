<?php

// uppercase 
echo strtoupper("ayah khawaldeh");
echo "<br>";

// lowercase 
echo strtolower("AYAH KHAWALDEH");
echo "<br>";

//  character uppercase
echo ucfirst("ayah khawaldeh");
echo "<br>";

//  words uppercase
print ucwords("ayah khawaldeh");
echo "<hr>";

$string1= '082307'; 
echo substr(chunk_split($string1, 2, ':'), 0, -1);

echo "<hr>";

$string2 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($string2,'Ayah') ) 
 {
    echo strpos("The quick brown fox jumps over the lazy dog.", "jumps");
 }
else
 {
    echo ' not found';
 }

 echo "<hr>";

 $int=  3;           
 $str = (string)$int;
 
 if ($int === $str) 
 {
   echo "They are the same";
 }
 else
 {
 echo "They are not same";
 }

 echo "<hr>";

 $url = 'www.example.com/public_html/index.php';
 $file_name = substr(strrchr($url, "/"), 1);
 echo $file_name; 

  echo "<hr>";
  $ayah1  = 'Ayah@example.com';
  $user = strstr($ayah1, '@', true);
  echo $user;

  echo "<hr>";
  $ayah2  = 'Ayah@example.com';
  echo substr($ayah2, -3);

  echo "<hr>";

  $val1 = 65.45;
  $val2 = 104.35;
  echo sprintf("%1.2f", $val1+$val2);

  echo "<hr>";
  function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(8);

  echo "<hr>";
  $string3 = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $string3, 1); 

echo "<hr>";

$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");

echo "<hr>";

$str3 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str3);
var_dump($arra1);

echo "<hr>";

$path = 'https://www.orange.com/index.php';
$file = basename($path, ".php"); 
echo $file;
echo "<hr>";


$cha = 'z';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha;

echo "<hr>";

$sub_string = 'ayah@';
$str = 'ayah@example.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
echo $str;

echo "<hr>";

$string3 = 'ayah@example.com';
echo bin2hex($string3)."\n";


echo "<hr>";


$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string;

echo "<hr>";

$a = 'The quick brown fox';
$arr1 = explode(' ',trim($a));
echo $arr1[0];

echo "<hr>";

$h = '000547023.24';
$h += 0;
echo $h; 

echo "<hr>";

$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("the", " ", $my_str);

echo "<hr>";

$slash = 'The quick brown fox jumps over the lazy dog//';
echo rtrim($slash, '/');

echo "<hr>";

$url = 'http://www.example.com/5478631' ;
echo substr($url, strrpos($url, '/' )+1);

echo "<hr>";


$String = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $String);

echo "<hr>";

$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));

echo "<hr>";

$str6 = "2,543.12";
$k = str_replace( ',', '', $str6);
if( is_numeric($k))
  {
  echo $k;
  }


  echo "<hr>";

  for ($w = ord('a'); $w <= ord('z'); $w++)
  echo chr($w);
  



?>