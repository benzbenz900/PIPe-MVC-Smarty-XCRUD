<?php
function smarty_modifier_getUrlTocode($params)
{
	$params = strip_tags($params);
	$urlembed = false;
	preg_match('/(.*):\/\/(.*)\/(.*)\//', $params, $findomain);
	if(empty($findomain)){
		preg_match('/(.*):\/\/(.*)\/(.*)/', $params, $findomain);
	}
	if($findomain['2'] == 'stream-cdn.com'){
		preg_match('/https:\/\/stream-cdn.com\/(.*).html/', $params, $geturlembed);
		preg_match('/embed/', $geturlembed['1'], $checkurlembed);
		if(isset($checkurlembed['0']) && $checkurlembed['0'] == 'embed'){
			$urlembed = 'https://stream-cdn.com/'.$geturlembed[1].'.html';
		}else{
			$urlembed = 'https://stream-cdn.com/embed-'.$geturlembed[1].'.html';
		}
	}else if($findomain['2'] == 'youtube.com' || $findomain['2'] == 'www.youtube.com' || $findomain['2'] == 'youtu.be'){
		$shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
		$longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

		if (preg_match($longUrlRegex, $params, $matches)) {
			$youtube_id = $matches[count($matches) - 1];
		}

		if (preg_match($shortUrlRegex, $params, $matches)) {
			$youtube_id = $matches[count($matches) - 1];
		}

		$urlembed = 'https://www.youtube.com/embed/' . $youtube_id ;
	}elseif($findomain['2'] == 'oload.live' || $findomain['2'] == 'openload.co' || $findomain['2'] == 'oload.tv' || $findomain['2'] == 'oload.stream'){
		preg_match('/(.*):\/\/(.*)\/(.*)\/(.*)/', $params, $geturlembed);
		$urlembed = 'https://oload.live/embed/'.$geturlembed[4];
	}

	return ($urlembed == false) ? $params : $urlembed;
}