// const wrp = document.querySelector('.pp__wrp');
const sendfile = document.querySelector('.pp__sendfile');
const closeform = document.querySelector('.closeform');



class ContextMenuOnMapClass {

  constructor(sendfile, closeform) {
    this.sendfile = sendfile;
    this.closeform = closeform;
  }

  contextMenu() {
    document.addEventListener('contextmenu', (e) => {
      // console.log(e.target);
      this.sendfile.classList.toggle('showblock');
    });

    this.closeform.addEventListener('click', () => {
      this.sendfile.classList.toggle('showblock');
    });
  }


}


let rightClick = new ContextMenuOnMapClass(sendfile, closeform);
rightClick.contextMenu();