   

067 163 07 95  Эрнест   -  140$     ssl  comoda ev


facebook
	http://graph.facebook.com/" + facebookId + "/picture?type=square

vkontakte
  $userpic = json_decode
	(
		file_get_contents('http://api.vkontakte.ru/method/users.get?uids='.$user['uid'].'&fields=photo_100')
	);
  echo $userpic->response[0]->photo_100;
*****************************************************************************
google+
	https://plus.google.com/s2/photos/profile/(user_id)?sz=150
linkedin
	http://api.linkedin.com/v1/people/{user-id}/picture-url


unique Id



comanda
id userId	refUid

table roles
id	title    maxLandPage	webinar   days
1	Новичек  1		0         15
2	Мастер   3		1         30
3	Лидер    5		1         30
4	Профи    10		1         30
5	Админ	  -		1         -

если закончились дни - вход в кабинет да !   при попитое создать станицу - нужно оплатить свой тариф 

при переходе по рефератной ссылке записать в сессию id пользователя который пригласил
при добавлении пользователя добавить запись в табл. команда

при регистрации роль новичке и 15 дней доступа   

1. landingpage into yii2
2. add module
			my
			ландинг
3. 

	1 шаг  смотрим видео 
	2 шаг заполняем свой профиль 
	3 шаг  -  выбираем готовую страничку (список компаний)
	4  шаг   или создам свою (форма заполнения лендинг информации)

4
	команда
			в меню показать количество пользователей в команде
			
5 главная
		облако информация о пользователе, который пригласил
6 профиль

       выбор страницы захвата (компания )
             первыми выводятся его страницы если есть !!!
             если нет - надпись - вы еще не создали страницу 
             а потом список системных компаний 
	меню
 	 	профиле
		настройки профиля
		помощь

		информация о пользователе
		(картинка, статус, имя, фамилию, дата регистрации и последнего входа)
		Account Settings переход на Настройки профиля
		показать 5 последних регистраций пользователей по реферату
		оставить блок для ЛС
	настройки профиля 
			вкладки
				1 персональная информация
					добавить поля
						город
						страна
						компании тянуть с базы
				2 форма загрузки картинки
				3 список полей соц. сетей
		DEVELOPER статус с таблицы роли
		зеленая кнопка сменить тариф
		красная кнопка удалить профиль, из таблицы команда удалить пользователя
									приглашенные пользователи становятся приглашенными пользователями пригласителя того кто удалился
									в случае удаления если нету пригласите тогда пользователи переходят в команду приглашенных пользователей админа
 8 vkid -> socid  переименовать колонку
 9 лендинг две страницы на старом сайте
				количество лендингових страниц в зависимости от роли
		таб
			1 создать лендингпейж
			2 редактировать
				выпадающий список выбора страницы для редактирования
10 лендинг подписка https://smartresponder.ru/l_ru/ (!в тестирование, добавить в меню но без ссылки, а с надписью скоро)

11 мастер-класс создать
		таб
			создать вебинар
			редактировать вебинар
				выпадающий список
12 мастер-класс архив
	так
	 системное видео
	 видео того кто пригласил
	 мое видео
13. обучение
       доступны уроки согласно уровня 
        если уровень ниже уведомление - Вам нужно повысить тариф для доступа к материалам этих уроков 
	 
14. новости
		iframe
(! в планирование)пуш сообщения

15. Компания  
      в тебе 
          компания которая выбрана в профиле  - если ее еще нет -  написано - еще нет материалов 
          2 там  редактировать компанию !!!! доступно только для страниц  более 1001  !!!
16. админ
	перенос пользователя в команду другого !!!   
17. Платежные системы  PM  перфект мани   

18  страница тарифные планы 

—————————————————
узнать страну пользователя по IP (http://demos.krajee.com/ipinfo#installation)

1-mlm.com/land/1-1a1a1a.html 

3/28020677.html
/777-79c19e.html  вот этот вариант  

			
————————————————————

ErrorDocument 404 /index.php
##ErrorDocument 403 http://888.biz.ua/
##Header set Cache-Control "max-age=180"
<IfModule mod_rewrite.c>
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^([0-9]{1,4})/([0-9]{6,10})\.html$ index.php?t=1&c=$1&u=$2 [L,QSA]
RewriteRule ^([0-9]{1,4})/([a-z0-9]{6})\.html$ index.php?t=1&c=$1&u=$2 [L,QSA]
RewriteRule ^([0-9a-zA-Z-_]{11})/([0-9]{1,2})/([0-9]{6,12})\.html$ index.php?&c=1&yt=$1&t=$2&u=$3 [L,QSA]
RewriteRule ^([0-9a-zA-Z-_]{11})/([0-9]{6,12})\.html$ index.php?t=10&c=1&yt=$1&u=$2 [L,QSA]
RewriteRule ^([0-9a-zA-Z-_]{34})/([0-9]{1})/([0-9]{6,12})\.html$ index.php?playlist=$1&index=$2&u=$3&t=5 [L,QSA]
RewriteRule ^([0-9A-Z-]{4,12})/([0-9]{6,12})\.html$ index.php?item=$1&u=$2&t=4 [L,QSA]
RewriteRule ^([0-9a-zA-Z]{7})/([0-9]{6,12})\.html$ index.php?slug=$1&u=$2&t=3 [L,QSA]
RewriteRule ^lk$ http://1mlm.biz/my/start [L,QSA]
RewriteRule ^dashboard.php$ http://888.biz.ua/my/start [L,QSA]
RewriteRule ^id([0-9]{6,10})$ friends.php?u=$1 [L,QSA]
RewriteRule ^user([0-9]{6,15})$ index.php?u=$1&c=1&t=11 [L,QSA]
</IfModule>
http://localhost:8888/1-mlm/my/web/index.php?r=site%2Flogin&service=vkontakte



——————————————————————
function createID() {
  global $db;
  $found = 1;
  while ($found!=0) {
    $id = randomString(6);
    $count = $db->query('SELECT SQL_CALC_FOUND_ROWS * FROM users WHERE user=?s',$id);
    $found = $count->num_rows;
  }
  return $id;
}


—————————————————

http://stackoverflow.com/questions/32564347/yii2-color-picker-in-form
