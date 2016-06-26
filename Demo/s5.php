<?php
//echo
//显示字符串，注意字符串中能包含 HTML 标记
echo "<h2>PHP 很有趣！</h2>";
echo "<h5>PHP 很有趣！</h5>";
echo "Hello world!<br>";
echo "我计划学习 PHP！<br>";
echo "这段话", "由", "多个", "字符串", "串接而成。";

//显示变量
$txt1="Learn PHP";
$txt2="W3School.com.cn";
$cars=array("Volvo","BMW","SAAB");
echo $txt1;
echo "<br>";
echo "Study PHP at $txt2";
echo "<br>";
echo "My car is a {$cars[0]}";//注意数组的显示
?>