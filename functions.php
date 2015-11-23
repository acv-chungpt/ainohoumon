<?php
	function browserCheck() {
		$css ='common';
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
			$browser_version=$matched[1];
			$browser = 'ie';
		}
		elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
			$browser_version=$matched[1];
			$browser = 'firefox';
		}
		else {
			// browser not recognized!
			$browser_version = 0;
			$browser= 'other';
		}
		if($browser == 'ie') {
			if($browser_version == '7.0')
				$css .= 'ie7.css';
			elseif($browser_version == '8.0')
				$css .= 'ie8.css';
		}
		elseif($browser == 'firefox' || $browser == 'other')
		{
			$css .= 'ff.css';
		}
	
		return $css;
	}
	
	function browserCheck2() {
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		return $useragent;
	}
?>