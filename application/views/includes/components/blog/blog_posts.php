<div class="container">
    <div class="col-sm-12">
        <div class="row">
            <?php for ($i = 1; $i <= count($posts); $i++) {
                $post = $posts[$i - 1];
                if ($i % 4 == 0) {
            ?>
                    <div class="col-sm-12">
                    <?php
                } else {
                    ?>
                        <div class="col-sm-4">
                        <?php } ?>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $post->title ?></h4>
                                <p class="card-text"><?php echo substr($post->description, 0, 100) . "..."; ?></h4>
                                </p>
                                <div class="col-sm-3"><a href="<?php echo base_url("Post/PostDetail/$post->id") ?>" style="width: 100%;" class="btn btn-outline-dark">Devamını Oku</a></div>
                            </div>
                        </div><br>
                        </div>
                    <?php
                } ?>
                    <div class="col-sm-12">
                        <a href="<?php echo base_url("Post/Posts") ?>" style="width: 100%;" class="btn btn-dark">Tüm Gönderiler</a>
                    </div>
                    </div>

        </div>
    </div>