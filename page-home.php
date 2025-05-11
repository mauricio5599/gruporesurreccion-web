<? get_header(); ?>
<main id="main" class="site-main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1 class="ttiel_content"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
		<div class="col-md-4">
			<? the_post_thumbnail(); ?>	
		</div>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
		<h2>No encontrado</h2>
		<p>Lo sentimos, intente utilizar nuestro formulario de b&uacute;squedas.</p>
	<?php endif; ?>
    </main>

<? get_footer(); ?>