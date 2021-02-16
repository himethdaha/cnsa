@extends ('master')

@section ('body')
@include ('errors')
<form method="post" action="{{url('players')}}" style="padding-top:0px; text-align: center;">
  {{csrf_field()}}
  <h1>Player History</h1>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblPlayerHistory">Update</label>
    </div>
  <div class="form-group row">
      <label for="inputPlayerID">Player ID</label>
      <input type="text" class="form-control" value="{{$playerhistory-> player_id}}" name="player_id" placeholder="Enter Player ID">
  </div>
  <div class="form-group row">
    <label for="inputPlayerID">Team ID</label>
    <input type="text" class="form-control" value="{{$playerhistory-> team_id}}" name="injurydescription" placeholder="Enter Team ID">
  </div>
  <div class="form-group row">
    <label for="inputYearJoined">Year Joined</label>
    <input type="text" class="form-control" value="{{$playerhistory-> yearjoined}}" name="yearjoined" placeholder="Enter Year Joined">
  </div>
  <div class="form-group row">
    <label for="inputPositionCode">Position Code</label>
    <input type="text" class="form-control" value="{{$playerhistory-> position_code}}" name="position_code" placeholder="Enter Year Position Code">
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
@endsection
