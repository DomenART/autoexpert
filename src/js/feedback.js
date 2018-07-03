(function () {
	let form = document.querySelector('.contacts-form');

	if (form) {
		let inputs = form.querySelectorAll('input, textarea');
		form.addEventListener('submit', event => {
			formHandler(event, form, inputs);
		});
		inputs.forEach(element => {
			element.addEventListener('change', () => {
				checkValidity(element);
			});
		});
	}

	function formHandler(event, form, inputs) {
		event.preventDefault();
		if (form.checkValidity()) {
			requestHandler(form);
		} else {
			inputs.forEach(element => {
				checkValidity(element);
			});
		}
	}

	function checkValidity(element) {
		if (!element.checkValidity() && (element.value))
			createErrorBox(element);
		element.classList.add('isValidating');
	}

	function createErrorBox(element) {
		let errorBox = document.createElement('div');
		element.parentNode.appendChild(errorBox);
		errorBox.classList.add('error-box');
		errorBox.textContent = element.getAttribute('title');
		setTimeout(() => element.focus(), 0);
		setTimeout( () => removeErrorBox(element), 3000);
	}

	function removeErrorBox(element) {
		if (element.parentNode.querySelector('.error-box'))
			element.parentNode.removeChild(element.parentNode.querySelector('.error-box'));
	}

	function requestHandler(form) {
		let formData = new FormData(form);
		let xhr = new XMLHttpRequest();
		xhr.open('POST','http://autoexpert.loc/wp-json/contact-form-7/v1/contact-forms/86/feedback');
		xhr.send(formData);
		xhr.addEventListener('readystatechange', () => {
			listenRequestResponse(xhr);
		});
	}

	function listenRequestResponse(request) {
		if (request.status == 200 && request.readyState == 4)
			return JSON.parse(request.responseText).message;
	}
})();
