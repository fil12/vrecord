@extends('layouts.site')

@section('content')
    <div class="mian">
        <div class="conteiner main-wrap">
            <div class="row">
                <div class="col-xs-10 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="title">a  Grain  of Me</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2 class="title-text">Anonymously share a 30 second story, secret, or memory in your voice.</h2>
                    <h5 class="text">Because your unique voice brings a texture & emotion to your story that words alone cannot.</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 button-block" >
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                            <div class="record"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <a  href="#">Record a Story</a>
                        </div>


                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 button-block">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                            <div class="Listen"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <a href="#">Listen to a Story</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">





                    <button  data-toggle="modal" data-target=".bs-example-modal-sm"><img class="share" src="{{asset('../images/BT_share.png')}}" alt=""></button>

                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="hidden">

                                    <div class="pluso" data-background="none;" data-options="small,square,line,horizontal,counter,sepcounter=1,theme=14" data-services="facebook,twitter,google,evernote,instapaper,linkedin,blogger"></div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

        </div>
    </div>
@endsection