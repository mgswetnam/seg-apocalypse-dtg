<?php

/**
 * Helper class for Beaver Builder child theme
 * Use this file for any custom coding needed
 * @class SEG_Theme_Custom
 */

final class SEG_Theme_Custom {

  private $version;
  public static $_instance;

  static function init(){
    if ( !self::$_instance ) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }

  public function __construct() {
    // Actions
    /*add_action( "pre_get_posts", array( $this, "seg_blog_order" ) );*/
    // Filters

    // Shortcodes
    /*add_shortcode( "category_posts", array( $this, "seg_fetch_category_posts" ) );*/
  }

  public function theme_upgrade(){
    // Update version option
		update_option( 'seg_theme_version', SEG_VERSION, true );
		// Since v1.0.0
  }

  /*public function seg_fetch_category_posts( $atts ){
    $a = shortcode_atts( array(
      "id" => "",
      "orderby" => "",
      "order" => "",
      "moreid" => "",
      "moretext" => "",
      "limit" => -1
    ), $atts );
    $id = ( ( array_key_exists( "id", $a ) && $a[ "id" ] != "" )? explode( ',', $a[ "id" ] ) : array() );
    $orderby = ( ( array_key_exists( "orderby", $a ) && $a[ "orderby" ] != "" )? $a[ "orderby" ] : "title" );
    $order = ( ( array_key_exists( "order", $a ) && $a[ "order" ] != "" )? $a[ "order" ] : "DESC" );
    $moreid = ( ( array_key_exists( "moreid", $a ) && $a[ "moreid" ] != "" )? $a[ "moreid" ] : NULL );
    $limit = ( ( array_key_exists( "limit", $a ) && $a[ "limit" ] != "" )? intval( $a[ "limit" ] ) : -1 );

    ob_start();
    if( $id ){
      $args = array(
    		'post_type' => 'post',
        'post_status' => 'publish',
        'category__in' => $id,
        'orderby' => $orderby,
        'order' => $order,
        'posts_per_page' => $limit
    	);
      $catposts_raw = new WP_Query( $args );
    	$catposts = $catposts_raw->posts;
      ?>
      <div class="seg-cat-list">
      <?php
      foreach( $catposts as $catpost ){
        ?>
        <div class="seg-cat-item" <?php echo ( ( is_front_page() == false )? "style=\"background: url('".get_the_post_thumbnail_url( $catpost->ID, 'medium' )."') center center no-repeat; background-size:cover;\"" : "" )?>>
          <?php echo ( ( is_front_page() == false )? "<div class='ci-overlay'></div>" :  "" ); ?>
          <div class="ci-content">
            <div class="cic-image">
              <?php
              $featured = get_the_post_thumbnail( $catpost->ID, "thumbnail" );
              echo sprintf( '<div class="ci-featured-image">%s</div>', $featured );
              ?>
            </div>
            <div class="cic-text">
              <a href="<?=get_permalink( $catpost->ID )?> "><h3 class="cict-title"><?=$catpost->post_title?></h3></a>
              <?php
              $summary = get_the_excerpt( $catpost->ID );
              echo sprintf( '<div class="cict-summary">%s</div>', $summary );
              ?>
              <div class="cict-more">
                <a href="<?=get_permalink( $catpost->ID )?> "><span class="cict-more-text">Read More</span></a>
              </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <?php
      }
      if( $moreid ){
        $morelink = get_category_link( $moreid );
        echo sprintf( '<div class="ci-more"><a href="%s">%s</a></div>', $morelink, $moretext );
      }
      ?>
      </div>
      <?php
    } else {
      ?>
      No posts could be found.
      <?php
    }
    $buffer =  ob_get_clean();
    return $buffer;
  }*/

  /*public function seg_blog_order( $query ) {
    if (is_category() || is_archive()) {
      $query->set( 'orderby', 'post_date' );
      $query->set( 'order', 'DESC' );
      return $query;
    }
  }*/
}
