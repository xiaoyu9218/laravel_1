<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>登録画面</title>
</head>
<body class="flex justify-center items-center h-56>
  <div class="container mx-auto">
    <form name="registform" action="/register" method="post" id="registform">
        {{ csrf_field() }}  
        <!-- //CSRFトークンを挿入するための記述。送信時に値チェックされる -->
        <dl>
            <dt>名前:</dt>
            <dd>
                <input 
                  type="text" 
                  name="name" 
                  size="30"
                  placeholder="山田 太郎"
                  required
                  autofocus
                  >
                <span>{{ $errors->first('name') }}</span>
            </dd>
        </dl>
        <dl>
            <dt>メールアドレス:※必須</dt>
            <dd>
                <input 
                  type="text" 
                  name="email" 
                  size="30"
                  placeholder="Email address" 
                  required 
                  pattern="^[a-zA-Z0-9.!#$&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$">
                <span>{{ $errors->first('email') }}</span>
            </dd>
        </dl>
        <dl>
            <dt>パスワード:</dt>
            <dd>
                <input type="password" name="password" size="30" placeholder="Password" required minlength="8">
                <span>{{ $errors->first('password') }}</span>
            </dd>
        </dl>
            <dt>パスワード（確認）:</dt>
            <dd>
                <input type="password" name="password_confirmation" size="30" placeholder="Password確認用" required minlength="8">
                <span>{{ $errors->first('password_confirmation') }}</span>
            </dd>
        </dl>
        <button type="submit" name="action" value="send">送信</button>
    </form>
  </div>
</body>
</html>