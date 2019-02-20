<?php 
	/**
	*	Return simplified multidimensional array
	*	
	*	@param array $result by reference
	*	@param array $array
	*/
	function simplifyArray(&$result, $array) {
		if (!empty($array)) {
			foreach ($array as $index => $value) {
				if (gettype($array[$index]) == 'array') {
					simplifyArray($result, $array[$index]);
				} else {
					array_push($result, $array[$index]);
				}
			}
		}
		return $result;
	}
?>