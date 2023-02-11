<?php get_header(); ?>
  <div class="visual">
    <h1><?php the_title(); ?></h1>
  </div>
  <main>
    <div id="contact"class="wrapper">
      <!-- 投稿がある限り投稿を表示し続ける -->
      <div class="form">
      <?php while(have_posts()):?>
      <?php the_post();?>
          <?php the_content();?>
      <?php endwhile;?>
      </div>
      <!-- <?php get_sidebar();?> -->
    </div>
  </main>
  <div id="to-top">
    <span></span>
    <span></span>
  </div>
<?php get_footer(); ?>