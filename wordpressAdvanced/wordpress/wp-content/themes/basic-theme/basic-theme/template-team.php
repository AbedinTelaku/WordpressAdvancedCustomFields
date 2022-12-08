<?php
/*Template Name : Team */
get_header();?>

<section class="page">
    <div class="container">


        <h1><?php the_title(); ?></h1>

        <ul class="list-group">

        </ul>


        <?php if(have_rows('team')): ?>
            <?php while(have_rows('team')): the_row(); ?>
            <li class="list-group-item">
            <?php the_sub_field('name');?>
            </li>
            <?php endwhile ?>
        </ul>
            <?php endif ?>



    </div>
</section>
<?php get_footer(); ?>