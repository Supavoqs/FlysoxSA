document.addEventListener('DOMContentLoaded', function () {
	var toggle = document.querySelector('.mobile-nav-toggle');
	var nav = document.querySelector('.primary-menu');
	if (toggle && nav) {
		toggle.addEventListener('click', function () {
			nav.classList.toggle('is-open');
		});
	}
});
