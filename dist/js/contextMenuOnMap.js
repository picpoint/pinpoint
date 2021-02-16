const sendfile = document.querySelector('.pp__sendfile');                             // блок контекстного меню, который появляется на карте при on.contextmenu
const closeform = document.querySelector('.closeform');                               // крестик для закрытия контекстной формы



class ContextMenuOnMapClass {                                                         // класс контекстного меню формы

  constructor(sendfile, closeform) {                                                  // конструктор с параметрами
    this.sendfile = sendfile;
    this.closeform = closeform;
  }

  contextMenu() {                                                                     // метод для создания контекстной формы
    document.addEventListener('contextmenu', (e) => {                                 // на документ вешаем событие контекста
      this.sendfile.classList.toggle('showblock');                                    // на блок вешаем по переключению класс показа/скрытия
      this.sendfile.style.left = e.clientX + 'px';                                    // присваиваем координаты окна на форму
      this.sendfile.style.top = e.clientY + 'px';
      this.getPlaceName();

      
    });

    this.closeform.addEventListener('click', () => {                                  // на крестик закрытия вешаем событие клика
      this.sendfile.classList.toggle('showblock');                                    // так же вешаем класс скрытия/показа формы
    });
  }


  getPlaceName() {

    console.log("Get place Meth");

    
  }


}


let rightClick = new ContextMenuOnMapClass(sendfile, closeform);
rightClick.contextMenu();