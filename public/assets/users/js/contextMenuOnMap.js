const sendfile = document.querySelector('.pp__sendfile');                             // блок контекстного меню, который появляется на карте при on.contextmenu
const closeform = document.querySelector('.closeform');                               // крестик для закрытия контекстной формы
const hdrplace = document.querySelector('.pp__hdrplace').firstElementChild;


// console.log(sendfile);


class ContextMenuOnMapClass {                                                         // класс контекстного меню формы

    constructor(sendfile, closeform) {                                                  // конструктор с параметрами
        this.sendfile = sendfile;
        this.closeform = closeform;
    }

    contextMenu() {                                                                     // метод для создания контекстной формы
        document.addEventListener('contextmenu', (e) => {                                 // на документ вешаем событие контекста
            // this.sendfile.classList.toggle('showblock');                                 // на блок вешаем по переключению класс показа/скрытия
            this.sendfile.classList.remove('showblock');                                    // удаляем класс showblock показа формы
            this.sendfile.classList.add('showblock');                                       // и сразу же его показываем, чтоб не нужно было делать 2 клика
            this.sendfile.style.left = e.clientX + 'px';                                    // присваиваем координаты окна на форму
            this.sendfile.style.top = e.clientY + 'px';
            this.getPlaceName();                                                            // вызываем ф-ию для получения адреса в шапке формы создания пинов
        });

        this.closeform.addEventListener('click', () => {                                  // на крестик закрытия вешаем событие клика
            this.sendfile.classList.toggle('showblock');                                    // так же вешаем класс скрытия/показа формы
        });

    }


    getPlaceName() {                                                                    // ф-ия для показа, в шапке формы создания пинов, адреса по геолокации
        setTimeout(() => {
            hdrplace.innerHTML = window.curPosition;                                        // делаем мааааленькую задержку и из windowsStorage получаем данные
        }, 500);
    }


}


let rightClick = new ContextMenuOnMapClass(sendfile, closeform);
rightClick.contextMenu();