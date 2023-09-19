<?php require 'components/header.php'?>

<div class="container">

    <div class="row mt-5 pt-3 text-center">
        <div class="col-12">
            <h2><?=$title?></h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-5">
            <form action="" method="POST" enctype="multipart/form-data" class="p-5 bg-white">

                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black">Имя:</label>
                        <input type="text" name="firstName" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="text-black">Фамилия:</label>
                        <input type="text" name="lastName" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Логин</label>
                        <input type="text" name="login" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Адрес электронной почты</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <label class="text-black">Пароль</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="text-black">Подтверждение пароля</label>
                        <input type="password" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Фотография профиля</label>
                        <input type="file" name="image" class="form-control">
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