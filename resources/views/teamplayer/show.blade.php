@extends ('master-user')

@section ('body')
<form style="padding-top:3500px; text-align: center;" >
  <h1>Player Information</h1>
  </br>
<div class="form-signin">
  <div class="row">
      <div class="col-md-2">
          <input type="text" class="p-3 mb-1 bg-danger text-white"  style="align:center;"value="13">
      </div>
      <div class="col-md-2">
          <input type="text" class="p-3 mb-2 bg-danger text-white" value="Jack Windsor">
      </div>
  </div>
</br>
<div class="row justify-content-end">
<div class="row">
  <div class="col-md-8">
    <img style="float: right;" src="/images/63.jpg" alt="..." height="200px;" width="100px;">
  </div>
</div>
<div class="col-md-4">
    <label for="inputDateofBirth">Date of Birth</label>
    <input type="date" id="start" name="trip-start" class="form-control">
</div>
  <div class="col-md-4">
    <label for="inputGender">Gender</label>
   <input type="text" class="form-control" id="inputGender" placeholder="Gender">
 </div>
</div>
<div class="row justify-content-end">
  <div class="col-md-4 offset-md-4">
      <label for="inputHeight">Height</label>
      <input type="text" class="form-control" id="inputHeight" placeholder="Height">
  </div>
 <div class="col-md-4">
   <label for="inputWeight">Weight</label>
   <input type="text" class="form-control" id="inputWeight" placeholder="Weight">
 </div>
 </div>
 <div class="row justify-content-end">
   <div class="col-md-4 offset-md-4">
     <label for="inputWeight">Weight</label>
     <input type="text" class="form-control" id="inputWeight" placeholder="Weight">
   </div>
</br>
<table class="table table-striped">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Year Joined</th>
    <th scope="col">Year End</th>
    <th scope="col">Team Name</th>
    <th scope="col">Position</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">1</th>
    <td>2014</td>
    <td>2015</td>
    <td>Team Pheonix</td>
    <td>Asistant Coach</td>
  </tr>
  <tr>
    <th scope="row">2</th>
    <td>2015</td>
    <td>2017</td>
    <td>Team Pheonix</td>
    <td>Head Coach</td>
  </tr>
  <tr>
    <th scope="row">3</th>
    <td>2018</td>
    <td>2020</td>
    <td>Team Dark Panther</td>
    <td>Head Coach</td>
  </tr>
</tbody>
</table>
</div>
</div>
</br>
</form>
@endsection
