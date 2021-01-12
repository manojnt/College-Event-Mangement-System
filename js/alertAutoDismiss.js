function alertAutoDismiss(){
	$(".alert").fadeTo(1800, 0.8).slideUp(750, function(){
		$(this).alert('close');
	});
}