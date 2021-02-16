@extends ('master')

@section ('body')
<form style="padding-top:200px">
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblStaff">Update Staff</label>
    </div>
  <div class="form-group row">
    <div class="form-group col-md-6">
      <label for="inputStaffID">Staff ID</label>
      <input type="text" class="form-control" id="inputStaffID" placeholder="Staff ID" readonly>
  </div>
  <div class="form-group col-md-6">
    <label for="selectPosition">Position</label>
      <div class="form-group col-md-12">
          <select id="selectPosition" name="selectPosition">
            <option value="position1">Position 1</option>
            <option value="position2">Position 2</option>
            <option value="position3">Position 3</option>
          </select>
      </div>
  </div>
  <div class="form-group col-md-6">
      <label for="inputFirstName">First Name</label>
      <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
  </div>
  <div class="form-group col-md-6">
    <label for="inputYearJoined">Year Joined</label>
    <input type="date" class="form-control" id="inputYearJoined" placeholder="Year Joined">
  </div>
  <div class="form-group col-md-6">
      <label for="inputLastName">Last Name</label>
      <input type="text" class="form-control" id="inputFirstName" placeholder="Last Name">
  </div>
  <div class="form-group col-md-6">
    <label for="inputYearEnd">Year End</label>
    <input type="date" class="form-control" id="inputYearEnd" placeholder="Year End">
  </div>
  <div class="form-group col-md-6">
  <label for="inputDateofBirth">Date of Birth</label>
  <input type="date" id="start" name="trip-start" class="form-control">
  </div>
  <div class="form-group col-md-6">
  <label for="inputUserCode">User Code</label>
  <input type="text" class="form-control" id="inputUserCode" placeholder="User Code">
  </div>
</div>

  <div class="form-group row">
    <label for="uploadPicture">Profile Picture</label>
    <input type="file" class="form-control-file" id="uploadPicture">
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
@endsection
