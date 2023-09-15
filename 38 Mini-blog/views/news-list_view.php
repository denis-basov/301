<!-- шаблон страницы списка новостей -->
<?php require 'components/header.php'?>

<div class="site-section bg-white">
    <div class="container">

        <div class="row mb-5">
            <div class="col-12">
                <h2><?=$title?></h2>
            </div>
        </div>

        <?php require 'components/news-list.php'?>
    </div>
</div>

<?php require 'components/footer.php'?>
