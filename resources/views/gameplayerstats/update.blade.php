@extends ('master')

@section ('body')
<form style="padding-top:120px">
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblGameInfo">Update Game Player Stats</label>
    </div>
    <div class="form-group row">
      <label for="inputStatsID">Stats ID</label>
      <input type="text" class="form-control" id="inputStatsID" placeholder="Stats ID" readonly>
    </div>
    <div class="form-group row">
      <label for="inputGameID">Game ID</label>
      <input type="text" class="form-control" id="inputGameID" placeholder="Game ID" readonly>
    </div>
    <div class="form-group row">
      <label for="inputPlayerStatsID">Player Stats ID</label>
      <input type="text" class="form-control" id="inputPlayerStatsID" placeholder="Player Stats ID" readonly>
    </div>

    <div class="form-group row">
      <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
@endsection
</form>
