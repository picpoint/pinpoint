// const allUsers = document.querySelector('.msg__allusrs');
// const correspondence = document.querySelector('.msg__correspondence');



for(let z = 0; z < allUsers.children.length; z++) {  
  allUsers.children[z].addEventListener('click', () => {    
    console.log(correspondence.children);
    
    setTimeout(() => {
      console.log(correspondence.children.length);
      for(let i = 0; i < correspondence.children.length; i++) {
        console.log(correspondence.children[i]);
        correspondence.children[i].remove();
      }
    }, 3000);

  });
}