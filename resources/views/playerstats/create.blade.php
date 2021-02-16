@extends ('master')

@section ('body')
<form style="padding-top:200px">
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblPlayerStats">Create Player Stats</label>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
          <label for="inputPlayerStatsID">Player Stats ID</label>
          <input type="text" class="form-control" id="inputPlayerStatsID" placeholder="Player Stats ID" readonly>
      </div>
      <div class="form-group col-md-6">
        <label for="inputSaves">Saves</label>
        <input type="text" class="form-control" id="inputSaves" placeholder="Saves">
      </div>
      <div class="form-group col-md-6">
          <label for="inputPlayerID">Player ID</label>
          <input type="text" class="form-control" id="inputPlayerID" placeholder="Player ID" readonly>
      </div>
      <div class="form-group col-md-6">
        <label for="inputAssists">Assists</label>
        <input type="text" class="form-control" id="inputAssists" placeholder="Assists">
      </div>
      <div class="form-group col-md-6">
        <label for="selectPosition">Position</label>
          <div class="form-group col-md-12">
              <select id="selectPosition" name="selectPosition">
                <option value="position1">Position 1</option>
                <option value="position2">Position 2</option>
                <option value="position3">Position 3</option>
              </select>
          </div>
      </div>
      <div class="form-group col-md-6">
        <label for="inputInjuries">Injuries</label>
        <input type="text" class="form-control" id="inputInjuries" placeholder="Injuries">
      </div>
      <div class="form-group col-md-6">
        <label for="inputGoalsAttempted">Goals Attempted</label>
        <input type="text" class="form-control" id="inputGoalsAttempted" placeholder="Goals Attempted">
      </div>
      <div class="form-group col-md-6">
        <label for="inputYellowCard">Yellow Card</label>
        <input type="text" class="form-control" id="inputYellowCard" placeholder="Yellow Card">
      </div>
      <div class="form-group col-md-6">
        <label for="inputGoalsMade">Goals Made</label>
        <input type="text" class="form-control" id="inputGoalsMade" placeholder="Goals Made">
      </div>
      <div class="form-group col-md-6">
        <label for="inputRedCard">Red Card</label>
        <input type="text" class="form-control" id="inputRedCard" placeholder="Red Card">
      </div>
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
@endsection
