var contactForm = document.getElementById('contactForm')

contactForm.addEventListener('submit', function (event) {
  if(!contactForm.checkValidity()) {
    event.preventDefault()
    event.stopPropagation()
  }

  contactForm.classList.add('was-validated')
}, false)