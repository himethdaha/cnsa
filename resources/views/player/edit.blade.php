@extends ('master')

@section ('body')
@include ('errors')
<form method="post" action="{{action('PlayersController@update', $playerid)}}" style="padding-top:0px; text-align: center;">
  {{csrf_field()}}
  <h1>Player Information</h1>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblPlaterHistory">Update Player Information</label>
    </div>
  <div class="form-group row">
      <label for="inputPlayerID">Player ID</label>
      <input type="text" class="form-control" value="{{$player-> playerid}}" name="playerid" placeholder="Enter Player ID" readonly>
  </div>
  <div class="form-group row">
    <label for="inputInjuryDesc">First Name</label>
    <input type="text" class="form-control" value="{{$player-> firstname}}" name="firstname" placeholder="Enter player first name">
  </div>
  <div class="form-group row">
    <label for="inputInjuryDesc">Last Name</label>
    <input type="text" class="form-control" value="{{$player-> lastname}}" name="lastname" placeholder="Enter player last name">
  </div>
  <div class="form-group row">
  <div class="form-group col-md-4">
    <label for="inputSchoolID">School ID</label>
    <input type="text" class="form-control" value="{{$player-> school_id}}" name="school_id" placeholder="Enter School ID">
  </div>
  <div class="form-group col-md-4">
    <label for="inputHeight">Height</label>
    <input type="text" class="form-control" value="{{$player-> height}}" name="height" placeholder="Enter Height">
  </div>
  <div class="form-group col-md-4">
    <label for="inputWeight">Weight</label>
    <input type="text" class="form-control" value="{{$player-> weight}}" name="weight" placeholder="Enter Weight">
  </div>
</div>
  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
@endsection
