@extends('admin/layout.app')

@section('content')

    <div class="row">

        <form action="{{route('bind.subtopic')}}" >
            {{ csrf_field() }}
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Languages</label>
                    <select class="form-control" name="lang_id" id="lang">

                        <option value="none">none</option>
                        @foreach($lang as $l)
                            <option value="{{$l->id}}">{{$l->langname}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Topics</label>
                    <select class="form-control" name="topic_id" id="topicid">

                        <option value="none" id="lang_topic">none</option>

                    </select>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 25px;">
                <button type="submit" class="btn btn-block btn-success">Serach</button>
            </div>
        </form>
    </div>
    <div class="row" >
        {{--<h2>{{$ab}}</h2>--}}
        @if(empty($langid))
        <table class="table table-striped">
            <tr>
                <th>Lang Name</th>
                <th>Qustion_HeadOne</th>
                <th>Output</th>
                <th>Features</th>
                {{--<th>Action</th>--}}
            </tr>
            @foreach($subtopic as $topics)
                <tr>
{{--                    <td>{{$topics->title}}</td>--}}
                    <td>{!!html_entity_decode($topics->title)!!}</td>
                    <td>{{$topics->quest_headone}}</td>
                    <td>{{$topics->output}}</td>
                    <td>{{$topics->features_headone}}</td>
                    {{--<td>--}}
                        {{--<a href="{{route('subtopic.delete',["id"=>$topics->id])}}"><button type="button" class="btn btn-primary">Delete</button></a>--}}
                        {{--<a href="{{route('update.subtopic',["id"=>$topics->id])}}"><button type="button" class="btn btn-primary">Update</button></a>--}}
                    {{--</td>--}}

                </tr>
            @endforeach
        </table>
            @else
            <h4 style="color: #0e90d2">Your Selected Language : {{$langname->langname}}</h4>
            <h4 style="color: #0e90d2">Your Selected Topic : {{$topicname->topic}}</h4>
            <table class="table table-striped">
                <tr>
                    <th>Lang Name</th>
                    <th>Qustion_HeadOne</th>
                    <th>Output</th>
                    <th>Features</th>
                    <th>Action</th>
                </tr>
                @foreach($subtopicbyid as $topics)
                    <tr>
                        {{--                    <td>{{$topics->title}}</td>--}}
                        <td>{!!html_entity_decode($topics->title)!!}</td>
                        <td>{{$topics->quest_headone}}</td>
                        <td>{{$topics->output}}</td>
                        <td>{{$topics->features_headone}}</td>
                        <td>
                            <a href="{{route('subtopic.delete',["id"=>$topics->id])}}"><button type="button" class="btn btn-primary">Delete</button></a>
                            <a href="{{route('update.subtopic',["id"=>$topics->id])}}"><button type="button" class="btn btn-primary">Update</button></a>
                        </td>

                    </tr>
                @endforeach
            </table>
            @endif
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $('#lang').on('change', function(e){
            console.log(e);
            var lang_id = e.target.value;

            $.get('/admin/subtopicgetbylangid?langid=' + lang_id, function(data) {
                console.log(data);
                $('#topicid').empty();
                $.each(data, function(index,subCatObj){
                    $("#topicid").append($("<option></option>").val(subCatObj.id).html(subCatObj.topic));
                });
            });
        });
    </script>
@endsection
