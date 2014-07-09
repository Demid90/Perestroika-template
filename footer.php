<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">

<div class="container-fluid bg-circles-bottom-nav-menu">

        <div class="container">
          <div class="row">
            <div class="col-xs-12">

            <?php wp_nav_menu(
                array(
                  'theme_location' => 'primary-bottom',
                  'container_class' => '',
                  'menu_class' => 'bottom-nav-menu',
                  'fallback_cb' => '',
                  'menu_id' => 'main-menu-bot'
                )
              ); ?>
   
            </div>
          </div>  
        </div>

    </div>
    
    <div class="container-fluid bg-circles-footer">      
        <div class="container feedback">      
          <div class="row">
            
            <div class="col-xs-4">
              <?php echo do_shortcode( '[contact-form-7 id="24" title="Обратная связь"]' ); ?>
            </div>

            <div class="col-xs-4">
              <p><h4>Контактная информация</h4></p>
              <p>454011, Еткуль, Первомайский переулок, здание 24</p>
              <p class="phone">+7 (351) 452 30 66</p>
              <p class="phone">+7 (951) 243 47 49</p>
            </div>

            <div class="col-xs-4">
              <h4>Карта проезда</h4>
                <img src="<?php bloginfo('template_directory');?>/images/map.png" alt="">
            <div>   
          
          </div>
        </div>    

    </div>

</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>