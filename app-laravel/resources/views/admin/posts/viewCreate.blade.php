<h1> Cadastrar Novo Post </h1>

<form action = "{{ route ('posts.store')}}" method = "posts">
 
@csrf

<input type = "text" name = "titulo" id = "titulo" placeholder = "Digite um titulo:" >
<textarea name = "conteudo" id = "conteudo" cols = "30" rows = "5" placeholder = "Digite o conteudo:" ></textarea>
<button type = "submit" >Enviar</button>
</form> 
