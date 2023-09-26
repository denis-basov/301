<?php require 'components/header.php'?>

<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-5 text-center">
                <h2>Добро пожаловать, <?=$userInfo['first_name']?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img src="<?=$userInfo['image']?>" alt="<?=$userInfo['first_name']?> <?=$userInfo['last_name']?>" class="img-fluid img-thumbnail">
            </div>
            <div class="col-md-5 ml-auto lk-user-info">
                <h2 class="mb-4"><?=$userInfo['first_name']?> <?=$userInfo['last_name']?></h2>
                <p class="mb-2">Логин: <span><?=$userInfo['login']?></span> <a href="?edit=login"><i class="icon-pencil"></i></a></p>
                <?php if(isset($_GET['edit']) && $_GET['edit'] === 'login'):?>
                    <form method="POST">
                        <label>Новый логин:</label>
                        <input type="text" name="newLogin">
                        <span class="error"></span>

                        <input type="submit" name="action" value="Обновить логин" class="btn btn-primary">
                    </form>
                <?php endif;?>
                <p class="mb-2">Электронная почта: <span><?=$userInfo['email']?></span></p>
                <p class="mb-2">Дата регистрации: <span><?=$userInfo['add_date']?></span></p>
                <p class="mb-2">Дата последнего обновления: <span><?=$userInfo['update_date']?></span></p>

                <div class="comment-form-wrap pt-5">
                    <h3>Укажите информацию о себе</h3>

                    <form method="POST" class="bg-light">
                        <div class="form-group">
                            <label for="message"></label>
                            <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Добавить" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row blog-entries element-animate">
            <div class="col-md-12 col-lg-12 main-content">

                <!-- комментарии -->
                <div>
                    <!-- если комменты есть, выводим количество -->
                    <?php if($countUserComments ):?>
                        <h3 class="mb-5">Количество комментариев: <?=$countUserComments ?></h3>
                    <?php else:?>
                        <h3 class="mb-5">Пока комментариев нет, вы можете оставить первый комментарий!</h3>
                    <?php endif;?>

                    <ul class="comment-list">
                        <?php foreach ($userComments as $comment):?>
                            <li class="comment pb-5 mb-5 border-bottom">
                                <div class="comment-body">
                                    <a href="news_detail.php?newsId=<?=$comment['news_id']?>">
                                        <h3 class="text-primary"><?=$comment['newsTitle']?></h3>
                                    </a>
                                    <div>
                                        <p>Дата добавления комментария: <?=$comment['add_date']?></p>
                                    </div>
                                    <h4>Комментарий:</h4>
                                    <p><?=str_replace("\r\n", "</p><p>", $comment['comment'])?></p>
                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                    <!-- END comment-list -->

                </div>
            </div>
            <!-- END main-content -->
        </div>
    </div>
</section>

<?php require 'components/footer.php'?>
