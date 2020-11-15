const sendfile = document.querySelector('.pp__sendfile');
const closeform = document.querySelector('.closeform');



class ContextMenuOnMapClass {

  constructor(sendfile, closeform) {
    this.sendfile = sendfile;
    this.closeform = closeform;
  }

  contextMenu() {
    document.addEventListener('contextmenu', (e) => {
      this.sendfile.classList.toggle('showblock');
      this.sendfile.style.left = e.clientX + 'px';
      this.sendfile.style.top = e.clientY + 'px';
    });

    this.closeform.addEventListener('click', () => {
      this.sendfile.classList.toggle('showblock');
    });
  }


}


let rightClick = new ContextMenuOnMapClass(sendfile, closeform);
rightClick.contextMenu();