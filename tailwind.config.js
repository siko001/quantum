/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./*.{php,html,js}', './template-parts/*.{php,html,js}'],
	theme: {
		extend: {
			backgroundColor: {
				'p-color': '#FF4D5B',
			},
			borderColor: {
				'p-color': '#FF4D5B',
			},
			fontFamily: {
				custom: ['itc-avant-garde-gothic-pro', 'sans'],
			},
		},
	},
	plugins: [],
};
