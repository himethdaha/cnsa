@extends ('master')

@section ('body')

<form style="padding-top:4000px; text-align: center;" >
  <h1>Player Information</h1>
  </br>
<div class="form-signin">
  <div>
    <div align="right">
     <a href="{{route('player.create')}}" class="btn btn-primary">Add</a>
    </div>

  </div>
</br>
  <div class="row">
<table class="table table-striped">
<thead>
  <tr>
    <th scope="col">Player ID</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Birthdate</th>
    <th scope="col">Gender</th>
    <th scope="col">Height</th>
    <th scope="col">Weight</th>
    <th scope="col">School ID</th>
    <th scope="col">Edit</th>
  </tr>
</thead>
<tbody>
  @foreach ($players as $row)
        <tr>
          <td>{{ $row['playerid'] }}</td>
          <td>{{ $row['firstname'] }}</td>
          <td>{{ $row['lastname'] }}</td>
          <td>{{ $row['birthdate'] }}</td>
          <td>{{ $row['gender'] }}</td>
          <td>{{ $row['height'] }}</td>
          <td>{{ $row['weight'] }}</td>
          <td>{{ $row['school_id'] }}</td>
          <td><a href="{{action('PlayersController@edit', $row['playerid'])}}" class="btn btn-warning">Edit</td>
        </tr>
  @endforeach
</tbody>
</table>
  </div>
  <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item active">
      <span class="page-link">
        1
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item"><a class="page-link" href="">2</a></li>
    <li class="page-item"><a class="page-link" href="">3</a></li>
    <li class="page-item">
      <a class="page-link" href="">Next</a>
    </li>
  </ul>
</nav>
</div>
</br>
</form>
  @endsection
