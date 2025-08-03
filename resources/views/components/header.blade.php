<header>

    <div class="header-esquerda">
        <a href="{{route('home')}}">
            <img src="{{ asset('imgs/list.png')}}" alt="List">
        </a>
    </div>

    <div class="header-direita">

        <x-button class='' linkto='create-account'>Criar Conta</x-button>
        <x-button class='btn_login' linkto='login'>Login</x-button>

    </div>

</header>
