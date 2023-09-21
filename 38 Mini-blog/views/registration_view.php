<?php require 'components/header.php'?>

<div class="container">

    <div class="row mt-5 pt-3 text-center">
        <div class="col-12">
            <h2><?=$title?></h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-5">
            <form method="POST" enctype="multipart/form-data" class="p-5 bg-white">

                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black">Имя:</label>
                        <input type="text" name="firstName" class="form-control"
                               placeholder="Только русские буквы от 2 букв. Первая буква заглавная."
                               value="<?=$input['firstName'] ?? ''?>">
                        <span class="error"><?=$errors['firstName'] ?? ''?></span>
                    </div>
                    <div class="col-md-6">
                        <label class="text-black">Фамилия:</label>
                        <input type="text" name="lastName" class="form-control"
                               placeholder="Только русские буквы от 2 букв. Первая буква заглавная."
                               value="<?=$input['lastName'] ?? ''?>">
                        <span class="error"><?=$errors['lastName'] ?? ''?></span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Логин</label>
                        <input type="text" name="login" class="form-control"
                               placeholder="Только латинские буквы и цифры от 3 знаков, без спецсимволов. И первая буква"
                               value="<?=$input['login'] ?? ''?>">
                        <span class="error"><?=$errors['login'] ?? ''?></span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Адрес электронной почты</label>
                        <input type="text" name="email" class="form-control"
                               placeholder="example@user.ru"
                               value="<?=$input['email'] ?? ''?>">
                        <span class="error"><?=$errors['email'] ?? ''?></span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <label class="text-black">Пароль</label>
                        <input type="password" id="reg-password-1" name="password" class="form-control"
                                placeholder="Не менее шести произвольных символов"
                                value="<?=$input['password'] ?? ''?>">
                        <button class="show-reg-password">Показать пароль</button>
                        <span class="error"><?=$errors['password'] ?? ''?></span>
                    </div>
                    <div class="col-md-6">
                        <label class="text-black">Подтверждение пароля</label>
                        <input type="password" id="reg-password-2" class="form-control">
                        <button class="show-reg-password">Показать пароль</button>
                        <span class="error" id="reg-password-error"></span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Фотография профиля</label>
                        <input type="file" name="image" class="form-control">
                        <span class="error"><?=$errors['image'] ?? ''?></span>
                    </div>
                </div>

                <div class="row form-group pt-3">
                    <div class="col-md-12">
                        <input type="submit" value="Зарегистрироваться" class="btn btn-primary py-2 px-4 text-white">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require 'components/footer.php'?>