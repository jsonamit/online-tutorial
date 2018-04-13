@extends('admin/layout.app')

@section('content')

<div class="row">
    <h2 style="margin-left: 27%;">Update language</h2>
</div>
    <div class="row" style="margin-top: 7%;">

        <div class="col-md-4 col-md-offset-3">
            @foreach($lang as $langs)

            <form  action="{{route('lang.update.submit',['id'=>$langs->id])}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Language name</label>
                    <input type="text" placeholder="Language name" class="form-control" value="{{$langs->langname}}" name="langname" id="name">
                </div>

                <button type="submit" style="margin-top: 30px;"  class="btn btn-block btn-success">Submit</button>
            </form>
            @endforeach
        </div>
    </div>

@endsection
