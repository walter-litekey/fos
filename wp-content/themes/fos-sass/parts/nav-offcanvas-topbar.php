<!-- By default, this menu will use off-canvas for small
     and a topbar for medium-up -->
<div class="sticky-custom-nav">
    <div data-sticky-container>
        <div class="top-bar-container" data-sticky data-options="marginTop:0;">
            <div class="top-bar" id="top-bar-menu">
                <div class="top-bar-left float-left">
                    <ul class="menu">
                        <li class="header-logo">
                            <a href="<?php echo home_url(); ?>">
                                <img class="logo-white" src="<?php echo get_template_directory_uri(); ?>/assets/images/fos-logo.png">
                                <img class="logo-color" src="<?php echo get_template_directory_uri(); ?>/assets/images/fos-logo-color.png">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="top-bar-right show-for-medium">
                    <ul class="menu">
                        <li>
                            <a href="#">
                                <i class="icons8-shop"></i> Tienda
                            </a>
                        </li>
                        <li class="animated wobble">
                            <a href="#">
                                <i class="icons8-brush"></i> <span class="label-personalizador">Personalizador</span></a></li>
                        <li><a href="#"><i class="icons8-contacts"></i> Mi cuenta</a></li>
                        <li><a href="#"><i class="icons8-settings-3"></i> Cómo funciona</a></li>
                        <li><a href="#"><i class="icons8-blog"></i> Blog</a></li>
                        <li><a href="#"><i class="icons8-advertising"></i> Contacto</a></li>
                    </ul>
                </div>
                <div class="top-bar-right float-right show-for-small-only">
                    <ul class="menu">
                        <!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
                        <li>
                            <a data-toggle="off-canvas">
                                <?php _e( 'Menu', 'jointswp' ); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
