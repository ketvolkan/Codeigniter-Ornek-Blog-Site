<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center" style=" overflow-y: hidden;">
    <h1 id="colorlib-logo"><a href="index.html">Ket<span></span></a></h1>
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
            <?php foreach ($menus as $menu) { ?>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url($menu->url) ?>"><?php echo $menu->name ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <div class="colorlib-footer">
        <p>

            Copyright &copy;
            <script>
                document.write(new Date().getFullYear());
            </script> Made By Ket</a>
        <ul>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
        </ul>
    </div>
</aside> <!-- END COLORLIB-ASIDE -->