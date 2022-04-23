//=====================
// SPNAV
//=====================
$(document).on("click", ".toggle", function () {
  $("html").toggleClass("navopen");
});

//=====================
// IMAGE
//=====================

function cover(){
	$('.cover').each(function(index, el) {
		var $this = $(this);
		var src = $this.data('src');
		$this.css({
			'background-image': 'url('+src+')',
			'background-position': 'center',
			'background-size': 'cover',
		});
	});
	$('.contain').each(function(index, el) {
		var $this = $(this);
		var src = $this.data('src');
		$this.css({
			'background-image': 'url('+src+')',
			'background-position': 'center top',
			'background-size': 'contain',
		});
	});
}

$(window).on('load',function() {
	cover();
});