<?php
function getSimpleTime($strtime)
{
	$submitTime = strtotime($strtime);
        $diffTime = time()-$submitTime;
        if($diffTime < 120) {
                $simpleTime = $diffTime."초 전";
        }
        else if($diffTime < 7200) {
                $simpleTime = floor($diffTime/60)."분 전";
        }
        else if($diffTime < 172800) {
                $simpleTime = floor($diffTime/3600)."시간 전";
        }
        else if($diffTime < 51840000) {
                $simpleTime = floor($diffTime/86400)."일 전";
        }
        else if($diffTime < 63072000) {
                $simpleTime = floor($diffTime/2592000)."개월 전";
        }
        else {
                $simpleTime = floor($diffTime/31556952)."년 전";
        }
	return $simpleTime;
}
?>
