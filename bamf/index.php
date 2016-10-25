<?php 
/**
 * index.php
 */

// site header
get_header();

 ?>

<div class="site-main" id="main">
    <div class="container">
        <div class="content-area col-sm-8" id="primary">
            <div class="site-content" id="content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nemo esse quo, nobis repellat enim officiis aliquid praesentium cumque eius, recusandae ipsa rem officia, tempora, repellendus nam dicta in doloribus!
            </div>
            <!-- #content .site-content -->
        </div>
        <!-- #primary .content-area -->
        
        <?php 
            get_sidebar(); 
        ?>
    </div>
    <!-- .container -->
</div>
<!-- #main .site-main -->

<?php 
// site footer
get_footer(); 