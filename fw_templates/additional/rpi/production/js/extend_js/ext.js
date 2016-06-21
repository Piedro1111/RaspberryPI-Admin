var ctrok=0,
	ctrer=0;
$(document).ready(function(){
	$('#shutdown').click(function(){
		$.post(server_name+'/ajax.slot.php',{
			atype:'raspberrypi::shutdown',
			time:'now',
		},function(data){
			checkServerStatus();
		});
	});
	$('#restart').click(function(){
		$.post(server_name+'/ajax.slot.php',{
			atype:'raspberrypi::restart',
			time:'now',
		},function(data){
			checkServerStatus();
		});
	});
});
function checkServerStatus()
{
	var t;
	$('#status > span').removeClass('glyphicon-ok glyphicon-warning-sign glyphicon-globe').addClass('glyphicon-globe');
	$.post(server_name+'/ajax.slot.php',{
		atype:'raspberrypi::status'
	},function(data){
		try
		{
			var data = JSON.parse(data);
		}
		catch(e)
		{
			var data = {code:404};
		}
		
		if(data.code==200)
		{
			ctrok++;
			$('#status > span').removeClass('glyphicon-ok glyphicon-warning-sign glyphicon-globe').addClass('glyphicon-ok');
		}
		else
		{
			ctrer++;
			$('#status > span').removeClass('glyphicon-ok glyphicon-warning-sign glyphicon-globe').addClass('glyphicon-warning-sign');
		}
		return data.code;
	}).fail(function() {
		ctrer++;
		$('#status > span').removeClass('glyphicon-ok glyphicon-warning-sign glyphicon-globe').addClass('glyphicon-warning-sign');
	});
	if((ctrok<10)&&(ctrer<30))
	{
		t = setTimeout(checkServerStatus, 3000);
	}
	else
	{
		ctrok=0;
		ctrer=0;
	}
}