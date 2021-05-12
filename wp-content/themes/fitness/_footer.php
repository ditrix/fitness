<!---  FONTAWESOME https://fontawesome.com/v4.7.0/icons/#brand  -->
<div id="everywhere-box" class="social-box">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="social-heading">Мы в повсюду</div>
      </div>
      <div class="social-media col-md-7">
        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>  
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<div class="myfooter">
  <div id="footer" class="copyright-wrapper">
    <div id="footer_box" class="darkbox">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <aside id="recent-posts-5" class="widget widget_recent_entries">
              <h3 class="widget-title">ПОСЛЕДНИЕ СТАТЬИ</h3>
              <ul>
        <?php   $footer_postslist = get_posts( array( 'posts_per_page' => getMaxQueryReacords(), 'category'=>'blog' ) ); $cnt = 0;
            foreach ( $footer_postslist as $footer_post ): ?>   
        <?php 
              if(isArticle($footer_post)):  ?>
              <li><a href="<?php echo $footer_post->guid; ?>"><?=$footer_post->post_title; ?></a></li>
        <?php endif;
              $cnt++;
              if($cnt > getArticlesPerHome()){
                 break;
              }
         endforeach; ?>
              </ul>                
            </aside>        
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <aside id="text-3" class="widget widget_text left-content">
              <h3 class="widget-title">АДРЕС</h3>
              <div class="textwidget">
                <div class="col-md-12">
                  <p>Дружковка, Соборная - 37</p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                  <p>+38(518) 356-5373</p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                  <p>Email:<a href="mailto:%22mail@example.com%22">mail@example.com</a></p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 web">
                  <p>Website:&nbsp;<a href="mailto:%22mail@example.com%22">mail@example.com</a></p>
                </div>
              </div>
            </aside>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <aside id="custom_html-2" class="widget_text widget widget_custom_html">
              <h3 class="widget-title">НАШИ УСУГИ</h3>
              <ul>
                <li><a href="#">тренажерный зал</a></li>
                <li><a href="#">фитнес</a></li>
                <li><a href="#">массаж</a></li>
                <li><a href="#">йога</a></li>
              </ul>
              
            </aside>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="footer" class="copyright-wrapper">
  <div class="copyright py-3 px-1">
    <p class="mb-0"><span class="credit_link">© 2020 фитнес клуб | Основной инстинкт</span></p> 
  </div>
  <a href="javascript:" id="return-to-top" class="right"><i class="fa fa-angle-double-up" aria-hidden="true"></i><span class="screen-reader-text">наверх</span></a>
</div>
<!-- eof footer -->     
      
      
  <!-- Instagram Feed JS -->
<script type="text/javascript">

</script>
  <script type="text/javascript">
    (function () {
      var c = document.body.className;
      c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
      document.body.className = c;
    })()
  </script>
  <script type="text/javascript" id="contact-form-7-js-extra"></script>
<script type="text/javascript" defer="defer" src="<?php bloginfo('template_url'); ?>/js/scripts.js" id="contact-form-7-js"></script>
<script type="text/javascript" defer="defer" src="<?php bloginfo('template_url'); ?>/js/jquery.js" id="jquery-blockui-js"></script>

<script type="text/javascript" defer="defer" src="<?php bloginfo('template_url'); ?>/js/add-to-cart.js" id="wc-add-to-cart-js"></script>
<script type="text/javascript" defer="defer" src="<?php bloginfo('template_url'); ?>/js/js.js" id="js-cookie-js"></script>
<script type="text/javascript" defer="defer" src="<?php bloginfo('template_url'); ?>/js/woocommerce.js" id="woocommerce-js"></script>
<script type="text/javascript" defer="defer" src="<?php bloginfo('template_url'); ?>/js/cart-fragments.js" id="wc-cart-fragments-js"></script>
<script type="text/javascript" defer="defer" src="<?php bloginfo('template_url'); ?>/js/jquery_002.js" id="pretty-photo-js-js"></script>
<script type="text/javascript" defer="defer" src="<?php bloginfo('template_url'); ?>/js/custom-front.js" id="vwgi-custom-front-js-js"></script>
<script type="text/javascript" defer="defer" src="<?php bloginfo('template_url'); ?>/js/bmi.js" id="vw-fitness-pro-bmi-js"></script>
<script type="text/javascript" defer="defer" src="<?php bloginfo('template_url'); ?>/js/custom-front_002.js" id="vw-fitness-pro-custom-front-js"></script>
<script type="text/javascript" defer="defer" src="<?php bloginfo('template_url'); ?>/js/wp-embed.js" id="wp-embed-js"></script>
    
</body></html>