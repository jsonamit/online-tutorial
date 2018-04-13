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
                @foreach($lang as $langs)
                <tr>
                    <td>{{strtoupper($langs->langname)}}</td>
                    <td>{{date('Y-m-d',strtotime($langs->updated_at))}}</td>
                    <td>{{date('Y-m-d',strtotime($langs->created_at))}}</td>
                    <td>
                        <a href="{{route('lang.delete',['id'=>$langs->id])}}"><button type="button" class="btn btn-primary">Delete</button></a>
                        <a href="{{route('lang.update',['id'=>$langs->id])}}"><button type="button" class="btn btn-primary">Update</button></a>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>


@endsection
