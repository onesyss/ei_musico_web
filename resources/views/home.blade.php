@extends('layouts.painel_controle')

@section('content')
<div id="app">
     <aside>
        <strong>Cadastrar</strong>
        <form method="POST" action="home_post" enctype = "multipart/form-data">
            @csrf
            <div class="input-block">
                <label for="nome">Nome</label>
                <input  name="nome" id="nome" required />
            </div>
            <div class="input-block">
                <label for="usuario_insta">Usuario do Instagram</label>
                <input name="usuario_insta" id="usuario_insta" required />
            </div>
            <div class="input-block">
                <label for="instrumento">Instrumento</label>
                <input name="instrumento" id="instrumento" required />
            </div>
            <div class="input-block">
                <label for="descricao">Descrição</label>
                <input name="descricao" id="descricao" required />
            </div>
            <div class="input-block">
                <label for="telefone">Telefone</label>
                <input name="telefone" id="telefone" required />
            </div>
            <div class="input-group">
                <div class="input-block">
                    <label for="latitude">Latitude</label>
                    <input name="latitude" id="latitude" required />
                </div>
               <div class="input-block"> 
                    <label for="longitude">Longitude</label>
                    <input name="longitude" id="longitude" required />
                </div>
            </div>
            <div class="input-block">
                <br>
                <label for="avatar">Avatar</label>
                <input name="avatar" style="margin-top:10px" type="file" id="avatar" accept="image/*" required />
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </aside>
    <main>
     <ul>
        @foreach($musicos as $item) 
        <li class="dev-item">
             <header>
                 <form method="POST" action="delete_musico" id="delete_musicos" onSubmit="return confirm('Voce tem certeza deseja excluir este músico?');" >
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="delete_musico" >
                    <button type="submit" class="icon_delete"><i class="fas fa-user-times"></i></button>
                 </form>
                 <!--<a href="" class="icon_delete" onClick="submit()" title="excluir musico"><i class="fas fa-user-times"></i></a>--->
                <img src="data:image/png;base64, {{$item-> avatar}}" />
                <div class="user-info">
                    <strong>{{$item-> nome}}</strong> 
                    <span>{{$item-> instrumento}}</span> 
                </div>
           </header>
           <p>{{$item-> descricao}}</p>
           <a href="" onClick="window.open('https://www.instagram.com/{{$item->ususario_inst}}/')">Acessar Instagram</a><br>
        </li>
        @endforeach
    </ul>
    </main>
</div>
<script>
    function submit(){
        var confirmar = confirm('Voce tem certeza deseja excluir este músico?');

    }
</script>
@endsection
