$(document).ready(function(){
	$('.header-burger').click(function(event){
		$('.header-burger,.header__bot').toggleClass('active');
		$('body').toggleClass('lock');
	});
});