<?php

/**
 * Template Name: Nutracueticals Product Page
 */

get_header();

?>
<div class="pharma-nutra">
  <div class="container">
    <div id="primary">
      <div id="content" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="spacer"></div>
        <h1>Nutraceutical Products</h1>
        <div class="mini-spacer">

        </div>
        <ul class="list-inline">
          <li><a href="#protein" class="btn btn-profile-nav nutra btn-pinsta active">Protein Products</a></li>
          <li><a href="#strength" class="btn btn-profile-nav nutra btn-pyoutube">Strength & Recovery</a></li>
          <li><a href="#health" class="btn btn-profile-nav nutra btn-ppinterest">Health & Wellness</a></li>
          <li><a href="#additive" class="btn btn-profile-nav nutra btn-additive">Additive</a></li>
        </ul>
        <div class="mini-spacer"></div>
        <div class="protein" id=""><!-- protein Starts -->
          <h2>Protein Products</h2>
          <div class="card card-body">
            <?php the_field('protein_description'); ?>
          </div>
          <div class="mini-spacer"></div>
          <?php
            // check if the repeater field has rows of data
            if( have_rows('protein_products') ):
             	// loop through the rows of data
              $procount=0;
                while ( have_rows('protein_products') ) : the_row();
                $procount++;
                ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 mb-10 prod-det">
                      <a class="product-accordion" data-toggle="collapse" data-target="#product-details<?php echo $procount; ?>" aria-expanded="false" aria-controls="product-details">
                        <h3 class="product-names padd-20"><?php the_sub_field('protein_product_name'); ?><i class="fa fa-caret-down pull-right"></i></h3>
                      </a>
                      <div class="product-det collapse" id="product-details<?php echo $procount; ?>">
                        <div class="mb-20">
                        </div>
                        <div class="row no-gutters"><!-- description and uses -->
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12  no-padding pull-left">
                            <div class="panel-heading">Description</div>
                            <div class="panel-body"><?php the_sub_field('protein_product_description'); ?></div>
                          </div>
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12 no-padding pull-right">
                            <div class="panel-heading">Uses</div>
                            <div class="panel-body"><?php the_sub_field('protein_product_uses'); ?></div>
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
                            if( have_rows('protein_product_technical') ):
                                while ( have_rows('protein_product_technical') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('protein_product_tech_property'); ?></th>
                                      <th><?php the_sub_field('protein_product_tech_details'); ?></th>
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
                            if( have_rows('protein_product_specification') ):
                                while ( have_rows('protein_product_specification') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('protein_product_specification_property'); ?></th>
                                      <th><?php the_sub_field('protein_product_specification_details'); ?></th>
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
        <!-- strength Starts -->
        <div class="strength" id="">
          <h2>strength</h2>
          <div class="card card-body">
            <?php the_field('strength_description'); ?>
          </div>
          <div class="mini-spacer"></div>
          <?php
            // check if the repeater field has rows of data
            if( have_rows('strength_products') ):
              // loop through the rows of data
              $procount1=0;
                while ( have_rows('strength_products') ) : the_row();
                $procount1++;
                ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 mb-10 prod-det">
                      <a class="product-accordion" data-toggle="collapse" data-target="#product-details-strength<?php echo $procount1; ?>" aria-expanded="false" aria-controls="product-details">
                        <h3 class="product-names padd-20"><?php the_sub_field('strength_product_name'); ?><i class="fa fa-caret-down pull-right"></i></h3>
                      </a>
                      <div class="product-det collapse" id="product-details-strength<?php echo $procount1; ?>">
                        <div class="mb-20">
                        </div>
                        <div class="row no-gutters"><!-- description and uses -->
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12  no-padding pull-left">
                            <div class="panel-heading">Description</div>
                            <div class="panel-body"><?php the_sub_field('strength_product_description'); ?></div>
                          </div>
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12 no-padding pull-right">
                            <div class="panel-heading">Uses</div>
                            <div class="panel-body"><?php the_sub_field('strength_product_uses'); ?></div>
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
                            if( have_rows('strength_product_technical') ):
                                while ( have_rows('strength_product_technical') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('strength_product_tech_property'); ?></th>
                                      <th><?php the_sub_field('strength_product_tech_details'); ?></th>
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
                            if( have_rows('strength_product_specification') ):
                                while ( have_rows('strength_product_specification') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('strength_product_specification_property'); ?></th>
                                      <th><?php the_sub_field('strength_product_specification_details'); ?></th>
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
        </div><!-- strength -->
        <div class="health" id="">
          <h2>Health</h2>
          <div class="card card-body">
            <?php the_field('health_description'); ?>
          </div>
          <div class="mini-spacer"></div>
          <?php
            // check if the repeater field has rows of data
            if( have_rows('health_products') ):
              // loop through the rows of data
              $procount2=0;
                while ( have_rows('health_products') ) : the_row();
                $procount2++;
                ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 mb-10 prod-det">
                      <a class="product-accordion" data-toggle="collapse" data-target="#product-details-health<?php echo $procount2; ?>" aria-expanded="false" aria-controls="product-details">
                        <h3 class="product-names padd-20"><?php the_sub_field('health_product_name'); ?><i class="fa fa-caret-down pull-right"></i></h3>
                      </a>
                      <div class="product-det collapse" id="product-details-health<?php echo $procount2; ?>">
                        <div class="mb-20">
                        </div>
                        <div class="row no-gutters"><!-- description and uses -->
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12  no-padding pull-left">
                            <div class="panel-heading">Description</div>
                            <div class="panel-body"><?php the_sub_field('health_product_description'); ?></div>
                          </div>
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12 no-padding pull-right">
                            <div class="panel-heading">Uses</div>
                            <div class="panel-body"><?php the_sub_field('health_product_uses'); ?></div>
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
                            if( have_rows('health_product_technical') ):
                                while ( have_rows('health_product_technical') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('health_product_tech_property'); ?></th>
                                      <th><?php the_sub_field('health_product_tech_details'); ?></th>
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
                            if( have_rows('health_product_specification') ):
                                while ( have_rows('health_product_specification') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('health_product_specification_property'); ?></th>
                                      <th><?php the_sub_field('health_product_specification_details'); ?></th>
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
        </div><!--health-->
        <div class="additive">
          <h2>Additives</h2>
          <div class="card card-body">
            <?php the_field('additive_description'); ?>
          </div>
          <div class="mini-spacer"></div>
          <?php
            // check if the repeater field has rows of data
            if( have_rows('additive_products') ):
              // loop through the rows of data
              $procount2=0;
                while ( have_rows('additive_products') ) : the_row();
                $procount2++;
                ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 mb-10 prod-det">
                      <a class="product-accordion" data-toggle="collapse" data-target="#product-details-additive<?php echo $procount2; ?>" aria-expanded="false" aria-controls="product-details">
                        <h3 class="product-names padd-20"><?php the_sub_field('additive_product_name'); ?><i class="fa fa-caret-down pull-right"></i></h3>
                      </a>
                      <div class="product-det collapse" id="product-details-additive<?php echo $procount2; ?>">
                        <div class="mb-20">
                        </div>
                        <div class="row no-gutters"><!-- description and uses -->
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12  no-padding pull-left">
                            <div class="panel-heading">Description</div>
                            <div class="panel-body"><?php the_sub_field('additive_product_description'); ?></div>
                          </div>
                          <div class="panel panel-default col-md-5 col-sm-12 col-xs-12 no-padding pull-right">
                            <div class="panel-heading">Uses</div>
                            <div class="panel-body"><?php the_sub_field('additive_product_uses'); ?></div>
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
                            if( have_rows('additive_product_technical') ):
                                while ( have_rows('additive_product_technical') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('additive_product_tech_property'); ?></th>
                                      <th><?php the_sub_field('additive_product_tech_details'); ?></th>
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
                            if( have_rows('additive_product_specification') ):
                                while ( have_rows('additive_product_specification') ) : the_row();?>
                                    <tr class="properties">
                                      <th><?php the_sub_field('additive_product_specification_property'); ?></th>
                                      <th><?php the_sub_field('additive_product_specification_details'); ?></th>
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
        </div>
        <?php endwhile; // end of the loop. ?>
      </div><!-- #content -->
    </div><!-- #primary -->

  </div>
</div>
<script>
$(".protein").show("slow");
$(".strength").hide("slow");
$(".health").hide("slow");
$(".additive").hide("slow");


$(".btn-pinsta").click(function () {
$(".btn-pyoutube, .btn-ppinterest").removeClass('active');
$(".btn-pinsta").addClass('active');
$(".protein").show("slow");

$(".additive").hide("slow");
$(".strength").hide("slow");
$(".health").hide("slow");
});

$(".btn-pyoutube").click(function () {
  $(".btn-pinsta, .btn-ppinterest").removeClass('active');
  $(".btn-pyoutube").addClass('active');
$(".strength").show("slow");

$(".additive").hide("slow");
$(".protein").hide("slow");
$(".health").hide("slow");
});

$(".btn-ppinterest").click(function () {
  $(".btn-pinsta, .btn-pyoutube").removeClass('active');
  $(".btn-ppinterest").addClass('active');
$(".health").show("slow");

$(".additive").hide("slow");
$(".protein").hide("slow");
$(".strength").hide("slow");
});

$(".btn-additive").click(function () {
  $(".btn-pinsta, .btn-pyoutube, .btn-ppinterest").removeClass('active');
  $(".btn-additive").addClass('active');
$(".additive").show("slow");

$(".health").hide("slow");
$(".protein").hide("slow");
$(".strength").hide("slow");
});

</script>
<?php get_footer(); ?>
