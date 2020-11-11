<nav class="navbar navbar-default navbar-custom">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ route('home') }}">
                <img alt="Logo" class="logo" src="{{ asset('img/brainster_logo.png') }}">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Академии</a></li>
                <li><a href="#">Вебинари</a></li>
                <li><a href="#">Тест за кариера</a></li>
                <li><a href="#">Блог</a></li>
                <li><a data-toggle="modal" href="#myModal" class="btn btn-default btn-nav" id="btn-nav">Пријави се</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>