/*
	不听不听 consol念经
	alert 调试大法好
	bug使人进步
*/

function test1_DisplayDate() {
    document.getElementById('nav_title').innerHTML = Date();
}

function test1_Document() {
    document.write("Time" + "'<br/>'" + Date());
}

function test1_Modal1btn_ChangeTitle() {
    var InputTitle = document.getElementById('test1_Modal1ipt_TitleValue').value;
    document.getElementById('nav_title').innerHTML = InputTitle;
    var $toast = $('<b class="blue-text">Succeed!</b>');
    Materialize.toast($toast, 5000);
}

function test1_Modal2btn_CheckNaN() {
    var InputValue = document.getElementById('test1_Modal2ipt_CheckNaN').value;
    if (InputValue == "" || isNaN(InputValue)) {
        var $toast_flase = $('<b class="red-text">不是数字！</b>');
        Materialize.toast($toast_flase, 8000);
    }
    else {
        var $toast_true = $('<b class="green-text">没毛病</b>');
        Materialize.toast($toast_true, 8000);
    }
}

var Public_test1_EchoArray = function Private_test1_EchoArray() {
    var i;
    var cars = new Array();
    cars[0] = "绿茶拿铁";
    cars[1] = "奶茶仙草";
    cars[2] = "维他柠檬茶";
    for (i = 0; i < cars.length; i++) {
        var i_before = document.getElementById('test1_Modal3Text_EchoArray').innerHTML;
        i_echo = i_before + cars[i] + "<br>";
        document.getElementById('test1_Modal3Text_EchoArray').innerHTML = i_echo;
    }
};

function test2_ShowLayout() {
    var cb_ShowLayout = document.getElementById('test2_cb_ShowLayout');
    if (cb_ShowLayout.checked) {
        Array.prototype.slice.call(document.all).forEach(function (all) {
            all.style.border = "1px red solid";
        });
        var $toast_checked = $('<b class="blue-text">已开启</b>');
        Materialize.toast($toast_checked, 4000);
    }
    else {
        Array.prototype.slice.call(document.all).forEach(function (all) {
            all.style.border = "none";
        });
        var $toast_else = $('<b class="white-text">已关闭</b>');
        Materialize.toast($toast_else, 4000);
    }
}

function test1_Modal3Fbtn_Reload() {
    document.getElementById('test1_Modal3Text_EchoArray').innerHTML = "";
}

function test1_Modal3Fbtn_EchoArray() {
    Public_test1_EchoArray();
}

function test2_ForceRTL() {
    var $toast = $('<b class="red-text"><i>The method is not supported</i></b>');
    Materialize.toast($toast, 5000);
    /*
    var cb_ForceRTL=document.getElementById('test2_cb_ForceRTL');
    */
}

//function test1_Modal4_Fbtn_EchoObject(){
//	var $toastContent = $('<h1>是啊</h1>');
//	Materialize.toast($toastContent, 5000);
//	var person=
//	{
//	name1 : "|ω•`)",
//	name2  : "(。•ω•。)ノ♡",
//	id        :  264
//	};/*
//	alert(person.lastname + "<br>");
//	alert(person["lastname"] + "<br>");
//	*/
//	var t_before=document.getElementById('test1_Modal4Text_EchoObject').innerHTML;
//	document.getElementById('test1_Modal4Text_EchoObject').innerHTML=person.name1;
//	document.getElementById('test1_Modal4Text_EchoObject').innerHTML=t_before+person.name2;
//	};

function test1_Modal4_Fbtn_Refresh() {
    location.reload();
}

function test1_Modal4_Fbtn_CloseModal() {
    $('#modal4').modal('close');
}

function AlertMsg_1() {
    alert("打开声音得到更好的体验."
        + "\n建议穿上红色衣服."
    );
    window.open("https://tusenpo.github.io/FlappyFrog/");
}

var Mode;
var SelectMode = false;
var ModalFooterMode;

function test1_Modal5_Fbtn_Mode1() {
    Mode = true;
    SelectMode = true;
}

function test1_Modal5_Fbtn_Mode2() {
    Mode = false;
    SelectMode = true;
}

function test1_Modal5_btn_NextSteps() {
    var test1_ClassName = document.getElementById("test1_Modal5_test1_ClassName");
    var test2_ClassName = document.getElementById("test1_Modal5_test2_ClassName");
    var test3_ClassName = document.getElementById("test1_Modal5_test3_ClassName");
    if (Mode == true) {
        test2_ClassName.className = test2_ClassName.className + " disabled";
        test3_ClassName.className = test3_ClassName.className + " disabled";
        $('ul.tabs').tabs('select_tab', 'test1_Modal5_test1');
        ModalFooterMode = true;
    }
    if (Mode == false) {
        test2_ClassName.className = test2_ClassName.className + " disabled";
        test1_ClassName.className = test1_ClassName.className + " disabled";
        $('ul.tabs').tabs('select_tab', 'test1_Modal5_test3');
        ModalFooterMode = false;
    }
    if (SelectMode == false) {
        var $toast = $('<b class="pink-text">没选模式</b>');
        Materialize.toast($toast, 4000);
    }
    var FonterOtherMode = function () {
        var FooterMode = document.getElementById("test1_Modal5_FooterMode");
        FooterMode.innerHTML = "OK";
    };
    if (ModalFooterMode = true) {
        FonterOtherMode();
    }
    if (ModalFooterMode = false) {
        FonterOtherMode();
    }
}

function console_print() {
    console.info("console_print()");
    var txt = document.getElementById("CONSOLE_name").value;
    console.log(_CT_()+txt);
}

function printconcole() {
    for (var i = 1; i <= 10 * 100; i++) {
        console.log(i);
    }
}

setTimeout("changeFrameHeight();console.log(_CT_()+'SetiFrameheightSucceed')", 8000);
setTimeout("document.getElementById('Navtestname').innerHTML=navigator.userAgent;console.log(_CT_()+'GetUASucceed')",2000);
function changeFrameHeight() {
    var ifm = document.getElementById("myiframe");
    ifm.height = document.documentElement.clientHeight;

}

window.onresize = function () {
    changeFrameHeight();
}
function _CT_(){
    console_GetTime();
}
function _CT_() {
    var nowTime = new Date();
    var consoleTime = "[" + nowTime.getHours() + ":" + nowTime.getMinutes() + "]";
    return consoleTime;
}
console.log(_CT_()+"Process finished in Main.js with exit code ");



