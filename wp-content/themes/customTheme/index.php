<?php get_header(); ?>


<section class="container-fluid">
    <div class="row">
        <div id="box1" class="col-lg-4 pt-2 pb-2">
            <h2 class="m-2">text</h2>
            <p class="m-2">Here there can be different types of text content</p>
        </div>
        <div id="box2" class="col-lg-4 pt-2 pb-2">
            <h2 class="m-2">text</h2>
            <p class="m-2">Here there can be different types of text content</p>
        </div>
        <div id="box3" class="col-lg-4 pt-2 pb-2">
            <h2 class="m-2">text</h2>
            <p class="m-2">Here there can be different types of text content</p>
        </div>
    </div>
</section>

<div id="postSection" class="container-fluid">

    <div class="row justify-content-center mt-5 m-1">
        
        <!-- Main Loop -->
        <?php 

        if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-12 col-lg-5 p-4 mt-2 mx-2 postCard">
                <div class="row">
                    <div class="col-12">
                    <h2><?php the_title(); ?></h2>
                    </div>
                </div>
                <div class="col-12 contentPart d-flex space-between">
                <p class="">
                    <?php the_content(); ?>
                </p>
                </div>
                
                
            </div>
        <?php endwhile; endif; ?> 
        
    </div>

   

</div>

  
<?php get_footer(); ?>