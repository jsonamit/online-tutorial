
@extends('layout.app')

@section('content')
    <div class="container">


        <div class="row">
            <h1 class="head" style="padding-bottom: 32px;text-align: center;">A Program In</h1>
        </div>
        <div class="main">


            <ul class="box-back">
                @foreach($lang as $langs)
                <li>
                    <div class="portion">
                        <h2 class="h2">{{$langs->langname}}</h2>
                        <a href="{{route('sidebar.topic',['id'=>$langs->id])}}" class="button">Learn {{$langs->langname}}</a>
                    </div>
                </li>
                @endforeach
            </ul>

        </div>

    </div>
@endsection
