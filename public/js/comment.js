
var postId = 0;
var cmtId = 0;
var token = $('meta[name="csrf-token"]').attr('content');

var contentEdit = "";


//Delete comment
const listCmt = document.querySelector('.loadMore');
listCmt.addEventListener('click', function(e){
    if(e.target.classList.contains('delete-comment')){
        const target = e.target;
        cmtId = target.dataset.cmtid;
		$.ajax({

			type: "POST",
			url: 'http://localhost/project/public/deletecomment/' + cmtId,
			data: { id: cmtId, _token: token },
			dataType: "json",
	
		})
		$('.comment-area-' + cmtId).remove();
    }
	//Reply comment
	if(e.target.classList.contains('fa-reply')){
		const target = e.target;
		postId = target.dataset.postid;
		nameCmt = target.dataset.name;
		$("#comment-content-" + postId).val('@'+nameCmt);
	}
	//Edit comment
	if(e.target.classList.contains('edit-comment')){
		
		const target = e.target;
        cmtId = target.dataset.cmtid;
		contentEdit = $('.content-comment-' + cmtId).text();
		$('.content-comment-' + cmtId).html(`
			<textarea class="content-cmt-edit-`+ cmtId +`" name="text">` + contentEdit + ` </textarea> 
			<button class="btn btn-primary submit-edit-cmt-`+ cmtId +`" type="button">Submit</button> 
			<button type="button" class="btn btn-danger cancel-edit-cmt-`+ cmtId +`">Cancel</button>`);
		$('.more-post-optns').hide();
	}
	
	//Cancel edit 
	if(e.target.classList.contains('cancel-edit-cmt-' + cmtId)){
		$('.content-comment-' + cmtId).html(contentEdit);
		$('.more-post-optns').show();
	}
	//Submit edit
	if(e.target.classList.contains('submit-edit-cmt-' + cmtId)){
		var contentCmtEdit = $('.content-cmt-edit-'+cmtId).val();
		$.ajax({

			type: "POST",
			url: 'http://localhost/project/public/editcomment/' + cmtId,
			data: { id: cmtId,
				content: contentCmtEdit,
				_token: token },
			dataType: "json",
		})
		$('.content-comment-' + cmtId).html(contentCmtEdit);
		$('.more-post-optns').show();
	}
});

/** Post a Comment **/
jQuery(".post-comt-box textarea").on("keydown", function(event) {

	if (event.keyCode == 13) {
		event.preventDefault();
    	postId = this.dataset.postid;
		var content = $("#comment-content-" + postId).val();
		const cmt = document.querySelector('#comment-content-' + postId);
		cmt.value = '';
		$.ajax({

			type: "POST",
			url: 'http://localhost/project/public/comment/' + postId,
			data: { content: content, _token: token },
			dataType: "json",
			
			success: function (data) {
				
				const listcmt = document.querySelector('.list-comment-' + postId);
				listcmt.innerHTML += `
				<div class="comment-area-`+ data['id_cmt'] +`">
					<div class="comet-avatar">
						<img src="http://localhost/project/public/images/resources/`+ data['avatar'] + `"
							alt="">
					</div>
					<div class="we-comment">
						<h5><a href="http://localhost/project/public/timeline/`+ data['userid']+`"
								title="">` + data['name'] + `
							</a></h5>
						<p class="content-comment-`+ data['id_cmt'] +`">` + data['content'] + `</p>
						<div class="inline-itms">
							<span>` + data['time'] + `</span>
							<a class="we-reply" title="Reply"><i
									class="fa fa-reply"  data-postid="`+ postId +`" data-name="` + data['name'] + `"></i></a>
							<a href="#" title=""><i
									class="fa fa-heart"></i><span>20</span></a>
						</div>
						<div class="more">
							<div class="more-post-optns"><i
									class="ti-more-alt"></i>
								<ul>
			
									<li class="edit-comment" data-cmtid="`+ data['id_cmt'] +`"><i
											class="fa fa-pencil-square-o "></i>Edit
										Comment
									</li>
									<li class="delete-comment" data-cmtid="`+ data['id_cmt'] +`"><i class="fa fa-trash-o "></i>Delete
										Comment</li>
									<li class="bad-report"><i
											class="fa fa-flag"></i>Report
										Comment</li>
			
			
								</ul>
							</div>
						</div>
					</div>
				</div>`;
	
			}
		})
	}
}); 