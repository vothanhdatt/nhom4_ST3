
var token = $('meta[name="csrf-token"]').attr('content');
// 

$('.profile-controls').on('click',function(e){
    
    
    if(e.target.closest('.icon-addfriend')){
        var idfollow = e.target.dataset.idfollow;
        var userID = e.target.dataset.iduser;
        if($('.icon-follow').html() != null){
            $.ajax({
                type: "POST",
                url: 'http://localhost/project/public/addfriend/' + userID,
                data: { _token: token,
                        id: userID },
                dataType: "json",
                success: function (idfriend) {
                    $('.icon-addfriend').html(`<a data-idfollow="`+ idfollow +`" data-iduser="`+ userID +`" data-idFriend="`+ idfriend +`" title="Wait For Accept" data-toggle="tooltip">
                    <i class="fas fa-people-arrows " data-idfollow="` + idfollow + `" data-iduser="`+ userID +`" data-idFriend="`+ idfriend +`"></i></a>`);
                    $('.icon-addfriend').addClass('icon-wait').removeClass('icon-addfriend');
                    $('.icon-follow').html(`<a title="Following" data-toggle="tooltip">
                    <i class="fas fa-star"></i> </a>`);
                    $('.icon-follow').addClass('icon-following').removeClass('icon-follow');
                    
                }
            })
            $.ajax({
                type: "POST",
                url: 'http://localhost/project/public/follow/' + userID,
                data: { _token: token,
                        idfollow: idfollow },
                dataType: "json",
            })
        }
        if($('.icon-following').html() != null){
            $.ajax({
                type: "POST",
                url: 'http://localhost/project/public/addfriend/' + userID,
                data: { _token: token,
                        id: userID },
                dataType: "json",
                success: function (idfriend) {
                    $('.icon-addfriend').html(`<a data-idfollow="`+ idfollow +`" data-iduser="`+ userID +`" data-idFriend="`+ idfriend +`" title="Wait For Accept" data-toggle="tooltip">
                    <i class="fas fa-people-arrows " data-idfollow="` + idfollow + `" data-iduser="`+ userID +`" data-idFriend="`+ idfriend +`"></i></a>`);
                    $('.icon-addfriend').addClass('icon-wait').removeClass('icon-addfriend');
                   
                    
                }
            })
        }
        
    }
    if(e.target.closest('.icon-wait')){
        var idFriendd = e.target.dataset.idfriend;
        var iduser =  e.target.dataset.iduser;
        var idfollow =  e.target.dataset.idfollow;
        //alert(iduser);
        $.ajax({
            type: "POST",
            url: 'http://localhost/project/public/deletefriend/' + idFriendd,
            data: { _token: token,},
            dataType: "json",
            success: function (a) {
                $('.icon-wait').html(`<a data-idfollow="`+ idfollow +`" data-iduser="`+iduser+`" title="Add friend" data-toggle="tooltip"><i
                class="fa fa-user-plus " data-idfollow="`+ idfollow +`" data-iduser="`+iduser+`"></i></a>`);
                $('.icon-wait').addClass('icon-addfriend').removeClass('icon-wait');
                $('.icon-following').html(`<a title="Follow" data-toggle="tooltip">
                <i class="far fa-star"></i> </a>`);
                $('.icon-following').addClass('icon-follow').removeClass('icon-following');
            }
        })
        $.ajax({
            type: "POST",
            url: 'http://localhost/project/public/unfollow/' + iduser,
            data: { _token: token,
                idfollow: idfollow },
            dataType: "json",
        })
    } 
    if(e.target.closest('.icon-accept')){
        const id_request = e.target.dataset.idrequest;
        const id_accept = e.target.dataset.idaccept;
        $.ajax({
            type: "POST",
            url: 'http://localhost/project/public/acceptfriend/' + id_request,
            data: { _token: token,
                    id_request: id_request,
                    id_accept: id_accept },
            dataType: "json",
            success: function (a) {
                
                $('.profile-controls').html(`<li><a  title="Friend" data-toggle="tooltip">
                <i class="fas fa-user-friends btn-addfriend"  data-iduser="`+ id_request +`"></i></a></li>

                <li class="icon-unfriend"><a data-idfollow="`+ id_accept +`" data-iduser="`+ id_request +`"  title="Unfiend" data-toggle="tooltip">
                <i data-iduser="`+ id_request +`" data-idfollow="`+ id_accept +`" class="fas fa-user-slash"></i> </a></li>

                <li class="icon-following"><a data-idfollow="`+ id_accept +`" data-iduser="`+ id_request +`" title="Following" data-toggle="tooltip">
                <i data-idfollow="`+ id_accept +`" data-iduser="`+ id_request +`" class="fas fa-star"></i> </a></li>

                <li><a class="send-mesg"  title="Send Message" data-toggle="tooltip"><i
                        class="fa fa-comment"></i></a></li>`);
                
                
            }
        })
        $.ajax({
            type: "POST",
            url: 'http://localhost/project/public/follow/' + id_request,
            data: { _token: token,
                    idfollow: id_accept },
            dataType: "json",
        })
    }   

    if(e.target.closest('.icon-unfriend')){
        const userID = e.target.dataset.iduser;
        const idfollow = e.target.dataset.idfollow;
        //const id_accept = e.target.dataset.idaccept;
        $.ajax({
            type: "POST",
            url: 'http://localhost/project/public/unfriend/' + userID,
            data: { _token: token,
                },
            dataType: "json",
            success: function (a) {
                
                $('.profile-controls').html(`<li class="icon-addfriend" ><a data-idfollow="` + idfollow +`" data-iduser="`+ userID +`"  title="Add friend" data-toggle="tooltip"><i
                class="fa fa-user-plus " data-idfollow="` + idfollow +`" data-iduser="`+ userID +`"></i></a></li>

        <li class="icon-follow"><a data-idfollow="` + idfollow +`"  data-iduser="`+ userID +`" title="Follow" data-toggle="tooltip">
        <i data-idfollow="` + idfollow +`"  data-iduser="`+ userID +`" class="far fa-star"></i> </a></li>`);
                        
                
            }
        })
       if($('.icon-following').html() != null){
           alert(1);
        $.ajax({
            type: "POST",
            url: 'http://localhost/project/public/unfollow/' + userID,
            data: { _token: token,
                idfollow: idfollow },
            dataType: "json",
        })
        $.ajax({
            type: "POST",
            url: 'http://localhost/project/public/unfollow/' + idfollow,
            data: { _token: token,
                idfollow: userID },
            dataType: "json",
        })
       }
       else if($('.icon-follow').html() != null){
        alert(2);
        $.ajax({
            type: "POST",
            url: 'http://localhost/project/public/unfollow/' + idfollow,
            data: { _token: token,
                idfollow: userID },
            dataType: "json",
        })
       }
    } 

    if(e.target.closest('.icon-remove')){
        const idrequest = e.target.dataset.idrequest;
        const idaccept = e.target.dataset.idaccept;
        $.ajax({
            type: "POST",
            url: 'http://localhost/project/public/removerequest/' + idrequest,
            data: { _token: token,},
            dataType: "json",
            success: function (a) {
                $('.profile-controls').html(`<li class="icon-addfriend" ><a data-idfollow="` + idaccept +`" data-iduser="`+ idrequest +`"  title="Add friend" data-toggle="tooltip"><i
                class="fa fa-user-plus " data-idfollow="` + idaccept +`" data-iduser="`+ idrequest +`"></i></a></li>

        <li class="icon-follow"><a data-idfollow="` + idaccept +`"  data-iduser="`+ idrequest +`" title="Follow" data-toggle="tooltip">
        <i data-idfollow="` + idaccept +`"  data-iduser="`+ idrequest +`" class="far fa-star"></i> </a></li>`);
            }
        })
        $.ajax({
            type: "POST",
            url: 'http://localhost/project/public/unfollow/' + idaccept,
            data: { _token: token,
                idfollow: idrequest },
            dataType: "json",
        })
    }   

    if(e.target.closest('.icon-following')){
        const idfollow = e.target.dataset.idfollow;
        const iduser = e.target.dataset.iduser;
        if($('.icon-unfriend').html() != null){
            alert(1);
            $.ajax({
                type: "POST",
                url: 'http://localhost/project/public/unfollow/' + iduser,
                data: { _token: token,
                    idfollow: idfollow },
                dataType: "json",
            })
            $('.icon-following').html(`<a data-idfollow="`+ idfollow +`"  data-iduser="`+ iduser +`" title="Follow" data-toggle="tooltip">
            <i data-idfollow="`+ idfollow +`"  data-iduser="`+ iduser +`" class="far fa-star"></i> </a>`);
            $('.icon-following').addClass('icon-follow').removeClass('icon-following');
        }
        if($('.icon-addfriend').html() != null){
            $.ajax({
                type: "POST",
                url: 'http://localhost/project/public/unfollow/' + iduser,
                data: { _token: token,
                    idfollow: idfollow },
                dataType: "json",
            })
            $('.icon-following').html(`<a data-idfollow="`+ idfollow +`"  data-iduser="`+ iduser +`" title="Follow" data-toggle="tooltip">
            <i data-idfollow="`+ idfollow +`"  data-iduser="`+ iduser +`" class="far fa-star"></i> </a>`);
            $('.icon-following').addClass('icon-follow').removeClass('icon-following');
        }
        // if($('.icon-unfriend').html() == null){

        // }
    }

    if(e.target.closest('.icon-follow')){
        const idfollow = e.target.dataset.idfollow;
        const iduser = e.target.dataset.iduser;
        if($('.icon-unfriend').html() != null){
            $.ajax({
                type: "POST",
                url: 'http://localhost/project/public/follow/' + iduser,
                data: { _token: token,
                        idfollow: idfollow },
                dataType: "json",
            })
            $('.icon-follow').html(`<a data-idfollow="`+ idfollow +`" data-iduser="`+ iduser +`"  title="Following" data-toggle="tooltip">
            <i data-idfollow="`+ idfollow +`" data-iduser="`+ iduser +`" class="fas fa-star"></i> </a>`);
            $('.icon-follow').addClass('icon-following').removeClass('icon-follow');
        }
        if($('.icon-addfriend').html() != null){
            $.ajax({
                type: "POST",
                url: 'http://localhost/project/public/follow/' + iduser,
                data: { _token: token,
                        idfollow: idfollow },
                dataType: "json",
            })
            $('.icon-follow').html(`<a data-idfollow="`+ idfollow +`" data-iduser="`+ iduser +`"  title="Following" data-toggle="tooltip">
            <i data-idfollow="`+ idfollow +`" data-iduser="`+ iduser +`" class="fas fa-star"></i> </a>`);
            $('.icon-follow').addClass('icon-following').removeClass('icon-follow');
        }
    }
});
