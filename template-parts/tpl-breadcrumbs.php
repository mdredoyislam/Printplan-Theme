
<section id="breadcrumb-section" class="breadcrumb pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-wrapper">
                    <?php
                        if(is_category()){
                            ?><h3 class="section-title mb-20 text-light">Category Name : <?php the_category('name'); ?></h3><?php
                        }elseif (is_archive()){
                            ?><h3 class="section-title mb-20 text-light"><?php the_archive_title(); ?></h3><?php 
                        }
                        if (is_single() || is_page()) {
                            the_title('<h3 class="section-title mb-20 text-light">','</h3>');
                        }
                        if (is_search()) {
                            ?><h3 class="section-title mb-20 text-light"><?php echo 'Search for &quot;'.wp_specialchars($s).'&quot;'; ?></h3><?php
                        }
                        the_breadcrumb(); 
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>