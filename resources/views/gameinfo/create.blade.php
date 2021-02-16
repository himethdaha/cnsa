@extends ('master')

@section ('body')
@include ('errors')
<form method="post" action="{{url('gameinfo')}}" style="padding-top:0px; text-align: center;" >
  {{csrf_field()}}
  <h1>Game Info</h1>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblGameInfo">Create Game Info</label>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
          <label for="inputHomeTeamID">Home Team ID</label>
          <input type="text" class="form-control" name="hometeamid" placeholder="Home Team ID">
      </div>
      <div class="form-group col-md-6">
          <label for="inputAwayTeamID">Away Team ID</label>
          <input type="text" class="form-control" name="awayteamid" placeholder="Away Team ID">
      </div>
      <div class="form-group col-md-6">
          <label for="inputStadiumID">Attendance</label>
          <input type="text" class="form-control" name="attendance" placeholder="Attendance">
      </div>
      <div class="form-group col-md-6">
          <label for="inputAttendance">Date</label>
          <input type="date" class="form-control" name="date" placeholder="y-m-d">
      </div>
      <div class="form-group col-md-6">
          <label for="inputAttendance">Duration</label>
          <input type="text" class="form-control" name="duration" placeholder="00:00:00">
      </div>

    <div class="form-group row">
      <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </div>
  </form>
@endsection
