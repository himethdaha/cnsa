@extends ('master')

@section ('body')
@include ('errors')

<form method="post" action="{{url('incidentlog')}}" style="padding-top:0px; text-align: center;">
  {{csrf_field()}}
  <h1>Incident Log</h1>
  <br/>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblIncidentLog">Create Incident Log</label>
    </div>
    <div class="form-group row">
      <label for="inputIncidentCode">Incident Code</label>
      <input type="text" class="form-control" name="incident_code" placeholder="Incident Code">
    </div>
    <div class="form-group row">
      <label for="inputDate">Date</label>
      <input type="date" class="form-control" name="date">
    </div>
    <div class="form-group row">
      <label for="inputPlayerID">Player ID</label>
      <input type="text" class="form-control" name="player_id" placeholder="Player ID">
    </div>
    <div class="form-group row">
      <label for="inputStaffID">Staff ID</label>
      <input type="text" class="form-control" name="staff_id" placeholder="Staff ID">
    </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="button" class="btn btn-code">Code Description</button>
    </div>
  </div>
  </form>
@endsection
