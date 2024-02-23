const Nav = (nav) => {
	const doc = document.documentElement.dataset;
	const toggleButton = nav.querySelector('.nav-toggle');

	const state = {
		open: false,
	};

	const toggle = () => {
		state.open = !state.open;
		doc.navState = state.open ? 'open' : 'closed';
	};

	toggleButton.addEventListener('click', () => {
		toggle();
	});

	return { state, toggle };
};

const nav = document.querySelector('.nav');
Nav(nav);
