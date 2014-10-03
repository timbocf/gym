<?php get_header() ?>

<div class="container">
    <div class="col-lg-6"> <img src="<?php bloginfo('template_directory') ?>/images/welcome.jpg" id="welcome" alt="Welcome to Gym 101 Fitness Center!" title="Welcome to GYM 101 Fitness Center!" />
        <div id="whoweare">
            <h3>Open <span class="orange">24&nbsp;hrs</span>!</h3>
            <h1>Gladewater</h1>
            <span id="henderson">
            <h5>500 Allison St, Gladewater TX | (903) 845-5436</h5>
            </span> <br />
            <img src="<?php bloginfo('template_directory') ?>/images/floor.png" />
            <p>Gym 101 Fitness Center is located in historic Gladewater just minutes from Longview, Big Sandy, Liberty City, and White Oak.  We have a 4-acre facility located off Hwy 80 behind Fred's.  Our state of the art 10,000 square foot facility offers a plethora of exercise options, including: strength training, cardio, an Olympic-sized pool, tennis courts, an obstacle course, free weights, aerobic classes, personal training, nutritional consultations, tanning, child care, and smoothie bar. </p>
        </div>
    </div>
    <div class="col-lg-6">
    	<div id="animation"> 
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="gym101grabber" width="450" height="300" align="middle">
            <param name="movie" value="<?php bloginfo('template_directory') ?>/gym101grabber.swf"/>
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="<?php bloginfo('template_directory') ?>/gym101grabber.swf" width="450" height="300">
                <param name="movie" value="<?php bloginfo('template_directory') ?>/gym101grabber.swf"/>
            <!--<![endif]-->
                <a href="http://www.adobe.com/go/getflash">
                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
                </a>
            <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
        </object>
        </div>
        <img src="<?php bloginfo('template_directory') ?>/images/gym.jpg" id="gymphoto" /> </div>
</div>

<?php get_footer() ?>