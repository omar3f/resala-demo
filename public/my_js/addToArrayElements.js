function addToArrayElements(theArray, addition){
	var new_arr = [];
	for (key in theArray) {
		new_arr.push(theArray[key] + addition);
	}
	return new_arr;
}

