@section('navigation')
    @parent
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand title" href="{{url('/') }}">EBD Projeto Live</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    @if (Route::has('login'))
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif
                    <li><a href="{{ url('/sobre-a-ebd') }}">Ministério Projeto e Vivo</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">Explorar<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/licoes') }}">Lições</a></li>
                            <li><a href="{{ url('/') }}">Atividades</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
@endsection
