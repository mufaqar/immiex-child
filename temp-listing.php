<?php get_header(); /* Template Name: Business Listing */ ?>

<main class="wrapper business_Wrapper">

    <?php
    // Handle form submission and filter query
    $province = isset($_GET['province']) ? sanitize_text_field($_GET['province']) : '';
    $business_type = isset($_GET['business_type']) ? sanitize_text_field($_GET['business_type']) : '';
    $industries = isset($_GET['industries']) ? sanitize_text_field($_GET['industries']) : '';

    // Determine if any filters are active
    $is_filtered = $province || $business_type || $industries;

    // Base Query Arguments
    $args = array(
        'post_type' => 'business-listings',
        'posts_per_page' => -1,
    );

    // Add tax_query only if filters are set
    if ($is_filtered) {
        $args['tax_query'] = array('relation' => 'AND');

        if ($province) {
            $args['tax_query'][] = array(
                'taxonomy' => 'province',
                'field' => 'slug',
                'terms' => $province,
            );
        }

        if ($business_type) {
            $args['tax_query'][] = array(
                'taxonomy' => 'business_type',
                'field' => 'slug',
                'terms' => $business_type,
            );
        }

        if ($industries) {
            $args['tax_query'][] = array(
                'taxonomy' => 'industries',
                'field' => 'slug',
                'terms' => $industries,
            );
        }
    }

    $business_query = new WP_Query($args);
    ?>

    <!-- Filter Form -->
    <div class="business_form">
        <form method="GET" action="" class="row ">
            <div class="col-lg-3">
                <label for="province">Province:</label>
                <select name="province" id="province">
                    <option value="">Select Province</option>
                    <?php
                    $provinces = get_terms(array('taxonomy' => 'province', 'hide_empty' => false));
                    foreach ($provinces as $province_term) {
                        echo '<option value="' . esc_attr($province_term->slug) . '"' . selected($province, $province_term->slug, false) . '>' . esc_html($province_term->name) . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-lg-3">
                <label for="business_type">Business Type:</label>
                <select name="business_type" id="business_type">
                    <option value="">Select Business Type</option>
                    <?php
                    $business_types = get_terms(array('taxonomy' => 'business_type', 'hide_empty' => false));
                    foreach ($business_types as $type_term) {
                        echo '<option value="' . esc_attr($type_term->slug) . '"' . selected($business_type, $type_term->slug, false) . '>' . esc_html($type_term->name) . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-lg-3">
                <label for="industries">Industries:</label>
                <select name="industries" id="industries">
                    <option value="">Select Industry</option>
                    <?php
                    $industries_terms = get_terms(array('taxonomy' => 'industries', 'hide_empty' => false));
                    foreach ($industries_terms as $industry_term) {
                        echo '<option value="' . esc_attr($industry_term->slug) . '"' . selected($industries, $industry_term->slug, false) . '>' . esc_html($industry_term->name) . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-lg-3">
                <button type="submit" class="btn btn-primary vc_btn3 w-100">Search</button>
            </div>
        </form>
    </div>

    <!-- Display Results -->
    <div class="business-listing-grid">
        <?php
        // Check if there are posts
        if ($business_query->have_posts()):
            while ($business_query->have_posts()):
                $business_query->the_post(); ?>
                <div class="business-item"
                    style="flex: 1 1 calc(33.333% - 20px); box-sizing: border-box; border: 1px solid #ddd; padding: 15px; text-align: center;">

                    <?php if (has_post_thumbnail()): ?>
                        <div class="business-thumbnail" style="margin-bottom: 10px;">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: auto;')); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <h2 class="business-title" style="font-size: 1.25em; margin-top: 0;">
                        <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #333;">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                </div>
            <?php endwhile;
        else: ?>
            <p>No businesses found for the selected criteria.</p>
        <?php endif; ?>
    </div>

    <?php wp_reset_postdata(); ?>
    </div>
    <?php get_footer(); ?>