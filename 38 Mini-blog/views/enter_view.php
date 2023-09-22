<?php require 'components/header.php' ?>

<div class="container">

    <div class="row mt-5 pt-3 text-center">
        <div class="col-12">
            <h2><?=$title?></h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-5">
            <form method="POST" class="p-5 bg-white">

                <div class="row form-group">
                    <div class="col-md-6">
                        <label class="text-black">Логин</label>
                        <input type="text" name="login" class="form-control"
                               placeholder="Ваш логин"
                               value="<?=$input['login'] ?? ''?>">
                        <span class="error"><?=$errors['login'] ?? ''?></span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <label class="text-black">Пароль</label>
                        <input type="password" id="reg-password-1" name="password" class="form-control"
                               placeholder="Ваш пароль">
                        <span class="error"><?=$errors['password'] ?? ''?></span>
                    </div>
                </div>

                <div class="row form-group pt-3">
                    <div class="col-md-12">
                        <input type="submit" value="Войти" class="btn btn-primary py-2 px-4 text-white">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<?php require 'components/footer.php'?>
