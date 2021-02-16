@extends ('master')

@section ('body')
<form style="padding-top:500px; margin-left:120px;">
  <h1>All Teams</h1>
<div class="form-row">
  @foreach ($teams as $team)
      @include ('teams.team')
  @endforeach
</div>
</form>
  @endsection
