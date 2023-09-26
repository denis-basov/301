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
                <p class="mb-2">Логин: <span><?=$userInfo['login']?></span></p>
                <p class="mb-2">Электронная почта: <span><?=$userInfo['email']?></span></p>
                <p class="mb-2">Дата регистрации: <span><?=$userInfo['add_date']?></span></p>
                <p class="mb-2">Дата последнего обновления: <span><?=$userInfo['update_date']?></span></p>

                <div class="comment-form-wrap pt-5">
                    <h3>Укажите информацию о себе</h3>

                    <form method="POST" class="py-5 bg-light">
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

<section class="site-section py-lg">
    <div class="container">
        <div class="row blog-entries element-animate">
            <div class="col-md-12 col-lg-8 main-content">

                <!-- комментарии -->
                <div class="pt-5">
                    <!-- если комменты есть, выводим количество -->
                    <?php if($countUserComments ):?>
                        <h3 class="mb-5">Количество комментариев: <?=$countUserComments ?></h3>
                    <?php else:?>
                        <h3 class="mb-5">Пока комментариев нет, вы можете оставить первый комментарий!</h3>
                    <?php endif;?>

                    <ul class="comment-list">
                        <?php foreach ($userComments as $comment):?>
                            <li class="comment">
                                <div class="vcard">
                                    <img src="<?=$comment["image"]?>" alt="<?=$comment['first_name'].' '.$comment['last_name']?>" />
                                </div>
                                <div class="comment-body">
                                    <a href="<?=$comment['user_id']?>">
                                        <h3><?=$comment['first_name'].' '.$comment['last_name']?></h3>
                                    </a>
                                    <div class="meta"><?=$comment['add_date']?></div>
                                    <p><?=str_replace("\r\n", "</p><p>", $comment['comment'])?></p>
                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                    <!-- END comment-list -->

                </div>
            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box search-form-wrap">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter" />
                        </div>
                    </form>
                </div>
                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <div class="bio text-center">
                        <img src="<?=$newsItem['avatar']?>" alt="<?=$newsItem['first_name']?> <?=$newsItem['last_name']?>" class="img-fluid mb-5" />
                        <div class="bio-body">
                            <h2><?=$newsItem['first_name']?> <?=$newsItem['last_name']?></h2>
                            <p class="mb-4"><?=$newsItem['short_info']?></p>
                            <p><a href="#" class="btn btn-primary btn-sm rounded px-4 py-2">Биография</a></p>
                            <p class="social">
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">Похожие новости</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            <?php foreach($limitNewsListByCategoryId as $newsItem):?>
                                <li>
                                    <a href="news_detail.php?newsId=<?=$newsItem['id']?>">
                                        <img src="<?=$newsItem['image']?>" alt="<?=$newsItem['title']?>" class="mr-4" />
                                        <div class="text">
                                            <h4><?=$newsItem['title']?></h4>
                                            <div class="post-meta">
                                                <span class="mr-2"><?=$newsItem['add_date']?></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">Новости по категориям</h3>
                    <ul class="categories">
                        <?php foreach ($newsCountByCategories as $category):?>
                            <li>
                                <a href="<?=$category['category_id']?>"><?=$category['category']?> <span>(<?=$category['count']?>)</span></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">Новости по авторам</h3>
                    <ul class="categories">
                        <?php foreach ($newsCountByAuthors as $author):?>
                            <li>
                                <a href="<?=$author['author_id']?>">
                                    <?=$author['first_name'].' '.$author['last_name']?> <span>(<?=$author['count']?>)</span>
                                </a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <!-- END sidebar-box -->

            </div>
            <!-- END sidebar -->
        </div>
    </div>
</section>

<?php require 'components/footer.php'?>
