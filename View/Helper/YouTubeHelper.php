<?php

	App::uses('AppHelper', 'View/Helper');

	class YouTubeHelper extends AppHelper {

		private function __getVideoID($url) {
			$temp = parse_url($url);
			parse_str($temp['query'], $param);
			return $param['v'];
		}

		public function getEmbed($url, $width=560, $height=315) { 

			$video = $this->__getVideoID($url);
			
			if ($video)
				return '<iframe width="'.$width.'" height="'.$height.'" src="//www.youtube.com/embed/'.$video.'" frameborder="0" allowfullscreen></iframe>';
			else 
				return '';
		}

		public function getThumb($url, $opt=2, $size="small") {

			$video = $this->__getVideoID($url);

			if ($video) {
				if (!strcmp($size, 'small')) {
					if ($opt > 0 && $opt < 4)
						return 'http://img.youtube.com/vi/'.$video.'/'.$opt.'.jpg';
				} 
				return 'http://img.youtube.com/vi/'.$video.'/0.jpg';
			}

		}
	}