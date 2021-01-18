const allUsers = document.querySelector('.msg__allusrs');                               // получаем доступ к блоку с пользователями
const correspondence = document.querySelector('.msg__correspondence');                  // получаем доступ к блоку с сообщениями
const currentLogin = document.querySelector('.msg__curlog');                            // получаем доступ к скрытому полю текущего логина пользователя



for(let x = 0; x < allUsers.children.length; x++) {                                     // перебираем всех пользователей
  allUsers.children[x].addEventListener('click', (e) => {                               // на каждого вешаем событие клика
    let idFreinds = allUsers.children[x].lastElementChild.value;                        // в переменную записываем текущее значение id пользователя

    const req = new XMLHttpRequest();                                                   // делаем ajax запрос
    const url = "http://localhost/pinpoint/dist/messages.php?idfrnd=" + idFreinds;      // адрес конкретного файла с переданным значением
    req.open("GET", url, true);                                                         // определяем метод GET
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");          // устанавливаем заголовок

    req.addEventListener("readystatechange", () => {                                    // вешаем событие которое случается когда приходит ответ от сервера
      if(req.readyState == 4 && req.status == 200) {                                    // если все хорошо
        strResData = req.response;                                                      // получаем ответ от сервера, а точнее данные
        let frstcrop = strResData.slice(0, -850);                                       // обрезаем строку с конца
        let scndcrop = frstcrop.slice(1445);                                            // обрезаем строку сначала
        // console.log(scndcrop);
        let resDatas = JSON.parse(scndcrop);                                            // парсим строку, получаем json

        for(let key in resDatas) {                                                      // перебираем полученные данные
          if(resDatas[key]['id_frommsg'] == currentLogin.value) {                       // если ключ "от кого сообщение" == текущему логину
           let block = document.createElement('div');                                   // создаём блок
           block.style.display = 'flex';                                                // стилизуем его и прижимаем слева
           block.style.justifyContent = 'center';
           block.style.alignItems = 'center';
           block.style.alignSelf = 'flex-start';
           block.style.margin = '15px 20px';
           block.style.padding = '10px';
           block.style.backgroundColor = '#e2e2e2';
           block.style.borderRadius = '5px';
           block.innerHTML = resDatas[key]['messag'];                                   // внутрь блока помещаем значение
           correspondence.appendChild(block);                                           // добавляем полученный блок в блок вывода сообщений
          } else if(resDatas[key]['id_frommsg'] != currentLogin.value) {                // иначе если от кого сообщение != текущему логину
            let block = document.createElement('div');                                  // стилизуем блок и прижимаем его к правому краю
            block.style.display = 'flex';
            block.style.justifyContent = 'center';
            block.style.alignItems = 'center';
            block.style.alignSelf = 'flex-end';
            block.style.margin = '15px 20px';
            block.style.padding = '10px';           
            block.style.backgroundColor = '#e2e2e2';
            block.style.borderRadius = '5px';
            block.innerHTML = resDatas[key]['messag'];                                  // в блок помещаем значение
            correspondence.appendChild(block);                                          // добавляем полученный блок в блок сообщений
          }
        }
        
      }
      
    });

    req.send();                                                                         // отправляем ajax запрос
  });

}
