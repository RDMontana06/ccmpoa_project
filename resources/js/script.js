
    function show_loading()
    {
        $(".pageloader").toggleClass("is-active");
    }
    function publishPost(dataFile)
    {
        // return false;
        // var d = new FormData($('#upload_form'));
        // var files = [];
        // if(document.getElementById("feed-upload-input-2").files.length > 0)
        // {
        // 	files = new FormData();
        // 	files.append('file', $('#feed-upload-input-2')[0].files[0]);
        // }
    
        
        $(".pageloader").toggleClass("is-active");
        var publish = document.getElementById('publish').value;

        if(publish.trim() == "")
        {
            warning_message('Error','Please write something.')
            $(".pageloader").removeClass("is-active");
        }
        else
        {
            $.ajax({
                url: "publish-post",
                method: "POST",
                data: {
                    data: publish,
                    // files : files,
                },
                enctype: 'multipart/form-data',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(data) {
                    $('.profile-post').prepend(show_post(data));
                    $(".app-overlay").removeClass("is-active");
                    $("#compose-card").removeClass("is-highlighted");
                    document.getElementById('publish').value = "";
                    $(".pageloader").removeClass("is-active");
                    success_message('Success','Your post has been uploaded.');
                },
                error:  function (data)
                {	
                    $(".pageloader").removeClass("is-active");
                    warning_message('Error','Something went wrong, Please refresh.')
                },
            });
            
            
        }
    }
    function post_comment(postId)
    {

        var latest_count = document.getElementById("comment-count-"+postId).innerText;
        latest_count = parseInt(latest_count)+1;
        $('.comment-counts-'+postId).text(latest_count);
        $(".pageloader").toggleClass("is-active");
        var comment = $('#submit-comment-'+postId+' textarea').val();

        if(comment.trim() == "")
        {
            warning_message('Error','Please write something.')
            $(".pageloader").removeClass("is-active");
        }
        else
        {
        
            $.ajax({
                url: "comment",
                method: "POST",
                data: {
                    post_id: postId,
                    comment: comment,
                },
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(data) {
                    
                    $('#submit-comment-'+data.post_id+' textarea').val('');
                    $('.comments-body').append(show_comment(data));
                    $(".pageloader").removeClass("is-active");
                    
                },
                error:  function (data)
                {
                    $(".pageloader").removeClass("is-active");
                    warning_message('Error','Something went wrong, Please refresh.')
                },
            });
            
            
        }
    }

    function show_comment(data)
    {

        var comment = "<div class='media is-comment' id='comment-data-"+data.id+"'>";
             comment += "<div class='media-left'>";
             comment += "<div class='image'>";
             comment += '<img src="{{URL::asset(auth()->user()->profile_picture)}}" data-demo-src="{{URL::asset(auth()->user()->profile_picture)}}" data-user-popover="6" alt="">';
             comment += '</div>';
             comment += '</div>';
             comment += '<div class="media-content">';
             comment += '<a href="#">{{auth()->user()->name}}</a>';
             comment += '<span class="time">{{date("M d, Y h:i a")}}</span>';
             comment += '<p>'+data.comment+'</p>';
             comment += '<div class="controls is-hidden">';
             comment += '<div class="like-count">';
             comment += '<i data-feather="thumbs-up"></i>';
             comment += '<span>1</span>';
             comment += '</div>';
             comment += '<div class="reply">';
             comment += '<a href="#">Reply</a>';
             comment += '</div>';
             comment += '</div>';
             comment += '</div>';
             comment += '<div class="media-right">';
             comment += '<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">';
             comment += '<div>';
             comment += '<div class="button">';
             comment += '<i data-feather="more-vertical"></i>';
             comment += '</div>';
             comment += '<div class="dropdown-menu" role="menu">';
             comment += '<div class="dropdown-content">';
             comment += '<a class="dropdown-item" onclick="removeComment('+data.id+','+data.post_id+')">';
             comment += '<div class="media">';
             comment += '<i data-feather="x"></i>';
             comment += '<div class="media-content">';
             comment += '<h3>Remove</h3>';
             comment += '<small>Remove this comment.</small>';
             comment += '</div>';
             comment += '</div>';
             comment += '</a>';
             comment += '</div>';
             comment += '</div>';
             comment += '</div>';
             comment += '</div>';
             comment += '</div>';
             comment += '</div>';

            return comment;
    }
    function warning_message(title,Message)
    {
        return iziToast.warning({
                title: title,
                message: Message,
                position: "topCenter",
            });
    }
    function success_message(title,Message)
    {
        return iziToast.success({
                title: title,
                message: Message,
                position: "topCenter",
            });
    }
    function like_action(id)
    {
        $(".pageloader").toggleClass("is-active");
        // alert(id);	
        var class_data = document.getElementById("action-like-"+id).className;
        // alert(class_data);
        var latest_count = document.getElementById("like-count-"+id).innerText;
        if(class_data.includes("is-active"))
        {
            latest_count = parseInt(latest_count) -1;
        }
        else
        {
            latest_count = parseInt(latest_count)+1;
            
        }
        document.getElementById("like-count-"+id).innerText = latest_count;
        $.ajax({
                url: "like-post",
                method: "POST",
                data: {
                    id: id,
                    class: class_data,
                },
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(data) {
                    $(".pageloader").removeClass("is-active");
                },
                error:  function (data)
                {
                    $(".pageloader").removeClass("is-active");
                    warning_message('Error','Something went wrong, Please refresh.')
                },
        });
        // alert(latest_count);

    }
    function removePost(id)
    {
        $('#post-'+id).remove();
        $(".pageloader").toggleClass("is-active");
        $.ajax({
                url: "remove-post",
                method: "POST",
                data: {
                    post_id: id,
                },
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(data) {
                    $(".pageloader").removeClass("is-active");
                    
                },
                error:  function (data)
                {
                    $(".pageloader").removeClass("is-active");
                    warning_message('Error','Something went wrong, Please refresh.')
                },
        });
    }
    function removeComment(id,postId)
    {
        $('#comment-data-'+id).remove();

        var latest_count = document.getElementById("comment-count-"+postId).innerText;
        latest_count = parseInt(latest_count)-1;
        $('.comment-counts-'+postId).text(latest_count);

        $.ajax({
                url: "remove-comment",
                method: "POST",
                data: {
                    comment_id: id,
                },
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(data) {
                    $(".pageloader").removeClass("is-active");
                    
                },
                error:  function (data)
                {
                    $(".pageloader").removeClass("is-active");
                    warning_message('Error','Something went wrong, Please refresh.')
                },
            });
    }
    function show_post(data)
    {
        var post = '<div class="card is-post" id="post-'+data.id+'">';
            post += '<div class="content-wrap">';
            post += '<div class="card-heading">';
            post += '<div class="user-block">';
            post += '<div class="image">';
            post += '<img src="{{URL::asset(auth()->user()->profile_picture)}}" data-demo-src="{{URL::asset(auth()->user()->profile_picture)}}" data-user-popover="0" alt="">';
            post += '</div>';
            post += '<div class="user-info">';
            post += '<a href="#">{{auth()->user()->name}}</a>';
            post += '<span class="time">{{date("M d, Y h:i a")}}</span>';
            post += '</div>';
            post += '</div>';
            post += '<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">';
            post += '<div>';
            post += '<div class="button">';
            post += '<i data-feather="more-vertical"></i>';
            post += '</div>';
            post += '</div>';
            post += '<div class="dropdown-menu" role="menu">';
            post += '<div class="dropdown-content">';
            post += '<a class="dropdown-item" onclick="removePost('+data.id+')">';
            post += '<div class="media">';
            post += '<i data-feather="x"></i>';
            post += '<div class="media-content">';
            post += '<h3>Remove</h3>';
            post += '<small>Remove this post.</small>';
            post += '</div>';
            post += '</div>';
            post += '</a>';
            post += '<a href="#" class="dropdown-item is-hidden">';
            post += '<div class="media">';
            post += '<i data-feather="bookmark"></i>';
            post += '<div class="media-content">';
            post += '<h3>Bookmark</h3>';
            post += '<small>Add this post to your bookmarks.</small>';
            post += '</div>';
            post += '</div>';
            post += '</a>';
            post += '</div>';
            post += '<a class="dropdown-item is-hidden">';
            post += '<div class="media">';
            post += '<i data-feather="bell"></i>';
            post += '<div class="media-content">';
            post += '<h3>Notify me</h3>';
            post += '<small>Send me the updates.</small>';
            post += '</div>';
            post += '</div>';
            post += '</a>';
            post += '<hr class="dropdown-divider is-hidden">';
            post += '<a href="#" class="dropdown-item is-hidden">';
            post += '<div class="media">';
            post += '<i data-feather="flag"></i>';
            post += '<div class="media-content">';
            post += '<h3>Flag</h3>';
            post += '<small>In case of inappropriate content.</small>';
            post += '</div>';
            post += '</div>';
            post += '</a>';
            post += '</div>';
            post += '</div>';
            post += '</div>';
            post += '<div class="card-body">';
            post += '<div class="post-text">';
            post += '<p>'+data.content+'<p>';
            post += '</div>';
            post += '<div class="post-actions">';
            post += '<div class="like-wrapper">';
            post += '<a href="javascript:void(0);" onclick="like_action('+data.id+')" id="action-like-'+data.id+'" class="like-button">';
            post += '<i class="mdi mdi-heart not-liked bouncy"></i>';
            post += '<i class="mdi mdi-heart is-liked bouncy"></i>';
            post += '<span class="like-overlay"></span>';
            post += '</a>';
            post += '</div>';
            post += '<div class="fab-wrapper is-comment">';
            post += '<a href="javascript:void(0);" class="small-fab">';
            post += '<i data-feather="message-circle"></i>';
            post += '</a>';
            post += '</div>';
            post += '</div>';
            post += '</div>';
            post += '<div class="card-footer">';
            post += '<div class="likers-group">';
            post += '</div>';
            post += '<div class="likers-text">';
            post += '<p>';
            post += '</p>';
            post += '</div>';
            post += '<div class="social-count">';
            post += '<div class="likes-count">';
            post += '<i data-feather="heart"></i>';
            post += '<span id="like-count-'+data.id+'">0</span>';
            post += '</div>';
            post += '<div class="comments-count">';
            post += '<i data-feather="message-circle"></i>';
            post += '<span id="comment-count-'+data.id+'" class="comment-counts-'+data.id+'">0</span>';
            post += '</div>';
            post += '</div>';
            post += '</div>';
            post += '</div>';
            post += '<div class="comments-wrap">';
            post += '<div class="comments-heading">';
            post += '<h4>Comments (<small class="comment-counts-'+data.id+'">0</small>)</h4>';
            post += '</div>';
            post += '<div class="comments-body has-slimscroll">';
            post += '</div>';
            post += '<form id="submit-comment-'+data.id+'" data-id="'+data.id+'">';
            post += '<div class="card-footer">';
            post += '<div class="media post-comment has-emojis">';
            post += '<div class="media-content">';
            post += '<div class="field">';
            post += '<p class="control">';
            post += '<textarea class="textarea comment-textarea"  rows="1" placeholder="Write a comment..."></textarea>';
            post += '</p>';
            post += '</div>';
            post += '<div class="actions">';
            post += '<div class="image is-32x32">';
            post += '<img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">';
            post += '</div>';
            post += '<div class="toolbar">';
            post += '<div class="action is-auto is-hidden">';
            post += '<i data-feather="at-sign"></i>';
            post += '</div>';
            post += '<div class="action is-emoji is-hidden">';
            post += '<i data-feather="smile"></i>';
            post += '</div>';
            post += '<div class="action is-upload is-hidden">';
            post += '<i data-feather="camera"></i>';
            post += '<input type="file">';
            post += '</div>';
            post += '<a class="button is-solid primary-button raised" onclick="post_comment('+data.id+')">Post Comment</a>';
            post += '</div>';
            post += '</div>';
            post += '</div>';
            post += '</div>';
            post += '</div>';
            post += '</form>';
            post += '</div>';
            post += '</div>';
                                                    
            reloadJs('assets/js/app.js');				
            reloadJs('assets/data/tipuedrop_content.js');				
            reloadJs('assets/js/global.js');				
            reloadJs('assets/js/main.js');					
            reloadJs('assets/js/lightbox.js');				
            reloadJs('assets/js/profile.js');		
            reloadJs('assets/js/widgets.js');	


            return post;			
                        
    }
    function reloadJs(src) {
        src = $('script[src$="' + src + '"]').attr("src");
        $('script[src$="' + src + '"]').remove();
        $('<script/>').attr('src', src).appendTo('head');
    }