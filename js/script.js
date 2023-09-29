//Animations
document.addEventListener('DOMContentLoaded', function () {
	const navLinks = document.querySelectorAll('.menu-item');
	const buttons = document.querySelectorAll('.sub-menu');
	const dataSheets = document.querySelectorAll('.product_link');
	const svg = document.querySelectorAll('.product_svg');
	const serviceBox = document.querySelectorAll('.service-box');

	const tl = gsap.timeline({});

	//Hover animations for the nav-bar
	navLinks.forEach((link) => {
		link.addEventListener('mouseenter', () => {
			tl.to(link, { duration: 0.01, color: '#fefefe' });
		});

		link.addEventListener('mouseleave', () => {
			tl.to(link, { duration: 0.01, color: '#000' });
		});
	});

	//Hover animations for the sub nav butttons
	buttons.forEach((button) => {
		button.addEventListener('mouseenter', () => {
			tl.to(button, { duration: 0.01, borderColor: '#04b1a3' });
		});
		button.addEventListener('mouseleave', () => {
			tl.to(button, { duration: 0.01, borderColor: '#ff4d5b' });
		});
	});

	//animation for the product link hovers (on text)
	dataSheets.forEach((link) => {
		link.addEventListener('mouseenter', () => {
			tl.to(link, { duration: 0.01, color: '#04b1a3' }).to(svg, { duration: 0.01, background: '#04b1a3' });
		});
		link.addEventListener('mouseleave', () => {
			tl.to(link, { duration: 0.01, color: '#ff4d5b' }).to(svg, { duration: 0.01, background: '#ff4d5b' });
		});
	});

	//animation for the product link hovers(on svg)
	svg.forEach((link) => {
		link.addEventListener('mouseenter', () => {
			tl.to(link, { duration: 0.01, background: '#04b1a3' }).to(dataSheets, { duration: 0.01, color: '#04b1a3' });
		});
		link.addEventListener('mouseleave', () => {
			tl.to(link, { duration: 0.01, background: '#ff4d5b' }).to(dataSheets, { duration: 0.01, color: '#ff4d5b' });
		});
	});

	//Services Hover Animation
	serviceBox.forEach((box) => {
		box.addEventListener('mouseover', () => {
			tl.to(box, { duration: 0.15, width: '33%', background: '#ff4d5b', ease: 'power3' });
		});
		box.addEventListener('mouseout', () => {
			tl.to(box, { duration: 0.15, width: '30%', background: 'transparent', ease: 'power3' });
		});
	});
});
