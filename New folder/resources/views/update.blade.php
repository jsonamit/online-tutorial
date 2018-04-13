
@extends('layout.app')

@section('content')
    <div class="container">


               <div class="row">
                       <h1 class="head" style="padding-bottom: 32px;">A Program In</h1>
               </div>

        <div class="col-md-4 col-md-offset-4">
            <form  action="{{route('user.update',['id'=>$users->id])}}" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" id="city">
                </div>
                <button type="submit"  class="btn btn-block btn-success">Submit</button>
            </form>
        </div>
    </div>
    @endsection
