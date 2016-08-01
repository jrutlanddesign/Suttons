console.log('Website design by Joe Rutland - http://joerutland.com');

// resposive navigation
$(document).ready(function () {
				$('.navTrigger').click(function () {
								$('nav').toggleClass('open');
				});
				////

				// mobile show nav on scroll
				$(window).scroll(function () {
								var scroll = $(window).scrollTop();

								if (scroll >= 100) {
												$('nav').addClass('dropHead');
								} else {
												$('nav').removeClass('dropHead');
								}
				});
				////
});
//# sourceMappingURL=main.js.map
