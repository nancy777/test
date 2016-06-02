<?php get_header(); ?>
<?php get_sidebar(); ?>
		
		<!-- Content -->
		<div id="content">
		
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<!-- Post -->
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-title">
					<div class="post-date">
						<span><?php the_time('d') ?></span>
						<?php the_time('M') ?>
					</div>
					<h2><?php the_title(); ?></h2>
					Автор: <span class="author"><?php the_author() ?></span> &nbsp;&nbsp;&nbsp; Категория: <?php the_category(', ') ?>
				</div>
				<div class="post-entry">
					<?php the_content('Читать далее...'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php the_tags('<p>Метки: ', ', ', '</p>'); ?>
					<?php edit_post_link('Изменить.','',''); ?>
					<?php comments_template(); ?>
				</div>
				<div class="clear"></div>
			</div>
			<!-- /Post -->
			<?php endwhile; ?>
			<?php else : ?>
			<!-- Post -->
			<div class="post">
				<div class="post-title">
					<h2>Не найдено</h2>
				</div>
				<div class="post-entry">
					<p>Извините, то что вы ищите, здесь не найдено.</p>
				</div>
				<div class="clear"></div>
			</div>
			<!-- /Post -->
			<?php endif; ?>
			
			<div class="clear"></div>
		
		</div>
		<!-- /Content -->
		
<?php get_footer(); ?>