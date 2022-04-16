<div class="container">
    <div class="col-sm-12">
        <div class="row">
            <?php for ($i = 1; $i <= count($posts); $i++) {
                $post = $posts[$i - 1];
                if ($i % 4 == 0) {
            ?>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $post->title ?></h4>
                                <p class="card-text"><?php echo substr($post->description, 0, 100) . "..."; ?></h4>
                                </p>
                                <a href="#" class="btn btn-outline-dark">Devamını Oku</a>
                            </div>
                        </div><br>
                    </div><?php
                        } else {
                            ?>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $post->title ?></h4>
                                <p class="card-text"><?php echo substr($post->description, 0, 30) . "..."; ?></h4>
                                </p>
                                <a href="#" class="btn btn-outline-dark">Devamını Oku</a>
                            </div>
                        </div><br>
                    </div><?php }
                    } ?>
            <div class="col-sm-12">
                <a href="#" style="width: 100%;" class="btn btn-dark">Tüm Gönderiler</a>
            </div>
        </div>

    </div>
</div>