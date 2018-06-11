<?php get_header(); ?>

<div class="posts">
    <!-- <div class="post"> -->
        <div class="container">
            <div class="row">
                <?php if( have_posts(  ) ) :  $count = 0; ?>
                    <?php while( have_posts() ) : the_post(  ); ?>

                        <?php if( $count % 4 == 0  ) : ?>
                        <div class="post">
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                            </div>
                            </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>
                                    <strong>
                                        <?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?>
                                    </strong><br/>
                                    <?php the_time( 'F j, Y' ); ?>
                                </p>
                                <?php
                                    echo esc_html( get_the_tag_list( '<ul class="list-unstyled">', '</li><li>', '</li></ul>' ) );
                                ?>
                            </div>
                            <div class="col-md-8">
                                <p>
                                    <?php
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail( 'large', array( 'class' => 'img-fluid', 'alt' => 'Post Title' ) );
                                    } 
                                    ?>
                                </p>
                                <?php the_content(  ); ?>
                            </div>
                        </div>
                        </div>
                        </div>
                        <?php else : ?>
                        <!-- <div class="container">
                            <div class="row"> -->
                            <div class="col-md-4">
                                <div class="post">
                                    <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid', 'alt' => 'Post Title' ) ); ?>

                                    <h2>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>

                                    <p>
                                        <strong>
                                            <?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?>
                                        </strong><br/>
                                        <?php the_time( 'F j, Y' ); ?>
                                    </p>
                                    <?php the_content(  ); ?>
                                
                                </div>

                            <!-- </div>
                            </div> -->
                        </div>
                            
                        <?php endif; ?>

                        <?php $count++; ?>

                    <?php endwhile; ?>
                <?php endif; ?>
            
            </div>
        </div>
    <!-- </div> -->

</div>

<?php get_footer(); ?>