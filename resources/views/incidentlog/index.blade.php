@extends ('master')

@section ('body')


<form style="padding-top:400px; text-align: center;" >
  <h1>Incident Log</h1>
  </br>
<div class="form-signin">
  <div>
    <div align="right">
     <a href="{{route('incidentlog.create')}}" class="btn btn-primary">Add</a>
    </div>
  </div>
  <div class="row">
<table class="table table-striped">
<thead>
  <tr>
    <th scope="col">Incident Code</th>
    <th scope="col">Date</th>
    <th scope="col">Player ID</th>
    <th scope="col">Staff ID</th>
  </tr>
</thead>
<tbody>
  @foreach ($incidentlogs as $row)
        <tr>
          <td>{{ $row['incident_code'] }}</td>
          <td>{{ $row['date'] }}</td>
          <td>{{ $row['player_id'] }}</td>
          <td>{{ $row['staff_id'] }}</td>
          <td><a href="{{action('IncidentLogController@edit', $row['incidentlogid'])}}" class="btn btn-warning">Edit</td>
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
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>
</br>
</form>
  @endsection
