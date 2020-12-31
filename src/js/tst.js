const allUsers = document.querySelector('.msg__allusrs');
console.log(allUsers.children);

for(let x = 0; x < allUsers.children.length; x++) {
  console.log(allUsers.children[x]);

  allUsers.children[x].addEventListener('click', (e) => {
    console.log(allUsers.children[x].lastElementChild.value);    
  });
}

