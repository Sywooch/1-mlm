
<div class="portlet-body">
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
                           placeholder="example@mail.com">
                    <div class="help-block"></div>
                </div>
            </div>

            <div class="form-group">
                <label>Номер телефона</label>
                <div class="input-icon">
                    <i class="icon-call-end"></i>
                    <input type="text" id="users-mobile" class="form-control" name="Users[mobile]" value="<?= $model["mobile"]; ?>" placeholder="+99(99)9999-9999">

                    <div class="help-block"></div></div>
            </div>

            <div class="form-group">
                <label>Ваш skype</label>
                <div class="input-icon">
                    <i class="fa fa-skype"></i>
                    <input type="text" id="users-skype" class="form-control" name="Users[skype]" value="<?= $model["skype"]; ?>" placeholder="Логин skype">

                    <div class="help-block"></div></div>
            </div>

            <div class="form-group">
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
            </div>
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label>facebook</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-facebook" class="form-control" name="Users[facebook]" value="<?= $model["facebook"]; ?>">

                    <div class="help-block"></div></div>
            </div>

            <div class="form-group">
                <label>vkontakte</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-vkontakte" class="form-control" name="Users[vkontakte]" value="<?= $model["vkontakte"]; ?>">

                    <div class="help-block"></div></div>
            </div>

            <div class="form-group">
                <label>linkedin</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-linkedin" class="form-control" name="Users[linkedin]" value="<?= $model["linkedin"]; ?>">

                    <div class="help-block"></div></div>
            </div>

            <div class="form-group">
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
            </div>

            <div class="form-group">
                <label>twitter</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-twitter" class="form-control" name="Users[twitter]" value="<?= $model["twitter"]; ?>">

                    <div class="help-block"></div></div>
            </div>
            <div class="form-group">
                <label>instagram</label>
                <div class="input-icon">
                    <i class="icon-link"></i>
                    <input type="text" id="users-instagram" class="form-control" name="Users[instagram]" value="<?= $model["instagram"]; ?>">

                    <div class="help-block"></div></div>
            </div>
        </div>
    </div>
</div>
