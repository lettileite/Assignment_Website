var form = document.getElementById('contact-form');
var fname = document.getElementById('fname');
var lname = document.getElementById('lname');
var contactNum = document.getElementById('contactnum');
var email = document.getElementById('email');
var message = document.getElementById('message');

form.addEventListener('submit', e => {
    e.preventDefault();

    checkInputs();
});

function checkInputs() {
    var fnameValue = fname.value;
    var lnameValue = lname.value;
    var contactNumValue = contactNum.value;
    var emailValue = email.value;
    var messageValue = message.value;

    if (fnameValue == '') {
        setErrorFor(fname, "First Name Can't be Blank");
    } else {
        setSuccessFor(fname);
    }

    if (lnameValue == '') {
        setErrorFor(lname, "Last Name Can't be Blank");
    } else {
        setSuccessFor(lname);
    }

    if (contactNumValue == '') {
        setErrorFor(contactNum, "Contact Number Can't be Blank");
    } else {
        setSuccessFor(contactNum);
    }

    if (emailValue == '') {
        setErrorFor(email, "Email Can't be Blank");
    } else {
        setSuccessFor(email);
    }

    if (messageValue == '') {
        setErrorFor(message, "Message Can't be Blank");
    } else {
        setSuccessFor(message);
    }
}

function setErrorFor(input, message) {
    var formControl = input.parentElement;
    var small = formControl.querySelector('small');
    formControl.className = 'form-group error';
    small.innerText = message;
}

function setSuccessFor(input) {
    var formControl = input.parentElement;
    formControl.className = 'form-group success';
}