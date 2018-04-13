<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="form-inline" action="{{route('user.create')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="name" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="city" class="form-control" name="city" id="city">
                </div>
                <div class="form-group">
                    <label for="pwd">Date:</label>
                    <input type="date" class="form-control" name="date" id="pwd">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>