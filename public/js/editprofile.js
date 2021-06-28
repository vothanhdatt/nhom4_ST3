(function () {
    var input = document.getElementById("edit-avatar"),
        formdata = false;
    if (window.FormData) {
        formdata = new FormData();
        function showUploadedItem(source) {
            $('.show-avatar').html(`<img src="` + source + `" alt="">`);
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
                            url: "http://localhost/project/public/upload.php",
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
$('.male').on('click',function(){
    $('.valuegender').val(0);
});
$('.female').on('click',function(){
    $('.valuegender').val(1);
});