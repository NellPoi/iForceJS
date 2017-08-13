/*
	DATE:2017/5/21
	IDE:AIDE
*/
var api_Res_Urls={
	url_AboutmeHeadImg:"js/res/imgs/d7cdb62d663c33b5ceb11d45972c5271013dec0d.jpg_192x192.jpg",
	url_WebColorCode:"http://www.w3school.com.cn/cssref/css_colors.asp",
	url_NavAboutmeHeadImg:"js/res/imgs/d7cdb62d663c33b5ceb11d45972c5271013dec0d.jpg_192x192.jpg",
	url_SideNavAudioContext:"http://kune.online/AudioContext",
	url_NavDropdownQQGroup:"https://jq.qq.com/?_wv=1027&k=4AHMbAt",
};
var api_ResUrlsManager_Load=function(){
	document.getElementById("Res_SidenavHeadImg").src=api_Res_Urls.url_AboutmeHeadImg;
	document.getElementById("Res_NavAboutmeHeadImg").src=api_Res_Urls.url_NavAboutmeHeadImg;
	document.getElementById("Res_SideNavAudioContext").href=api_Res_Urls.url_SideNavAudioContext;
	document.getElementById("Res_DropdownQQGroup").href=api_Res_Urls.url_NavDropdownQQGroup;
};


