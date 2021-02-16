@extends ('master')

@section ('body')
@include ('errors')
<form method="post" action="{{action('InjuryLogController@update', $injuryid)}}" style="padding-top:0px; text-align: center;">
  {{csrf_field()}}
  <h1>Injury Log</h1>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblInjuryLog">Update Injury Log</label>
    </div>
  <div class="form-group row">
      <label for="inputPlayerID">Player ID</label>
      <input type="text" class="form-control" value="{{$injurylog-> player_id}}" name="player_id" placeholder="Enter Player ID">
  </div>
  <div class="form-group row">
    <label for="inputInjuryDesc">Injury Description</label>
    <input type="text" class="form-control" value="{{$injurylog-> injurydescription}}" name="injurydescription" placeholder="Enter Injury Description">
  </div>
  <div class="form-group row">
    <label for="inputDate">Date</label>
    <input type="date" class="form-control" value="{{$injurylog-> date}}" name="date">
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
@endsection
