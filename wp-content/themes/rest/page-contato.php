<?php
// Template Name: Contato
?>
<?php get_header(); ?>
		<section class="container contato">
			<h2 class="subtitulo"><? the_title() ?></h2>

			<div class="grid-16">
				<a href="<?php the_field('link_mapa') ?>" target="_blank"><img src="<?php the_field('imagem_mapa') ?>" alt="<?php the_field('descricao_mapa') ?>"></a>
			</div>

			<?php if (have_rows('conteudo_contato')) : while (have_rows('conteudo_contato')) : the_row(); ?>
					<div class="grid-1-3 contato-item">
						<h2><?php the_sub_field('titulo_dados') ?></h2>
						<?php the_sub_field('informacao_dados') ?>
					</div>
			<?php endwhile;
			else : endif ?>
		</section>

<?php get_footer(); ?>