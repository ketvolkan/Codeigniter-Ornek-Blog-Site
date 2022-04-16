<div class="container">
    <br>
    <article class="article bg-light" style="padding:100;">
        <div class="article-title">
            <div class="row">
                <div class="col-sm-4">


                    <div class="media">
                        <div class="avatar"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="100%" title="" alt=""></div>

                    </div>
                </div>
                <div class="col-sm-8">
                    <?php if ($currentPost->youtube_url != null) {
                    ?>

                        <div class="article-img"> <iframe width="100%" height="315" src="<?php echo $currentPost->youtube_url ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <?php
                    } ?>
                </div>
            </div>

        </div>
        <div class="media-body" style="font-size: 20;padding:20px;font-weight:500;">
            <h2><?php echo $currentPost->title; ?></h2>
            <div class="row">
                <div class="col-sm-9">Yazar : <label>Volkan Ket</label></div>
                <div class="col-sm-3">
                    <span><?php echo $currentPost->createdAt; ?></span>
                </div>
            </div>
        </div>
        <div class="article-content">
            <p><?php echo $currentPost->description; ?></p>

        </div>
</div>


</article>
</div>