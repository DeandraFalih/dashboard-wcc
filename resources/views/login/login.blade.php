<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Dashboard</title>
  <link rel="stylesheet" href="./css/login.css">
</head>

<body class="align">
    <div class="grid">
        <h3 class="login__title">Login</h3>
      <form action="/" method="post" class="form login">
        {{-- <header class="login__header">
          <h3 class="login__title">Login</h3>
        </header> --}}
        <div class="login__body">
          <div class="form__field">
            <input type="email" placeholder="Email" required>
          </div>
          <div class="form__field">
            <input type="password" placeholder="Password" required>
          </div>
        </div>
  
        <footer class="login__footer">
          <input style="align-center" type="submit" value="Login">
        </footer>
      
    </form>
  </div>
</body>