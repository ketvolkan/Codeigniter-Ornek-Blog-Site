<div id="colorlib-main">
    <br><br><br>
    <br>
    <article class="article bg-light text-center" style="padding:100px;margin:120px;border-radius:20px;padding-top:60px">
        <div class="article-title">
            <h1><?php echo $currentPost->title; ?></h1><br>
            <hr><br><br>
            <div class="row">
                <div class="col-sm-12">
                    <?php if ($currentPost->youtube_url != null) {
                    ?>
                        <div class="article-img"> <iframe width="100%" height="500" src="<?php echo $currentPost->youtube_url ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <br><br>
                        <hr> <?php
                            } ?>
                </div><br>
            </div>
        </div>
        <div class="media-body" style="font-size: 20;padding:20px;font-weight:500;">

            <div class="row">
                <div class="col-sm-9 text-left">Yazar : <label>Volkan Ket</label></div>
                <div class="col-sm-3">
                    <span><?php echo $currentPost->createdAt; ?></span>
                </div>
            </div>
        </div>
        <div class="article-content">
            <p><?php echo $currentPost->description; ?></p>

        </div>

    </article>