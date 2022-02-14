<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="/css/app.css" rel="stylesheet">
  <script>
    axios.get('/sanctum/csrf-cookie').then(response => {
    // Login...
    });
  </script>
</head>

<body class="flex justify-center items-center h-56>
  <div class="container mx-auto">
    <form class="form-signin" method="post" action="/login">
      @csrf
      <h1 class="mb-3 font-weight-normal">ログイン</h1>

        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <label for="inputEmail" class="sr-only">Email address</label>
      <div class="border-sky-500 h3 mb-3">
        <input  type="email"
                id="inputEmail" 
                name="email" 
                class="form-control" 
                placeholder="Email address" 
                required 
                autofocus 
                pattern="^[a-zA-Z0-9.!#$&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$">
        <label for="inputPassword" class="sr-only">Password</label>
      </div>

      <div class="border-sky-500 h3 mb-3">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required minlength="8" size="30">
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      
      <button class="bg-sky-500 text-white py-2 px-4 rounded">ログイン</button>
    </form>
  </div>
</body>
</html>