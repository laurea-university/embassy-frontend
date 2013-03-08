function deleteUser(id, target, actionType)
{
var answer = confirm("Are you sure you want to delete ?");
var parent = $(this).closest('tr');

if (answer){
	$.ajax({
	type: "POST",
	url: target,
	data: { id: id, type: actionType},
	beforeSend: function() {
	parent.animate({'backgroundColor' : '#fb6C6C'}, 300);
	},
	success: function() {
		parent.fadeOut(300, function(){
			parent.remove();
		});
		}
	});
	}
}