<?php


if( !function_exists('er_youtube') ){

	function er_youtube($channel=null,$user='evelynregly',$qtd=15){

		if($channel != null){
			$fonte = 'channel_id='.$channel;
		}
		else{
			$fonte = 'user='.$user;
		}

	    include_once( ABSPATH . WPINC . '/feed.php' );
	    $xmlUrl = 'http://www.youtube.com/feeds/videos.xml?'.$fonte;
	    $xml = fetch_feed($xmlUrl);

	    if( is_wp_error( $xml ) ){
	        return "ERRO !";
	    }

	    $maxitems = $xml->get_item_quantity( $qtd );
	    $rss_items = $xml->get_items( 0, $maxitems );

	    $videos = array();
	    foreach ($rss_items as $k => $v) {

	    	$videos[$k] = array();

	        $enclosure = $v->get_enclosure();
	        $img = esc_url( $enclosure->get_thumbnail() );
	        $url = $v->get_permalink();
	        $title = $v->get_title();

	        $i++;
	        parse_str(parse_url($url, PHP_URL_QUERY), $url_query);
	        if(!empty($url_query['v'])){
	            $id = $url_query['v'];

	            $videos[$k]['id'] = $id;
	            $videos[$k]['titulo'] = (isset($title) && !empty($title) ? $title : '');
	            $videos[$k]['thumb'] = 'http://img.youtube.com/vi/' . $id . '/hqdefault.jpg';
	            $videos[$k]['url'] = 'https://www.youtube.com/watch?v='.$id;;
	        }

	        if($i == $qtd){ break; }

	    }

	    return $videos;
	}

}

