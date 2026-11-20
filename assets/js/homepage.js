/**
 * PixaSaaS Homepage JavaScript
 */
(function() {
	'use strict';

	// Mobile menu toggle
	const menuToggle = document.querySelector('.pixasaas-header__menu-toggle');
	const nav = document.querySelector('.pixasaas-header__nav');

	if (menuToggle && nav) {
		menuToggle.addEventListener('click', function() {
			nav.classList.toggle('is-open');
			const isOpen = nav.classList.contains('is-open');
			menuToggle.setAttribute('aria-expanded', isOpen);
		});

		// Close menu on outside click
		document.addEventListener('click', function(e) {
			if (!nav.contains(e.target) && !menuToggle.contains(e.target)) {
				nav.classList.remove('is-open');
				menuToggle.setAttribute('aria-expanded', 'false');
			}
		});
	}

	// Pricing toggle (Monthly / Annual)
	const pricingToggle = document.querySelector('.pixasaas-pricing__toggle-switch');
	const monthlyLabel = document.querySelector('[data-period="monthly"]');
	const annualLabel = document.querySelector('[data-period="annual"]');
	const pricingCards = document.querySelectorAll('.pixasaas-pricing__card');

	function updatePrices(isAnnual) {
		pricingCards.forEach(function(card) {
			var monthlyPrice = card.getAttribute('data-monthly-price');
			var annualPrice = card.getAttribute('data-annual-price');
			var amountEl = card.querySelector('.pixasaas-pricing__price-amount');
			var periodEl = card.querySelector('.pixasaas-pricing__price-period');

			if (amountEl && periodEl && monthlyPrice && annualPrice) {
				if (isAnnual) {
					amountEl.textContent = '$' + annualPrice;
					periodEl.textContent = '/year';
				} else {
					amountEl.textContent = '$' + monthlyPrice;
					periodEl.textContent = '/month';
				}
			}
		});
	}

	if (pricingToggle) {
		pricingToggle.addEventListener('click', function() {
			var isAnnual = !this.classList.contains('active');
			this.classList.toggle('active');

			if (monthlyLabel) {
				monthlyLabel.classList.toggle('pixasaas-pricing__toggle-label--active');
			}
			if (annualLabel) {
				annualLabel.classList.toggle('pixasaas-pricing__toggle-label--active');
			}

			updatePrices(isAnnual);
		});
	}

	// Allow clicking the labels to toggle
	if (monthlyLabel) {
		monthlyLabel.addEventListener('click', function() {
			if (pricingToggle && pricingToggle.classList.contains('active')) {
				pricingToggle.classList.remove('active');
				monthlyLabel.classList.add('pixasaas-pricing__toggle-label--active');
				if (annualLabel) annualLabel.classList.remove('pixasaas-pricing__toggle-label--active');
				updatePrices(false);
			}
		});
	}

	if (annualLabel) {
		annualLabel.addEventListener('click', function() {
			if (pricingToggle && !pricingToggle.classList.contains('active')) {
				pricingToggle.classList.add('active');
				if (monthlyLabel) monthlyLabel.classList.remove('pixasaas-pricing__toggle-label--active');
				annualLabel.classList.add('pixasaas-pricing__toggle-label--active');
				updatePrices(true);
			}
		});
	}

	// Counter animation (count up on scroll into view)
	var counterAnimated = false;
	var counterSection = document.querySelector('.pixasaas-globe__counters');

	function animateCounters() {
		if (counterAnimated || !counterSection) return;
		var rect = counterSection.getBoundingClientRect();
		if (rect.top < window.innerHeight && rect.bottom > 0) {
			counterAnimated = true;
			var counters = counterSection.querySelectorAll('[data-count]');
			counters.forEach(function(el) {
				var target = parseFloat(el.getAttribute('data-count'));
				var suffix = el.getAttribute('data-suffix') || '';
				var decimals = parseInt(el.getAttribute('data-decimals') || '0', 10);
				var duration = 2000;
				var startTime = null;

				function step(timestamp) {
					if (!startTime) startTime = timestamp;
					var progress = Math.min((timestamp - startTime) / duration, 1);
					var eased = 1 - Math.pow(1 - progress, 3);
					var current = eased * target;
					if (decimals > 0) {
						el.textContent = current.toFixed(decimals) + suffix;
					} else {
						el.textContent = Math.floor(current) + suffix;
					}
					if (progress < 1) {
						requestAnimationFrame(step);
					} else {
						if (decimals > 0) {
							el.textContent = target.toFixed(decimals) + suffix;
						} else {
							el.textContent = target + suffix;
						}
					}
				}

				el.textContent = decimals > 0 ? '0' + suffix : '0' + suffix;
				requestAnimationFrame(step);
			});
		}
	}

	if (counterSection) {
		window.addEventListener('scroll', animateCounters, { passive: true });
		animateCounters();
	}

	// Smooth scroll for anchor links
	document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
		anchor.addEventListener('click', function(e) {
			var target = document.querySelector(this.getAttribute('href'));
			if (target) {
				e.preventDefault();
				target.scrollIntoView({ behavior: 'smooth', block: 'start' });
			}
		});
	});
})();
