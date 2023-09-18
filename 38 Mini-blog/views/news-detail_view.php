<?php require 'components/header.php'?>

    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url(<?=$newsItem['image']?>)">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <span class="post-category text-white <?=$newsItem['category_class_name']?> mb-3"><?=$newsItem['category']?></span>
                        <h1 class="mb-4"><?=$newsItem['newsTitle']?></h1>
                        <div class="post-meta align-items-center text-center">
                            <figure class="author-figure mb-0 mr-3 d-inline-block">
                                <img src="<?=$newsItem['avatar']?>" alt="<?=$newsItem['first_name'].' '.$newsItem['last_name']?>" class="img-fluid" />
                            </figure>
                            <span class="d-inline-block mt-1"><?=$newsItem['first_name'].' '.$newsItem['last_name']?></span>
                            <span><?=$newsItem['add_date']?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="site-section py-lg">
        <div class="container">
            <div class="row blog-entries element-animate">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="post-content-body">
                        <p><?=$newsItem['text']?></p>
                    </div>

                    <div class="pt-5">
                        <p>Категория: <a href="#"><?=$newsItem['category']?></a></p>
                    </div>

                    <!-- комментарии -->
                    <div class="pt-5">
                        <h3 class="mb-5">6 Comments</h3>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="vcard">
                                    <img src="images/person_1.jpg" alt="Image placeholder" />
                                </div>
                                <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure!
                                        Quam voluptas earum impedit necessitatibus, nihil?
                                    </p>
                                    <p><a href="#" class="reply rounded">Reply</a></p>
                                </div>
                            </li>

                            <li class="comment">
                                <div class="vcard">
                                    <img src="images/person_1.jpg" alt="Image placeholder" />
                                </div>
                                <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure!
                                        Quam voluptas earum impedit necessitatibus, nihil?
                                    </p>
                                    <p><a href="#" class="reply rounded">Reply</a></p>
                                </div>

                                <ul class="children">
                                    <li class="comment">
                                        <div class="vcard">
                                            <img src="images/person_1.jpg" alt="Image placeholder" />
                                        </div>
                                        <div class="comment-body">
                                            <h3>Jean Doe</h3>
                                            <div class="meta">January 9, 2018 at 2:21pm</div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste
                                                iure! Quam voluptas earum impedit necessitatibus, nihil?
                                            </p>
                                            <p><a href="#" class="reply rounded">Reply</a></p>
                                        </div>

                                        <ul class="children">
                                            <li class="comment">
                                                <div class="vcard">
                                                    <img src="images/person_1.jpg" alt="Image placeholder" />
                                                </div>
                                                <div class="comment-body">
                                                    <h3>Jean Doe</h3>
                                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente
                                                        iste iure! Quam voluptas earum impedit necessitatibus, nihil?
                                                    </p>
                                                    <p><a href="#" class="reply rounded">Reply</a></p>
                                                </div>

                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="vcard">
                                                            <img src="images/person_1.jpg" alt="Image placeholder" />
                                                        </div>
                                                        <div class="comment-body">
                                                            <h3>Jean Doe</h3>
                                                            <div class="meta">January 9, 2018 at 2:21pm</div>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente
                                                                iste iure! Quam voluptas earum impedit necessitatibus, nihil?
                                                            </p>
                                                            <p><a href="#" class="reply rounded">Reply</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="comment">
                                <div class="vcard">
                                    <img src="images/person_1.jpg" alt="Image placeholder" />
                                </div>
                                <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure!
                                        Quam voluptas earum impedit necessitatibus, nihil?
                                    </p>
                                    <p><a href="#" class="reply rounded">Reply</a></p>
                                </div>
                            </li>
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="#" class="p-5 bg-light">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" />
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website" />
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
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
                                            <h4><?=$newsItem['title']?> ID:<?=$newsItem['id']?></h4>
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
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            <li>
                                <a href="#">Food <span>(12)</span></a>
                            </li>
                            <li>
                                <a href="#">Travel <span>(22)</span></a>
                            </li>
                            <li>
                                <a href="#">Lifestyle <span>(37)</span></a>
                            </li>
                            <li>
                                <a href="#">Business <span>(42)</span></a>
                            </li>
                            <li>
                                <a href="#">Adventure <span>(14)</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END sidebar-box -->

                </div>
                <!-- END sidebar -->
            </div>
        </div>
    </section>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2>More Related Posts</h2>
                </div>
            </div>

            <div class="row align-items-stretch retro-layout">
                <div class="col-md-5 order-md-2">
                    <a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('images/img_4.jpg')">
                        <span class="post-category text-white bg-danger">Travel</span>
                        <div class="text">
                            <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                            <span>February 12, 2019</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-7">
                    <a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('images/img_1.jpg')">
                        <span class="post-category text-white bg-success">Nature</span>
                        <div class="text text-sm">
                            <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                            <span>February 12, 2019</span>
                        </div>
                    </a>

                    <div class="two-col d-block d-md-flex">
                        <a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('images/img_2.jpg')">
                            <span class="post-category text-white bg-primary">Sports</span>
                            <div class="text text-sm">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span>February 12, 2019</span>
                            </div>
                        </a>
                        <a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('images/img_3.jpg')">
                            <span class="post-category text-white bg-warning">Lifestyle</span>
                            <div class="text text-sm">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span>February 12, 2019</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require 'components/subscribe.php'?>
<?php require 'components/footer.php'?>