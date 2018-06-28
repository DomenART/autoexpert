// import FormValidator from 'validate-js';

(function () {

    let form = document.querySelector('.contacts-form');

    if (form) {

        let inputs = form.querySelectorAll('input, textarea');
        let submit = form.querySelector('button[type=submit]');

        form.addEventListener('submit', event => event.preventDefault());
        inputs.forEach(element => {
            element.addEventListener('change', () => {
                checkValidity(element);
            });
        });
        submit.addEventListener('click', formHandler);
        
        function checkValidity(element) {
            if (!element.checkValidity()) {
                element.focus();
                createErrorBox(element)
                element.addEventListener('focusout', () => removeErrorBox(element));
            } 
            element.classList.add('isValidating');
        }

        function createErrorBox(element) {
            let errorBox = document.createElement('div');
            element.parentNode.appendChild(errorBox);
            errorBox.classList.add('error-box');
            errorBox.textContent = element.getAttribute('title');
        }

        function removeErrorBox(element) {
            if (element.parentNode.querySelector('.error-box')) {
                element.parentNode.removeChild(element.parentNode.querySelector('.error-box'));
            }
        }

        function formHandler() {
            if (form.checkValidity()) {
                form.submit();
            } else {
                inputs.forEach(element => {
                    checkValidity(element)
                })
            }
        }
    }
    
})()


// let inputs = form.querySelectorAll('input, textarea');