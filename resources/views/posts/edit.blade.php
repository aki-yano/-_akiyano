<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
       <form action="/posts/{{ $post->id }}" method="POST">
           @csrf
           @method('PUT')
           <div class="title">
               <h2>Title</h2>
               <input type="text" name=post[title] placeholder="タイトル" value={{ $post->title }}/>
               <p class="tite__error" style="color:red">{{ $errors->first('post.title') }}</p>
           </div>
           <div class="body">
               <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。">{{ $post->body }}</textarea>
               <p class="body__error" style="color:red">{{ $errors->first('post.title') }}</p>
           </div>
           <input type="submit" value="update">
       </form>
       <div class='footer'>
           <a href="/posts/{{ $post->id }}">戻る</a>
       </div>
    </body>
</html>