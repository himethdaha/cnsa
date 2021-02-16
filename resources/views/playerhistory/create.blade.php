@extends ('master')

@section ('body')
@include ('errors')
<form  method="post" action="{{url('playerhistory')}}" style="padding-top:0px; text-align: center;">
{{csrf_field()}}
<h1>Player History Information</h1>
<br/>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblPlayer">Create Player History Information</label>
    </div>
    <div class="form-group">
      <label for="playerID">Player ID</label>
         <input type="text" class="form-control" name="player_id" placeholder="Player ID">
    </div>
  <div class="form-group">
    <label for="teamID">Team ID</label>
       <input type="text" class="form-control" name="team_id" placeholder="Team ID">
  </div>
<div class="form-group">
  <label for="inputGender">Year Joined</label>
  <input type="date" class="form-control" name="yearjoined" placeholder="Year Joined">
</div>
<div class="form-group">
  <label for="inputHeight">Position Code</label>
  <input type="text" class="form-control" name="position_code" placeholder="Position Code">
</div>
  <div class="form-group row">
    <div class="form-group col-md-12">
    <button type="submit" class="btn btn-primary">Create</button>
  </div>
</div>
  </div>
</form>
@endsection
