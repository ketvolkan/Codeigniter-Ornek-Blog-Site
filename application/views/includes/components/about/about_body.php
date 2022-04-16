<div id="colorlib-main">

    <br>

    <div class="card" style="margin: 100px;">
        <div class="row">
            <div class="col-sm-4"> <img src="<?php echo base_url($setting->about_url) ?>" alt="photo" style="width:100%"></div>
            <div class="col-sm-8">
                <div class=" text-center" style="margin-top: 100px;">
                    <h2><?php echo $setting->about_title; ?></h2>
                    <p class="title"><span style="color: gray;">Meslek:</span> <?php echo $setting->about_job; ?></p>
                    <p><span style="color: gray;">Açıklama:</span> <?php echo $setting->about_description; ?></p>
                    <p><span style="color: gray;">Mail:</span> <?php echo $setting->about_mail; ?></p>

                </div>
            </div>
        </div>

    </div>