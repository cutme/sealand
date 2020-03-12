<?php 

	function wpsam_get_post_children( $post ) {

    /**
     * Dla postów domyœlnie ustawiamy aktualnoœci
     */
    if ( is_single( $post ) ){
    
     $post = get_post ( get_option( 'page_for_posts' ) );
      
    }



   if (!isset($post->ID)){
    return null;
   }
  

		$args = array(
			'post_parent'       => $post->ID,
			'post_type'         => 'page',
			'post_status'       => 'publish',
		);
 

    $children = get_children( $args );

		if ( ! $children && $post->post_parent!=0 ){
			$args['post_parent'] = $post->post_parent;
			$children = get_children( $args );
		}

		return $children;
	}


  function wpsam_get_single_post_content(){
  
    $_post = get_queried_object();
        
    if ( !isset($_post->post_content) ) {
      return;
    }
    
    $content = apply_filters( 'the_content', $_post->post_content);
		
		return $content;
  
  }
  
  
  function searchfilter($query) {
 
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post'));
    }
    
    return $query;
    }
    
   add_filter('pre_get_posts','searchfilter');



