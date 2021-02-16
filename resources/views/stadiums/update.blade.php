@extends ('master')

@section ('body')
<form style="padding-top:200px">
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblStadium">Update Stadium</label>
    </div>
  <div class="form-group row">
      <label for="inputStadiumID">Stadium ID</label>
      <input type="text" class="form-control" id="inputStadiumID" placeholder="Stadium ID" readonly>
  </div>
  <div class="form-group row">
      <label for="inputStadiumName">Stadium Name</label>
      <input type="text" class="form-control" id="inputStadiumName" placeholder="Stadium Name">
  </div>
  <div class="form-group row">
      <label for="inputLocation">Location</label>
      <input type="text" class="form-control" id="inputLocation" placeholder="Location">
  </div>
  <div class="form-group row">
      <label for="inputTeamID">Team ID</label>
      <input type="text" class="form-control" id="inputTeamID" placeholder="Team ID" readonly>
  </div>
  <div class="form-group row">
      <label for="inputCapacity">Maximum Capacity</label>
      <input type="text" class="form-control" id="inputCapacity" placeholder="0">
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
@endsection
