<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>投稿</title>
</head>
<body>
<form action="/post" method="post">
        {{ csrf_field() }}

        <!-- value仮入れ(Userモデルとリレーションするのに必要) -->
        <input type="hidden" name="user_id" value="1">
        @if($errors->has('title'))
            <div class="error_msg">{{ $errors->first('title') }}</div>
        @endif
        <input type="text" class="form" name="title" placeholder="タイトル" value="{{ old('title') }}">

        @if($errors->has('message'))
            <div class="error_msg">{{ $errors->first('message') }}</div>
        @endif
        <div>
            <textarea class="form" name="message" placeholder="メッセージ">{{ old('message') }}</textarea>
        </div>
        <input type="submit" class="create" value="投  稿">
    </form>

    <!-- 記事描画部分 -->
    @if(count($blogs) > 0)
        @foreach($blogs as $blog)
            <div class="alert alert-primary" role="alert">
                <a href="/post/{{ $blog->id }}" class="alert-link">{{ $blog->title }}</a>
                <form action="/post/{{ $blog->id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="delete" value="削除">
                </form>
            </div>
        @endforeach
    @else
        <div>投稿記事がありません</div>
    @endif
</body>
</html>