@extends ('master')

@section ('body')
@include ('errors')

<form method="post" action="{{url('schools')}}" style="padding-top:100px; text-align: center;" >
  {{csrf_field()}}
  <h1>Schools</h1>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblSchool">Create School</label>
    </div>
  <div class="form-group row">
      <label for="inputSchoolName">School Name</label>
      <input type="text" class="form-control" name="schoolname" placeholder="School Name">
  </div>
  <div class="form-group row">
      <label for="inputSchoolType">School Type</label>
      <input type="text" class="form-control" name="schooltype" placeholder="School Type">
  </div>
  <div class="form-group row">
      <label for="inputLocation">Location</label>
      <input type="text" class="form-control" name="location" placeholder="Location">
  </div>

  <div class="form-group row">
    <label for="uploadPicture">School Logo</label>
    <input type="file" class="form-control-file" id="uploadPicture">
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
@endsection
