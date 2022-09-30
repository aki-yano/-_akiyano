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
       <form action="/posts" method="POST">
           @csrf
           <div class="title">
               <h2>Title</h2>
               <input type="text" name=post[title]> placeholder="タイトル" value="{{ old('post.title') }}"/>
               <p class="tite__error" style="color:red">{{ $errors->first('post.title') }}</p>
           </div>
           <div class="body">
               <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。">{{ old('post.title') }}</textarea>
               <p class="body__error" style="color:red">{{ $errors->first('post.title') }}</p>
           </div>
           <input type="submit" value="stroe">
       </form>
       <div class='footer'>
           <a href="/">戻る</a>
       </div>
    </body>
</html>
