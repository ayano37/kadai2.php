<?php
function multiple_number($number) {
    return $number*2;
}
echo multiple_number(4);
echo "\n";

function add($a, $b) {
    return $a + $b;
}
echo add(1, 2);
echo "\n";

function times($arr) {
    $result = 1;
    foreach ($arr as $a) {
        $result = $result * $a;
    }
    return $result;
}
echo times(array(1, 3, 5 ,7, 9));
echo "\n";

function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number < $a) {
            $max_number = $a;
        }
    }  
    return $max_number;
}
echo max_array([5, 2, 4, 9, 7]);
echo "\n";
 
$string = '<a herf="http;//google.com">Google</a>';
$result = strip_tags($string);
echo $result;
echo "\n";

$data = array("A","B","C");
array_push($data,"D","C");
print_r($data);
echo "\n";

$data = array("目標１" => "プログラマーになる","目標２" => "収入を増やす");
$add_data = array ("目標１" => "エンジニアになる","目標３" => "フリーランスになる");
$result = array_merge($data, $add_data);
print_r($result);
echo "\n";

$now = time();
print $now;
echo "\n";

$timestamp = mktime(0, 0, 0, 20, 11, 2015);
print $timestamp;
echo "\n";

$timestamp = time() + (60 * 60 * 24)*7;
$next_week = date('Y年m月d日H時j分s秒',$timestamp);
print $next_week;
echo "\n";

echo date('Y-m-d')."<br/>\n";//現在日付 2020-06-22
echo date('H:i:s')."<br/>\n";//現在時間 12:55:41
echo date('Y-m-d H:i:s')."<br/>\n";//現在日時 2020-06-22 12:55:41



