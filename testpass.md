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


SELECT messages.id_frommsg, messages.id_tomsg, messages.messag, users.firstname, users.lastname
FROM messages JOIN users
WHERE messages.id_frommsg = 'den' AND messages.id_tomsg = 'freeAlex'




запрос на вывод сообщений к одному пользователю
SELECT messages.messag, messages.date, users.firstname, users.lastname
FROM messages JOIN users 
WHERE messages.id_frommsg = 'den' AND messages.id_frommsg = users.login AND messages.id_tomsg = 'freeAlex'



CREATE TABLE den__arcUc
(id_messages SERIAL NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_frommsg VARCHAR(255) NOT NULL,
id_tomsg VARCHAR(255) NOT NULL,
messag TEXT NOT NULL,
dates TIMESTAMP)