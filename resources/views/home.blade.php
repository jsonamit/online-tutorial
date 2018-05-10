@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-3" style="margin-left: -30px;">

            <div class="nav-side-menu">
                <div class="brand">Brand Logo</div>
                <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                <div class="menu-list">
                    <ul id="menu-content" class="menu-content collapse out">
                        @foreach($langs as $lang)
                            <li>
                                <a href="{{route('sidebar.topic',["id"=>$lang_id,"topicid"=>$lang->id])}}">
                                    <i class="fa fa-dashboard fa-lg"></i> {{$lang->topic}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">

            @if(!empty($hellopage))
            @if(!empty($subtopic))
                <div class="row">

                    <h2>{{$subtopic->title}}</h2>
{{--                    <p>{{$subtopic->description}}</p>--}}
                    <p>{!!html_entity_decode($subtopic->description)!!}</p>
                    <hr/>

                </div>
                <div class="row">
                    <h2>What is {{$subtopic->title}}?</h2>
                    <ul>
                        @if(!empty($subtopic->quest_headone))
                            <li>{{$subtopic->quest_headone}}</li>
                        @endif
                            @if(!empty($subtopic->quest_headtwo))
                            <li>{{$subtopic->quest_headtwo}}</li>
                            @endif
                            @if(!empty($subtopic->quest_headthree))
                            <li>{{$subtopic->quest_headthree}}</li>
                          @endif
                            @if(!empty($subtopic->quest_headfour))
                                <li>{{$subtopic->quest_headfour}}</li>
                            @endif

                    </ul>
                </div>

                <div class="row">
                    <h2>{{$subtopic->title}} Example</h2>
                    @if(!empty($subtopic->output))
                        <p>Let's see a simple <strong>{{$subtopic->output}}</strong> in {{$subtopic->title}} programming.
                        @endif

                    </p>
                </div>

                <div class="row">
                    @if(!empty($subtopic->example))
                        <pre style="box-shadow: 0 0 11px;">
 {!!html_entity_decode($subtopic->example)!!}

                          </pre>
                        @endif

                </div>

                <div class="row">
                    <p>Output:</p>
                    @if(!empty($subtopic->output))
                        <div class="code1">
                            <pre>{{$subtopic->output}}</pre>
                        </div>
                        @endif

                    <br/>
                    <br/>
                    <hr/>
                    @if(!empty($subtopic->features_one_question))
                        <h2>Features of {{$subtopic->title}} Programming</h2>
                        @endif

                    <ol type="1">
                        @if(!empty($subtopic->features_one_question))
                            <li><strong>{{$subtopic->features_one_question}}</strong><br/>
                                <pre>
{{$subtopic->features_one_ans}}
                            </pre>
                            </li>
                        @endif
                            <br/>
                            @if(!empty($subtopic->features_two_question))
                            <li><strong>{{$subtopic->features_two_question}}</strong><br/>
                                <pre>
{{$subtopic->features_two_ans}}
</pre></li>
                            @endif
                                <br/>
                            @if(!empty($subtopic->features_three_question))
                            <li><strong>{{$subtopic->features_three_question}}</strong><br/>
                                <pre>
{{$subtopic->features_three_ans}}
                                </pre></li>
                            @endif

                    </ol>
                </div>

            @else

                <div class="row">

                    <h2>{{$hellopage->title}} Tutorial</h2>
                    <p>{!!html_entity_decode($hellopage->description)!!}</p>
                    <hr/>

                </div>
                <div class="row">
                    <h2>What is {{$hellopage->title}}?</h2>
                    <ul>
                        @if(!empty($hellopage->quest_headone))
                            <li>{{$hellopage->quest_headone}}</li>
                        @endif
                        @if(!empty($hellopage->quest_headtwo))
                            <li>{{$hellopage->quest_headtwo}}</li>
                            @endif
                        @if(!empty($hellopage->quest_headthree))
                            <li>{{$hellopage->quest_headthree}}</li>
                        @endif
                            @if(!empty($hellopage->quest_headfour))
                                <li>{{$hellopage->quest_headfour}}</li>
                            @endif

                    </ul>
                </div>
                <div class="row">
                    <h2>{{$hellopage->title}} Example</h2>
                    @if(!empty($hellopage->output))
                        <p>Let's see a simple <strong>{{$hellopage->output}}</strong> in {{$hellopage->title}} programming.
                            @endif

                        </p>
                </div>

                <div class="row">
                    @if(!empty($hellopage->example))
                        <pre style="box-shadow: 0 0 11px;">
 {!!html_entity_decode($hellopage->example)!!}

                          </pre>
                    @endif

                </div>
                <div class="row">
                    <p>Output:</p>
                    @if(!empty($hellopage->output))
                        <div class="code1">
                            <pre>{{$hellopage->output}}</pre>
                        </div>
                    @endif

                    <br/>
                    <br/>
                    <hr/>
                    @if(!empty($hellopage->features_one_question))
                        <h2>Features of {{$hellopage->title}} Programming</h2>
                        @endif

                    <ol type="1">
                        @if(!empty($hellopage->features_one_question))
                            <li><strong>{{$hellopage->features_one_question}}</strong><br/>
                                <pre>
{{$hellopage->features_one_ans}}
                            </pre>
                            </li>
                        @endif
                            <br/>
                        @if(!empty($hellopage->features_two_question))
                            <li><strong>{{$hellopage->features_two_question}}</strong><br/>
                                <pre>
{{$hellopage->features_two_ans}}
</pre>
                                @endif
                                <br/>
                        @if(!empty($hellopage->features_three_question))
                            <li><strong>{{$hellopage->features_three_question}}</strong><br/>
                                <pre>
{{$hellopage->features_three_ans}}
</pre>
                        @endif

                    </ol>
                </div>
            @endif

                @else
                @php redirect(route('languages')); @endphp
            @endif

        </div>
    </div>
@endsection