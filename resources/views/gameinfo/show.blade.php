@extends ('master')

@section ('body')

<form style="padding-top:10%; text-align: center;" >
  <h1>Game Info Show</h1>
  </br>
<div class="form-signin">
  <div>
    <div align="right">
     <a href="{{route('gameinfo.create')}}" class="btn btn-primary">Add</a>
    </div>

  </div>
</br>
  <div class="row">
<table class="table table-striped">
<thead>
  <tr>
    <th scope="col">Game ID</th>
    <th scope="col">Home Team ID</th>
    <th scope="col">Away Team ID</th>
    <th scope="col">Attendance</th>
    <th scope="col">Date</th>
    <th scope="col">Duration</th>
  </tr>
</thead>
<tbody>
@foreach ($gameinfo as $row)
        <tr>
          <td>{{ $row->gameid }}</td>
          <td>{{ $row->team_id }}</td>
          <td>{{ $row->team_id }}</td>
          <td>{{ $row->attendance }}</td>
          <td>{{ $row->date }}</td>
          <td>{{ $row->duration }}</td>
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
