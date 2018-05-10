@extends('admin/layout.app')

@section('content')
    <div class="row">
        <form action="{{route('topics.bind')}}" >
            {{ csrf_field() }}
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Languages</label>
                <select class="form-control" name="lang_id" id="sel1">
{{--                    @if(empty($langid))--}}
                    <option value="none">none</option>
                       @foreach($lang as $l)
                        <option value="{{$l->id}}">{{$l->langname}}</option>
                    @endforeach
                        {{--@else--}}
                        {{--@foreach($lang as $l)--}}
                            {{--<option value="{{$l->id}}">{{$lang->langname}}</option>--}}
                        {{--@endforeach--}}
                    {{--@endif--}}
                </select>
            </div>
        </div>
        <div class="col-md-3" style="margin-top: 25px;">
                <button type="submit" class="btn btn-block btn-success">Serach</button>
        </div>
        </form>
    </div>
    <div class="row" >
        @if(empty($langid))
        <table class="table table-striped">
            <tr>
                <th>Lang Name</th>
                <th>Updated_at</th>
                <th>Created_at</th>
                {{--<th>Action</th>--}}
            </tr>

            @foreach($topic as $topics)
                <tr>
                    <td>{{ucfirst($topics->topic)}}</td>
                    <td>{{date('Y-m-d',strtotime($topics->updated_at))}}</td>
                    <td>{{date('Y-m-d',strtotime($topics->created_at))}}</td>
                    {{--<td>--}}
                        {{--<a href="{{route('topics.delete',['id'=>$topics->id])}}"><button type="button" class="btn btn-primary">Delete</button></a>--}}
                        {{--<a href=""><button type="button" class="btn btn-primary">Update</button></a>--}}
                    {{--</td>--}}

                </tr>
            @endforeach
        </table>

        @else
                <table class="table table-striped">
                    <tr>
                        <th>Lang Name</th>
                        <th>Updated_at</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </tr>
                    <tr><h3 style="color: blue">Your Selected Language : {{$langname->langname}}</h3></tr>
                    @foreach($topicbylangid as $topic)
                        <tr>
                            <td>{{ucfirst($topic->topic)}}</td>
                            <td>{{date('Y-m-d',strtotime($topic->updated_at))}}</td>
                            <td>{{date('Y-m-d',strtotime($topic->created_at))}}</td>
                            <td>
                                <a href="{{route('topics.delete',['id'=>$topic->id])}}"><button type="button" class="btn btn-primary">Delete</button></a>
                                <a href="{{route('topic.update',['id'=>$topic->id])}}"><button type="button" class="btn btn-primary">Update</button></a>
                            </td>

                        </tr>
                    @endforeach
                </table>
            @endif
    </div>


@endsection
