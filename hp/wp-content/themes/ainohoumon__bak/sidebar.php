		<!-- 左 カラム -->
		<div id="sidebar">

			<h3>最新のお知らせ一覧</h3>
			<ul class="sidemenu">
				<?php
				$my_query = new WP_Query('showposts=15');
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>


			<h3>Google</h3>
			<ul class="sidemenu">
				<script type="text/javascript"><!--
				google_ad_client = "ca-pub-1286788921854565";
				/* black */
				google_ad_slot = "9170864836";
				google_ad_width = 200;
				google_ad_height = 200;
				//-->
				</script>
				<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
			</ul>





            
			<!--
			<?php if(is_home()): ?><?php else: ?>
			-->			

			<h3>過去のお知らせ一覧</h3>
			<ul class="sidemenu">
				<?php get_archives('monthly',36); ?>
			</ul>
			
			<!--
			<?php endif; ?>
			-->			
		
			<?php if(is_home()): ?><?php else: ?><p><img src="<?php bloginfo('template_directory');?>/images/banner_tel.png" width="265" height="142" alt="banner" /></p><?php endif; ?>

		</div>
		<!-- /  左 カラム  -->