import IMask from 'imask';

(function () {
	let form = document.querySelector('.contacts-form');

	if (form) {
		let telInput = document.querySelector('.js-tel-input');
		let maskOptions = {
			mask: '+{7} (000) 000-00-00',
			lazy: true
		};
		let telMask = new IMask(telInput, maskOptions);
		telInput.addEventListener('focus', () => {
			
		});
	}
})();
