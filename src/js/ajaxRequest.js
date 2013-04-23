function deleteUser(id, target, actionType)
{
var answer = confirm("Are you sure you want to delete ?");
var parent = $("#row"+id);
if (answer){
	$.ajax({
	type: "POST",
	url: target,
	data: { id: id, type: actionType},
	success: function() {
		parent.fadeOut(300, function(){
			parent.remove();
		});
		}
	});
	}
}
