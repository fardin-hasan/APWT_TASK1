
<a href="{{ route('pageHome') }}">Home</a>
<a href="{{ route('pageContact') }}">Contact</a>
<a href="{{ route('pageAbout') }}">About</a>
<a href="{{ route('pageTeam') }}">Team</a>
<h1>This is our team service  page</h1>
@foreach($data as $dt)
{{$dt}}
@endforeach
