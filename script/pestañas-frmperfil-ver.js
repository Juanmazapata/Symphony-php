$(document).ready(function(){
	$('ul.pestaña li a:first').addClass('active');
	$('#pestaña2').hide();
	$('#pestaña3').hide();
	$('#pestaña4').hide();
	$('#pestaña1:first').show();

		$('ul.pestaña li a').click(function(){
		$('ul.pestaña li a').removeClass('active');
		$(this).addClass('active');

		var activeTab = $(this).attr('href');
		console.log(activeTab);
		$('#pestaña1').hide();
		$('#pestaña2').hide();
		$('#pestaña3').hide();
		$('#pestaña4').hide();
				$(activeTab).show();
		return false;
	});
	});
