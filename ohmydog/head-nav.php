	<div class="jumbotron masthead">
      <div class="container">
	    <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <div class="row">
            <div class="span8">
              <span class="h1">
               	<img class="text" title="OhMyDog!" alt="OhMyDog!" src="<?php bloginfo('template_directory'); ?>/img/OhMyDog!.png"/>
                    <!--span style="color: red">O</span
                   ><span style="color: orange">h</span
                   ><span style="color: yellow">M</span
                   ><span style="color: rgb(146,208,80)">y</span
                   ><span>D</span
                   ><span style="color: rgb(178,161,199)">o</span
                   ><span style="color: rgb(197,79,197)">g</span
                   ><span style="color: red">!</span-->
              </span>
            </div>
            <div class="span4">
              <img class="logo" width="250" height="242" title="OhMyDog!" alt="OhMyDog!" src="<?php bloginfo('template_directory'); ?>/img/ohmydog.png"/>
            </div>
          </div>
        </a>
      </div>
	</div>

    <div class="navbar navbar-inverse navbar-relative-top">
      <div class="navbar-inner">
        <div class="container">
          <?php get_search_form(); ?>
          <button type="button" class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php
           /** Loading WordPress Custom Menu  **/
           wp_nav_menu( array(
              'menu'            => 'main-menu',
              'container_class' => 'nav-collapse',
              'menu_class'      => 'nav',
              'fallback_cb'     => '',
              'menu_id' => 'main-menu',
              'walker' => new Bootstrapwp_Walker_Nav_Menu()
          ) ); ?>
        </div>
      </div>
    </div>