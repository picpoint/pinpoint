



class DetermineLocatePosition {

  constructor() {
  }

  locatePosition() {
    window.addEventListener("load", (e) => {
      let arrCurrentCoords = [];
      if (e.type == 'load') {
        navigator.geolocation.getCurrentPosition((position) => {      
          let lat = (position.coords.latitude).toFixed(6);
          let lng = (position.coords.longitude).toFixed(6);              
          arrCurrentCoords.push(+lat);
          arrCurrentCoords.push(+lng);
          // console.log(arrCurrentCoords);
          // return arrCurrentCoords;
          window.curCoords = arrCurrentCoords;
        }, error => {
          console.error("Местоположение не определено ...");
        });
      } else {    
        console.log('Страница по определённым проблемам не загрузилась до конца ... ');
      }
    });

  }




}


// let res = new DetermineLocatePosition();
// res.locatePosition();



