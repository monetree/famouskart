<?php
function format_str($pstr)
{
	$rstr=addslashes(strip_tags(trim($pstr)));
	return $rstr;
}

?>