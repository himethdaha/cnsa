@extends ('master')

@section ('body')

<form method="POST" action="/login">
      {{ csrf_field() }}
<div class="form-login bg-dark text-white">
  <div class="text-center">
    <img class="mb-4" src="/images/logo2.jpg" alt="" width="110" height="130">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <div class="mb-2">
      <label for="inputUsercode" class="sr-only">User Code</label>
      <input type="text" name="usercode" class="form-login-control" placeholder="User Code" required autofocus>
   </div>
     <div class="mb-2">
       <label for="inputPassword" class="sr-only">Password</label>
       <input type="password" name="password" class="form-login-control" placeholder="Password" required>
     </div>


    <button class="btn btn-lg btn-primary bg-danger" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  </div>
</div>
  @include ('errors')
</form>
@endsection
