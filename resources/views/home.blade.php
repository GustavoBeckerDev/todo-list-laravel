@extends('layouts.app')

@section('content')

    <section class="home_pg">
        <h1 class="title"> Que tal organizar sua rotina semanal <br> com uma plataforma de <span>anotações</span> ? </h1>
        <p class="subtitle">
        Com nossa ferramenta, você pode criar organizar e gerenciar <br>
        todas as tarefas do seu dia de forma gratuita.
        </p>

        @include('components.button', ['text' => 'COMEÇE AGORA !!!', 'class' => 'btn_login'])

    </section>
    
@endsection