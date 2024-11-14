<?php get_header(); ?>

<main class="single-business-listing wrapper">
    <!-- Post Title -->
    <h1 class="business-title"><?php the_title(); ?></h1>
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="row bg_pink">
                    <!-- Post Thumbnail -->
                    <?php if (has_post_thumbnail()): ?>
                        <div class="business-thumbnail col-md-8 pl
                        -md-0">
                            <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto;')); ?>
                        </div>
                    <?php endif; ?>
                    <!-- Taxonomy Terms -->
                    <div class="business-taxonomies col-md-4">
                        <!-- Province -->
                        <?php
                        $provinces = get_the_terms(get_the_ID(), 'province');
                        if ($provinces && !is_wp_error($provinces)):
                            echo '<h3>Province:</h3><ul>';
                            foreach ($provinces as $province) {
                                echo '<li>' . esc_html($province->name) . '</li>';
                            }
                            echo '</ul>';
                        endif;
                        ?>

                        <!-- Business Type -->
                        <?php
                        $business_types = get_the_terms(get_the_ID(), 'business_type');
                        if ($business_types && !is_wp_error($business_types)):
                            echo '<h3>Business Type:</h3><ul>';
                            foreach ($business_types as $business_type) {
                                echo '<li>' . esc_html($business_type->name) . '</li>';
                            }
                            echo '</ul>';
                        endif;
                        ?>

                        <!-- Industries -->
                        <?php
                        $industries = get_the_terms(get_the_ID(), 'industries');
                        if ($industries && !is_wp_error($industries)):
                            echo '<h3>Industries:</h3><ul>';
                            foreach ($industries as $industry) {
                                echo '<li>' . esc_html($industry->name) . '</li>';
                            }
                            echo '</ul>';
                        endif;
                        ?>

                    </div>
                </div>
                <!-- Post Content -->
                <div class="business-content">
                    <h3>Description:</h3>
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile; else: ?>
        <p>No listing found.</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>