<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
        <ul class="dropdown-menu">
            @if(Auth::user()->isImpersonating())
                <li><a href="">Stop Impersonate</a></li>
            @endif
            <li><a href="logout">Logout</a></li>
        </ul>
    </li>
</ul>