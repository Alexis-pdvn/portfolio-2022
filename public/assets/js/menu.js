console.clear();

const app = (() => {
	let body;
	let menu;
	let menuItems;
	
	const init = () => {
		bodynav = document.querySelector('.body-nav');
		menu = document.querySelector('.menu-icon');
		menuItems = document.querySelectorAll('.nav__list-item');
		nav = document.querySelector('.nav');

		applyListeners();
	}
	
	const applyListeners = () => {
		menu.addEventListener('click', () => toggleClass(bodynav, 'nav-active'));
		menu.addEventListener('click', () => toggleClass(nav, 'nav-index'));
	}
	
	const toggleClass = (element, stringClass) => {
		if(element.classList.contains(stringClass))
			element.classList.remove(stringClass);
		else
			element.classList.add(stringClass);
	}
	
	init();
})();

