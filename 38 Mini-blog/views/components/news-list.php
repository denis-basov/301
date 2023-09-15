<div class="row">
    <?php foreach ($newsList as $newsItem):?>
        <div class="col-lg-4 mb-4">
            <div class="entry2">
                <a href="single.html"><img src="<?=$newsItem['image']?>" alt="<?=$newsItem['newsTitle']?>" class="img-fluid rounded" /></a>
                <div class="excerpt">
                    <span class="post-category text-white <?=$newsItem['category_class_name']?> mb-3"><?=$newsItem['category']?></span>

                    <h2><a href="single.html"><?=$newsItem['newsTitle']?></a></h2>
                    <div class="post-meta align-items-center text-left clearfix">
                        <figure class="author-figure mb-0 mr-3 float-left"><img src="<?=$newsItem['avatar']?>" alt="<?=$newsItem['first_name'].' '.$newsItem['last_name']?>" class="img-fluid" /></figure>
                        <span class="d-inline-block mt-1"><a href="#"><?=$newsItem['first_name'].' '.$newsItem['last_name']?></a></span>
                        <span><?= substr($newsItem['add_date'], 0, 10)?></span>
                    </div>
                    <p><?=implode(' ', explode(' ', mb_substr($newsItem['text'], 0, 200), -1))?><a href="single.html">...</a></p>
                    <p><a href="single.html">Подробнее...</a></p>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
