<?php get_header() ?>
<main>
    <?php while (have_posts()):
        the_post() ?>
        <?php the_content() ?>
    <?php endwhile ?>

    <?php

    // Check if it's a category page
    
    if (is_product_category()) {

        // Get current category
    
        $current_category = get_queried_object();

        // Get products count in the current category
    
        $product_count = $current_category->count;

        // Check if the category is empty
    
        if ($product_count == 0) {

            echo "<h1 class='category-title'>$current_category->name</h1>";

            // Get and display the category description
            $category_description = category_description($current_category->term_id);
            if ($category_description) {
                echo "<div class='category-description'>{$category_description}</div>";
            }


            echo "<div class='empty-cat-box'><p class='empty-category'>Der er endnu ingen produkter i denne kategori.</p></div>";

        }
    }

    ?>

</main>
<?php get_footer() ?>