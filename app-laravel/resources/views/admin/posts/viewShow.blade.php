<h1>Conteúdo do Post{{ $post->titulo }}</h1>

<ul>

<li><strong>Titulo: </strong>{{ $post->titulo }} </li> 
<li><strong>Conteúdo:</strong>{{ $post->conteudo }} </li>

</ul>

<form action ="{{ route ( 'posts.destroy', $post->id)}}" method = "post">
   @csrf
   <input type = "hidden" name="_method" value="DELETE">
   <button type = "submit"> Excluir o Post: {{$post->titulo}}</button>
   
</form>   