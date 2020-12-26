const msgsblock = document.querySelector('.msg__allusrs');
let msgsblockChildrens = msgsblock.children;
const msgtofrnd = document.querySelector('.msg__msgtofrnd');



for(let x = 0; x < msgsblockChildrens.length; x++) {
  msgsblockChildrens[x].addEventListener('click', () => {    
    msgtofrnd.value = msgsblockChildrens[x].lastElementChild.value;    
  });


}