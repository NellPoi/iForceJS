<div class="container">
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
    $var1 = NUll;
    $var2 = null;
    $var3 = "var3";
    $var4;//尚未赋值
    unset($var3);//销毁变量
    var_dump($var1, $var2, $var3, $var4);
    if ($var1 == $var2) {
        //变量被赋值null无论大小最终都只被赋值为NULL。
        print("var1 as same as var2\n");
    }
    print("1==========\n");
    print("布尔型\n");
    $boolen_true = true;
    $boolen_false = false;
    var_dump($boolen_true, $boolen_false);
    print("2==========\n");
    print("數值变量\n");
    print("整型\n");
    $int_1 = 1234;//十进制数
    $int_2 = -123;//负数
    $int_3 = 0123;//八进制数
    $int_4 = 0x1A;//十六进制数
    var_dump($int_1, $int_2, $int_3, $int_4);
    print("浮点型 integer\n");
    $float_1 = 23.3;
    $float_2 = 3.2e5;//e+int代表几位小数
    $float_3 = 7E-10;
    var_dump($float_1, $float_2, $float_3);
    print("3==========\n");
    print("数值范围\n");
    $num_large = 2147483647;
    var_dump($num_large);
    $num_large = 2147483648;
    var_dump($num_large);//超过范围数值类型会由整型变成浮点型
    $num_large = 0x80000000;
    var_dump($num_large);//16进制也一样
    print("4==========\n");
    print("字符串 string\n");
    $string_1 = "HelloPHP";//双引号
    $string_2 = 'hellophp';//单引号
    //定界符
    $string_3 = <<<EOD
line1
      line2
line3
EOD;
    var_dump($string_1, $string_2, $string_3);
    print("5=========\n");
    print("自动转换变量类型\n");
    $foo = "0";
    $foo += 2;//整型与字符串相加运算为整型
    var_dump($foo);
    $foo += 0.2;//整数与浮点数相加运算为浮点型
    var_dump($foo);
    $foo = 6 + "3 boy";//如果是以合法数字开始，则取其数运算
    var_dump($foo);
    $foo = 3 + "7.Easy";//如果这个字符串带有. e E任何一个字符会被都当做float来求值
    var_dump($foo);
    print("6==========\n");
    print("强制转换变量类型\n");
    $foo = "I'am foo";
    $foo = (bool)$foo;//字符串强制转换为布尔型，因为string有被赋值所以是true
    var_dump($foo);
    unset($foo);//把foo掏空
    $foo = (boolean)$foo;//因为foo现在为空值，被强制转换为布尔值后为false
    var_dump($foo);
    //  下面这些可以被强制转换
    //  (int)(integer)转换成整型
    //  (bool)(boolean)转换成布尔型
    //  (float)(boolean)转换成浮点型
    //  (string)转换成字符串
    //  (array)转换成数组
    //  (object)转换成对象
    print("7==========\n");
    print("可变变量\n");
    $num__1 = 'hello';
    $$num__1 = 'world';//可变变量获取变量一的值作为变量名
    var_dump($$num__1, $hello);
    echo "8==========\n";
    echo("预定义变量\n");
    var_dump($_COOKIE, $_ENV, $_FILES, $_GET, $GLOBALS, $_REQUEST, $_SERVER, $_SESSION);
    print("9==========\n");
    print("外部变量\n" + "<br/>");
    var_dump($_POST['username']);
    var_dump($_REQUEST['username']);
    var_dump($_POST['email']);
    var_dump($_REQUEST['email']);
    ?>
    <form action="Hellophp.php" method="post">
        <b>Your name：</b>
        <input type="text" name="username"><br>
        <b>Your email：</b>
        <input type="text" name="email"><br/>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    echo $_SERVER['HTTP_USER_AGENT']
    ?>
    <?php
    print("10==========\n");
    print("引用变量\n");
    $A_name1 = "abc";
    $A_name2 = $A_name1;
    $A_name3 =& $A_name1;//变量前加&为引用
    var_dump($A_name1, $A_name2, $A_name3);
    $A_name1 = "def";//引用变量谁值的变化而变化
    var_dump($A_name1, $A_name2, $A_name3);
    print("11========\n");
    print("常量\n");
    define("CONSTANT", "Hello World");
    var_dump(CONSTANT);
    print("12=========\n");
    print("魔术常量");
    var_dump(__LINE__);//文件当前行号
    var_dump(__FILE__);//文件当前途径
    //var_dump(__FUNCTION__);返回函数名称
    //var_dump(__CLASS__);返回类的名称
    //var_dump(__METHOD__);返回方法名
    ?>
    <style>
        .bigOne {
            color: #373737;
            font-size: xx-large;
        }
        li{
            color:#373737;
        }
        ._ShortLine_{
            color: #373737;
            font-size: smaller;
        }
        body {
            margin: 0;
            font-family: "Microsoft Yahei";
        }
        .container {
            margin: 3em;
        }

        .code_grey {
            background-color: #d1d1d1;
            border-radius: 2%;
            font-size: small;
            padding: 3px;
        }

        .CountResult {
            font-weight: 900;
            font-size: large;
            text-decoration: none;
            color: #373737;
        }
    </style>
    <?php
    $_RS_ = "<a class='CountResult'>>></a>";//CountResult样式
//    $_LINE_="<a class='ShortLine'></a>";
    ?>
    <hr/>
    <div class="bigOne">Create File</div>
    <p class="_ShortLine_">——</p>
    <p>Function mkdir()</p>
    <span>已抑制生成错误信息</span>
    <?php
    @mkdir("Mkdir_files/text1.txt", 0700, true);
    @fopen("Mkdir_files/text2.txt", "w")
    ?>
    <div class="bigOne">Operator</div>
    <p class="_ShortLine_">——</p>
    <p>简单的小学计算题.</p>
    <li><span class="code_grey">$a=5+3-2*6/4</span></li>
    <?php
    $num_count_1 = 5 + 3 - 2 * 6 / 4;
    print($_RS_ . $num_count_1);
    ?>
    <div class="bigOne">Self operato</div>
    <p class="_ShortLine_">——</p>
    <p>自运算符</p>
    <li><span class="code_grey">$A=5;$A+=5;</span></li>
    <?php
    $num_count_2 = 5;
    $num_count_2 += 5;
    print($_RS_ . $num_count_2 . "<br/><br/>");
    ?>
        <div class="code_grey" style="width: 20%">/*更多的运算符*/<br/>
            += 加等于<br/>
            -= 减等于<br/>
            *= 乘等于<br/>
            /= 除等于<br/>
            &= 求模等于<br/>
            .= 字符串运算符<br/>
        </div>
    <div class="bigOne">Increment / decrement operator</div>
    <p class="_ShortLine_">——</p>
    <li>相比前者拥有更快的运行速度</li>
    <span>前置运算</span>
    <div class="code_grey">
        $a=10<br/>
        $b=++$a;<br/>
        //a=?
    </div>
    <?php
    $num_count_3=10;
    $num_count_4=++$num_count_3;
    print($_RS_.($num_count_3));
    ?>
    <br/>
    <span>后置运算</span>
    <div class="code_grey">
        $a=10;<br/>
        $b=$a++;<br/>
        //$a=?
    </div>
    <?php
    $num_count_3=10;
    $num_count_4=$num_count_3++;//b为未进行计算时的变量三（10）.
    print($_RS_.$num_count_4);
    ?>
</div>