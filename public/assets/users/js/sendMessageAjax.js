let sendmsgform = document.querySelector('.messages__sendmsgform');
let fieldmessage = document.querySelector('.fieldmessage');

// console.log(sendmsgform);
// console.log(btnsendmsg);
// console.log(sendmessage);





sendmsgform.addEventListener('submit', function (e) {
    console.log("click btn");

    e.preventDefault();


    const request = new XMLHttpRequest();
    const url = "sendmsg";
    const params = fieldmessage.value;
    console.log(params);
    request.open("POST", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    request.addEventListener("readystatechange", function(e) {
        // e.preventDefault();

        if(request.readyState === 4 && request.status === 200) {
            console.log(request.responseText);
        }

    });

    request.send(params);

});


