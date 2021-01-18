
for(let z = 0; z < allUsers.children.length; z++) {                               // перебираем блок с пользователями
  allUsers.children[z].addEventListener('click', () => {                          // на каждого пользователя слева вешаем событие
    
    for(let i = correspondence.children.length - 1; i >= 0; --i) {                // пробегаемся снизу вверх по всем блоками
      correspondence.children[i].remove();                                        // удаляем поочереди каждый снизу
    }    

  });
}