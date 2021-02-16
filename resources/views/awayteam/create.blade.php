@extends ('master')

@section ('body')
<form style="padding-top:70px">
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblAwayTeam">Away Team</label>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="selectTeam">Team</label>
          <div class="form-group col-md-12">
              <select id="selectTeam" name="selectTeam">
                <option value="team1">Team 1</option>
                <option value="team2">Team 2</option>
                <option value="team3">Team 3</option>
              </select>
          </div>
      </div>
      <div class="form-group col-md-6">
        <label for="inputSaves">Saves</label>
        <input type="text" class="form-control" id="inputSaves" placeholder="Saves">
      </div>
      <div class="form-group col-md-6">
        <label for="inputGoalsAttempted">Goals Attempted</label>
        <input type="text" class="form-control" id="inputGoalsAttempted" placeholder="Goals Attempted">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAssists">Assists</label>
        <input type="text" class="form-control" id="inputAssists" placeholder="Assists">
      </div>
      <div class="form-group col-md-6">
        <label for="inputGoalsMade">Goals Made</label>
        <input type="text" class="form-control" id="inputGoalsMade" placeholder="Goals Made">
      </div>
      <div class="form-group col-md-6">
        <label for="inputInjuries">Injuries</label>
        <input type="text" class="form-control" id="inputInjuries" placeholder="Injuries">
      </div>
      <div class="form-group col-md-6">
        <label for="inputYellowCard">Yellow Card</label>
        <input type="text" class="form-control" id="inputYellowCard" placeholder="Yellow Card">
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
