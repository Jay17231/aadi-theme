<?php

/**
 * Template Name: Pharmaceuticals Product Page
 */

get_header();

?>
<div class="pharma-nutra">
  <div class="container">
    <div id="primary">
      <div id="content" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="spacer"></div>
        <h1>Pharmaceutical Products</h1>
        <div class="mini-spacer">

        </div>
        <ul class="list-inline">
          <li><a href="#api" class="btn btn-profile-nav btn-pinsta active">API</a></li>
          <li><a href="#intermediates" class="btn btn-profile-nav btn-pyoutube">Intermediates</a></li>
          <li><a href="#excipients" class="btn btn-profile-nav btn-ppinterest">Excipients</a></li>
        </ul>
        <div class="mini-spacer"></div>
        <div class="api" id=""><!-- API Starts -->
          <h2>Active Pharmaceutical Ingredients</h2>
          <div class="card card-body">
            <?php the_field('api_description'); ?>
          </div>
          <div class="mini-spacer"></div>
          <?php
            // check if the repeater field has rows of data
            if( have_rows('api_products') ):
             	// loop through the rows of data
              $procount=0;
                while ( have_rows('api_products') ) : the_row();
                $procount++;
                ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 mb-10 prod-det">
                      <a class="product-accordion" data-toggle="collapse" data-target="#product-details<?php echo $procount; ?>" aria-expanded="false" aria-controls="product-details">
                        <h3 class="product-names padd-20"><?php the_sub_field('api_product_name'); ?><i class="fa fa-caret-down pull-right"></i></h3>
                      </a>
                      <div class="product-det collapse" id="product-details<?php echo $procount; ?>">
                        <div class="mb-20">
                        </div>
                        <div class="row no-gutters"><!-- description and uses -->
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12  no-padding pull-left">
                            <div class="panel-heading">Description</div>
                            <div class="panel-body"><?php the_sub_field('api_product_description'); ?></div>
                          </div>
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12 no-padding pull-right">
                            <div class="panel-heading">Uses</div>
                            <div class="panel-body"><?php the_sub_field('api_product_uses'); ?></div>
                          </div>
                        </div><!--end description and uses -->
                        <div class="panel panel-default specifications"><!-- Technical Details Table-->
                          <div class="panel-heading">
                            Technical Details
                          </div>
                          <table class="table">
                            <tr>
                              <th>Property</th>
                              <th>Details</th>
                            </tr>
                            <?php
                            // check if the repeater field has rows of data
                            if( have_rows('api_product_technical') ):
                                while ( have_rows('api_product_technical') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('api_product_tech_property'); ?></th>
                                      <th><?php the_sub_field('api_product_tech_details'); ?></th>
                                    </tr>
                            <?php
                                endwhile;
                            else :
                            endif;
                            ?>
                          </table>
                        </div><!--End tech Table-->

                        <div class="panel panel-default specifications"><!-- Specifications Table-->
                          <div class="panel-heading">
                            Specifications
                          </div>
                          <table class="table">
                            <tr>
                              <th>Property</th>
                              <th>Details</th>
                            </tr>
                            <?php
                            // check if the repeater field has rows of data
                            if( have_rows('api_product_specification') ):
                                while ( have_rows('api_product_specification') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('api_product_specification_property'); ?></th>
                                      <th><?php the_sub_field('api_product_specification_details'); ?></th>
                                    </tr>
                            <?php
                                endwhile;
                            else :
                            endif;
                            ?>
                          </table>
                        </div><!--End Specifications Table-->
                      </div>
                    </div>
              <?php  endwhile;
            else :
            endif;
            ?>
        </div><!--End active pharmaceuticals Ingredients-->
        <!-- Intermediates Starts -->
        <div class="intermediates" id="">
          <h2>Intermediates</h2>
          <div class="card card-body">
            <?php the_field('intermediate_description'); ?>
          </div>
          <div class="mini-spacer"></div>
          <?php
            // check if the repeater field has rows of data
            if( have_rows('intermediate_products') ):
              // loop through the rows of data
              $procount1=0;
                while ( have_rows('intermediate_products') ) : the_row();
                $procount1++;
                ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 mb-10 prod-det">
                      <a class="product-accordion" data-toggle="collapse" data-target="#product-details-intermediates<?php echo $procount1; ?>" aria-expanded="false" aria-controls="product-details">
                        <h3 class="product-names padd-20"><?php the_sub_field('intermediate_product_name'); ?><i class="fa fa-caret-down pull-right"></i></h3>
                      </a>
                      <div class="product-det collapse" id="product-details-intermediates<?php echo $procount1; ?>">
                        <div class="mb-20">
                        </div>
                        <div class="row no-gutters"><!-- description and uses -->
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12  no-padding pull-left">
                            <div class="panel-heading">Description</div>
                            <div class="panel-body"><?php the_sub_field('intermediate_product_description'); ?></div>
                          </div>
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12 no-padding pull-right">
                            <div class="panel-heading">Uses</div>
                            <div class="panel-body"><?php the_sub_field('intermediate_product_uses'); ?></div>
                          </div>
                        </div><!--end description and uses -->
                        <div class="panel panel-default specifications"><!-- Technical Details Table-->
                          <div class="panel-heading">
                            Technical Details
                          </div>
                          <table class="table">
                            <tr>
                              <th>Property</th>
                              <th>Details</th>
                            </tr>
                            <?php
                            // check if the repeater field has rows of data
                            if( have_rows('intermediate_product_technical') ):
                                while ( have_rows('intermediate_product_technical') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('intermediate_product_tech_property'); ?></th>
                                      <th><?php the_sub_field('intermediate_product_tech_details'); ?></th>
                                    </tr>
                            <?php
                                endwhile;
                            else :
                            endif;
                            ?>
                          </table>
                        </div><!--End tech Table-->

                        <div class="panel panel-default specifications"><!-- Specifications Table-->
                          <div class="panel-heading">
                            Specifications
                          </div>
                          <table class="table">
                            <tr>
                              <th>Property</th>
                              <th>Details</th>
                            </tr>
                            <?php
                            // check if the repeater field has rows of data
                            if( have_rows('intermediate_product_specification') ):
                                while ( have_rows('intermediate_product_specification') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('intermediate_product_specification_property'); ?></th>
                                      <th><?php the_sub_field('intermediate_product_specification_details'); ?></th>
                                    </tr>
                            <?php
                                endwhile;
                            else :
                            endif;
                            ?>
                          </table>
                        </div><!--End Specifications Table-->
                      </div>
                    </div>
              <?php  endwhile;
            else :
            endif;
            ?>
        </div><!-- intermediates -->
        <div class="excipients" id="">
          <h2>Excipients</h2>
          <div class="card card-body">
            <?php the_field('excipients_description'); ?>
          </div>
          <div class="mini-spacer"></div>
          <?php
            // check if the repeater field has rows of data
            if( have_rows('excipients_products') ):
              // loop through the rows of data
              $procount2=0;
                while ( have_rows('excipients_products') ) : the_row();
                $procount2++;
                ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 mb-10 prod-det">
                      <a class="product-accordion" data-toggle="collapse" data-target="#product-details-excipients<?php echo $procount2; ?>" aria-expanded="false" aria-controls="product-details">
                        <h3 class="product-names padd-20"><?php the_sub_field('excipients_product_name'); ?><i class="fa fa-caret-down pull-right"></i></h3>
                      </a>
                      <div class="product-det collapse" id="product-details-excipients<?php echo $procount2; ?>">
                        <div class="mb-20">
                        </div>
                        <div class="row no-gutters"><!-- description and uses -->
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12  no-padding pull-left">
                            <div class="panel-heading">Description</div>
                            <div class="panel-body"><?php the_sub_field('excipients_product_description'); ?></div>
                          </div>
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12 no-padding pull-right">
                            <div class="panel-heading">Uses</div>
                            <div class="panel-body"><?php the_sub_field('excipients_product_uses'); ?></div>
                          </div>
                        </div><!--end description and uses -->
                        <div class="panel panel-default specifications"><!-- Technical Details Table-->
                          <div class="panel-heading">
                            Technical Details
                          </div>
                          <table class="table">
                            <tr>
                              <th>Property</th>
                              <th>Details</th>
                            </tr>
                            <?php
                            // check if the repeater field has rows of data
                            if( have_rows('excipients_product_technical') ):
                                while ( have_rows('excipients_product_technical') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('excipients_product_tech_property'); ?></th>
                                      <th><?php the_sub_field('excipients_product_tech_details'); ?></th>
                                    </tr>
                            <?php
                                endwhile;
                            else :
                            endif;
                            ?>
                          </table>
                        </div><!--End tech Table-->

                        <div class="panel panel-default specifications"><!-- Specifications Table-->
                          <div class="panel-heading">
                            Specifications
                          </div>
                          <table class="table">
                            <tr>
                              <th>Property</th>
                              <th>Details</th>
                            </tr>
                            <?php
                            // check if the repeater field has rows of data
                            if( have_rows('excipients_product_specification') ):
                                while ( have_rows('excipients_product_specification') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('excipients_product_specification_property'); ?></th>
                                      <th><?php the_sub_field('excipients_product_specification_details'); ?></th>
                                    </tr>
                            <?php
                                endwhile;
                            else :
                            endif;
                            ?>
                          </table>
                        </div><!--End Specifications Table-->
                      </div>
                    </div>
              <?php  endwhile;
            else :
            endif;
            ?>
        </div><!--excipients-->
        <?php endwhile; // end of the loop. ?>
      </div><!-- #content -->
    </div><!-- #primary -->

  </div>
</div>
<script>
$(".api").show("slow");
$(".intermediates").hide("slow");
$(".excipients").hide("slow");


$(".btn-pinsta").click(function () {
$(".btn-pyoutube, .btn-ppinterest").removeClass('active');
$(".btn-pinsta").addClass('active');
$(".api").show("slow");

$(".profile-blog-content").hide("slow");
$(".intermediates").hide("slow");
$(".excipients").hide("slow");
});

$(".btn-pyoutube").click(function () {
  $(".btn-pinsta, .btn-ppinterest").removeClass('active');
  $(".btn-pyoutube").addClass('active');
$(".intermediates").show("slow");

$(".profile-blog-content").hide("slow");
$(".api").hide("slow");
$(".excipients").hide("slow");
});

$(".btn-ppinterest").click(function () {
  $(".btn-pinsta, .btn-pyoutube").removeClass('active');
  $(".btn-ppinterest").addClass('active');
$(".excipients").show("slow");

$(".profile-blog-content").hide("slow");
$(".api").hide("slow");
$(".intermediates").hide("slow");
});

</script>
<?php get_footer(); ?>
