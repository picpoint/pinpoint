let iclose = document.querySelector('.fa');                           // доступ на блоке предупреждения к крестику в шапке
let btnclose = document.querySelector('.close');                      // доступ на блоке предупоеждения к кнопке ОК



class CloseWindow {                                                   // класс для закрытия  окна предупреждения
  
  constructor(i, btn) {                                               // передаём в конструктор элементы, по которым будет закрытие
    this.i = i;
    this.btn = btn;
  } 


  windowClose() {                                                     // метод закрытия
    this.i.addEventListener('click', () => {                          // вешаем событие клика по элементу
      errlocate.style.display = 'none';                               // прячем окно
    });

    this.btn.addEventListener('click', () => {                        // вешаем событие клика по элементу
      errlocate.style.display = 'none';                               // прячем окно
    });
    
  }
  
  
}




let clsWin = new CloseWindow(iclose, btnclose);                       // вызываем класс
clsWin.windowClose();                                                 // вызываем метод закрытия у класса