@extends('layouts.app')

@section('content')

    <section class="form_pg">
        @csrf
        <div class="form_left">
            <h1 class="title">Crie sua conta!</h1>
            <p class="subtitle">Criando sua conta você vai poder utilizar todos os recursos da plataforma de forma totalmente gratuita</p>
        </div>
        <div class="form_right">
            <form action="" method="POST" action="{{route('insert-account')}}">
                <input type="text" name="name" placeholder="Seu nome">
                <input type="email" name="email" placeholder="Seu email">
                <input type="password" name="password" placeholder="Sua senha">

                <span>Já tem uma conta? <a href="{{route('login')}}" linkto='login'>Entrar</a></span>

                <x-button class='btn_fullwidth' linkto='insert-account'>
                    Criar Nova Conta
                <x-sui-create />
                </x-button>
            </form>
        </div>
    </section>
    
@endsection
