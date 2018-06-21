Mercadopago.getIdentificationTypes();



function guessingPaymentMethod(event) {
    var bin = getBin();

    if (event.type == "keyup") {
        if (bin.length >= 6) {
            Mercadopago.getPaymentMethod({
                "bin": bin
            }, setPaymentMethodInfo);
        }
    } else {
        setTimeout(function() {
            if (bin.length >= 6) {
                Mercadopago.getPaymentMethod({
                    "bin": bin
                }, setPaymentMethodInfo);
            }
        }, 100);
    }
};

function setPaymentMethodInfo(status, response) {
	var form = document.getElementById('pay');
    if (status == 200) {
        paymentMethod.setAttribute('name', "paymentMethodId");
        paymentMethod.setAttribute('type', "hidden");
        paymentMethod.setAttribute('value', pus[0].id);

        form.appendChild(paymentMethod);
        } else {
            document.querySelector("input[name=paymentMethodId]").value = response[0].id;
        }
    };




// al hacer submit creare el token.. ing moises marquina


var form = document.getElementById('pay');
form.addEventListener('submit', function(e) {
  e.preventDefault();
  Mercadopago.createToken(form, sdkResponseHandler); // The function "sdkResponseHandler" is defined below
});



function sdkResponseHandler(status, response) {
    if (status != 200 && status != 201) {
        alert("verify filled data");
    }else{
        var form = document.querySelector('#pay');
        var card = document.createElement('input');
        card.setAttribute('name', 'token');
        card.setAttribute('type', 'hidden');
        card.setAttribute('value', response.id);
        form.appendChild(card);
        doSubmit=true;
        form.submit();
    }
};


