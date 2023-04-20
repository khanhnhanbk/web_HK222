<section>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <?php
            // Path: app\views\news\home.php
            foreach ($news as $new) :
            ?>
                <!-- all news card -->
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= PATH_URL . "uploads/".  $new['image'] ?>" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title"><?= $new['title'] ?></h5>
                            <p class="card-text">
                                <?php
                                $content = $new['content'];
                                $content = substr($content, 0, 10);
                                echo $content . '...';
                                ?>
                            </p>
                            <a href="/news/detail?id=<?= $new['id'] ?>" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>