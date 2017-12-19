window.$ = jQuery;

$(document).ready(function () {

	// Load image into cache
	var img = document.createElement('img');
	img.src = '/wp-content/themes/naijasafe/assets/img/bx_loader.gif';

	/* ======== ScrollReveal ======== */
	if (! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		(function ($) { 'use strict'; window.scrollReveal = new scrollReveal({ reset: true, move: '50px' }); })();
	}

	// Social glide effect
	if (window.innerWidth >= 768) {
		(function () {

			function glide() {
				$('.social-glide .link').css('margin-left', '0px').addClass('done');
			}

			glide();

			$(window).on('resize', function () {

				glide();

			});

		})();
	}

	// Nomination UI
	(function () {
		var headers = $('.nom-cat > header');
		headers.click(function () {
			var parent = $(this).parent(),
				body = parent.find('.body'),
				active = $('.nom-cat .active');
			active.slideToggle(250);
			if (!body.hasClass('active')) {
				body.slideToggle(300).addClass('active');
			}
			active.removeClass('active');

		});
	})();

	// Adjust footer widget sizes
	(function () {
		var fw = $('.footer-widget');
		fw.eq(0).removeClass('col-sm-4').addClass('col-sm-3');
		fw.eq(1).removeClass('col-sm-4').addClass('col-sm-5').find('.img-responsive').css('margin-bottom', '20px');
		fw.eq(2).removeClass('col-sm-4').addClass('col-sm-3 col-sm-offset-1');
	})();

	// Mobile header
	$('.menu-item-has-children').append('<span class="menu-drop"><i class="fa fa-chevron-circle-down"></i></span>');
	$('.menu-item-has-children > .menu-drop').click(function (e) {
		e.preventDefault();
		var parent = $(this).parent(),
			submenu = parent.find('.sub-menu');

		if (!parent[0].hasAttribute('expandable')) {
			parent.attr('expandable', 'true');
		} else {
			submenu.slideToggle(300);
		}
	});

	function removeUserInfoFields() {
		$('.y-info').remove();
	}

	// Check if user is already registered
	(function () {
		var vt = $('#voter-status'),
			status;
		if (vt.length < 1) return;
		status = JSON.parse(vt.html().trim());
		if (status.user_is_registered == 1) removeUserInfoFields();
	})();

	// Mobile menu
	var modalBG = $('#modal-bg'),
		navBtn = $('.open-side-nav'),
		navMenu = $('#primary-menu'),
		action_loader = '<span class="action-loader"><img src="' + img.src + '" alt=""></span>',
		naijasafe = {

			noms: {

				bucket: {},

				hideForms: function () {

					$('[data-form]').hide().each(function () {
						$(this)[0].reset();
					});
				},

				saveUserInfo: function (info) {
					naijasafe.bucket['userInfo'] = info;
				},

				showForm: function (form) {
					var form = $('[data-form="' + form + '"]');
					if (form.length < 1) return;
					naijasafe.noms.hideForms();
					form.show();
					showModal();
					$(document.body).addClass('no-overflow');
				},

				submitForm: function (data) {

					$.ajax({

						type: "POST",
						url: '/wp-content/themes/naijasafe/ajax/',
						dataType: 'json',
						data: data,
						cache: false,
						contentType: 'application/x-www-form-urlencoded'

					}).done(function (msg, status) {

						alert(msg.resText);
						if (msg.resCode !== 0) removeUserInfoFields();
						if (msg.resCode == 1) {
							hideModal();
							fbq('track', 'CompleteRegistration');
						}

					}).fail(function (xhr, status, error) {

						if (xhr.status == 0) alert('Network error. Please confirm that you are connected to the internet');
						if (xhr.status.toString().match(/^5\d{2}$/)) alert('Error occurred. Please try again later.');

					}).always(function (mm) {

						// console.log( mm );
						enableSubmit();

					});
				},

				userInfoExists: function () {
					return userInfo in naijasafe.noms.bucket;
				}
			}
		};

	modalBG.click(function (e) {

		if (e.currentTarget !== e.target) {
			e.stopPropagation();
			return;
		}

		hideModal();
	});

	navBtn.click(function () {
		navMenu.slideToggle(400);
		var exp = navMenu.attr('aria-expanded'),
			val = (exp == 'false' || undefined == exp) ? 'true' : 'false';
		navMenu.attr('aria-expanded', val);
	});

	$('[data-close-modal]').click(function () {
		hideModal();
	});

	function hideModal() {
		$(document.body).removeClass('no-overflow');
		modalBG.fadeOut(500, function () {
			naijasafe.noms.hideForms();
		});
	}

	function showModal() {
		modalBG.fadeIn(500);
	}

	(function () {
		var cat = $('[data-cat]');
		cat.click(function (e) {
			e.stopPropagation();
			var form = $(this).attr('data-cat');
			naijasafe.noms.showForm(form);
		});
	})();

	$('[data-form]').submit(function (e) {
		e.preventDefault();
		var data = $(this).serialize(),
			btn = $(this).find('[type="submit"]').eq(0);

		addLoader(btn);
		var result = naijasafe.noms.submitForm(data);
		// if ( result !== '0xfff') removeLoader( btn );
	});

	function addLoader(elem) {
		var parent = elem.parent();
		elem.attr('disabled', 'disabled');
		parent.prepend(action_loader);
		parent.find(' > .action-loader ').fadeIn(300);
	}

	function enableSubmit() {
		$('.action-loader').fadeOut(300, function () {
			$(this).remove();
		});

		$('[type="submit"]').removeAttr('disabled');

	}

	function removeLoader(elem) {
		var parent = elem.parent(),
			loader = parent.find(' > .action-loader ');

		loader.fadeOut(300, function () {
			loader.remove();
			elem.removeAttr('disabled');
		});
	}

	var imp = $('.imp'),
		color = ['transparent', '#639e1d'],
		start = 0;
	setInterval(function () {
		imp.css('border-color', color[start]);
		start = Math.abs(start - 1);
	}, 800);

	//========== Post navigation links ==========//
	$('.nav-previous').prepend("<i class='fa fa-chevron-circle-left'></i>&nbsp;");
	$('.nav-next').append("&nbsp;<i class='fa fa-chevron-circle-right'>&nbsp;</i>");


	// Ticket form
	$('#gticketform').submit(function (e) {
		e.preventDefault();
		var form = $(this),
			data = form.serialize(),
			url = form.attr('action'),
			btn = form.find('button'),
			btnTxt = btn.find('.txt'),
			btnSpinner = btn.find('.log-spin');

			btnTxt.hide(0, function(){
				btnSpinner.show();
				btn.attr('disabled', 'disabled');
			});

		$.ajax({

			type: "POST",
			url: url,
			dataType: 'json',
			data: data,
			cache: false,
			contentType: 'application/x-www-form-urlencoded'

		}).done(function (msg, status) {

			return alert(msg.resText);

		}).fail(function (xhr, status, error) {

			if (xhr.status == 0) alert('Network error. Please confirm that you are connected to the internet');
			if (xhr.status.toString().match(/^5\d{2}$/)) alert('Error occurred. Please try again later.');

		}).always(function (mm, status, rrr) {
			btnSpinner.hide(function(){
				btnTxt.show();
				btn.removeAttr('disabled');
			});

		});
	});

});