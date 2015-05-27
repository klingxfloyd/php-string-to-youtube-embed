<?php

/**
 * Created by Floyd Gregori.
 * URL: https://github.com/klingxfloyd/php-string-to-youtube-embed
 */


function convertYoutube($string) {
	if (!strpos( $string, 'playlist' ) ) {
		$embed = preg_replace(
			"/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
			"<iframe width=\"480\" height=\"360\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
			$string
		);
	}
	else {
		$embed = preg_replace(
			"/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/playlist\?list=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
			"<iframe width=\"480\" height=\"360\" src=\"//www.youtube.com/embed/videoseries?list=$2\" allowfullscreen></iframe>",
			$string
		);
	}

	return $embed;
}
