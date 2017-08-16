(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space\


$(document).ready(function(){
	/*框架组件初始化*/
	$('.modal').modal();
	/*侧边栏预加载配置*/
	$('.button-collapse').sideNav({
      menuWidth: 240, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
});
console.log(_CT_()+"Process finished in init.js with exit code ");

