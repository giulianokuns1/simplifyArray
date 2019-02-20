/**
*	Return simplified multidimensional array
*	
*	@param array $array_mult
*	@return array
*/
function simplifyArray(result, array) {
	if (array.length > 0) {
		for (var i = 0; i < array.length; i++) {
			if (typeof array[i] == 'object') {
				simplifyArray(result, array[i]);
			} else {
				result.push(array[i]);
			}
		}
	}
}