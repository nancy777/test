		<!-- Sidebar -->
		<div id="sidebar">
		
			<div class="sidebar-box-blank">
				<form id="sidebar-search" method="get" action="<?php echo get_option('home'); ?>">
					<input type="text" name="s" id="s" class="search-input" size="15" value="Поиск...." />
					<input type="submit" value="" class="search-button" />
					<div class="clear"></div>
				</form>
			</div>
		
			
		
			<div class="sidebar-box"><div class="sidebar-box-top"></div><div class="sidebar-box-in">
				<h3>Страницы</h3>
				<ul>
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</div><div class="sidebar-box-bottom"></div></div>
			
			<div class="sidebar-box"><div class="sidebar-box-top"></div><div class="sidebar-box-in">
				<h3>Категории</h3>
				<ul>
					<?php wp_list_categories('title_li='); ?>
				</ul>
			</div><div class="sidebar-box-bottom"></div></div>
			
			<div class="sidebar-box"><div class="sidebar-box-top"></div><div class="sidebar-box-in">
				<h3>Архив</h3>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</div><div class="sidebar-box-bottom"></div></div>
			
						
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
			
			<?php endif; ?>

			<div class="sidebar-box"><div class="sidebar-box-top"></div><div class="sidebar-box-in">
				<h3>Управление</h3>
				<ul>
					<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
					<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
					<li><? echo(base64_decode("PGEgaHJlZj0iaHR0cDovL3dwdGhlbWVzLnJ1IiB0aXRsZT0i0KLQtdC80Ysg0LTQu9GPIHdvcmRwcmVzcyIgdGFyZ2V0PSJfYmxhbmsiPtCi0LXQvNGLINC00LvRjyB3b3JkcHJlc3M8L2E+"));?></li>
					<li><? echo(base64_decode("PGEgaHJlZj0iaHR0cDovL3dwd29ybGQucnUiIHRpdGxlPSLQnNC40YAgd29yZHByZXNzIiB0YXJnZXQ9Il9ibGFuayI+0JzQuNGAIHdvcmRwcmVzczwvYT4="));?></li>
					<?php wp_meta(); ?>
				</ul>
			</div><div class="sidebar-box-bottom"></div></div><div class="sidebar-box-blank">
				<img src="<?php bloginfo('template_directory'); ?>/images/banner.gif" alt="Banner" width="200" height="200" />
			</div>
		
		</div>
		<!-- Sidebar -->