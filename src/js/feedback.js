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
		if (form.checkValidity())
			requestHandler(form)
				.then(() => fillSuccessResult(form))
				.catch(() => fillFailResult(form))
				.then(() => resetResult(form, inputs));
		else 
			inputs.forEach(element => checkValidity(element));
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
		let request = new XMLHttpRequest();
		request.open('POST','http://autoexpert.loc/wp-json/contact-form-7/v1/contact-forms/86/feedback');
		request.send(formData);
		let promise = new Promise(function(resolve, reject) {
			request.addEventListener('loadend', () => {
				if (request.status == 200) resolve();
				else reject();			
			});
		});
		return promise;
	}

	function renderRequestResult(form) {
		let requestBox = document.createElement('div');
		form.appendChild(requestBox);
		requestBox.classList.add('request-result');
		return requestBox;		
	}

	function fillSuccessResult(form) {
		let requestBoxText = document.createElement('div');
		requestBoxText.classList.add('request-result__text_success');
		requestBoxText.innerHTML = 'Сообщение успешно отправлено! <br/> Спасибо!';
		renderRequestResult(form).appendChild(requestBoxText);
		
	}

	function fillFailResult(form) {
		renderRequestResult(form);
		let requestBoxText = document.createElement('div');
		requestBoxText.classList.add('request-result__text_error');
		requestBoxText.innerHTML = 'Произошла ошибка!<br/>Сообщение не отправлено!<br/>Извините!';
		renderRequestResult(form).appendChild(requestBoxText);
	}
	
	function resetResult(form, inputs) {
		setTimeout(() => {
			form.removeChild(form.querySelector('.request-result'));
			form.reset();	
			inputs.forEach(element => {
				element.classList.remove('isValidating');
			});
		}, 5000);
	}
})();
