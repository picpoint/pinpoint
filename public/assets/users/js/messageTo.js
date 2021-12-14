let freindsblock = document.querySelector('.messages__freindsmsg');
let btnsendmsg = document.querySelector('.btnsendmsg');
let fieldId = document.querySelector('.messages__sendmsgform').firstElementChild;


console.log(fieldId);


for (var i = 0; i < freindsblock.children.length; i++) {
    console.log(freindsblock.children[i]);

    freindsblock.children[i].addEventListener('click', function (e) {
        // console.log(e.currentTarget.firstElementChild.innerText);
        let idUser = e.currentTarget.firstElementChild.innerText;
        fieldId.innerText = idUser;
    });

}

