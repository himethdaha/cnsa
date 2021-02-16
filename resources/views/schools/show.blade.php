@extends ('master')

@section ('body')
<form style="padding-top:400px; margin-left:120px;">
  <h1>All Participating Schools</h1>
<div class="form-row">
  @foreach ($schools as $school)
      @include ('schools.school')
  @endforeach
</div>
</form>
  @endsection
