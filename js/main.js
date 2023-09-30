document.addEventListener('DOMContentLoaded', function () {
	let nav = document.getElementById('mobile');
	let closeOverlay = document.getElementById('close_overlay');
	let overlay = document.querySelector('.overlay');
	let mobileNavMenu = document.querySelector('.mobile-nav-menu');

	//Close the overlay
	closeOverlay.addEventListener('click', () => {
		if (overlay.classList.contains('active-overlay')) {
			overlay.classList.remove('active-overlay');
		}
	});

	//Open the Overlay
	nav.addEventListener('click', () => {
		// Check if the class is not present
		if (!overlay.classList.contains('active-overlay')) {
			overlay.classList.add('active-overlay'); // Add the class
		}
	});

	//close the overlay if navbar is clicked
	mobileNavMenu.addEventListener('click', () => {
		overlay.classList.remove('active-overlay');
	});
});
