<h1> editar o post <strong> {{ $post ->titulo}} </strong>  </h1>
<form action= "{{ route ('posts.update', $post->id)}}" method="post">
    @csrf
    @method{'put'}
    <input type="text" name="titulo" id="titulo" placeholder="digite um titulo" value="{[ $post->titulo]}">
    <textarea name="conteudo" id="conteudo" cols="30" rows="5" placeholder="digte o conteudo"> {[$post->conteudo]}</textarea>
    <button type="submit">enviar</button>
</form>