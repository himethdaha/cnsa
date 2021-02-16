@extends ('master')

@section ('body')
<form style="padding-top:200px">
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblTeam">Update Team</label>
    </div>
  <div class="form-group row">
      <label for="inputTeamID">Team ID</label>
      <input type="text" class="form-control" id="inputTeamID" placeholder="Team ID" readonly>
  </div>
  <div class="form-group row">
      <label for="inputTeamName">Team Name</label>
      <input type="text" class="form-control" id="inputTeamName" placeholder="Team Name">
  </div>

  <div class="form-group row">
  <label for="inputDateCreated">Date Created</label>
  <input type="date" id="start" name="trip-start" class="form-control">
  </div>

  <div class="form-group row">
    <label for="uploadPicture">Team Logo</label>
    <input type="file" class="form-control-file" id="uploadPicture">
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
@endsection
