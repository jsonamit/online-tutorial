@extends('admin/layout.app')

@section('content')

    <div class="row" >
        <table class="table table-striped">
            <tr>
                <th>Lang Name</th>
                <th>Updated_at</th>
                <th>Created_at</th>
                <th>Action</th>
            </tr>
            @foreach($topic as $topics)
                <tr>
                    <td>{{ucfirst($topics->topic)}}</td>
                    <td>{{date('Y-m-d',strtotime($topics->updated_at))}}</td>
                    <td>{{date('Y-m-d',strtotime($topics->created_at))}}</td>
                    <td>
                        <a href="{{route('topics.delete',['id'=>$topics->id])}}"><button type="button" class="btn btn-primary">Delete</button></a>
                        <a href=""><button type="button" class="btn btn-primary">Update</button></a>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>


@endsection
