<?php

HTML::macro('nav_link', function($url, $text, $sublinks='') {
    $class = ( Request::is($url) || Request::is($url.'/*') ) ? ' class="active"' : '';
    if (is_array($sublinks)) {
		$submenu = '<ul>';
		foreach ($sublinks as $surl => $name) {
			$submenu .= '<li><a href="'.URL::to($surl).'">'.$name.'</a></li>';
		}
		$submenu .= '</ul>';    
    } else { $submenu = ''; }
    return '<li'.$class.'><a href="'.URL::to($url).'">'.$text.'</a>'.$submenu.'</li>';
});