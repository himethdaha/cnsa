@extends ('master')

@section ('body')
@include ('errors')

<form  method="post" action="{{url('manager')}}" style="padding-top:0px; text-align: center;">
{{csrf_field()}}
<h1>Team Manager Information</h1>
<br/>
  <div class="form-signin text-center">
    <div class="form-row">
      <label for="lblPlayer">Create Team Manager Information</label>
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
        <label for="inputDateofBirth">Date of Birth</label>
        <input type="date" class="form-control" name="birthdate">
      </div>
      <div class="form-group col-md-6">
        <label for="inputDateofBirth">User Code</label>
         <input type="text" class="form-control" name="user_code" placeholder="User Code">
      </div>
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
