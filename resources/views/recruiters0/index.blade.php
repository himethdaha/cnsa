@extends ('master-user')

@section ('body')
<form style="padding-top:50px">
  <div class="form-signin text-center">
    <div class="form-row">
      <div class="form-row">
        <h1>Welcome Recruiter!</h1>
        <form>
          <button type="submit" class="create" hidden="true">Create</button>
        </form>
        <form action="/create">
          <button type="submit" class="btn btn-danger navbar-btn login-btn">Create</button>
        </form>
        <form action="/update">
          <button type="submit" class="btn btn-danger navbar-btn login-btn">Update</button>
        </form>
        <form action="/show">
          <button type="submit" class="btn btn-danger navbar-btn login-btn">Show</button>
        </form>
      </div>
    </div>
  </div>
</form>
@endsection
