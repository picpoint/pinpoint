let btnclose = document.querySelector('.close');                      // доступ на блоке предупоеждения к кнопке ОК



class CloseWindow {                                                   // класс для закрытия  окна предупреждения

    constructor(btn) {                                               // передаём в конструктор элементы, по которым будет закрытие
        this.btn = btn;
    }


    windowClose() {                                                     // метод закрытия
        this.btn.addEventListener('click', () => {                        // вешаем событие клика по элементу
            errlocate.style.display = 'none';                               // прячем окно
        });
    }

}



let clsWin = new CloseWindow(btnclose);                       // вызываем класс
clsWin.windowClose();                                                 // вызываем метод закрытия у класса