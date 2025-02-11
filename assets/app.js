const SUBMIT_BUTTON = document.getElementById("btn-submit");

SUBMIT_BUTTON.addEventListener('click', submitContactForm);

const showError = (message) => {
    console.log('hi 1');
    const ERROR_CONTAINER = document.getElementById("error");
    return ERROR_CONTAINER.innerText = message;
}

function submitForm() {
    console.log('hi 2');
    document.getElementById("contact-form").submit();
    return
}

function submitContactForm () {
    const CURRENT_LINK = window.location.href;

    console.log('hi');

    const MessageSent = sendWhatsAppMessage();
    if(MessageSent) submitForm();
    else return;

    function sendWhatsAppMessage() {
        const MESSAGE = document.getElementById("message").value;
        const NAME = document.getElementById("name").value;
        const EMAIL = document.getElementById("email").value;
        const CONATCT = document.getElementById("contact").value;

        if(NAME == "") {
            showError(`Name is empty`);
            return false;
        }

        if(EMAIL == "") {
            showError(`EMAIL is empty`);
            return false;
        }

        if(CONATCT == "") {
            showError(`CONATCT is empty`);
            return false;
        }

        if(MESSAGE == "") {
            showError(`MESSAGE is empty`);
            return false;
        }

        let message = "New message from " + NAME + "\n\n"; // Pesan Pembuka
        message += "*Name:* " + NAME + "\n";
        message += "*Email:* " + EMAIL + "\n";
        message += "*CONATCT:* " + CONATCT + "\n";
        message += "*MESSAGE:* " + MESSAGE + "\n\n";
        message += "=============================" + "\n";
        message += "*Form:* " + CURRENT_LINK + "\n";
        message += "=============================";
        /* Pengaturan Whatsapp */
        const walink = 'whatsapp://send',
            phoneNumber = '+918167270301'; // No Whatsapp Kamu
        
        var encodedMessage = encodeURIComponent(message);
        var whatsappUrl = walink + "?phone=" + phoneNumber + "&text=" + encodedMessage;
        window.open(whatsappUrl, '_blank');
        return true;

    }
}
