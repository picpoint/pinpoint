let sendmsgform = document.querySelector('.messages__sendmsgform');
let fieldmessage = document.querySelector('.fieldmessage');
let token = sendmsgform.firstElementChild;



sendmsgform.addEventListener('submit', function (event) {
    event.preventDefault();

    console.log('click btn');

    const request = new XMLHttpRequest();
    const url = "/messages";
    // const params = "_token=" + token.value + "&idfreind=" + idfreind.value + "&fieldmessage=" + fieldmessage.value;
    // const params = "_token=" + token.value + '&currentuser_id=123&user_id=123&message=123;


    const params = [{
        "_token": token.value,
        'currentuser_id': '123',
        'user_id': '123',
        'message': '123'
    }];



    // console.log(params);


    request.open("POST", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    request.addEventListener("readystatechange", function() {

        if(request.readyState === 4 && request.status === 200) {
            console.log(request.responseText);
        }

    });

    request.send(params);

});


