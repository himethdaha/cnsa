@extends ('master')

@section ('body')

@include ('errors')

<form method="post" action="{{url('injurylog')}}" style="padding-top:0px; text-align: center;">
  {{csrf_field()}}
  <h1>Injury Log</h1>
  <br/>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblInjuryLog">Create Injury Log</label>
    </div>
  <div class="form-group row">
    <label for="inputPlayerID">Player ID</label>
    <input type="text" class="form-control" name="player_id" placeholder="Player ID">
  </div>
  <div class="form-group row">
      <label for="inputInjuryDesc">Injury Description</label>
      <input type="text" class="form-control" name="injurydescription" placeholder="Injury Description">
  </div>
  <div class="form-group row">
    <label for="inputDate">Date</label>
    <input type="date" class="form-control" name="date">
  </div>
  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
  </form>
@endsection
