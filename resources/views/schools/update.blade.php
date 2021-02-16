@extends ('master')

@section ('body')
<form style="padding-top:200px">
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblSchool">Update School</label>
    </div>
  <div class="form-group row">
      <label for="inputSchoolID">School ID</label>
      <input type="text" class="form-control" id="inputSchoolID" placeholder="School ID" readonly>
  </div>
  <div class="form-group row">
      <label for="inputSchoolName">School Name</label>
      <input type="text" class="form-control" id="inputSchoolName" placeholder="School Name">
  </div>
  <div class="form-group row">
      <label for="inputSchoolType">School Type</label>
      <input type="text" class="form-control" id="inputSchoolType" placeholder="School Type">
      <div class="form-group row-12">
        <input type="radio" id="college" name="school" value="college">
          <label for="college">College</label>
        <input type="radio" id="university" name="school" value="university">
          <label for="university">University</label>
      </div>
  </div>
  <div class="form-group row">
      <label for="inputLocation">Location</label>
      <input type="text" class="form-control" id="inputLocation" placeholder="Location">
  </div>

  <div class="form-group row">
    <label for="uploadPicture">School Logo</label>
    <input type="file" class="form-control-file" id="uploadPicture">
  </div>

  <div class="form-group row">
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
@endsection
