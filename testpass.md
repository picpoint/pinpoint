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



SELECT den.id_frommsg, den.id_tomsg, den.messag
FROM freinds
JOIN den
WHERE freinds.id_freinds = 31 AND freinds.id_user = den.id_tomsg AND den.id_frommsg = 'den' 
OR freinds.id_freinds = 31 AND freinds.id_user = den.id_frommsg



SELECT den.id_frommsg, den.id_tomsg, den.messag
FROM den
JOIN freinds
ON freinds.id_freinds = 31 AND den.id_frommsg = 'den' AND den.id_tomsg = freinds.id_user
