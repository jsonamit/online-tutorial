
@extends('admin/layout.app')

@section('content')
    {{--<div class="container">--}}
    <link href="{{ asset('js/jquery.min.js') }}" rel="stylesheet" />
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2015.3.930/styles/kendo.common.min.css">
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2015.3.930/styles/kendo.rtl.min.css">
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2015.3.930/styles/kendo.default.min.css">
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2015.3.930/styles/kendo.mobile.all.min.css">
    {{--<link href="{{ asset('js/kendo1.js') }}" rel="stylesheet" />--}}

    <script src="//cdn.kendostatic.com/2013.1.319/js/kendo.all.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://kendo.cdn.telerik.com/2015.3.930/js/angular.min.js"></script>
    <script src="http://kendo.cdn.telerik.com/2015.3.930/js/jszip.min.js"></script>
    <script src="http://kendo.cdn.telerik.com/2015.3.930/js/kendo.all.min.js"></script>
        <div class="col-md-9" style="margin-left: 100px">

            <form action="{{route('update.subtopic.submit',["id"=>$sub->id])}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <h2 align="center">Update Subtopic</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Languages</label>
                            <select class="form-control" name="topics_id" id="sel1">

                                @foreach($topic as $l)


                                    <option value="{{$l->id}}">{{$l->topic}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" placeholder="Title" class="form-control" value="{{$sub->title}}" name="title" id="name">
                        </div>
                    </div>
                </div>

                {{--<div class="row">--}}


                    {{--<div class="col-md-6">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="name">Description</label>--}}
                            {{--<input type="text" placeholder="Description" class="form-control" value="{{$sub->description}}" name="description" id="name">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="row">

                    <div class="col-md-12">
                        <label for="name">Description</label>
                        <div id="example">
                <textarea type="textarea" id="editor1" rows="10" cols="30"  aria-label="editor" name="description"   required>
                  {{$sub->description}}
                </textarea>

                            <script >

                                $("#editor1").kendoEditor({ resizable: {
                                    content: true,
                                    toolbar: true
                                }});


                            </script>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Question head one</label>
                            <input type="text" placeholder="head one" class="form-control" value="{{$sub->quest_headone}}" name="quest_headone" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Question head two</label>
                            <input type="text" placeholder="head two" class="form-control" value="{{$sub->quest_headtwo}}" name="quest_headtwo" id="name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Question head three</label>
                            <input type="text" placeholder="head three" class="form-control" value="{{$sub->quest_headthree}}" name="quest_headthree" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Question head four</label>
                            <input type="text" placeholder="head four" class="form-control"value="{{$sub->quest_headfour}}" name="quest_headfour" id="name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Question head five</label>
                            <input type="text" placeholder="head five" class="form-control"value="{{$sub->quest_headfive}}" name="quest_headfive" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Example question</label>
                            <input type="text" placeholder="Example question" class="form-control"value="{{$sub->example_quest}}" name="example_quest" id="name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="name">Example</label>
                        <div id="example">
                <textarea id="editor" rows="10" cols="30"   name="example">
                    {{$sub->example}}
                </textarea>

                            <script >
                                $("#editor").kendoEditor({ resizable: {
                                    content: true,
                                    toolbar: true
                                }});

                            </script>
                        </div>
                    </div>

                </div>
                <div class="row">
                    {{--<div class="col-md-6">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="name">Example</label>--}}
                            {{--<input type="text" placeholder="Example" class="form-control"value="{{$sub->example}}" name="example" id="name">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Output</label>
                            <input type="text" placeholder="Output" class="form-control"value="{{$sub->output}}" name="output" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="name">Features head one</label>
                            <input type="text" placeholder="Features head one" class="form-control"value="{{$sub->features_headone}}" name="features_headone" id="name">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Features head two</label>
                            <input type="text" placeholder="Features head two" class="form-control"value="{{$sub->features_headtwo}}" name="features_headtwo" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Features head three</label>
                            <input type="text" placeholder="Features head three" class="form-control"value="{{$sub->features_headthree}}" name="features_headthree" id="name">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Features head four</label>
                            <input type="text" placeholder="Features head four"  class="form-control"value="{{$sub->features_headfour}}" name="features_headfour" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="name"></label>
                        <button type="submit" style="margin-bottom: 25px;" class="btn btn-block btn-success">Update</button>
                    </div>
                </div>


            </form>
        </div>
    {{--</div>--}}
@endsection
