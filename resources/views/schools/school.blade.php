
  <div class="card-deck">
    <div class="card" style="width: 20rem; height: 30rem;">
      <img src="data:image/png;base64,{{ chunk_split(base64_encode($school->schoollogo)) }}" style="width:320px; height:320px;" alt="{{ $school->schoolname }}">
      <div class="card-body">
        <h5 class="card-title">{{ $school->schoolname }}</h5>
        <p class="card-text">{{ $school->location }}</p>
      </div>
    </div>
  </div>
  <div class="col-0.5">
  </div>
