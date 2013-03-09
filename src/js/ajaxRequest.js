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

function addRow()
{
	$('#myTable > tbody').append("<tr name='addedrow'><td><input class=input-small type=text></td><td><input type=text></td><td><input type=text></td><td><input type=text></td><td><input type=text></td><td><input type=text></td><td><a class='btn' href='#' onclick='$(this).parent().fadeOut(300, function(){ $(this).parent().remove(); });'><i class='icon-remove'></i></a></td></tr>");
}