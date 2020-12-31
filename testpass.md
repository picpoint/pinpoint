Аркадий 
Укупник
arcUc
arc45678!sdgfh


Александр
Лукашенко
AlexLOOK
qwerty123456


Денис
Белоцерковцев
den
123


Alex
Freedman
freeAlex
#%Gfgnlmdf531654


Александр
Пушной
push
14789632


Денис
Денисов
denden
321


Денис
Старовойтов
denstar
000




SELECT DISTINCT freinds.id_freinds, users.firstname, users.lastname FROM den JOIN users ON den.id_frommsg != 'den' AND den.id_frommsg = users.login JOIN freinds ON freinds.id_user = den.id_frommsg


остановился на считывании по клику на друзьях их сообщений
файлы
readFreindsMessagesController.php
readFreindsMessagesModel.php
tst.js