</section>
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container px-md-5">
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Menüler</h2>
                    <ul class="list-unstyled categories">
                        <?php foreach ($menus as $menu) { ?>
                            <li>
                                <a href="<?php echo base_url($menu->url) ?>"><?php echo $menu->name ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1740.0898128730823!2d28.598358013789426!3d40.976604441040344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b560bcb7d1c911%3A0xcfe3faf82e29d13b!2zR8O8cnDEsW5hciwgR8O8bGRlbSBTay4gMTYgTCwgMzQ1MjggQmV5bGlrZMO8esO8L8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1650065117302!5m2!1str!2str" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> Made By Ket</a>
                </p>
            </div>
        </div>
    </div>
</footer>
</div>
</div>


<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


<script src="<?php echo base_url("assets/") ?>js/jquery.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/popper.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url("assets/") ?>js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/owl.carousel.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/aos.js"></script>
<script src="<?php echo base_url("assets/") ?>js/jquery.animateNumber.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url("assets/") ?>js/jquery.timepicker.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?php echo base_url("assets/") ?>js/google-map.js"></script>
<script src="<?php echo base_url("assets/") ?>js/main.js"></script>

</body>

</html>