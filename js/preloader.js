document.body.onload = function () {
	setTimeout(function(){
		var preloader = document.getElementById('preloader');
		if(!preloader.classList.contains('preloader_active')){
			preloader.classList.add('preloader_active');
		}
	}, 1000);
}