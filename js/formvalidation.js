function resetErrors() {
    const successMessages = document.forms[0].getElementsByClassName('valid-feedback');
    for (let i = 0; i < successMessages.length; i++) {
        successMessages[i].style.display = 'none';
    }
    const errorMessages = document.forms[0].getElementsByClassName('invalid-feedback');
    for (let i = 0; i < errorMessages.length; i++) {
        errorMessages[i].style.display = 'none';
    }
    const fields = document.forms[0].getElementsByClassName('was-validated');
    for (let i = 0; i < fields.length; i++) {
        fields[i].classList.remove('was-validated');
    }
}

function validate(fieldId) {
    const errorField = fieldId + '-error';
    const successField = fieldId + '-success';
    const wrapperDiv = fieldId + '-wrapper';

    document.getElementById(wrapperDiv).classList.add("was-validated");

    if (document.getElementById(fieldId).validity.valid) {
        document.getElementById(successField).style.display = 'block';
        document.getElementById(errorField).style.display = 'none';
        return true;
    } else {
        document.getElementById(successField).style.display = 'none';
        document.getElementById(errorField).style.display = 'block';
        return false;
    }
}

function validatePassword() {
    const password = document.getElementById('password');
    const passMatch = document.getElementById('repeatPassword');
    if (password.value && password.validity.valid) {
        passMatch.disabled = false;
    } else {
        passMatch.disabled = true;
        passMatch.value = '';
        passMatch.classList.remove('is-valid');
        passMatch.classList.remove('is-invalid');
        document.getElementById('repeatPassword-success').style.display = 'none';
        document.getElementById('repeatPassword-error').style.display = 'none';
    }
    validate(password.id);
}

function validatePasswordMatch() {
    const password = document.getElementById('password');
    const passMatch = document.getElementById('repeatPassword');

    if (!password.value) {
        passMatch.classList.remove('is-valid');
        passMatch.classList.remove('is-invalid');
        document.getElementById(passMatch.id + '-success').style.display = 'none';
        document.getElementById(passMatch.id + '-error').style.display = 'none';
        return true;
    } else if (password.value !== passMatch.value) {
        passMatch.classList.remove('is-valid');
        passMatch.classList.add('is-invalid');
        document.getElementById(passMatch.id + '-success').style.display = 'none';
        document.getElementById(passMatch.id + '-error').style.display = 'block';
        return false;
    } else {
        passMatch.classList.remove('is-invalid');
        passMatch.classList.add('is-valid');
        document.getElementById(passMatch.id + '-success').style.display = 'block';
        document.getElementById(passMatch.id + '-error').style.display = 'none';
        return true;
    }
}

$(document).ready(function () {
    $('#phoneNumber').usPhoneFormat({});
});
