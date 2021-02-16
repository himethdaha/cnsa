@extends ('master')

@section ('body')

<form style="padding-top:300px; text-align: center;" >
  <h1>Team Information</h1>
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
    <th scope="col">Team ID</th>
    <th scope="col">Team Name</th>
    <th scope="col">Date Created</th>
  </tr>
</thead>
<tbody>
  @foreach ($teama as $row)
        <tr>
          <td>{{ $row['teamid'] }}</td>
          <td>{{ $row['teamname'] }}</td>
          <td>{{ $row['datecreated'] }}</td>
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
