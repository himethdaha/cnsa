@extends ('master')

@section ('body')
@include ('errors')

<form  method="post" action="{{url('teams')}}" style="padding-top:30px; text-align: center;">
{{csrf_field()}}
<h1>Team Information</h1>
<br/>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblPlayer">Create Team Information</label>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
          <label for="inputTeamName">Team Name</label>
          <input type="text" class="form-control" name="teamname" placeholder="Team Name">
      </div>

    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputDateCreated">Date Created</label>
        <input type="date" class="form-control" name="datecreated">
      </div>

    </div>
    <div class="form-row">

    <div class="form-group col-md-6">
      <label for="uploadPicture">Team Logo</label>
      <input type="file" class="form-control-file" name="teamlogo">
    </div>
    </div>
    <div class="form-group row">
      <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </div>
</div>
</form>
@endsection
