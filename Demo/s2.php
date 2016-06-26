<?php
/*
 * Created by PhpStorm.
 * User: bluew
 * Date: 2016/6/19
 * Time: 21:14
 */
$x=10; // 全局作用域
$y=20;
function myTest() {
    $y=200; // 局部作用域
    $x=100;
    echo "<p>测试函数内部的变量：</p>";
    echo "变量 x 是：$x";
    echo "<br>";
    echo "变量 y 是：$y";
}

myTest();

echo "<p>测试函数之外的变量：</p>";
echo "变量 x 是：$x";
echo "<br>";
echo "变量 y 是：$y";
?>