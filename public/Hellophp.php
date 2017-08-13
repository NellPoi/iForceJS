<?php

/**
 * Created by PhpStorm.
 * User: 49017
 * Date: 2017/7/1
 * Time: 13:37
 */
    print("<h2>[bulid]<span style='color:red'>Console</span> Mode</h2>");
    print("Hellophp!\n=================");
    print("变量类型");
    print("无类型 Null\n");
    $var1 =NUll;
    $var2=null;
    $var3 ="var3";
    $var4;//尚未赋值
    unset($var3);//销毁变量
    var_dump($var1,$var2,$var3,$var4);
    if ($var1==$var2){
    //变量被赋值null无论大小最终都只被赋值为NULL。
    print("var1 as same as var2\n");
    }
    print("1==========\n");
    print("布尔型\n");
    $boolen_true=true;
    $boolen_false=false;
    var_dump($boolen_true,$boolen_false);
    print("2==========\n");
    print("數值变量\n");
    print("整型\n");
    $int_1=1234;//十进制数
    $int_2=-123;//负数
    $int_3=0123;//八进制数
    $int_4=0x1A;//十六进制数
    var_dump($int_1,$int_2,$int_3,$int_4);
    print("浮点型 integer\n");
    $float_1=23.3;
    $float_2=3.2e5;//e+int代表几位小数
    $float_3=7E-10;
    var_dump($float_1,$float_2,$float_3);
    print("==========\n");
    print("数值范围\n");
    $num_large=2147483647;
    var_dump($num_large);
    $num_large=2147483648;
    var_dump($num_large);//超过范围数值类型会由整型变成浮点型
    $num_large=0x80000000;
    var_dump($num_large);//16进制也一样
    print("==========\n");
    print("字符串 string\n");
    $string_1="HelloPHP";//双引号
    $string_2='hellophp';//单引号
    //定界符 
    $string_3=<<<EOD
line1
      line2
line3
EOD;
    var_dump($string_1,$string_2,$string_3);



    var_dump($string);

