@extends ('master')

@section ('body')
<form style="padding-top:50px; margin-left:120px;">
  <h1>All Stadiums Information</h1>
<div class="form-row">
  @foreach ($stadiums as $stadium)
      @include ('stadiums.stadium')
  @endforeach
</div>
</form>
  @endsection
