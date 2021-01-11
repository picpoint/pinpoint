const allUsers = document.querySelector('.msg__allusrs');


for(let x = 0; x < allUsers.children.length; x++) {
  allUsers.children[x].addEventListener('click', (e) => {    
    let idFreinds = allUsers.children[x].lastElementChild.value;
    
    const req = new XMLHttpRequest();
    const url = "http://localhost/pinpoint/dist/messages.php?idfrnd=" + idFreinds;
    req.open("GET", url, true);
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    req.addEventListener("readystatechange", () => {
      if(req.readyState == 4 && req.status == 200) {
        console.log(req.response);        
      }
    });

    req.send();
  });

}

