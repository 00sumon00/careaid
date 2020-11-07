@extends('layouts.front_master')
@section('content')

<section class="parallax-section12">
    <div class="section-overlay dark">
        <div class="container sec-tpadding-2 sec-bpadding-2">
            <div class="row">
                {{--                    <div class="col-xs-12 text-center">--}}
                {{--                        <h2 class="section-title-2 text-white ubuntu">About Our Company</h2>--}}
                {{--                        <div class="title-line-8"></div>--}}
                {{--                        <p class="sub-title">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue .</p>--}}
                {{--                    </div>--}}
                {{--                    <div class="clearfix"></div>--}}
                <div class="col-md-6 text-center">
                    <h2 class="section-title-2 text-white ubuntu">About Our Company</h2>
                    <div class="title-line-8"></div>
                    <p class="text-white text-justify">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue . Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue . Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue . Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue . Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue . Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue .</p>
                </div>
                <!--end item-->

                <div class="col-md-6">
                    <div class="videobgholder">
                        <div id="wrapper">
                            <div id="customElement">
                                <div class="container-fluid nopadding">
                                    <div class="video-overlay bg-opacity-5">
                                        <div class="container video-toppadd video-bopadd">
                                            <div class="col-md-8 col-centered text-center">
                                                <h2 class="text-white section-title ubuntu less-mar2 uppercase">Add Your Own</h2>
                                                <h2 class="text-white section-title ubuntu uppercase">Youtube Video Backgrounds</h2>
                                                <button id="togglePlay" class="command vbutton pause" onclick="jQuery('#video').YTPTogglePlay(changeLabel)">Pause</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a id="video" class="player" data-property="{videoURL:'CWqndeS1Iu0',containment:'#customElement', showControls:false, autoPlay:true, loop:true, vol:50, mute:true, startAt:90,  stopAt:109, opacity:1, addRaster:true, quality:'hd720', optimizeDisplay:true}">My video</a> </div>
                </div>
                <!--end item-->

            {{--                    <div class="col-md-3">--}}
            {{--                        <div class="demo">--}}
            {{--                            <h5 class="text-white title">320 <span>Clients</span></h5>--}}
            {{--                            <input class="knob" data-fgColor data-thickness="0.1" readonly value="85">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <!--end item-->--}}

            {{--                    <div class="col-md-3">--}}
            {{--                        <div class="demo">--}}
            {{--                            <h5 class="text-white title">148 <span>Awards</span></h5>--}}
            {{--                            <input class="knob" data-fgColor data-thickness="0.1" readonly value="75">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            <!--end item-->

            </div>
        </div>
    </div>
</section>
<!--end section-->
<div class="clearfix"></div>
<section class="section-copyrights sec-moreless-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> <span>Copyright © 2020 <a href="">CareAid</a> | All rights reserved.</span></div>
        </div>
    </div>
</section>

@endsection
