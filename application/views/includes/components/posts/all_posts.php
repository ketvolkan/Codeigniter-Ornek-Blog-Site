<div class="container">
    <br>
    <div class="row">
        <?php foreach ($posts as $post) {

        ?>
            <div class="col-sm-12">
                <div class="card" style="padding: 20px;">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="row ">
                                <div class="col-sm-11">
                                    <h2>
                                        <?php echo $post->title ?></h2>
                                </div>
                                <div class="col-sm-1">
                                    <h6 style="color:gray;font-size:15px"><?php echo substr($post->createdAt, 0, 10); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-text" style="margin-left: 20px;"> <?php echo substr($post->description, 0, 100) . "..."; ?>
                    </p>
                    <div class="row ">
                        <div class="col-sm-9"></div>
                        <div class="col-sm-3"><a href="<?php echo base_url("Post/PostDetail?id=$post->id") ?>" style="width: 100%;" class="btn btn-outline-dark">Devamını Oku</a></div>
                    </div>
                </div><br>
            </div>

        <?php } ?>
    </div>
</div>
</div>