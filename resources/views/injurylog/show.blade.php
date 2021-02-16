@extends ('master')

@section ('body')

<form style="padding-top:55%; text-align: center;" >
  <h1>Injury Log</h1>
  </br>
<div class="form-signin">
  <div>
    <div align="right">
     <a href="{{route('injurylog.create')}}" class="btn btn-primary">Add</a>
    </div>

  </div>
</br>
  <div class="row">
<table class="table table-striped">
<thead>
  <tr>
    <th scope="col">Date</th>
    <th scope="col">Player ID</th>
    <th scope="col">Injury Description</th>
    <th scope="col">Edit</th>
  </tr>
</thead>
<tbody>
  @foreach ($injurylogs as $row)
        <tr>
          <td>{{ $row['date'] }}</td>
          <td>{{ $row['player_id'] }}</td>
          <td>{{ $row['injurydescription'] }}</td>
          <td><a href="{{action('InjuryLogController@edit', $row['injuryid'])}}" class="btn btn-warning">Edit</td>
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
