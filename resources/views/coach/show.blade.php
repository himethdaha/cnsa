@extends ('master')

@section ('body')

<form style="padding-top:750px; text-align: center;" >
  <h1>Coach Information</h1>
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
    <th scope="col">Coach ID</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Birthdate</th>
  </tr>
</thead>
<tbody>
  @foreach ($coaches as $row)
        <tr>
          <td>{{ $row['coachid'] }}</td>
          <td>{{ $row['firstname'] }}</td>
          <td>{{ $row['lastname'] }}</td>
          <td>{{ $row['birthdate'] }}</td>
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
