@extends('admin/layout.app')

@section('content')

    <div class="row" style="margin-top: 7%">
        <div class="col-md-4 col-md-offset-3">
            <form  action="{{route('topic.update.submit',['id'=>$topic->id])}}" method="post">
                {{csrf_field()}}
                {{--<form  action="" method="get">--}}
                {{--<div class="form-group">--}}
                    {{--<label for="name">Languages</label>--}}
                    {{--<select class="form-control" name="lang_id" id="sel1">--}}
                        {{--@foreach($lang as $l)--}}
                            {{--<option value="{{$l->id}}">{{$l->langname}}</option>--}}
                        {{--@endforeach--}}
                    {{--</select>--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="name">Update Topics</label>
                    <input type="text" placeholder="Topic" class="form-control" value="{{$topic->topic}}" name="topic" id="name" required>

                </div>

                <button type="submit" style="margin-top: 30px;"  class="btn btn-block btn-success">Update</button>
                {{--<a href="{{route('topics.bind')}}"><button type="button" style="margin-top: 30px;"  class="btn btn-block btn-primary">Display</button></a>--}}
            </form>
        </div>
    </div>

@endsection
