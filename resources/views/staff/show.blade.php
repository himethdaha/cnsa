@extends ('master')

@section ('body')

<form style="padding-top:3500px; text-align: center;" >
  <h1>Player Information</h1>
  </br>
<div class="form-signin">
  <div>
    <div align="right">
    </div>

  </div>
</br>
  <div class="row">
<table class="table table-striped">
<thead>
  <tr>
    <th scope="col">Staff ID</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Position Code</th>
    <th scope="col">Year Entered</th>
    <th scope="col">User Code</th>
    <th scope="col">Birthdate</th>
  </tr>
</thead>
<tbody>
  @foreach ($staffs as $row)
        <tr>
          <td>{{ $row['staffid'] }}</td>
          <td>{{ $row['firstname'] }}</td>
          <td>{{ $row['lastname'] }}</td>
          <td>{{ $row['position_code'] }}</td>
          <td>{{ $row['yearentered'] }}</td>
          <td>{{ $row['user_code'] }}</td>
          <td>{{ $row['birthdate'] }}</td>
          <td>
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
