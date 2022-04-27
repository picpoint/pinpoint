var scroll = document.querySelector('.msgto__blockmsgs');           // доступ к элементу блока с сообщениями(в нашем случае это span-ы)
scroll.scrollTop = scroll.scrollHeight;                             // присваиваем высоту элемента
scroll.animate({scrollTop: scroll.scrollHeight});                   // делаем анимацию которая будет скролить вниз на высоту скрола