const allUsers = document.querySelector('.msg__allusrs');
const correspondence = document.querySelector('.msg__correspondence');



for(let z = 0; z < allUsers.children.length; z++) {
  // console.log(allUsers.children[z]);
  allUsers.children[z].addEventListener('click', () => {
    // console.log(correspondence.children);
    for(let y = 0; y < correspondence.children.length; y++) {
      console.log(correspondence.children[y]);
    }
  });
}