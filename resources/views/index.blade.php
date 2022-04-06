@extends('templates.app')

@push('custom-css')
    <style>
        .post{
            width: 100%;
            height: auto;
            background: #fff;
            border: 1px solid #dfdfdf;
            margin-top: 40px;
        }

        .info{
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .info .username{
            width: auto;
            font-weight: bold;
            color: #000;
            font-size: 14px;
            margin-left: 10px;
        }

        .info .options{
            height: 10px;
            cursor: pointer;
        }

        .info .user{
            display: flex;
            align-items: center;
        }

        .info .profile-pic{
            height: 40px;
            width: 40px;
            padding: 0;
            background: none;
        }

        .info .profile-pic img{
            border: none;
        }

        .post-image{
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .post-content{
            width: 100%;
            padding: 20px;
        }

        .likes{
            font-weight: bold;
        }

        .description{
            margin: 10px 0;
            font-size: 14px;
            line-height: 20px;
        }

        .description span{
            font-weight: bold;
            margin-right: 10px;
        }

        .post-time{
            color: rgba(0, 0, 0, 0.5);
            font-size: 12px;
        }

        .comment-wrapper{
            width: 100%;
            height: 50px;
            border-radius: 1px solid #dfdfdf;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .comment-wrapper .icon{
            height: 30px;
        }

        .comment-box{
            width: 80%;
            height: 100%;
            border: none;
            outline: none;
            font-size: 14px;
        }

        .comment-btn,
        .action-btn{
            width: 70px;
            height: 100%;
            background: none;
            border: none;
            outline: none;
            text-transform: capitalize;
            font-size: 16px;
            color: rgb(0, 162, 255);
            opacity: 0.5;
        }

        .reaction-wrapper{
            width: 100%;
            height: 50px;
            display: flex;
            margin-top: -20px;
            align-items: center;
        }

        .reaction-wrapper .icon{
            height: 25px;
            margin: 0;
            margin-right: 20px;
        }

        .reaction-wrapper .icon.save{
            margin-left: auto;
        }
    </style>
@endpush

@section('content')
    <h1>Index page</h1>
    <div class="wrapper">
        <div class="left-col">
            // status wrappers

            <div class="post">
                <div class="info">
                    <div class="user">
                        <div class="profile-pic"><img src="img/cover 1.png" alt=""></div>
                        <p class="username">modern_web_channel</p>
                    </div>
                    <img src="img/option.PNG" class="options" alt="">
                </div>
                <img src="img/cover 1.png" class="post-image" alt="">
                <div class="post-content">
                    <div class="reaction-wrapper">
                        <img src="img/like.PNG" class="icon" alt="">
                        <img src="img/comment.PNG" class="icon" alt="">
                        <img src="img/send.PNG" class="icon" alt="">
                        <img src="img/save.PNG" class="save icon" alt="">
                    </div>
                    <p class="likes">1,012 likes</p>
                    <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident eum quo natus molestias?</p>
                    <p class="post-time">2 minutes ago</p>
                </div>
                <div class="comment-wrapper">
                    <img src="img/smile.PNG" class="icon" alt="">
                    <input type="text" class="comment-box" placeholder="Add a comment">
                    <button class="comment-btn">post</button>
                </div>
            </div>
            <div class="post">
                <div class="info">
                    <div class="user">
                        <div class="profile-pic"><img src="img/cover 2.png" alt=""></div>
                        <p class="username">modern_web_channel</p>
                    </div>
                    <img src="img/option.PNG" class="options" alt="">
                </div>
                <img src="img/cover 2.png" class="post-image" alt="">
                <div class="post-content">
                    <div class="reaction-wrapper">
                        <img src="img/like.PNG" class="icon" alt="">
                        <img src="img/comment.PNG" class="icon" alt="">
                        <img src="img/send.PNG" class="icon" alt="">
                        <img src="img/save.PNG" class="save icon" alt="">
                    </div>
                    <p class="likes">1,012 likes</p>
                    <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident eum quo natus molestias?</p>
                    <p class="post-time">2 minutes ago</p>
                </div>
                <div class="comment-wrapper">
                    <img src="img/smile.PNG" class="icon" alt="">
                    <input type="text" class="comment-box" placeholder="Add a comment">
                    <button class="comment-btn">post</button>
                </div>
            </div>
            // +5 more post elements
        </div>
    </div>
@endsection
