// const allUsers = document.querySelector('.msg__allusrs');
// const correspondence = document.querySelector('.msg__correspondence');



for(let z = 0; z < allUsers.children.length; z++) {  
  allUsers.children[z].addEventListener('click', () => {    
    // console.log(correspondence.children);

    for(let i = correspondence.children.length - 1; i >= 0; --i) {
      // console.log(correspondence.children[i]);
      correspondence.children[i].remove();
    }
    

  });
}