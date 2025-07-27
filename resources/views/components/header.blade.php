<header>

    <div class="header-esquerda">
        <i class="fa-solid fa-list-check fa-2xl" style="color: #ad60cd;"></i>
    </div>

    <div class="header-direita">
        @include('components.button', ['text' => 'Criar Conta', 'class' => ''])
        @include('components.button', ['text' => 'Login', 'class' => 'btn_login'])
    </div>

</header>