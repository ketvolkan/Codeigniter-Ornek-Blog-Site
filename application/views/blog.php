<?php $this->load->view('includes/header.php'); ?>

<body>
    <div id="colorlib-page" style="margin-top:-100px;">
        <?php $this->load->view('includes/components/navbar.php'); ?>
        <div id="colorlib-main">
            <div class=" js-fullheight" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="js-fullheight d-flex justify-content-center align-items-center">
                    <div class="col-md-12 text text-center">
                        <div class="img mb-4" style="background-image: url(images/author.jpg);"></div>
                        <?php $this->load->view('includes/components/blog/blog_slider.php'); ?>
                    </div>
                </div>
            </div>
            <section class="ftco-section">
                <div class="container" style="margin-top: -100px;">

                    <div class="row justify-content-center mb-5 pb-2">
                        <hr style="width: 77%;">
                        <br><br>
                        <div class="col-md-7 heading-section text-center ftco-animate">

                            <h2 class="mb-4">Mottom</h2>
                            <p>Bölünürsek yok oluruz. Bölüşürsek tok oluruz.</p>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <hr style=" width: 77%;">
                        <br><br>
                        <?php $this->load->view("includes/components/blog/blog_posts.php"); ?>
                    </div>
                </div>
            </section>
            <?php $this->load->view('includes/footer.php'); ?>
</body>

</html>