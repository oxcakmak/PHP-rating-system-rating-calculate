<?php
/* Get Stars */
function getStars($number){
	if($number < 1){
		return '<i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i>';
	}else if($number < 2){
		return '<i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i>';
	}else if($number < 3){
		return '<i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i>';
	}else if($number < 4){
		return '<i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i>';
	}else if($number < 5){
		return '<i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i>';
	}else if($number < 6){
		return '<i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>';
	}
}
?>
