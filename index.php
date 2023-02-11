<?php get_header(); ?>
  <div class="mainvisual">
    <ul>
      <li><img src="<?php echo get_template_directory_uri().'/img/mainvisual2.jpg'?>" class="current" ></li>
      <li><img src="<?php echo get_template_directory_uri().'/img/mainvisual7.jpg'?>"></li>
      <li><img src="<?php echo get_template_directory_uri().'/img/mainvisual9.jpg'?>"></li>
    </ul>
    <div class="text">
      <h1>一人ひとりの輝きを大切に。</h1>
      <p>癒しのリラックスヨガで心と体をサポートします</p>
    </div>
  </div>
  <main>
    <div class="wrapper">
    <?php while(have_posts()):?>
    <?php the_post();?>
    <h1 id="index"><?php the_title(); ?></h1>
    <?php the_content();?>
    <?php endwhile;?>
    </div>
  </main>
  <div id="to-top">
    <span></span>
    <span></span>
  </div>
<?php get_footer(); ?>