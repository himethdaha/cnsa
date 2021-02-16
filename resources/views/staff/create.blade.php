@extends ('master')

@section ('body')
@include ('errors')
<form method="post" action="{{url('staff')}}" style="padding-top:0px; text-align: center;" >
  {{csrf_field()}}
  <h1>Stadiums</h1>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblStadium">Create Staff Information</label>
    </div>
  </div>
  <div class="form-group row">
      <label for="inputStadiumName">First Name</label>
      <input type="text" class="form-control" name="firstname" placeholder="First Name">
  </div>
  <div class="form-group row">
      <label for="inputStadiumName">Last Name</label>
      <input type="text" class="form-control" name="lastname" placeholder="Last Name">
  </div>
  <div class="form-group row">
      <label for="inputLocation">Position Code</label>
      <input type="text" class="form-control" name="position_code" placeholder="PositionCode">
  </div>
  <div class="form-group row">
      <label for="inputTeamID">Year Entered</label>
      <input type="year" class="form-control" name="yearentered" placeholder="Year Entered">
  </div>
  <div class="form-group row">
      <label for="inputCapacity">User Code</label>
      <input type="text" class="form-control" name="user_code" placeholder="0">
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
@endsection
