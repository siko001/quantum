document.addEventListener('DOMContentLoaded', function () {
	let nav = document.getElementById('mobile');
	let closeOverlay = document.getElementById('close_overlay');
	let overlay = document.querySelector('.overlay');

	closeOverlay.addEventListener('click', () => {
		if (overlay.classList.contains('active-overlay')) {
			overlay.classList.remove('active-overlay');
		}
	});

	nav.addEventListener('click', () => {
		// Check if the class is not present
		if (!overlay.classList.contains('active-overlay')) {
			overlay.classList.add('active-overlay'); // Add the class
		} else {
			overlay.classList.remove('active-overlay'); // Remove the class
		}
	});
});
