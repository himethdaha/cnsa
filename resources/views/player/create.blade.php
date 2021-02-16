@extends ('master')

@section ('body')
@include ('errors')

<form  method="post" action="{{url('player')}}" style="padding-top:0px; text-align: center;">
{{csrf_field()}}
<h1>Player Information</h1>
<br/>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblPlayer">Create Player Information</label>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
          <label for="inputFirstName">First Name</label>
          <input type="text" class="form-control" name="firstname" placeholder="First Name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputLastName">Last Name</label>
           <input type="text" class="form-control" name="lastname" placeholder="Last Name">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
          <label for="inputGender">Gender</label>
          <input type="text" class="form-control" name="gender" placeholder="Gender">
        </div>
      <div class="form-group col-md-6">
        <label for="inputDateofBirth">Date of Birth</label>
        <input type="date" class="form-control" name="birthdate">
      </div>
      <div class="form-group col-md-6">
        <label for="inputHeight">Height</label>
        <input type="text" class="form-control" name="height" placeholder="Height">
      </div>
      <div class="form-group col-md-6">
        <label for="inputWeight">Weight</label>
        <input type="text" class="form-control" name="weight" placeholder="Weight">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputSchoolID">School ID</label>
      <input type="text" class="form-control" name="school_id" placeholder="School ID">
    </div>
    <div class="form-group col-md-6">
      <label for="uploadPicture">Profile Picture</label>
      <input type="file" class="form-control-file" name="playerpic">
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
