@extends ('master')

@section ('body')
@include ('errors')
<form method="post" action="{{action('IncidentLogController@update', $incidentlogid)}}" style="padding-top:100px; text-align: center;">
  {{csrf_field()}}
  <h1>Incident Log</h1>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblIncidentLog">Update Incident Log</label>
    </div>
  <div class="form-group row">
      <label for="inputIncidentCode">Incident Code</label>
      <input type="text" class="form-control" value="{{$incidentlog-> incident_code}}" name="incident_code" placeholder="Enter Incident Code">
  </div>
  <div class="form-group row">
    <label for="inputDate">Date</label>
    <input type="date" class="form-control" value="{{$incidentlog-> date}}" name="date">
  </div>
  <div class="form-group row">
      <label for="inputPlayerID">Player ID</label>
      <input type="text" class="form-control" value="{{$incidentlog-> player_id}}" name="player_id" placeholder="Enter Player ID">
  </div>
  <div class="form-group row">
      <label for="inputStaffID">Staff ID</label>
      <input type="text" class="form-control" value="{{$incidentlog-> staff_id}}" name="staff_id" placeholder="Enter Staff ID">
  </div>
  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="button" class="btn btn-code">Code Description</button>
    </div>
  </div>
  </form>
@endsection
