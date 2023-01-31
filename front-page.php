<?php get_header(); ?>
    <div id="header-Fix" class="top-Hero_block">
      <div class="top-Hero_container container">
        <div class="top-Hero_heading_inner">
          <div class="top-Hero_heading">
            <div class="top-Hero_title">
              Code Develop<br>Professional
            </div>
            <div class="top-Hero_subtitle">
              開発・実装に特化した<br class="sp-Line">コーディングのプロフェッショナル集団
            </div>
          </div>
        </div>
        <span class="top-Hero_scroll"></span>
      </div>
    </div>
    <div class="video">
      <video class="top-Hero_bg_v" src="<?php echo get_template_directory_uri(); ?>/assets/top/images/hero_bg.mp4" autoplay loop muted playsinlin></video>
    </div>

    <main class="main">
      <section class="top-News_block">
        <div class="top-News_container container">
          <div class="top-News_heading">
            <h2 class="top-News_title st-Sec_title">NEWS</h2>
          </div>
          <div class="top-News_contents_area">
            <?php
              $args = array(
                post_type => 'news-article',
                post_per_page => 3,
              );
              $news_post = new WP_Query( $args );
              while ($news_post->have_posts()):
                $news_post->the_post();
            ?>
            <div class="top-News_content st-News_list">
              <div class="top-News_content_list st-News_item">
                <time class="top-News_time"><?php the_time("Y/m/d"); ?></time>
                <div class="top-News_label"><?php the_category('name'); ?></div>
              </div>
              <a href="<?php the_permalink(); ?>"><div class="top-News_text"><?php the_title(); ?></div></a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- ループ処理 -->
          </div>
        </div>
      </section>

      <section class="top-Service_block">
        <div class="top-Service_container container">
          <div class="top-Service_heading">
            <h2 class="top-Service_title st-Sec_title">SERVICE</h2>
          </div>
          <div class="top-Service_area">
            <div class="top-Service_content">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/top/images/service_1.png" alt="">
              <div class="top-Service_name">Webサイト制作</div>
              <p class="top-Service_text">新規サイトの制作はもちろんサイトリニューアルやランディングページの制作も可能です。</p>
            </div>
            <div class="top-Service_content">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/top/images/service_2.png" alt="">
              <div class="top-Service_name">Webサイト運用</div>
              <p class="top-Service_text">サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案をいたします。</p>
            </div>
            <div class="top-Service_content">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/top/images/service_3.png" alt="">
              <div class="top-Service_name">アプリ開発</div>
              <p class="top-Service_text">スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。</p>
            </div>
          </div>
          <div class="top-Service_link_area st-Link_btn">
            <a class="top-Service_link" href="<?php echo home_url(); ?>/service">More</a>
          </div>
        </div>
      </section>

      <section class="top-Works_block">
        <div class="top-Works_container container">
          <div class="top-Works_inner">
            <div class="top-Works_img_area">
              <div class="swiper js-swiper-container">
                <div class="swiper-wrapper">
                  <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/assets/top/images/works_01.png" alt="">
                  <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/assets/top/images/works_02.png" alt="">
                  <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/assets/top/images/works_03.png" alt="">
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>       
            </div>
            <div class="top-Works_text_area">
              <div class="top-Works_heading">
                <h2 class="top-Works_title st-Sec_title">WORKS</h2>
              </div>
              <p class="top-Works_text">様々なジャンルのWebサイト制作が可能です。<br>ご購入やお申込み数の増加などを実現します!</p>
              <div class="top-Works_link_area st-Link_btn">
                <a class="top-Works_link" href="<?php echo home_url(); ?>/works">More</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="top-Company_block">
        <div class="top-Company_container container">
          <div class="top-Company_heading">
            <h2 class="top-Company_title st-Sec_title">COMPANY</h2>
          </div>
          <div class="top-Company_message">
            <span class="top-Company_message_text">サイトのゴール =<br class="sp-Line"> 夢を叶えること</span>
          </div>
          <div class="top-Company_text_area">
            <p class="top-Company_text">お客様の夢を叶えること。<br>
              それがWebサイトのゴールであり、<br class="sp-Line">私たちが目指すことです。<br>
              だからこそちゃんと成果を出すサイトを<br class="sp-Line">全力でお作りします。<br>
              お客様の笑顔を見たい。<br>
              夢を実現する手助けをさせてください。
            </p>
          </div>
          <div class="top-Company_link_area st-Link_btn">
            <a class="top-Company_link" href="<?php echo home_url(); ?>/company">More</a>
          </div>
        </div>
      </section>

      <section class="top-Contact_block st-Contact_block">
        <div class="top-Contact_container st-Contact_container container">
          <div class="top-Contact_heading st-Contact_heading">
            <h2 class="top-Contact_title st-Contact_title st-Sec_title">CONTACT</h2>
            <p class="top-Contact_text st-Contact_text">Webサイトの制作のご依頼やお見積りなど、<br class="sp-Line">お気軽にご相談ください。</p>
          </div>
          <div class="top-Contact_link_area st-Link_btn">
            <a class="top-Contact_link" href="<?php echo home_url(); ?>/contact">More</a>
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>