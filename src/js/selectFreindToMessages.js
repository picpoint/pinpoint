const msgsblock = document.querySelector('.msg__allusrs');
let msgsblockChildrens = msgsblock.children;
const msgtofrnd = document.querySelector('.msg__msgtofrnd');



for(let x = 0; x < msgsblockChildrens.length; x++) {  
  msgsblockChildrens[x].addEventListener('click', () => {
    // msgsblockChildrens[x].style = 'box-shadow: 0 0 10px rgba(0,0,0,0.5)';    
    msgtofrnd.value = msgsblockChildrens[x].lastElementChild.value;
    
  });


}