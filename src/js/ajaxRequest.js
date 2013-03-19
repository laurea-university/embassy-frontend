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

var glb = 0
var glb2 = 0

function addRow()
{
	$('#myTable > tbody').append("<tr><td><input name=name"+glb+" class=input-small type=text></td><td><input name=info"+glb+" type=text></td><td><input name=location"+glb+" type=text></td><td><input name=staff"+glb+" type=text></td><td><input name=website"+glb+" type=text></td><td><input name=phone"+glb+" type=text></td><td><a class='btn' onclick='$(this).parent().fadeOut(300, function(){ $(this).parent().remove(); });'><i class='icon-remove'></i></a></td></tr>");
	glb += 1;
}

function adduserRow()
{
	$('#myTable > tbody').append("<tr><td><input name=username"+glb2+" class=input-small type=text></td><td><input name=password"+glb+" type=password></td><td><input name=mail"+glb2+" type=text></td><td><a class='btn' onclick='$(this).parent().fadeOut(300, function(){ $(this).parent().remove(); });'><i class='icon-remove'></i></a></td></tr>");
	glb2 += 1;
}