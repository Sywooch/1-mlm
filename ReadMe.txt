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
id	title
1	�������
2	������
3	�����
4	�����
5	�����

users
add
	socNetworkLinks(facebook,linkedin,google+,vk)
	City, Country
