@extends('admin/layout.app')

@section('content')

    <div class="row" >
        <table class="table table-striped">
            <tr>
                <th>Lang Name</th>
                <th>Qustion_HeadOne</th>
                <th>Output</th>
                <th>Features</th>
                <th>Action</th>
            </tr>
            @foreach($subtopic as $topics)
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
    </div>


@endsection
