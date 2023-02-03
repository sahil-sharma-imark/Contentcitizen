<header id="header" class="scrolled">
    <div class="container">
        <nav>
            <a href="<?php echo get_site_url();?>" class="logo magic-hover">
                <figure>
                    <img src="<?php echo get_field('logo','option')?>" alt="Content Citizen">
                </figure>
            </a>
            <ul class="head-nav">
                <li>
                    <a class="link magic-hover" href="<?php echo get_site_url();?>">HOME</a>
                </li>
                <li>
                    <a class="link magic-hover" href="<?php echo get_the_permalink(9);?>">THE CONTENT</a>
                </li>
                <li>
                    <a class="link magic-hover" href="<?php echo get_the_permalink(7);?>">THE CITIZENS</a>
                </li>
                <!--<li>-->
                <!--    <a class="link magic-hover" href="<?php echo get_the_permalink(107);?>">News/Media</a>-->
                <!--</li>-->
                <li>
                    <a class="link magic-hover" href="<?php echo get_the_permalink(15);?>">CONTACT US</a>
                </li>
            </ul>
            <div class="toggle-menu magic-hover">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </div>
</header>

<div class="scroll-body" data-scroll-container>