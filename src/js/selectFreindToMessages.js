const msgsblock = document.querySelector('.msg__allusrs');
let msgsblockChildrens = msgsblock.children;

// console.log(msgsblock);
// console.log(msgsblockChildrens);

for(let x = 0; x < msgsblockChildrens.length; x++) {
  console.log(msgsblockChildrens[x]);
  // console.log(msgsblockChildrens[x].lastElementChild.value);

  msgsblockChildrens[x].addEventListener('click', () => {
    console.log(msgsblockChildrens[x].lastElementChild.value);
  });


}