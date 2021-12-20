let sendmsgform = document.querySelector('.messages__sendmsgform');
let fieldmessage = document.querySelector('.fieldmessage');
let token = sendmsgform.firstElementChild;



sendmsgform.addEventListener('submit', function (event) {
    console.log("click btn");

    event.preventDefault();


    const request = new XMLHttpRequest();
    const url = "messages";
    const params = "_token=" + token.value + "&idfreind=" + idfreind.value + "&fieldmessage=" + fieldmessage.value;
    console.log(params);

    request.open("POST", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    request.addEventListener("readystatechange", function(event) {
        event.preventDefault();

        if(request.readyState === 4 && request.status === 200) {
            console.log(request.responseText);
        }

    });

    request.send(params);

});


