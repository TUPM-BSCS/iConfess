$(function(){

	$(document).on('submit','#chatForm',function()
	{
		var text = $.trim($("$text").val());
		var name = $.trim($("$name").val());

		if(text != "" && name != "")
		{
			$.post('chatPoster.php',{text: text, name: name}, function(data){
				$(".chatMessages").append(data);
			});
		}
		else
		{
				alert("Data Missing");
		}
	});

	function getMessages(){
		$.get('getMessages.php',function(data){
				$(".chatMessages").html(data);
			});
	}
	setInterval(function(){getMessages();},100);

	$(function(){
	var d = $('.chatMessages');
	d.animate({ scrollTop: d.prop('scrollHeight') }, 1000);
	});

});



