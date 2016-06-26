<?php
/*swtich
工作原理：
    对表达式（通常是变量）进行一次计算
    把表达式的值与结构中 case 的值进行比较
    如果存在匹配，则执行与 case 关联的代码
    代码执行后，break 语句阻止代码跳入下一个 case 中继续执行
    如果没有 case 为真，则使用 default 语句
*/
$x=9;
switch ($x)
{
    default:
        echo "No number between 1 and 3";
    case 1:
        echo "Number 1";
        break;
    case 2:
        echo "Number 2";
        break;
    case 3:
        echo "Number 3";
        break;
}
?>