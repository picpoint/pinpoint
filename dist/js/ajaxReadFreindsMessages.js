const allUsers = document.querySelector('.msg__allusrs');
const correspondence = document.querySelector('.msg__correspondence');
const currentLogin = document.querySelector('.msg__curlog');


for(let x = 0; x < allUsers.children.length; x++) {
  allUsers.children[x].addEventListener('click', (e) => {    
    let idFreinds = allUsers.children[x].lastElementChild.value;
    
    const req = new XMLHttpRequest();
    const url = "http://localhost/pinpoint/dist/messages.php?idfrnd=" + idFreinds;
    req.open("GET", url, true);
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    req.addEventListener("readystatechange", () => {
      if(req.readyState == 4 && req.status == 200) {
        strResData = req.response;
        let frstcrop = strResData.slice(0, -820);
        let scndcrop = frstcrop.slice(1443);
        // console.log(scndcrop);

        let resDatas = JSON.parse(scndcrop);
        
        console.log(resDatas);
        // console.log(currentLogin.value);

        for(let key in resDatas) {
          if(resDatas[key]['id_frommsg'] == currentLogin.value) {
           
          }
        }
        
      
      }
    });

    req.send();
  });

}



