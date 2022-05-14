<h1>listagem de posts</h1>

@foreach($posts as post)
<p>{{$post->titulo}}</p>
@endforeach