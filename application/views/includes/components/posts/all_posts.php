<div id="colorlib-main">
    <br>
    <br>
    <br>
    <br>
    <h2 class="mb-4 text-center">Tüm Gönderiler</h2> <br>
    <?php foreach ($posts as $post) {

    ?>
        <div class="col-md-12 text-center bg-light" style="margin: 20px;border-radius:3%">
            <div class="blog-entry ftco-animate">

                <div class="text text-2 pt-2 mt-3">
                    <h3 class="mb-4"><?php echo $post->title ?></h3>
                    <p class="mb-4"><?php echo substr($post->description, 0, 100) . "..."; ?></p>
                    <div class="author mb-4 d-flex align-items-center">
                        <div class="ml-8 info">
                            <span>Yazar</span>
                            <h3>KetVolkan <span><?php echo substr($post->createdAt, 0, 10); ?></span></h3>
                        </div>
                    </div>
                    <div class="meta-wrap align-items-center">
                        <div class="half">
                            <p><a href="<?php echo base_url("Post/PostDetail?id=$post->id") ?>" class="btn py-2">Devamını Oku <span class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php } ?>