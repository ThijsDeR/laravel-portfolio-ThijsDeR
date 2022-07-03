function validateUsername(input) {
    console.log(input.value)
    const errorP = input.parentElement.querySelector('p.error')
    console.log(input.parentElement)
    console.log(errorP)
    console.log(input.value.length)
    if (input.value.length === 0) {
        errorP.innerHTML = "Username cannot be empty"
        input.class = "error"
        
    }
    else if (input.value.length > 32 || input.value.length < 4) {
        errorP.innerHTML = "Username needs to be between 4 and 32 characters"
        input.class = "error"
    }
    else {
        errorP.innerHTML = ""
        input.class = ""
    }
}

function validateEmail(input) {
    const errorP = input.parentElement.querySelector('p.error')
    const emailSplit = input.value.split('@')
    let emailBeforeAt = emailSplit[0]
    let emailAfterAtBeforeDot = ''
    let emailAfterAtAfterDot = ''
    if (emailSplit[1]) {
        const emailSplitAfterAt = emailSplit[1].split('.')
        emailAfterAtBeforeDot = emailSplitAfterAt[0]
        if (emailSplitAfterAt[1]) emailAfterAtAfterDot = emailSplitAfterAt[1]
    }
    if (input.value.length === 0) {
        errorP.innerHTML = "Email cannot be empty"
        input.class = "error"
    }
    else if (emailBeforeAt === "" || emailAfterAtBeforeDot === "" || emailAfterAtAfterDot === "") {
        errorP.innerHTML = "Email needs to be in format: example@domain.com"
        input.class = "error"
    }
    else {
        errorP.innerHTML = ""
        input.class = ""
    }
}

function validatePassword(input) {
    const errorP = input.parentElement.querySelector('p.error')
    if (input.value.length === 0) {
        errorP.innerHTML = "Password cannot be empty"
        input.class = "error"
    }
    else if (input.value.length < 10) {
        errorP.innerHTML = "Password needs to be longer than 10 characters"
        input.class = "error"
    }
    else {
        errorP.innerHTML = ""
        input.class = ""
    }
}


window.onload = () => {
    const usernameInput = document.getElementById('username')
    usernameInput.addEventListener('input', () => {
        validateUsername(usernameInput)
    })
    const emailInput = document.getElementById('email')
    emailInput.addEventListener('input', () => {
        validateEmail(emailInput)
    })
    const passwordInput = document.getElementById('password')
    passwordInput.addEventListener('input', () => {
        validatePassword(passwordInput)
    })
}