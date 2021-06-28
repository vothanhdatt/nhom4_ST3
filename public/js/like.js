var postId = 0;
var token = $('meta[name="csrf-token"]').attr('content');
// 
$('.heart').on('click', function (event) {
    if (this.dataset.login) {
        event.preventDefault();
        postId = this.dataset.postid;
        $.ajax({
            type: "POST",
            url: 'http://localhost/project/public/like/' + postId,
            data: { _token: token },
            dataType: "json",
            success: function (data) {
                $("#like-numb-" + postId).html(data['numb']);
                if (data['index'] == 0) {
                    $('.likes-' + postId).addClass('happy').removeClass('broken');
                }
                else {
                    $('.likes-' + postId).removeClass('happy').addClass('broken');
                }
            }
        })
    }
    else{
        alert("You are not logged in!!");
    }

});








