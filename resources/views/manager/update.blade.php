@extends ('master')

@section ('body')
<form style="padding-top:200px">
  <div class="form-signin text-center">
  <div class="form-group row">
      <label for="inputManagerID">Update Manager</label>
      <input type="text" class="form-control" id="inputManagerID" placeholder="Manager ID" readonly>
  </div>
  <div class="form-group row">
      <label for="inputFirstName">First Name</label>
      <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
  </div>
  <div class="form-group row">
      <label for="inputLastName">Last Name</label>
      <input type="text" class="form-control" id="inputFirstName" placeholder="Last Name">
  </div>
  <div class="form-group row">
  <label for="inputDateofBirth">Date of Birth</label>
  <input type="date" class="form-control" id="inputDateofBirth">
  </div>
  <div class="form-group row">
  <label for="inputUserCode">User Code</label>
  <input type="text" class="form-control" id="inputUserCode" placeholder="User Code">
  </div>

  <div class="form-group row">
    <label for="uploadPicture">Profile Picture</label>
    <input type="file" class="form-control-file" id="uploadPicture">
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
@endsection
