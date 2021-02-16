@extends ('master')

@section ('body')

<form style="padding-top:3400px; text-align: center;" >
  <h1>Player History</h1>
  </br>
<div class="form-signin">
  <div>
    <div align="right">
     <a href="{{route('playerhistory.create')}}" class="btn btn-primary">Add</a>
    </div>

  </div>
</br>
  <div class="row">
<table class="table table-striped">
<thead>
  <tr>
    <th scope="col">Player History ID</th>
    <th scope="col">Player ID</th>
    <th scope="col">Team ID</th>
    <th scope="col">Year Joined</th>
    <th scope="col">Position Code</th>
  </tr>
</thead>
<tbody>
  @foreach ($playerhistorys as $row)
        <tr>
          <td>{{ $row['playerhistoryid'] }}</td>
          <td>{{ $row['player_id'] }}</td>
          <td>{{ $row['team_id'] }}</td>
          <td>{{ $row['yearjoined'] }}</td>
          <td>{{ $row['position_code'] }}</td>
          <td><a href="{{action('PlayersHistoryController@edit', $row['playerhistoryid'])}}" class="btn btn-warning">Edit</td>
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
