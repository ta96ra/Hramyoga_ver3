<footer id="footer">
    <div class="wrapper">
      <div class="top">
        <ul>
          <li>
            <a href="https://lin.ee/4AbY2ZB">
              <img src="<?php echo get_template_directory_uri().'/img/line.png'?>" alt="">
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/hramyoga">
            <i class="bi bi-instagram"></i>
            </a>
          </li>
          <li>
            <a href="http://ameblo.jp/yoga-therapy-h/">
              <img src="<?php echo get_template_directory_uri().'/img/ameba.png'?>" alt="">
            </a>
          </li>
        </ul>
      </div>
      <div class="center">
        <div class="left">
          <img src="<?php echo get_template_directory_uri().'/img/logo.png'?>" alt="">
          <p>メール：</p>
          <a href="mailto:hramyoga@gmail.com?subject=お問い合わせ">hramyoga@gmail.com</a>
          <p>スタジオ：<br>群馬県高崎市日高町1376<br>コンシェルジュパーク</p>
          <img src="<?php echo get_template_directory_uri().'/img/qrcode.jpg'?>" alt="">
          <img src="img/" alt="">
        </div>
        <?php if(has_nav_menu('global')){
          wp_nav_menu([
            'theme_location' => 'footer',
            'menu-id' => 'footer-menu',
            'container' => 'nav',
            // 'container_class' => '',
          ]);
        }
        ?>
        <!-- <ul class="right"> -->
        <!-- <li><a href="#">ホーム</a></li> -->
        <!-- </ul> -->
        
      </div>
    </div>
    <p class="copy small">&copy; Hram yoga allright reserved</div>
  </footer>
  <?php wp_footer();?>
  <script src="js/main.js"></script>
</body>
</html>