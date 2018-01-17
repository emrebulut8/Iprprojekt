$(document).ready(function() {
	

	function heroHeight() {
		var $this = $('#hero'),
		win = $(window),
		dataHeight = $this.data('height');

		if ($this.hasClass('full-height')) {
			$this.css({
				'height': (win.height())
			});
		} else {
			$this.css({
				'height': dataHeight + 'px'
			});
		}
	};
	// Start 
	heroHeight();
	$(window).resize(heroHeight);


	$(document).on('click.nav','.navbar-collapse.in',function(e) {
		if( $(e.target).is('a') || $(e.target).is('button')) {
			$(this).collapse('hide');
		}
	});


	$("#show-btn").click(function() {
		$('#showme').slideDown("slow");
		$(this).hide();
		return false;
	});


	$('.carousel').carousel();
	

	$('#modal-bar').affix({
		offset: {
			top: 10,
		}
	});



	$('.smooth-scroll').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				// console.log(offset());
				$('html,body').animate({
						scrollTop: target.offset().top - 60
				}, 1000);
				return false;
			}
		}
	});



});