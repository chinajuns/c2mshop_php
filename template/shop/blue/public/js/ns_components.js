function platformAdvLoad(ap_id) {
	var result = '';
	$.ajax({
		type : "post",
		url : __URL(SHOPMAIN + "/components/platformadvlist"),
		async : false,
		data : {
			'ap_id' : ap_id
		},
		dataType : 'json',
		success : function(data) {
			result = data;
			return result;
		}
	});
	return result;
}

// 组件根据广告位查询广告 ap_id广告位id
function platformAdvLoadNew(ap_id) {
	var result = '';
	$.ajax({
		type : "post",
		url : __URL(SHOPMAIN + "/components/platformadvlistnew"),
		async : false,
		data : {
			'ap_id' : ap_id
		},
		dataType : 'json',
		success : function(data) {
			result = data;
			return result;
		}
	});
	return result;
}