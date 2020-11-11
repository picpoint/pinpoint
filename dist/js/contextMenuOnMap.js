// const wrp = document.querySelector('.pp__wrp');



class ContextMenuOnMapClass {

  // constructor(wrp) {
  //   this.wrp = wrp;
  // }

  contextMenu() {
    document.addEventListener('contextmenu', (e) => {
      // console.log(e.target);
    });
  }


}


let rightClick = new ContextMenuOnMapClass();
rightClick.contextMenu();