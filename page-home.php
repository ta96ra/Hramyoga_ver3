<?php get_header(); ?>
  <div class="mainvisual">
    <ul>
      <li><img src="<?php echo get_template_directory_uri().'/img/mainvisual2.jpg'?>" class="current" ></li>
      <li><img src="<?php echo get_template_directory_uri().'/img/mainvisual7.jpg'?>"></li>
      <li><img src="<?php echo get_template_directory_uri().'/img/mainvisual9.jpg'?>"></li>
    </ul>
    <div class="text">
      <h1>一人ひとりの輝きを大切に</h1>
      <p>癒しのリラックスヨガで心と体をサポートします</p>
    </div>
  </div>
  <main>
    <div id="home" class="wrapper">
      <div class="feature">
        <h2>Hramyogaの特徴</h2>
        <div class="items">
          <div class="item animate">
            <h3 class="title">運動が苦手な人も安心！呼吸を意識した癒しのリラックスヨガ</h3>
            <div class="text">
            Hramyogaでは無理のない動きや体の不調を改善していきます。
            </div>
          </div>
          <div class="item animate delay-one">
            <h3 class="title">やさしい・安心・丁寧な指導</h3>
            <div class="text">
              キッズからシニアまで幅広い年齢層に対応できます。お客様の心身の状態に合わせながらレッスンを進めていきます。
            </div>
          </div>
          <div class="item animate delay-two">
            <h3 class="title">心の悩みをお持ちの方</h3>
            <div class="text">
              セラピーで自分自身を見つめ直すことにより、悩みの解決をサポートいたします。
            </div>
          </div>
        </div>
      </div>
      <div class="lesson-list">
        <!-- 後でphpで書き換えても良い -->
        <h2>レッスン一覧</h2>
        <div class="items">
          <a href="<?php echo home_url('/lesson/#private-yoga');?>" class="item animate">
            <img src="<?php echo get_template_directory_uri().'/img/privateyoga2.jpg'?>" alt="">
            <h3>プライベートヨガ</h3>
          </a>
          <a href="<?php echo home_url('/lesson/#semi-private');?>" class="item animate delay-one">
            <img src="<?php echo get_template_directory_uri().'/img/private.jpg'?>" alt="">
            <h3>セミプライベートヨガ</h3>
          </a> 
          <a href="<?php echo home_url('/lesson/#group-yoga');?>" class="item animate delay-two">
            <img src="<?php echo get_template_directory_uri().'/img/kanoyama.jpg'?>" alt="">
            <h3>グループヨガ in 観音山ファミリーパーク</h3>
          </a> 
          <a href="<?php echo home_url('/lesson/#online-lesson');?>" class="item animate">
            <img src="<?php echo get_template_directory_uri().'/img/onlinegroup.jpg'?>" alt="">
            <h3>オンラインヨガ</h3>
          </a>
          <a href="<?php echo home_url('/lesson/#inner-child');?>" class="item animate delay-one">
            <img src="<?php echo get_template_directory_uri().'/img/inner4.jpg'?>" alt="">
            <h3>心の声に気づくセラピー</h3>
          </a> 
        </div>
      </div>
      <div class="voice">
        <h2>お客様の声</h2>
        <ul class="items">
          <li class="animate left">
            <div class="face">
              <img src="<?php echo get_template_directory_uri().'/img/icon-guest1.png'?>" alt="">
            </div>
            <div class="text">
              <p class="comment">長年、整体院に通い治らなかった五十肩が月に一度のヨガクラスでしたが通い始めて１年ほどで楽になり、治りました。</p>
              <p class="age">４０代女性</p>
            </div>
          </li>
          <li class="animate right">
            <div class="face">
              <img src="<?php echo get_template_directory_uri().'/img/icon-guest3.png'?>" alt="">
            </div>
            <div class="text">
              <p class="commet">
              産後、骨盤のゆがみが気になっていたところ、hiroko先生のヨガに通いはじめて体が整ったような気がします。また通いたいです!
              </p>
              <p class="age">３０代女性</p>
            </div>
          </li>
          <li class="animate left">
            <div class="face">
              <img src="<?php echo get_template_directory_uri().'/img/icon-guest1.png'?>" alt="">
            </div>
            <div class="text">
              <p class="comment">
              先生のやさしい丁寧な声かけがリラックスできました。大人数のクラスでは味わえない心地の良い時間でした。
              </p>
              <p class="age">
              ４０代女性
              </p>
            </div>
          </li>
          <li class="animate right">
            <div class="face">
              <img src="<?php echo get_template_directory_uri().'/img/icon-guest1.png'?>" alt="">
            </div>
            <div class="text">
              <p class="comment">
              丁寧で分かりやすいクラスでした。癒されました。またお願いします。
              </p>
              <p class="age">
              ７０代女性
              </p>
            </div>
          </li>
          <li class="animate left">
            <div class="face">
              <img src="<?php echo get_template_directory_uri().'/img/icon-guest3.png'?>" alt="">
            </div>
            <div class="text">
              <p class="comment">
              自分が思っているカードが出てびっくりしました。背中を後押しされたような気持ちです!
              これからの方向性の確認ができました(^^)
              お友達にも紹介したいと思います。
              </p>
              <p class="age">４０代女性</p>
            </div>
          </li>
        </ul>
      </div>

      <?php get_sidebar();?>
    </div>
  </main>
  <div id="to-top">
    <span></span>
    <span></span>
  </div>
<?php get_footer(); ?>