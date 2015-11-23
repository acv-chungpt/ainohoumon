        <!-- 左 カラム -->
        <div id="sidebar">

            <h3>
                <span>
                    <img src="<?php bloginfo('template_directory');?>/images/icon_3.png" />
                </span>
                最新のお知らせ一覧
            </h3>
            <ul class="sidemenu">
                <?php
                $my_query = new WP_Query('showposts=5');
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>

            <ul class="sidemenu banner_link">
                <li><a href="http://ainohoumon.com/voice.php"><img src="<?php bloginfo('template_directory');?>/images/bn_blog.png" /></a></li>
                <li><a href="http://ainohoumon.com/2012paper.php"><img src="<?php bloginfo('template_directory');?>/images/media.png" /></a></li>
                <li><a href="http://ainohoumon.com/arearyokin.php"><img src="<?php bloginfo('template_directory');?>/images/area.png" /></a></li>
                <li><a href="http://ainohoumon.com/incho.php"><img src="<?php bloginfo('template_directory');?>/images/inchobtn.png" /></a></li>
                <li><a href="http://ainohoumon.com/soudan.php"><img src="<?php bloginfo('template_directory');?>/images/menutel.png" /></a></li>
            </ul>

            <h3>
                <span>
                    <img src="<?php bloginfo('template_directory');?>/images/icon_3.png" />
                </span>
                リンク・加盟団体
            </h3>
            <ul class="sidemenu" id="linked">
                <?php
                $link1 = [
                    'http://ainohoumon.com/hp/' => '
                    株式会社あいの訪問
                    <br>マッサージサービス
                    ','http://www.j-massage.org' => '
                    日本マッサージ師支援協会
                    ','http://miyabimassage.com/' => '
                    松島訪問マッサージ
                    ','http://arenakaigo.com/' => '
                    ケア・パレス平野苑
                    ','http://carepalace.com/' => '
                    ケア・パレス加美苑
                    ','http://www.daishinkyo.gr.jp/' => '
                    大阪鍼灸マッサージ
                    <br>協同組合
                    ','http://www.sakura-kikawa.com/wp/' => '
                    桜鍼灸整骨院 木川東
                    ','http://www.tamafuku.com' => '
                    たま福鍼灸整骨院
                    ','http://www.tamafuku.net' => '
                    交通事故治療のたま福
                    ','http://apprhythm.co.jp/' => '
                    ホームページ制作
                    <br>株式会社アプリズム
                    ',
                ];
                foreach ($link1 as $link => $text): ?>
                <li><a href="<?php echo $link; ?>" rel="bookmark"><?php echo $text; ?></a></li>
                <?php endforeach; ?>
            </ul>

            <h3>
                <span>
                    <img src="<?php bloginfo('template_directory');?>/images/icon_3.png" />
                </span>
                提携医療機関
            </h3>
            <ul class="sidemenu" id="linked">
                <?php
                $link2 = [
                    'http://www.shimizu-clinic.in/' => '清水クリニック様',
                    'http://support.myclinic.ne.jp/search/info/105651' => '平山診療所様',
                    'http://nttbj.itp.ne.jp/0678909070/index.html' => '矢野内科様',
                    'http://www.haranomura.jp/' => 'はらのむら外科胃腸科クリニック様',
                    'http://nttbj.itp.ne.jp/0666085678/index.html' => 'やすだ内科クリニック様',
                ];
                foreach ($link2 as $link => $text): ?>
                <li><a href="<?php echo $link; ?>" rel="bookmark"><?php echo $text; ?></a></li>
                <?php endforeach; ?>
            </ul>

            <ul id="nfmenu">
                <li><a href="/hp/gaiyo">会社概要</a></li>
                <li><a href="/hp/houmon">訪問マッサージ事業</a></li>
                <li><a href="/hp/boshu">あん摩マッサージ指圧師募集</a></li>
                <li><a href="/hp/greeting">ご挨拶</a></li>
                <li><a href="/hp/jirei01">改善事例</a></li>
                <li><a href="/hp/kadai">予防運動の講座、健康相談なども大切な課題</a></li>
            </ul>


            <!-- <h3>Google</h3>
            <ul class="sidemenu">
                <script type="text/javascript"><!--
                google_ad_client = "ca-pub-1286788921854565";
                /* black */
                google_ad_slot = "9170864836";
                google_ad_width = 200;
                google_ad_height = 200;
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
            </ul> -->






            <!--
            <?php if (is_home()): ?><?php else: ?>
            -->

            <h3>過去のお知らせ一覧</h3>
            <ul class="sidemenu">
                <?php get_archives('monthly', 36); ?>
            </ul>

            <!--
            <?php endif; ?>
            -->

            <?php if (is_home()): ?><?php else: ?><p><img src="<?php bloginfo('template_directory');?>/images/banner_tel.png" width="265" height="142" alt="banner" /></p><?php endif; ?>

        </div>
        <!-- /  左 カラム  -->
