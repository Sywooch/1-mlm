
<div class="portlet-body">
	 <div class="row">
		 <div class="col-md-12">
			 <p> <span style="color: #F64747; font-size: 18px;">Внимание! </span><br><span style="color: #a5a5a5; font-size: 14px;">Это один из важнейших шагов настройки системы. От заполнения этих даных зависит возможность коммуникации с Вашими новыми кандидатами в бизнес. 
				  <br><b>1.</b> Вводите  e-mail  - на него будут приходить уведомления о регистрации ваших новых кандидатах.
				  <br><b>2.</b> Заполните все ID соц. сетей чтобы  входить в кабинет через разные социальные сети одновременно, для этого нужно указать все ID социальных аккаунтов верно.  
				  <br><b>3.</b> Как узнать свой ID в социальных сетях?  очень просто мы создали простой сервис где вы в один клик сможете узнать свой ID  в разных социальных сетях для этого перейдите по ссылке  <a href="http://id.1-mlm.com"  target="_blank" >здесь </a>
				

			 <br></p>		 
			 </div>
	 </div>
	<div class="clear"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Имя</label>
                <div class="input-icon">
                    <i class="icon-user"></i>
                    <input type="text" id="users-fn" class="form-control" name="Users[fn]" value="<?= $model["fn"]; ?>">
                </div>
            </div>
            <div class="form-group">
                <label>Фамилия</label>
                <div class="input-icon">
                    <i class="icon-user"></i>
                    <input type="text" id="users-ln" class="form-control" name="Users[ln]" value="<?= $model["ln"]; ?>">

                    <div class="help-block"></div></div>
            </div>

            <div class="form-group">
                <label>Ваш email</label>
                <div class="input-icon">
                    <i class="icon-envelope-open"></i>
                    <input type="text" id="users-email" class="form-control"
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                           name="Users[email]" value="<?= $model["email"]; ?>"
                           placeholder="Введите свой е-mail">
                    <div class="help-block"></div>
                </div>
            </div>

            <div class="form-group">
                <label>Номер телефона</label>
                <div class="input-icon">
                    <i class="icon-call-end"></i>
                    <input type="text" id="users-mobile" class="form-control" name="Users[mobile]" value="<?= $model["mobile"]; ?>" placeholder="пример +70000000000">

                    <div class="help-block"></div></div>
            </div>

            <div class="form-group">
                <label>Ваш skype</label>
                <div class="input-icon">
                    <i class="fa fa-skype"></i>
                    <input type="text" id="users-skype" class="form-control" name="Users[skype]" value="<?= $model["skype"]; ?>" placeholder="Логин skype">

                    <div class="help-block"></div></div>
            </div>

            <!--<div class="form-group">
                <label>Город</label>
                <div class="input-icon">
                    <i class="icon-user"></i>
                    <input type="text" id="users-city" class="form-control" name="Users[city]" value="<?= $model["city"]; ?>">

                    <div class="help-block"></div></div>
            </div>

            <div class="form-group">
                <label>Страна</label>
                <div class="input-icon">
                    <i class="icon-user"></i>
                    <input type="text" id="users-country" class="form-control" name="Users[country]" value="<?= $model["country"]; ?>">

                    <div class="help-block"></div></div>
            </div>-->
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label>Ваш ID в facebook</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-facebook" class="form-control" name="Users[facebook]" value="<?= $model["facebook"]; ?>">

                    <div class="help-block"></div></div>
            </div>

            <div class="form-group">
                <label>Ваш ID в  vkontakte</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-vkontakte" class="form-control" name="Users[vkontakte]" value="<?= $model["vkontakte"]; ?>">

                    <div class="help-block"></div></div>
            </div>

            <div class="form-group">
                <label>Ваш ID в linkedin</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-linkedin" class="form-control" name="Users[linkedin]" value="<?= $model["linkedin"]; ?>">

                    <div class="help-block"></div></div>
            </div>

            <!--<div class="form-group">
                <label>googleplus</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-googleplus" class="form-control" name="Users[googleplus]" value="<?= $model["googleplus"]; ?>">

                    <div class="help-block"></div></div>
            </div>

            <div class="form-group">
                <label>yandex</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-yandex" class="form-control" name="Users[yandex]" value="<?= $model["yandex"]; ?>">

                    <div class="help-block"></div></div>
            </div>

            <div class="form-group">
                <label>mail.ru</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-mailru" class="form-control" name="Users[mailru]" value="<?= $model["mailru"]; ?>">

                    <div class="help-block"></div></div>
            </div>-->

            <div class="form-group">
                <label>Ваш ID в twitter</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-twitter" class="form-control" name="Users[twitter]" value="<?= $model["twitter"]; ?>">

                    <div class="help-block"></div></div>
            </div>
            <div class="form-group">
                <label>Ваш ID в instagram</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-instagram" class="form-control" name="Users[instagram]" value="<?= $model["instagram"]; ?>">

                    <div class="help-block"></div></div>
            </div>
        </div>
    </div>
</div>
