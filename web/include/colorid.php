<?php
function getTier($rank)
{
	if($rank > 30) 
		return "Bronze";
	else if($rank > 25) 
		return "Silver";
	else if($rank > 20) 
		return "Gold";
	else if($rank > 15) 
		return "Platinum";
	else if($rank > 10)
		return "Diamond";
	else if($rank > 5)
		return "Master";
	else if($rank > 1)
		return "Grandmaster";
	else 
		return "Legendary Grandmaster";
	
}
function colorId($id, $rank)
{

	$colored_id= "";

	if($rank > 30) {
		$colored_id.= "<div style=\"color:saddleBrown;font-weight:bold;\">";
	}
	else if($rank > 25) {
		$colored_id.= "<div style=\"color:stateGray;font-weight:bold;\">";
	}
	else if($rank > 20) {
		$colored_id.= "<div style=\"color:goldenrod;font-weight:bold;\">";
	}
	else if($rank > 15) {
		$colored_id.= "<div style=\"color:green;font-weight:bold;\">";
	}
	else if($rank > 10) {
		$colored_id.= "<div style=\"color:blue;font-weight:bold;\">";
	}
	else if($rank > 5) {
		$colored_id.= "<div style=\"color:purple;font-weight:bold;\">";
	}
	else if($rank > 1) {
		$colored_id.= "<div style=\"color:red;font-weight:bold;\">";
	}
	else {
		$colored_id.= "<div style=\"color:red;font-weight:bold;\">";
		$colored_id.= "<span style=\"color:black;\">";
		$colored_id.= substr($id, 0, 1);
		$colored_id.= "</span>";
		$colored_id.= substr($id, 1, 32);
		$colored_id.= "</div>";
		return $colored_id;
	}
	$colored_id.= $id;
	$colored_id.= "</div>";
	return $colored_id;
}
?>
