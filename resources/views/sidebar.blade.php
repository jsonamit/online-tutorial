
@section('sidebar')
    <div class="nav-side-menu">
        <div class="brand">Brand Logo</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="">
                        <i class="fa fa-dashboard fa-lg"></i>test
                    </a>
                </li>
                @foreach($lang as $langs)
                    <li>
                        <a href="">
                            <i class="fa fa-dashboard fa-lg"></i>test
                        </a>
                    </li>
                    <li>
                        <a href="{{route('sidebar.topic',["id"=>$langs->id])}}">
                            <i class="fa fa-dashboard fa-lg"></i> {{$langs->topic}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endsection
