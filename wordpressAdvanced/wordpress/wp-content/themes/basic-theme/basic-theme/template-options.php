<?php

/* Template Name: Options */ 

$colours = get_field('choose_your_colour');

$flavours = get_field('choose_a_flavour');

$consent = get_field('do_you_consent');

$where = get_field('where_do_you_want_to_go');

$question = get_field('are_you_learning_anything');

 get_header();?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>

                <?php if($question): ?>
                    Yes, I am learning
                <?php else: ?>
                    No I'm not learning.
                <?php endif; ?>
    </div>
</section>

<?php get_footer();?>