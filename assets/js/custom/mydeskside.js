function getMyDeskside()
{
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/mydeskside",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer169', 1, 'scale', 500, 'swing');
		$("#Layer169_Container").html(data);
		return false;
	});
	
}

function getMyShipperDeskside() {
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/shipperdeskside",{},function(data){
		ShowObjectWithEffect('Layer169', 1, 'scale', 500, 'swing');
		$("#Layer169_Container").html(data);
		return false;
	});
}

function getBuyerDeskside() {
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/desksite/buyer",{},function(data){
		ShowObjectWithEffect('Layer169', 1, 'scale', 500, 'swing');
		$("#Layer169_Container").html(data);
		return false;
	});
}


