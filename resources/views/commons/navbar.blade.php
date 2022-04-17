<header class="mb-4">
    <nav class="navbar navbar-expamd-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="/">TaskList</a>
                
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    @if(Auth::check())
                        {{--新規タスク投稿ページへ--}}
                        <li class="nav-item">{!! link_to_route('tasks.create','新規タスクの投稿',[],['class'=>'nav-link']) !!}</li>
                        {{-- ログアウト --}}
                        <li class="nav-item">{{ link_to_route('logout.get','Logout') }}</li>
                        
                    @else
                        {{-- ユーザー登録ページへ --}}
                        <li class="nav-item">{{ link_to_route('signup.get','Signup',[],['class'=>'nav-link']) }}</li>
                        {{-- ログインページへ --}}
                        <li class="nav-item">{{ link_to_route('login','Login',[],['class'=>'nav-item']) }}</li>
                    @endif
                </ul>
            </div>
    </nav>
</header>