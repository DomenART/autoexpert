import forEach from 'lodash/fp/forEach'

forEach(document.querySelectorAll('.js-form'), function(form) {
  form.addEventListener('submit', function(e) {
    e.preventDefault()

    const request = new XMLHttpRequest()
    request.open('POST', form.action, true)
    request.addEventListener('readystatechange', function() {
      if (this.readyState != 4) return

      const response = JSON.parse(request.response)
      let message = form.querySelector('.form__message')
      if (!message) {
        message = document.createElement('div')
        message.classList.add('form__message')
        message.style.display = 'none'
        form.appendChild(message)
      }

      if (response.status == 'validation_failed' || response.status == 'mail_failed' || response.status == 'acceptance_missing') {
        message.classList.remove('form__message_success')
        message.classList.add('form__message_error')
        message.innerHTML = response.message
        message.style.display = 'block'
      }

      if (response.status == 'mail_sent') {
        message.classList.remove('form__message_error')
        message.classList.add('form__message_success')
        message.innerHTML = response.message
        message.style.display = 'block'
        form.reset()
      }
    })
    request.send(new FormData(form))
  })
})