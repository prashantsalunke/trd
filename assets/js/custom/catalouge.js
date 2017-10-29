function getCatalouge()
{
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/catalouge",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer124', 1, 'scale', 500, 'swing');
		$("#Layer124_Container").html(data);
		return false;
	});
}
function openAddCatalouge()
{
	$.get(base_url+"mystation/addCatelough",{},function(data){
		$("#addcatalouge").html(data);
		$("#addcatelough_div").show();
		$("#editcatalouge").html("");
	});
}
function openEditCatalouge()
{
	$.get(base_url+"mystation/editCatelough",{},function(data){
		$("#addcatalouge").html("");
		$("#editcatalouge").html(data);
		$("#editcatalouge_div").show();
	});
}
function openEditCatalougeForm()
{
	var checkcount = 0;
	var item_id = "";
	$('input[name="catalogue_chk_id"]:checked').each(function() {
		item_id = this.value;
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select catalogue to update.");
	} else if(checkcount > 1) {
		alert("You can edit only one catalogue at a time.");
	} else {
		ajaxindicatorstart("Please wait .. while we load catalogue...");
		$.get(base_url+"mystation/editCatelougeForm",{catalogue_id: item_id},function(data){
			ajaxindicatorstop();
			$("#addcatalouge").html("");
			$("#editcatalouge").html(data);
			$("#editcatalouge_div").show();
		});
	}
}
function viewCatalogueBook(id) {
	$.get(base_url+"mystation/catalogue/content/"+id,{},function(data){
		$("#catalogue_page_content").html(data);
		$("#pcatalogue_id").val(id);
		$("#vcatalogue_overlay").modal('show');
	},'html');
}

function deleteCatalogues() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="catalogue_chk_id"]:checked').each(function() {
		if(item_id != "") {
			item_id = item_id+","+this.value;
		} else {
			item_id = this.value;
		}
	   	checkcount++;
	});
	if(checkcount <= 0 ){
		alert("Select product first.");
	} else {
		ajaxindicatorstart("Please wait .. while we delete catalogue...");
		$.post(base_url+"mystation/catalogue/delete",{ catalogue_id: item_id},function(resp){
			if(resp.status == 0) {
				alert(resp.msg);
			} else {
				$.get(base_url+"mystation/editCatelough",{},function(data){
					$("#addcatalouge").html("");
					$("#editcatalouge").html(data);
					$("#editcatalouge_div").show();
				});
				alert(resp.msg);
			}
			ajaxindicatorstop();
		},'json');
	}
}
