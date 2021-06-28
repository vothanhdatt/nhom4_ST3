

//Click vào nút edit để hiện lên form edit
var postId = 0;
const reader = new FileReader();
const mediaStream = new MediaStream();
var token = $('meta[name="csrf-token"]').attr('content');
var nameNewImage = "";
var edit = false;
var permission = "";

const editPost = document.querySelector('.loadMore');
const deleteImg = document.querySelector('.delete-photo-edit');
editPost.addEventListener('click', function (e) {
    if (e.target.classList.contains('edit-post')) {
        const target = e.target;
        postId = target.dataset.postid;
        var content = $('.post-content-' + postId).text();
        var image = $('.post-image-' + postId).val();
        nameNewImage = image;
        $('.popup-wraper-edit').addClass('active');
        $('.edit-post-content').html(content);
        if(image != null){
            $('.img-post').html(`<img class="image-edit-post" src="http://localhost/project/public/images/resources/` + image + `" alt="">`);
        }
        return false;
    }
});

deleteImg.addEventListener('click', function () {
    
    $('.img-post').html(``);
    nameNewImage = null;
    edit = true;
});
$('.delete-photo-post').on('click',function(){
    $('.img-newpost').html(``);
});
$('.popup-closed, .cancel').on('click', function () {
    $('.popup-wraper-edit').removeClass('active');
});

//Ấn submit để chỉnh sửa post
const formEditPost = document.querySelector('.popup-wraper-edit');
formEditPost.addEventListener('click', function (e) {
    var contentNewPost = document.querySelector('.edit-post-content').value;
    const newPermission = $('.show-permission').text();
    
    if (e.target.closest('.btn-submit-edit-post')) {
       
        if(newPermission == "Post GlobalyPost Globaly"){
            
            permission = "public";
            $('.icon-permission').html(`<i class="fa fa-globe"></i>`);
        }
        else if(newPermission == "Post PrivatePost Private"){
            permission = "private";
            $('.icon-permission').html(`<i class="fa fa-user"></i>`);
        }
        else{
            permission = "friends";
            $('.icon-permission').html(`<i class="fa fa-user-plus"></i>`);
        }
        $.ajax({

            type: "POST",
            url: 'http://localhost/project/public/editpost/' + postId,
            data: {
                id: postId,
                content: contentNewPost,
                images: nameNewImage,
                permission: permission,
                _token: token
            },
            dataType: "json",
        })

        $('.popup-wraper-edit').removeClass('active');
        $('.post-content-' + postId).text(contentNewPost);
        if(nameNewImage != null){
            $('.img-bunch-' + postId).html(`
            <div class="row">
                <figure>
                    <a class="strip src-post-image-`+ postId +`"
                        href="http://localhost/project/public/images/resources/` + nameNewImage +`"
                        title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="http://localhost/project/public/images/resources/` + nameNewImage +`"
                            alt="">
                        <input type="hidden" name=""
                            class="post-image-`+ postId +`"
                            value="` + nameNewImage +`">
                    </a>
                </figure>
            </div>
            `);
        }
        if(nameNewImage == null && edit == true){
            $('.src-post-image-' + postId).html(``);
        }
    }
    if (e.target.closest('.btn-cancel-edit-post')) {
        $('.popup-wraper-edit').removeClass('active');
        return false;
    }
    if(e.target.closest('.edit-public')){
        $('.show-permission').html(`<i class="fa fa-globe"></i>Post Globaly`);
    }
    if(e.target.closest('.edit-private')){
        $('.show-permission').html(`<i class="fa fa-user"></i>Post Private`);
    }
    if(e.target.closest('.edit-friends')){
        $('.show-permission').html(`<i class="fa fa-user-plus"></i>Post Friends`);
    }
});

const newpost = document.querySelector('.new-postbox');
if($('.new-postbox').val() != null){
    newpost.addEventListener('click', function (e) {
    
        if (e.target.closest('.btn-cancel-edit-post')) {
            $('.popup-wraper-edit').removeClass('active');
            return false;
        }
        if(e.target.closest('.edit-public')){
            $('.show-permission').html(`<i class="fa fa-globe"></i>Post Globaly`);
            $('.input-permission').val('public');
        }
        if(e.target.closest('.edit-private')){
            $('.show-permission').html(`<i class="fa fa-user"></i>Post Private`);
            $('.input-permission').val('private');
        }
        if(e.target.closest('.edit-friends')){
            $('.show-permission').html(`<i class="fa fa-user-plus"></i>Post Friends`);
            $('.input-permission').val('friends');
        }
    });
}

//Upload ảnh bằng Ajax
(function () {
    var input = document.getElementById("images"),
        formdata = false;
    if (window.FormData) {
        formdata = new FormData();
        function showUploadedItem(source) {
            $('.img-post').html(`<img src="` + source + `" alt="">`);
        }
        if (input.addEventListener) {
            input.addEventListener("change", function (evt) {
                edit = true;
                const files = evt.target.files;
                nameNewImage = files[0].name;
                var i = 0, len = this.files.length, img, reader, file;
                for (; i < len; i++) {
                    file = this.files[i];

                    if (!!file.type.match(/image.*/)) {

                    }
                    if (window.FileReader) {
                        reader = new FileReader();
                        reader.onloadend = function (e) {
                            showUploadedItem(e.target.result);
                        };
                        reader.readAsDataURL(file);
                    }
                    if (formdata) {
                        formdata.append("images[]", file);
                    }
                    if (formdata) {
                        $.ajax({
                            url: "upload.php",
                            type: "POST",
                            data: formdata,
                            processData: false,
                            contentType: false,
                        });
                    }
                }
            }, false);
        }
    }
}());
if($('.new-postbox').val() != null){
    (function () {
        var input = document.getElementById("fileUpload"),
            formdata = false;
        if (window.FormData) {
            formdata = new FormData();
            function showUploadedItem(source) {
                $('.img-newpost').html(`<img src="` + source + `" alt="">`);
            }
            
            if (input.addEventListener) {
                input.addEventListener("change", function (evt) {
                    edit = true;
                    const files = evt.target.files;
                    nameNewImage = files[0].name;
                    var i = 0, len = this.files.length, img, reader, file;
                    for (; i < len; i++) {
                        file = this.files[i];
    
                        if (!!file.type.match(/image.*/)) {
    
                        }
                        if (window.FileReader) {
                            reader = new FileReader();
                            reader.onloadend = function (e) {
                                showUploadedItem(e.target.result);
                            };
                            reader.readAsDataURL(file);
                        }
                        if (formdata) {
                            formdata.append("images[]", file);
                        }
                        if (formdata) {
                            $.ajax({
                                url: "upload.php",
                                type: "POST",
                                data: formdata,
                                processData: false,
                                contentType: false,
                            });
                        }
                    }
                }, false);
            }
        }
    }());
    

}
