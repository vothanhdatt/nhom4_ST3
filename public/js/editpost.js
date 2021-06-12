$('.edit-post').on('click', function () {
	$('.popup-wraper-edit').addClass('active');
	return false;
});
	$('.popup-closed, .cancel').on('click', function () {
	$('.popup-wraper-edit').removeClass('active');
});	