<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>投稿詳細</title>
</head>
<body>
  @if($item !== '')
          <div class="headcopy">Title</div><hr>
          <div class="text">{{ $blog->title }}</div>

          <div class="headcopy">Message</div><hr>
          <div class="text">{{ $blog->message }}</div>
      @endif

      <!-- <a href="/post"><img src="{{ asset('img/edit.svg') }}" class="add" alt="topへ"></a> -->
</body>
</html>