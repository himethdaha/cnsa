@extends ('master')

@section ('body')

<div class="col-sm-8">
  <h1>Register</h1>


  <form method="POST" action="/register">
    {​​​​​​​{​​​​​​​ csrf_field() }​​​​​​​}​​​​​​​

    <div class="form-group">
      <label for="email">Password Confirmation:</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>


    <div class="form-group">
      <label for="email">Password:</label>
      <input type="password" class="form-control" name="password" required>
    </div>


      <div class="form-group">
        <label for="name">Role:</label>
        <input type="text" class="form-control" name="role" required>
      </div>


      <div class="form-group">
        <label for="name">isActive:</label>
        <input type="text" class="form-control" name="isActive" required>
      </div>


    <div class="form-group">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
      @include ('errors')

  </form>
</div>
@endsection
