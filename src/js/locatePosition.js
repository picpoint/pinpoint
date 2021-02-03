window.addEventListener("load", (e) => {
  let arrCurrentCoords = [];
  if (e.type == 'load') {
    navigator.geolocation.getCurrentPosition((position) => {
      let lat = (position.coords.latitude).toFixed(6);
      let lng = (position.coords.longitude).toFixed(6);    
      console.log("my lat - " + lat);      
      console.log("my long - " + lng);
      arrCurrentCoords.push(lat);
      arrCurrentCoords.push(lng);
      console.log(arrCurrentCoords);
    });
  } else {    
    console.log('Страница по определённым проблемам не загрузилась до конца ... ');
  }

});