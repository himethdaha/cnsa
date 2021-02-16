
  <div class="card-deck">
    <div class="card" style="width: 25rem; height: 35rem">
      <a href="/players/show">
        <img src="data:image/png;base64,{{ chunk_split(base64_encode($team->teamlogo)) }}" style="width:400px; height:500px;">
      </a>
      <div class="card-body">
        <h5 class="card-title">{{ $team->teamname }}</h5>
      </div>
    </div>
  </div>
  <div class="col-0.5">
  </div>
