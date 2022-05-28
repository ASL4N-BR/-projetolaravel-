<a href="{{ route( 'posts.create') }}" > Criar post</a>
<h1>listagem de posts</h1>

@foreach($posts as $post)
  <p>
      {{$post->titulo}}
      [
          <a href="{{ route( 'posts.show', $post->id ) }}"> Conteúdo </a> |        
          [ <a href="{{ route( 'posts.edit', $post->id)}}"> Editar </a> ]    
      ]   
    </p>

@endforeach