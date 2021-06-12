var postId = 0;

var token = $('meta[name="csrf-token"]').attr('content');

// 

$('.heart').on('click', function (event) {
    
    // if(!animated){
    //     $(this).addClass('happy').removeClass('broken');
    //     animated = true;
    //     $(this).children('span').text(counter);
    //   }
    //   else {
    //     $(this).removeClass('happy').addClass('broken');
    //     animated = false; 
    //     $(this).children('span').text(counter);
    //   }

    event.preventDefault();
    postId = this.dataset.postid;
    $.ajax({

        type: "POST",
        url: './like/' + postId,
        data: { _token: token },
        dataType: "json",
        success: function (data) {
            //const divResult = document.querySelector('#like-numb-' + postId);
            $("#like-numb-"+postId).html(data['numb']);
            //divResult.innerHTML = data['numb'];
            if(data['index'] == 0){
                $('.likes-' + postId).addClass('happy').removeClass('broken');
                
            }
            else{
                $('.likes-' + postId).removeClass('happy').addClass('broken');
                
            }

        }
    })

});



$('.btn-comment').on('click', function (event) {
    event.preventDefault();
    postId = this.dataset.postid;
    var content = $("#comment-content-" + postId).val();
    const cmt = document.querySelector('#comment-content-' + postId);
    cmt.value = '';
    $.ajax({

        type: "POST",
        url: './comment/' + postId,
        data: { content: content, _token: token },
        dataType: "json",
        
        success: function (data) {
            
            const listcmt = document.querySelector('.list-comment-' + postId);
            //listcmt.innerHTML = ``;
            listcmt.innerHTML += `<div class="comet-avatar">
            <img src="images/resources/`+ data['avatar'] + `"
                alt="">
        </div>
        <div class="we-comment">
            <h5><a href="time-line.html"
                    title="">` + data['name'] + `
                </a></h5>
            <p>` + data['content'] + `</p>
            <div class="inline-itms">
                <span>` + data['time'] + `</span>
                <a class="we-reply" href="#" title="Reply"><i
                        class="fa fa-reply"></i></a>
                <a href="#" title=""><i
                        class="fa fa-heart"></i><span>20</span></a>
            </div>
            <div class="more">
                <div class="more-post-optns"><i
                        class="ti-more-alt"></i>
                    <ul>

                        <li><i
                                class="fa fa-pencil-square-o "></i>Edit
                            Comment
                        </li>
                        <li><a
                                href="./deletecomment/<?php echo($valuecmt->id) ?>"><i
                                    class="fa fa-trash-o"></i>Delete
                                Comment</a></li>
                        <li class="bad-report"><i
                                class="fa fa-flag"></i>Report
                            Comment</li>


                    </ul>
                </div>
            </div>
        </div>`;

            // var comment_item = '<li class="comment-item">';
            // comment_item += '<div class="post__author author vcard inline-items">';
            // comment_item += '<img src="/';
            // comment_item += data['avatar'];
            // comment_item += '" alt="author">';

            // comment_item += '<div class="author-date">';
            // comment_item += '<a class="h6 post__author-name fn" href="02-ProfilePage.html">';
            // comment_item += data['name'];
            // comment_item += '</a>';
            // comment_item += '<div class="post__date">';
            // comment_item += '<time class="published" >';
            // comment_item += data['time'];
            // comment_item += '</time>';
            // comment_item += '</div>';
            // comment_item += '</div>';

            // comment_item += '<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>';

            // comment_item += '</div>';

            // comment_item += '<p>';
            // comment_item += data['content'];
            // comment_item += '</p>';

            // comment_item += '</li>';
            // $("#comment-content" + postId).val("");
            // $("#comment-" + postId).append(comment_item);
            // $("#comment_numb" + postId).html(data['numb']);
            

        }
    })
        .done(function () {
            console.log('sucess');
        })
        .fail(function () {
            console.error();
        })


});




