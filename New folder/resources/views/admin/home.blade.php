@extends('admin/layout.app')

@section('content')


<div class="row" style="margin-top: 7%;">
        <div class="col-md-4 col-md-offset-3">
            <form  action="{{route('lang.insert')}}" method="get">
                <div class="form-group">
                    <label for="name">Language name</label>
                    <input type="text" placeholder="Language name" class="form-control" name="langname" id="name" required>
                </div>

                <button type="submit" style="margin-top: 30px;"  class="btn btn-block btn-success">Submit</button>
                <a href="{{route('lang.bind')}}"><button type="button" style="margin-top: 30px;"  class="btn btn-block btn-primary">Display</button></a>
            </form>
        </div>
</div>

@endsection
