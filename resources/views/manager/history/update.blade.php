@extends ('master')

@section ('body')
<form style="padding-top:200px">
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblManagerHistory">Update Manager History</label>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
          <label for="inputManagerHistoryID">Manager History ID</label>
          <input type="text" class="form-control" id="inputManagerHistoryID" placeholder="Manager History ID" readonly>
      </div>
      <div class="form-group col-md-6">
          <label for="inputManagerID">Manager ID</label>
          <input type="text" class="form-control" id="inputManagerID" placeholder="Manager ID" readonly>
      </div>
      <div class="form-group col-md-6">
          <label for="inputTeamID">Team ID</label>
          <input type="text" class="form-control" id="inputTeamID" placeholder="Team ID" readonly>
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
        <label for="inputYearJoined">Year Joined</label>
        <input type="date" class="form-control" id="inputYearJoined" placeholder="Year Joined">
      </div>
      <div class="form-group col-md-6">
        <label for="inputYearEnd">Year End</label>
        <input type="date" class="form-control" id="inputYearEnd" placeholder="Year End">
      </div>
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
@endsection
