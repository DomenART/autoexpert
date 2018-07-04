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
			requestHandler(form)
				.then(fillSuccessResult)
				.catch(fillFailResult)
				.then(resetResult.bind(null, form, inputs));
		}
		else {
			inputs.forEach(element => checkValidity(element));
		}
	}

	function checkValidity(element) {
		if (!element.checkValidity() && (element.value)) {
			createErrorBox(element);
		}
		element.classList.add('isValidating');
	}

	function createErrorBox(element) {
		let errorBox = document.createElement('div');
		element.parentNode.appendChild(errorBox);
		errorBox.classList.add('error-box');
		errorBox.textContent = element.getAttribute('title');
		setTimeout(() => element.focus(), 0);
		setTimeout(() => removeErrorBox(element), 3000);
	}

	function removeErrorBox(element) {
		if (element.parentNode.querySelector('.error-box')) {
			element.parentNode.removeChild(element.parentNode.querySelector('.error-box'));
		}
	}

	function requestHandler(form) {
		let formData = new FormData(form);
		let request = new XMLHttpRequest();
		request.open('POST','http://autoexpert.loc/wp-json/contact-form-7/v1/contact-forms/86/feedback');
		request.send(formData);
		form.classList.add('contacts-form_shown');
		return new Promise(function(resolve, reject) {
			request.addEventListener('loadend', () => {
				if (request.status == 200) resolve(form);
				else reject(form);			
			});
		});
	}

	function fillSuccessResult() {
		form.classList.add('contacts-form_success');
		form.querySelector('.contacts-form__result-text').innerHTML = 'Сообщение успешно отправлено! <br/> Спасибо!';
		return form;
	}

	function fillFailResult() {
		form.classList.add('contacts-form_fail');
		form.querySelector('.contacts-form__result-text').innerHTML = 'Произошла ошибка!<br/>Сообщение не отправлено!<br/>Извините!';
		return form;
	}
	
	function resetResult(form, inputs) {
		setTimeout(() => {
			form.classList.remove('contacts-form_shown', 'contacts-form_success', 'contacts-form_fail');
			form.reset();		
			inputs.forEach(element => {
				element.classList.remove('isValidating');
			});
		}, 5000);
	}
})();
