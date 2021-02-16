@extends ('master')

@section ('body')
<form style="padding-top:120px">
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblGameInfo">Update Game Info</label>
    </div>
    <div class="form-row">
      <div class="form-group row-2">
        <label for="inputGameID">Game ID</label>
        <input type="text" class="form-control" id="inputGameID" placeholder="Game ID" readonly>
      </div>
      <div class="form-group col-md-6">
          <label for="inputHomeTeamID">Home Team ID</label>
          <input type="text" class="form-control" id="inputHomeTeamID" placeholder="Home Team ID" readonly>
      </div>
      <div class="form-group col-md-6">
          <label for="inputAwayTeamID">Away Team ID</label>
          <input type="text" class="form-control" id="inputAwayTeamID" placeholder="Away Team ID" readonly>
      </div>
      <div class="form-group col-md-6">
          <label for="inputStadiumID">Stadium ID</label>
          <input type="text" class="form-control" id="inputStadiumID" placeholder="Stadium ID" readonly>
      </div>
      <div class="form-group col-md-6">
          <label for="inputAttendance">Attendance</label>
          <input type="text" class="form-control" id="inputAttendance" placeholder="0">
      </div>
      <div class="form-group col-md-6">
        <label for="inputDate">Date</label>
        <input type="date" class="form-control" id="inputDate">
      </div>
      <div class="form-group col-md-6">
          <label for="inputDuration">Duration</label>
          <input type="text" class="form-control" id="inputDuration" placeholder="0">
      </div>
  </div>

    <div class="form-group row">
      <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
@endsection
</form>
