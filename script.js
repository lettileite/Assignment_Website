function validateContactForm() {

    Name = document.getElementById("contact-name").value;
    //number = document.getElementById("contact-number").value;
    Email = document.getElementById("contact-email").value;
    Message = document.getElementById("contact-message").value;

    if (!Name || !Email || !Message) {
        alert("Please fill out the form completely");
    }

    else {
        alert("Thank you! Message has been sent.");
    }

    return false;
};
