<?php 
// Relative Dates
if(!function_exists('how_long_ago')){
        function how_long_ago($timestamp){
            $difference = current_time('timestamp') - $timestamp;
            if($difference >= 60*60*24*365){        // if more than a year ago

                $int = intval($difference / (60*60*24*365));

                $s = ($int > 1) ? 's' : '';

                $r = $int . ' year' . $s . ' ago';

            } elseif($difference >= 60*60*24*7*5){  // if more than five weeks ago

                $int = intval($difference / (60*60*24*30));

                $s = ($int > 1) ? 's' : '';

                $r = $int . ' month' . $s . ' ago';

            } elseif($difference >= 60*60*24*7){        // if more than a week ago

                $int = intval($difference / (60*60*24*7));

                $s = ($int > 1) ? 's' : '';

                $r = $int . ' week' . $s . ' ago';

            } elseif($difference >= 60*60*24){      // if more than a day ago 

                $int = intval($difference / (60*60*24));

                $s = ($int > 1) ? 's' : '';

                $r = $int . ' day' . $s . ' ago';

            } elseif($difference >= 60*60){         // if more than an hour ago

                $int = intval($difference / (60*60));

                $s = ($int > 1) ? 's' : '';

                $r = $int . ' hr' . $s . ' ago';

            } elseif($difference >= 60){            // if more than a minute ago

                $int = intval($difference / (60));

                $s = ($int > 1) ? 's' : '';

                $r = $int . ' minute' . $s . ' ago';

            } else {                                // if less than a minute ago

                $r = 'moments ago';

            }

            return $r; 
        }

    }

	

/* Prints HTML with meta information for current post: categories, tags, permalink, author, and date. */

if ( ! function_exists( 'refreshweb_entry_meta' ) ) :

function refreshweb_entry_meta() {

	// Translators: used between list items, there is a space after the comma.

	$categories_list = get_the_category_list( __( ', ', 'refreshweb' ) );



	// Translators: used between list items, there is a space after the comma.

	$tag_list = get_the_tag_list( '', __( ', ', 'refreshweb' ) );



	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate="%3$s">%4$s</time></a>',

		esc_url( get_permalink() ),

		esc_attr( get_the_time() ),

		esc_attr( get_the_date( 'c' ) ),

		esc_html( how_long_ago(get_the_time('U')) )

	);



	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',

		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),

		esc_attr( sprintf( __( 'View all posts by %s', 'refreshweb' ), get_the_author() ) ),

		get_the_author()

	);



	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.

	if ( $tag_list ) {

		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s %3$s<span class="by-author"> by %4$s</span>.', 'refreshweb' );

	} elseif ( $categories_list ) {

		$utility_text = __( 'This entry was posted in %1$s %3$s<span class="by-author"> by %4$s</span>.', 'refreshweb' );

	} else {

		$utility_text = __( 'This entry was posted %3$s<span class="by-author"> by %4$s</span>.', 'refreshweb' );

	}



	printf(

		$utility_text,

		$categories_list,

		$tag_list,

		$date,

		$author

	);

}

endif;

?>