const allUsers = document.querySelector('.msg__allusrs');
// console.log(allUsers.children);


for(let x = 0; x < allUsers.children.length; x++) {
  allUsers.children[x].addEventListener('click', (e) => {
    console.log(allUsers.children[x].lastElementChild.value);    

    const req = new XMLHttpRequest();
    const url = '../../controller/readFreindsMessagesController.php';
    const idFreinds = allUsers.children[x].lastElementChild.value;
    req.open("POST", url, true);
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    req.addEventListener("readystatechange", () => {
      if(req.readyState == 4 && req.status == 200) {
        console.log(req.responseText);
      }
    });

    req.send(idFreinds);


  });
}

