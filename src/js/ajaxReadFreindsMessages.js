const allUsers = document.querySelector('.msg__allusrs');
// console.log(allUsers.children);


for(let x = 0; x < allUsers.children.length; x++) {
  allUsers.children[x].addEventListener('click', (e) => {    
    let idFreinds = allUsers.children[x].lastElementChild.value;
    // console.log(idFreinds);


    const req = new XMLHttpRequest();
    const url = "http://localhost/pinpoint/dist/messages.php?idfrnd=" + idFreinds;
    req.open("GET", url);
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    req.addEventListener("readystatechange", () => {
      if(req.readyState == 4 && req.status == 200) {
        console.log(req.responseText);
        // console.log(req.response);
      }
    });

    req.send();
  });

}

