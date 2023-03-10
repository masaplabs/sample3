<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="./">
            <h3>masapla's portfolio</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">ログアウト</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="./signup">新規登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./signin">ログイン</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- / Navigation -->