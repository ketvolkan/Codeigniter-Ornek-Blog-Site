<div id="colorlib-main"><br><br>
    <section class="section-preview " style="padding: 5%;">
        <section class="mb-4">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Bize Ulaşın</h2>
            <br><br>
            <div class="row">
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="<?php echo base_url("contact/insert"); ?>" method="POST">


                        <div class="row">

                            <div class="col-md-6">
                                <div class="md-form mb-0"> <label for="name" class="">Adınız</label>
                                    <input type="text" id="name" name="name" class="form-control">

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0"> <label for="email" class="">Mail Adresiniz</label>
                                    <input type="text" id="email" name="email" class="form-control">

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0"> <label for="subject" class="">Başlık</label>
                                    <input type="text" id="subject" name="subject" class="form-control">

                                </div>
                            </div>
                        </div>

                        <div class="row">


                            <div class="col-md-12">

                                <div class="md-form"> <label for="message">Mesaj</label>
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>

                                </div>

                            </div>
                        </div><br>
                        <div class="row">


                            <div class="col-md-12">

                                <button type="submit" class="btn btn-dark" style="width: 100%;">Gönder</button>

                            </div>
                        </div>
                    </form>


                    <div id="status">
                        <?php
                        $status = $this->input->get("status");
                        if ($status == "ok") {
                        ?>
                            <div class="alert alert-success">
                                <strong>Başarılı!</strong> Mesajınız gönderildi. :D
                            </div>
                        <?php
                        } elseif ($status == "error") {
                        ?>
                            <div class="alert alert-danger ">
                                <strong>Başarısız!</strong> Mesajınız gönderilemedi :d
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p><?php echo $setting->contact_adress; ?></p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p><?php echo $setting->contact_phone; ?></p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p><?php echo $setting->contact_mail; ?></p>
                        </li>
                    </ul>
                </div>

            </div>

        </section>
    </section> <br><br><br>