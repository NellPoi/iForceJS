window.onload=function(){
	api_Start();
};
p="<br/>";
ChangeBackgroundModeTip1="cbmt1";
ChangeBackgroundModeTip2="cbmt2";
var api_Start=function Strings(){
	document.getElementById("string_ShowLayout").innerHTML="显示剪切边界、边缘等";
	document.getElementById("string_ForceRTL").innerHTML="强制屏幕在所有区域设置中均右至左排放";
	document.getElementById("test1_Modal4Text_EchoObject").innerHTML=p;
	document.getElementById("string_ChangeModeTip").innerHTML=p+"从下面选择修改方式进行下一步操作."+p+p+p;
};
