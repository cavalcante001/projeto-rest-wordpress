<?php
// Template Name: Sobre
?>
<?php get_header() ?>
<section class="container sobre">
	<h2 class="subtitulo"><?php the_title() ?></h2>

	<div class="grid-8">
		<img src="<?php the_field('foto_rest') ?>" alt="<?php the_field('foto_rest_descricao') ?>">
	</div>

	<?php if (have_rows('conteudo_sobre')) : while (have_rows('conteudo_sobre')) : the_row(); ?>
			<div class="grid-8">
				<h2><?php the_sub_field('titulo_sobre') ?></h2>
				<?php the_sub_field('texto_sobre') ?>

			</div>
	<?php endwhile;
	else : endif ?>

</section>
<?php get_footer(); ?>