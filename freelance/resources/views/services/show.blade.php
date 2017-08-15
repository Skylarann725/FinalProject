@extends('layouts.app')

@section('content')
    <div class="container">
            @if($services->id === 1)
                <h3>Design & Web</h3>
            <div class="row" id="subs">
            <div class="col-sm-4">
                <a href="{{ url('/programming')}}"><img src="{{$services->sub1photo}}" height="184"></a><br>
                <a href="{{ url('/programming') }}">
                    {{$services->sub1}}
                </a>
            </div>
                <div class="col-sm-4">
                    <a href="{{ url('/ecommerce')}}"><img src="{{$services->sub2photo}}" height="184"></a><br>
                    <a href="{{ url('/ecommerce') }}">
                        {{$services->sub2}}
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ url('/wordpress')}}"><img src="{{$services->sub9photo}}" height="184" width="350"></a><br>
                    <a href="{{ url('/wordpress') }}">
                        {{$services->sub9}}
                    </a>
                </div>
            </div>
            <div class="row" id="subs2">
                <div class="col-sm-4">
                    <a href="{{ url('/logodesign')}}"><img src="{{$services->sub4photo}}" height="184"></a><br>
                    <a href="{{ url('/logodesign') }}">
                        {{$services->sub4}}
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ url('/mobileapp')}}"><img src="{{$services->sub3photo}}" height="184"></a><br>
                    <a href="{{ url('/mobileapp') }}">
                        {{$services->sub3}}
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ url('/databases')}}"><img src="{{$services->sub5photo}}" height="184"></a><br>
                    <a href="{{ url('/databases') }}">
                        {{$services->sub5}}
                    </a>
                </div>
            </div>
            <div class="row" id="subs3">
                <div class="col-sm-4">
                    <a href="{{ url('/desktop')}}"><img src="{{$services->sub6photo}}" height="184"></a><br>
                    <a href="{{ url('/desktop') }}">
                        {{$services->sub6}}
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ url('/qa')}}"><img src="{{$services->sub7photo}}" height="184"></a><br>
                    <a href="{{ url('/qa') }}">
                        {{$services->sub7}}
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ url('/testing')}}"><img src="{{$services->sub8photo}}" height="184"></a><br>
                    <a href="{{ url('/testing') }}">
                        {{$services->sub8}}
                    </a>
                </div>
            </div>
            @endif
            @if($services->id === 2)
                <h3>Video Production</h3>
                    <div class="row" id="subs">
            <div class="col-sm-4">
                <a href="{{ url('/editing')}}"><img src="{{$services->sub1photo}}" height="184"></a><br>
                <a href="{{ url('/editing') }}">
                    {{$services->sub1}}
                </a>
            </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/videopro')}}"><img src="{{$services->sub2photo}}" height="184"></a><br>
                        <a href="{{ url('/videopro') }}">
                            {{$services->sub2}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/musicvid')}}"><img src="{{$services->sub3photo}}" height="184"></a><br>
                        <a href="{{ url('/musicvid') }}">
                            {{$services->sub3}}
                        </a>
                    </div>
                    </div>
                    <div class="row" id="subs2">
                        <div class="col-sm-4">
                            <a href="{{ url('/interview')}}"><img src="{{$services->sub4photo}}" height="184"></a><br>
                            <a href="{{ url('/interview') }}">
                                {{$services->sub4}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/underwatervid')}}"><img src="{{$services->sub5photo}}" height="184"></a><br>
                            <a href="{{ url('/underwatervid') }}">
                                {{$services->sub5}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/event')}}"><img src="{{$services->sub6photo}}" height="184"></a><br>
                            <a href="{{ url('/event') }}">
                                {{$services->sub6}}
                            </a>
                        </div>
                    </div>
                    <div class="row" id="subs3">
                        <div class="col-sm-4">
                            <a href="{{ url('/weddingvid')}}"><img src="{{$services->sub7photo}}" height="184"></a><br>
                            <a href="{{ url('/weddingvid') }}">
                                {{$services->sub7}}
                            </a>
                        </div>
                    </div>
                @endif
                @if($services->id === 3)
                    <h3>Business</h3>
                    <div class="row" id="subs">
                    <div class="col-sm-4">
                        <a href="{{ url('/finance')}}"><img src="{{$services->sub1photo}}" height="184"></a><br>
                        <a href="{{ url('/finance') }}">
                            {{$services->sub1}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/accounting')}}"><img src="{{$services->sub2photo}}" height="184"></a><br>
                        <a href="{{ url('/accounting') }}">
                            {{$services->sub2}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/legalconsult')}}"><img src="{{$services->sub3photo}}" height="184"></a><br>
                        <a href="{{ url('/legalconsult') }}">
                            {{$services->sub3}}
                        </a>
                    </div>
                    </div>
                    <div class="row" id="subs2">
                        <div class="col-sm-4">
                            <a href="{{ url('/presentations')}}"><img src="{{$services->sub4photo}}" height="184"></a><br>
                            <a href="{{ url('/presentations') }}">
                                {{$services->sub4}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/branding')}}"><img src="{{$services->sub5photo}}" height="184"></a><br>
                            <a href="{{ url('/branding') }}">
                                {{$services->sub5}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/analysts')}}"><img src="{{$services->sub6photo}}" height="184"></a><br>
                            <a href="{{ url('/analysts') }}">
                                {{$services->sub6}}
                            </a>
                        </div>
                    </div>
                    <div class="row" id="subs3">
                        <div class="col-sm-4">
                            <a href="{{ url('/taxprep')}}"><img src="{{$services->sub7photo}}" height="184"></a><br>
                            <a href="{{ url('/taxprep') }}">
                                {{$services->sub7}}
                            </a>
                        </div>
                    </div>
                @endif
                @if($services->id === 4)
                    <h3>Photography</h3>
                    <div class="row" id="subs">
                    <div class="col-sm-4">
                        <a href="{{ url('/nature')}}"><img src="{{$services->sub1photo}}" height="184"></a><br>
                        <a href="{{ url('/nature') }}">
                            {{$services->sub1}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/weddingphoto')}}"><img src="{{$services->sub2photo}}" height="184"></a><br>
                        <a href="{{ url('/weddingphoto') }}">
                            {{$services->sub2}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/underwaterphoto')}}"><img src="{{$services->sub3photo}}" height="184"></a><br>
                        <a href="{{ url('/underwaterphoto') }}">
                            {{$services->sub3}}
                        </a>
                    </div>
                    </div>
                    <div class="row" id="subs2">
                        <div class="col-sm-4">
                            <a href="{{ url('/photoediting')}}"><img src="{{$services->sub4photo}}" height="184"></a><br>
                            <a href="{{ url('/photoediting') }}">
                                {{$services->sub4}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/models')}}"><img src="{{$services->sub5photo}}" height="184"></a><br>
                            <a href="{{ url('/models') }}">
                                {{$services->sub5}}
                            </a>
                        </div>
                    </div>
                @endif
                @if($services->id === 5)
                    <h3>Writing</h3>
                    <div class="row" id="subs">
                    <div class="col-sm-4">
                        <a href="{{ url('/content')}}"><img src="{{$services->sub1photo}}" height="184"></a><br>
                        <a href="{{ url('/content') }}">
                            {{$services->sub1}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/editors')}}"><img src="{{$services->sub2photo}}" height="184"></a><br>
                        <a href="{{ url('/editors') }}">
                            {{$services->sub2}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/businesswriters')}}"><img src="{{$services->sub3photo}}" height="184"></a><br>
                        <a href="{{ url('/businesswriters') }}">
                            {{$services->sub3}}
                        </a>
                    </div>
                    </div>
                    <div class="row" id="subs2">
                        <div class="col-sm-4">
                            <a href="{{ url('/screenwriters')}}"><img src="{{$services->sub4photo}}" height="184" width="350"></a><br>
                            <a href="{{ url('/screenwriters') }}">
                                {{$services->sub4}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/academicwriters')}}"><img src="{{$services->sub5photo}}" height="184"></a><br>
                            <a href="{{ url('/academicwriters') }}">
                                {{$services->sub5}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/creativewriters')}}"><img src="{{$services->sub6photo}}" height="184"></a><br>
                            <a href="{{ url('/creativewriters') }}">
                                {{$services->sub6}}
                            </a>
                        </div>
                    </div>
                    <div class="row" id="subs3">
                        <div class="col-sm-4">
                            <a href="{{ url('/journalists')}}"><img src="{{$services->sub7photo}}" height="184" width="350"></a><br>
                            <a href="{{ url('/journalists') }}">
                                {{$services->sub7}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/translators')}}"><img src="{{$services->sub8photo}}" height="184"></a><br>
                            <a href="{{ url('/translators') }}">
                                {{$services->sub8}}
                            </a>
                        </div>
                    </div>
                @endif
                @if($services->id === 6)
                    <h3>Music & Audio</h3>
                    <div class="row" id="subs">
                        <div class="col-sm-4">
                            <a href="{{ url('/voice')}}"><img src="{{$services->sub1photo}}" height="184" width="350"></a><br>
                            <a href="{{ url('/voice') }}">
                                {{$services->sub1}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/piano')}}"><img src="{{$services->sub2photo}}" height="184" width="350"></a><br>
                            <a href="{{ url('/piano') }}">
                                {{$services->sub2}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/guitar')}}"><img src="{{$services->sub3photo}}" height="184"></a><br>
                            <a href="{{ url('/guitar') }}">
                                {{$services->sub3}}
                            </a>
                        </div>
                    </div>
                    <div class="row" id="subs2">
                        <div class="col-sm-4">
                            <a href="{{ url('/songwriters')}}"><img src="{{$services->sub4photo}}" height="184" width="350"></a><br>
                            <a href="{{ url('/songwriters') }}">
                                {{$services->sub4}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/soundeffects')}}"><img src="{{$services->sub5photo}}" height="184"></a><br>
                            <a href="{{ url('/soundeffects') }}">
                                {{$services->sub5}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/voiceovers')}}"><img src="{{$services->sub6photo}}" height="184"></a><br>
                            <a href="{{ url('/voiceovers') }}">
                                {{$services->sub6}}
                            </a>
                        </div>
                    </div>
                    <div class="row" id="subs3">
                        <div class="col-sm-4">
                            <a href="{{ url('/singers')}}"><img src="{{$services->sub7photo}}" height="184"></a><br>
                            <a href="{{ url('/singers') }}">
                                {{$services->sub7}}
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ url('/mixing')}}"><img src="{{$services->sub8photo}}" height="184"></a><br>
                            <a href="{{ url('/mixing') }}">
                                {{$services->sub8}}
                            </a>
                        </div>
                    </div>
                    @endif
    </div>
@endsection