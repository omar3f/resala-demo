function getProps(received_obj) {
	obj_keys = [];
	for (var key in received_obj) {
		obj_keys.push(key);
	}	
	return obj_keys
}

