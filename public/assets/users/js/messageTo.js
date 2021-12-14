let freindsblock = document.querySelector('.messages__freindsmsg');
let btnsendmsg = document.querySelector('.btnsendmsg');


console.log(btnsendmsg);


for (var i = 0; i < freindsblock.children.length; i++) {
    console.log(freindsblock.children[i].firstElementChild.innerText);

    


    freindsblock.children[i].addEventListener('click', function () {
        // btnsendmsg.value = freindsblock.children[i].firstElementChild.innerText;
        // console.log(btnsendmsg);
    });

}

