@extends ('master')

@section ('body')
@include ('errors')
<form method="post" action="{{url('stadiums')}}" style="padding-top:100px; text-align: center;" >
  {{csrf_field()}}
  <h1>Stadiums</h1>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblStadium">Create Stadium</label>
    </div>
  <div class="form-group row">
      <label for="inputStadiumName">Stadium Name</label>
      <input type="text" class="form-control" name="stadiumname" placeholder="Stadium Name">
  </div>
  <div class="form-group row">
      <label for="inputLocation">Location</label>
      <input type="text" class="form-control" name="location" placeholder="Location">
  </div>
  <div class="form-group row">
      <label for="inputTeamID">Team ID</label>
      <input type="text" class="form-control" name="team_id" placeholder="Team ID">
  </div>
  <div class="form-group row">
      <label for="inputCapacity">Maximum Capacity</label>
      <input type="text" class="form-control" name="maximumcapacity" placeholder="0">
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
@endsection
