/*
	DATE:2017/5/21
	IDE:AIDE
*/
var api_Res_Urls={
	url_AboutmeHeadImg:"http://i0.hdslb.com/bfs/face/d7cdb62d663c33b5ceb11d45972c5271013dec0d.jpg@75Q.webp@192w_192h_75Q_1c_2e.webp",
	url_WebColorCode:"http://www.w3school.com.cn/cssref/css_colors.asp",
	url_NavAboutmeHeadImg:"http://i0.hdslb.com/bfs/face/d7cdb62d663c33b5ceb11d45972c5271013dec0d.jpg@75Q.webp@192w_192h_75Q_1c_2e.webp",
	url_SideNavAudioContext:"http://kune.online/AudioContext",
	url_NavDropdownQQGroup:"https://jq.qq.com/?_wv=1027&k=4AHMbAt",
	url_DemoBGImg:"http://img0.imgtn.bdimg.com/it/u=2829271292,3032423924&fm=26&gp=0.jpg",
};
var api_ResUrlsManager_Load=function(){
	document.getElementById("Res_SidenavHeadImg").src=api_Res_Urls.url_AboutmeHeadImg;
	document.getElementById("Res_NavAboutmeHeadImg").src=api_Res_Urls.url_NavAboutmeHeadImg;
	document.getElementById("Res_SideNavAudioContext").href=api_Res_Urls.url_SideNavAudioContext;
	document.getElementById("Res_DropdownQQGroup").href=api_Res_Urls.url_NavDropdownQQGroup;
	document.getElementById("Res_DemoBGImg").src=api_Res_Urls.url_DemoBGImg;
};


