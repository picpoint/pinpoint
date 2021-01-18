const msgsblock = document.querySelector('.msg__allusrs');                    // доступ к блоку с выводом друзей
let msgsblockChildrens = msgsblock.children;                                  // доступ к блоку с друзьями, дочерние элементы
const msgtofrnd = document.querySelector('.msg__msgtofrnd');                  // поле рядом с кнопкой "отправить", для получения id конкретного пользователя, которому отправляется сообщение


for(let x = 0; x < msgsblockChildrens.length; x++) {                          // перебираем все блоки с друзьями
  msgsblockChildrens[x].addEventListener('click', (e) => {                    // вешаем событие клика на блок для отправки сообщения конкретному пользователю
    msgtofrnd.value = msgsblockChildrens[x].lastElementChild.value;           // в поле присваиваем id пользователя, которому отправляем сообщение
  });


}