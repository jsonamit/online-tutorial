
@extends('admin/layout.app')

@section('content')

    <link href="{{ asset('js/jquery.min.js') }}" rel="stylesheet" />

    {{--<link href="{{ asset('css/kendo.css') }}" rel="stylesheet" />--}}

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
        <div class="col-md-9">
            <form action="{{route('subtopic.insert')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
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
                </div>
                 <div class="row">
                     <div class="col-md-6">
                     {{--<div class="form-group">--}}
                         {{--<label for="name">Languages</label>--}}
                         {{--<select class="form-control" name="topics_id" id="sel1">--}}
                             {{--@foreach($topic as $l)--}}
                                 {{--<option value="{{$l->id}}">{{$l->topic}}</option>--}}
                             {{--@endforeach--}}
                         {{--</select>--}}
                     {{--</div>--}}

                         {{--<div class="col-md-6">--}}
                             <div class="form-group">
                                 <label for="name">Topics</label>
                                 <select class="form-control" name="topics_id" id="topicid">

                                     <option value="none" id="lang_topic">none</option>

                                 </select>
                             </div>
                         {{--</div>--}}

                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="name">Title</label>
                             <input type="text" placeholder="Title" class="form-control" name="title" id="name" required>
                         </div>
                     </div>
                 </div>
                <div class="row">

                    {{--<div class="col-md-6">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="name">Description</label>--}}
                            {{--<input type="text" placeholder="Description" class="form-control" name="description" id="name" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-md-12">
                        <label for="name">Description</label>
                        <div id="example">
                <textarea id="editor1" rows="10" cols="30"  aria-label="editor" name="description" required>

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
                            <input type="text" placeholder="Question head answer" class="form-control" name="quest_headone" id="name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Question head two</label>
                            <input type="text" placeholder="Question head answer" class="form-control" name="quest_headtwo" id="name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Question head three</label>
                            <input type="text" placeholder="Question head answer" class="form-control" name="quest_headthree" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Question head four</label>
                            <input type="text" placeholder="Question head answer" class="form-control" name="quest_headfour" id="name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Question head five</label>
                            <input type="text" placeholder="Question head answer" class="form-control" name="quest_headfive" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Example question</label>
                            <input type="text" placeholder="Example question " class="form-control" name="example_quest" id="name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="name">Example</label>
                        <div id="example">
                <textarea id="editor" rows="10" cols="30"   name="example">

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
                            {{--<input type="text" placeholder="Example" class="form-control" name="example" id="name" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Output</label>
                            <input type="text" placeholder="Output answer" class="form-control" name="output" id="name" required>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="name">Features head one</label>
                            <input type="text" placeholder="Features head answer" class="form-control" name="features_headone" id="name" required>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Features head two</label>
                            <input type="text" placeholder="Features head answer" class="form-control" name="features_headtwo" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Features head three</label>
                            <input type="text" placeholder="Features head answer" class="form-control" name="features_headthree" id="name">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Features head four</label>
                            <input type="text" placeholder="Features head answer"  class="form-control" name="features_headfour" id="name">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" style="margin-bottom: 25px;" class="btn btn-block btn-success">Submit</button>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('bind.subtopic')}}"><button type="button" style="margin-bottom: 25px;" class="btn btn-block btn-primary">Display</button></a>
                    </div>
                </div>

            </form>
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
