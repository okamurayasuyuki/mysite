
<?php get_header(); ?>
    <body>
    <div class="header">
        <div class="row">
            <div class="large-12 small-12 columns">
            <hgroup>
                <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?>'s blog</a></h1>
            </hgroup>
            </div>
        </div>
    </div>
<div class="row">
<div class="large-12 small-12 columns">





<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
    <section class="post">




    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <div class="post-content">
    <?php  /* the_content(); */  ?>
    <?php  the_excerpt();  ?>
</div>
    <div class="post-date right">
    <?php the_date(); ?>
    </div>
    </section>
<?php
endwhile;
?>

</div>








</div><!-- /row-->


<?php
endif;
?>



<?php get_footer() ?>



