let sendmsgform = document.querySelector('.messages__sendmsgform');

console.log(sendmsgform);
console.log(btnsendmsg);





sendmsgform.addEventListener('submit', function () {
    console.log("click btn");

    e.preventDefault();

    var currentuser_id = 000;
    var user_id = 111;
    var message = 333;

    const request = new XMLHttpRequest();
    const url = "/sendmsg";
    const params = "currentuser_id=" + currentuser_id + "&user_id=" + user_id + "&message=" + message;
    request.open("POST", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    request.addEventListener("readystatechange", function(e) {


        if(request.readyState === 4 && request.status === 200) {
            console.log(request.responseText);
        }

    });

    request.send(params);

});


