   

067 163 07 95  ������   -  140$     ssl  comoda ev


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
1	�������  1		0         15
2	������   3		1         30
3	�����    5		1         30
4	�����    10		1         30
5	�����	  -		1         -

���� ����������� ��� - ���� � ������� �� !   ��� ������� ������� ������� - ����� �������� ���� ����� 

��� �������� �� ���������� ������ �������� � ������ id ������������ ������� ���������
��� ���������� ������������ �������� ������ � ����. �������

��� ����������� ���� ������� � 15 ���� �������   

1. landingpage into yii2
2. add module
			my
			�������
3. 

	1 ���  ������� ����� 
	2 ��� ��������� ���� ������� 
	3 ���  -  �������� ������� ��������� (������ ��������)
	4  ���   ��� ������ ���� (����� ���������� ������� ����������)

4
	�������
			� ���� �������� ���������� ������������� � �������
			
5 �������
		������ ���������� � ������������, ������� ���������
6 �������

       ����� �������� ������� (�������� )
             ������� ��������� ��� �������� ���� ���� !!!
             ���� ��� - ������� - �� ��� �� ������� �������� 
             � ����� ������ ��������� �������� 
	����
 	 	�������
		��������� �������
		������

		���������� � ������������
		(��������, ������, ���, �������, ���� ����������� � ���������� �����)
		Account Settings ������� �� ��������� �������
		�������� 5 ��������� ����������� ������������� �� ��������
		�������� ���� ��� ��
	��������� ������� 
			�������
				1 ������������ ����������
					�������� ����
						�����
						������
						�������� ������ � ����
				2 ����� �������� ��������
				3 ������ ����� ���. �����
		DEVELOPER ������ � ������� ����
		������� ������ ������� �����
		������� ������ ������� �������, �� ������� ������� ������� ������������
									������������ ������������ ���������� ������������� �������������� ������������ ���� ��� ��������
									� ������ �������� ���� ���� ���������� ����� ������������ ��������� � ������� ������������ ������������� ������
 8 vkid -> socid  ������������� �������
 9 ������� ��� �������� �� ������ �����
				���������� ����������� ������� � ����������� �� ����
		���
			1 ������� �����������
			2 �������������
				���������� ������ ������ �������� ��� ��������������
10 ������� �������� https://smartresponder.ru/l_ru/ (!� ������������, �������� � ���� �� ��� ������, � � �������� �����)

11 ������-����� �������
		���
			������� �������
			������������� �������
				���������� ������
12 ������-����� �����
	���
	 ��������� �����
	 ����� ���� ��� ���������
	 ��� �����
13. ��������
       �������� ����� �������� ������ 
        ���� ������� ���� ����������� - ��� ����� �������� ����� ��� ������� � ���������� ���� ������ 
	 
14. �������
		iframe
(! � ������������)��� ���������

15. ��������  
      � ���� 
          �������� ������� ������� � �������  - ���� �� ��� ��� -  �������� - ��� ��� ���������� 
          2 ���  ������������� �������� !!!! �������� ������ ��� �������  ����� 1001  !!!
16. �����
	������� ������������ � ������� ������� !!!   
17. ��������� �������  PM  ������� ����   

18  �������� �������� ����� 

�����������������
������ ������ ������������ �� IP (http://demos.krajee.com/ipinfo#installation)

1-mlm.com/land/1-1a1a1a.html 

3/28020677.html
/777-79c19e.html  ��� ���� �������  

			
��������������������

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



����������������������
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


�����������������

http://stackoverflow.com/questions/32564347/yii2-color-picker-in-form
