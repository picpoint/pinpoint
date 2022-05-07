let freindsblock = document.querySelector('.messages__freindsmsg');
let btnsendmsg = document.querySelector('.btnsendmsg');
let idfreind = document.querySelector('.idfreind');


// console.log(fieldId);




for (var i = 0; i < freindsblock.children.length; i++) {
    freindsblock.children[i].addEventListener('click', function (e) {
        idfreind.setAttribute('value', e.currentTarget.firstElementChild.innerText);
    });

}