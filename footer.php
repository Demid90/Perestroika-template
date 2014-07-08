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
              <ul class="bottom-nav-menu">
                <li>
                  <a href="">
                    Стройматериалы   
                  </a>
                </li>
                <li>
                  <a href="">
                    Все для бани
                  </a>
                </li>
                <li>
                  <a href="">
                    Инструменты
                  </a>
                </li>
                <li>
                  <a href="">
                    Инструменты
                  </a>
                </li>
                <li>
                  <a href="">
                    Дача и сад
                  </a>
                </li>
                <li>
                  <a href="">
                    Распродажа
                  </a>
                </li>
              </ul>
            </div>
          </div>  
        </div>

    </div>
    
    <div class="container-fluid bg-circles-footer">      

        <div class="container feedback">      
          <div class="row">
            
            <div class="col-xs-4">
              <p><h4>Обратная связь</h4></p>
              <p><textarea name="NAME" id="111" rows="1">ИМЯ</textarea></p>
              <p><textarea name="PHONE" id="111" rows="1">ТЕЛЕФОН</textarea></p>
              <input class="btn btn-danger btn-block btn-orange" type="submit" value="ОТПРАВИТЬ">
            </div>

            <div class="col-xs-4">
              <p><h4>Контактная информация</h4></p>
              <p>454011, Еткуль, Первомайский переулок, здание 24</p>
              <p class="phone">+7 (351) 452 30 66</p>
              <p class="phone">+7 (951) 243 47 49</p>
            </div>

            <div class="col-xs-4">
              <p><h4>Карта проезда</h4></p>
              <a href="#" class="map">
                <img src="images/map.png" alt="">
              </a>
            </div>   
          
          </div>
        </div>    

    </div>




	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
					<?php do_action( '_tk_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_tk' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_tk' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', '_tk' ), '_tk', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>