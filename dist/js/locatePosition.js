
let position;
window.addEventListener("load", (e) => {
  let arrCurrentCoords = [];  
  
  if (e.type == 'load') {
    navigator.geolocation.getCurrentPosition((position) => {
      setTimeout(() => {
        if(typeof(position) == "object") {
          let lat = (position.coords.latitude).toFixed(6);
          let lng = (position.coords.longitude).toFixed(6);              
          arrCurrentCoords.push(+lat);
          arrCurrentCoords.push(+lng);
          console.log(arrCurrentCoords);
        } else if(isEmpty(position)){
          console.log("Позиция не определена");
        }
      }, 3000);
      

    });

    

  } else {    
    console.log('Страница по определённым проблемам не загрузилась до конца ... ');
  }

});