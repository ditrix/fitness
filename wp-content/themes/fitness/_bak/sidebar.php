<div id="sidebar">
<ul>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
  <li>
  <h2>Страницы</h2>
  <ul>
  <li><a href="<?php echo get_settings('home'); ?>/">Главная</a></li>
    <?php wp_list_pages('title_li='); ?> 
  </ul>
  </li>
  <li>
  <h2>Рубрики</h2>
  <ul>
    <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
  </ul>
  </li>
  <li>
  <ul>
  <?php get_links_list(); ?>
  </ul>
  </li>
  <li>
  <ul>
  <h2>Прочее</h2>
  <li><a href="http://www.wptheme.ru" title="Темы для Wordpress">Темы для Wordpress</a></li>
  </ul>
  </li>
<?php endif; ?>
</ul>
</div>
