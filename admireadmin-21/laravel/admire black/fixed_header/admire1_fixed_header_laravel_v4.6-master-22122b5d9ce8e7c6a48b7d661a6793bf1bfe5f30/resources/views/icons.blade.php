@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Icons
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/themify/css/themify-icons.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/ionicons/css/ionicons.min.css')}}" />

    <!--page level styles-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages/icon.css')}}" />

    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-4 skin_txt">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor"></i> Icons
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8">
                    <ol  class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Components</a>
                        </li>
                        <li class="active breadcrumb-item">Icons</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    Icons
                </div>
                <div class="card-block" id="tabs">
                    <ul class="nav nav-tabs m-t-35">
                        <li class="nav-item">
                            <a class="nav-link active" href="#fa-icons" data-toggle="tab">Font Awesome</a>
                        </li>
                        <li class="nav-item" id="themify_icon">
                            <a class="nav-link" href="#themify-icons" data-toggle="tab">Themify Icons</a>
                        </li>

                        <li class="nav-item" id="ionicons_tab">
                            <a class="nav-link" href="#ionicons" data-toggle="tab">Ionicons</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div  class="tab-pane active" id="fa-icons">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row justify-content-end">
                                        <div class="col-md-4 m-t-20">
                                            <form>
                                                <div class="input-group">
                                                    <label for="icon-search" class="sr-only">Search</label>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon addon_button_background"><i class="fa fa-search"></i></span>
                                                        <input type="text" name="icon-search" id="icon-search" class="form-control" placeholder="Search Icon">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-box">
                                        <section>
                                            <h5 class="m-t-10 page-header">New Icons <span class="label label-sm label-success">New</span></h5>
                                            <div class="icon-list-demo row">
                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-audio-description"></i>fa fa-audio-description</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-blind"></i>fa fa-blind</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-braille"></i>fa fa-braille</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-deaf"></i>fa fa-deaf</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-deafness"></i>fa fa-deafness</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-envira"></i>fa fa-envira</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-first-order"></i>fa fa-first-order</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-gitlab"></i>fa fa-gitlab</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-glide"></i>fa fa-glide</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-glide-g"></i>fa fa-glide-g</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-hard-of-hearing"></i>fa fa-hard-of-hearing</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-low-vision"></i>fa fa-low-vision</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-pied-piper"></i>fa fa-pied-piper</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-question-circle-o"></i>fa fa-question-circle-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sign-language"></i>fa fa-sign-language</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-signing"></i>fa fa-signing</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-snapchat"></i>fa fa-snapchat</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-snapchat-ghost"></i>fa fa-snapchat-ghost</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-snapchat-square"></i>fa fa-snapchat-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-themeisle"></i>fa fa-themeisle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-universal-access"></i>fa fa-universal-access</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-viadeo"></i>fa fa-viadeo</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-viadeo-square"></i>fa fa-viadeo-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-volume-control-phone"></i>fa fa-volume-control-phone</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-wheelchair-alt"></i>fa fa-wheelchair-alt</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-wpbeginner"></i>fa fa-wpbeginner</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-wpforms"></i>fa fa-wpforms</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-yoast"></i>fa fa-yoast</div>

                                            </div>
                                        </section>
                                        <section id="web-application">
                                            <h5 class="page-header">Web Application</h5>
                                            <div class="icon-list-demo row">
                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-adjust"></i> fa-adjust</div>
                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-anchor"></i> fa-anchor</div>
                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-archive"></i> fa-archive</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrows"></i> fa-arrows</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-asterisk"></i> fa-asterisk</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-automobile"></i> fa-automobile <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-ban"></i> fa-ban</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bank"></i> fa-bank <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-barcode"></i> fa-barcode</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bars"></i> fa-bars</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-beer"></i> fa-beer</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bell"></i> fa-bell</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bell-o"></i> fa-bell-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bolt"></i> fa-bolt</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bomb"></i> fa-bomb</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-book"></i> fa-book</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bookmark"></i> fa-bookmark</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-briefcase"></i> fa-briefcase</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bug"></i> fa-bug</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-building"></i> fa-building</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-building-o"></i> fa-building-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bullhorn"></i> fa-bullhorn</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bullseye"></i> fa-bullseye</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-cab"></i> fa-cab <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-calendar"></i> fa-calendar</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-calendar-o"></i> fa-calendar-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-camera"></i> fa-camera</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-camera-retro"></i> fa-camera-retro</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-car"></i> fa-car</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-certificate"></i> fa-certificate</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-check"></i> fa-check</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-check-circle"></i> fa-check-circle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-check-square"></i> fa-check-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-child"></i> fa-child</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-circle"></i> fa-circle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-circle-o"></i> fa-circle-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-circle-thin"></i> fa-circle-thin</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-clock-o"></i> fa-clock-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-cloud"></i> fa-cloud</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-cloud-download"></i> fa-cloud-download</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-code"></i> fa-code</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-code-fork"></i> fa-code-fork</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-coffee"></i> fa-coffee</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-cog"></i> fa-cog</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-cogs"></i> fa-cogs</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-comment"></i> fa-comment</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-comment-o"></i> fa-comment-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-comments"></i> fa-comments</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-comments-o"></i> fa-comments-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-compass"></i> fa-compass</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-credit-card"></i> fa-credit-card</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-crop"></i> fa-crop</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-crosshairs"></i> fa-crosshairs</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-cube"></i> fa-cube</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-cubes"></i> fa-cubes</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-cutlery"></i> fa-cutlery</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-database"></i> fa-database</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-desktop"></i> fa-desktop</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-download"></i> fa-download</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-envelope"></i> fa-envelope</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-envelope-o"></i> fa-envelope-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-envelope-square"></i> fa-envelope-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-eraser"></i> fa-eraser</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-exchange"></i> fa-exchange</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-exclamation"></i> fa-exclamation</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-external-link"></i> fa-external-link</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-external-link-square"></i> fa-external-link-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-eye"></i> fa-eye</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-eye-slash"></i> fa-eye-slash</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-fax"></i> fa-fax</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-female"></i> fa-female</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-code-o"></i> fa-file-code-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-image-o"></i> fa-file-image-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-video-o"></i> fa-file-video-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-word-o"></i> fa-file-word-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-film"></i> fa-film</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-filter"></i> fa-filter</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-fire"></i> fa-fire</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-flag"></i> fa-flag</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-flag-o"></i> fa-flag-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-flask"></i> fa-flask</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-folder"></i> fa-folder</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-folder-o"></i> fa-folder-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-folder-open"></i> fa-folder-open</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-frown-o"></i> fa-frown-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-gamepad"></i> fa-gamepad</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-gavel"></i> fa-gavel</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-gift"></i> fa-gift</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-glass"></i> fa-glass</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-globe"></i> fa-globe</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-graduation-cap"></i> fa-graduation-cap</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-hdd-o"></i> fa-hdd-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-headphones"></i> fa-headphones</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-heart"></i> fa-heart</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-heart-o"></i> fa-heart-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-history"></i> fa-history</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-home"></i> fa-home</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-image"></i> fa-image <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-inbox"></i> fa-inbox</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-info"></i> fa-info</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-info-circle"></i> fa-info-circle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-institution"></i> fa-institution <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-key"></i> fa-key</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-language"></i> fa-language</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-laptop"></i> fa-laptop</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-leaf"></i> fa-leaf</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-lemon-o"></i> fa-lemon-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-level-down"></i> fa-level-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-level-up"></i> fa-level-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-life-bouy"></i> fa-life-bouy <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-life-ring"></i> fa-life-ring</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-life-saver"></i> fa-life-saver <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-location-arrow"></i> fa-location-arrow</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-lock"></i> fa-lock</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-magic"></i> fa-magic</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-magnet"></i> fa-magnet</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-male"></i> fa-male</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-map-marker"></i> fa-map-marker</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-meh-o"></i> fa-meh-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-microphone"></i> fa-microphone</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-minus"></i> fa-minus</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-minus-circle"></i> fa-minus-circle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-minus-square"></i> fa-minus-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-mobile"></i> fa-mobile</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-money"></i> fa-money</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-moon-o"></i> fa-moon-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-mortar-board"></i> fa-mortar-board <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-music"></i> fa-music</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-navicon"></i> fa-navicon <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-paper-plane"></i> fa-paper-plane</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-paper-plane-o"></i> fa-paper-plane-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-paw"></i> fa-paw</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-pencil"></i> fa-pencil</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-pencil-square"></i> fa-pencil-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-phone"></i> fa-phone</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-phone-square"></i> fa-phone-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-photo"></i> fa-photo <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-picture-o"></i> fa-picture-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-plane"></i> fa-plane</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-plus"></i> fa-plus</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-plus-circle"></i> fa-plus-circle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-plus-square"></i> fa-plus-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-power-off"></i> fa-power-off</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-print"></i> fa-print</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-qrcode"></i> fa-qrcode</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-question"></i> fa-question</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-question-circle"></i> fa-question-circle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-quote-left"></i> fa-quote-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-quote-right"></i> fa-quote-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-random"></i> fa-random</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-recycle"></i> fa-recycle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-refresh"></i> fa-refresh</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-reorder"></i> fa-reorder <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-reply"></i> fa-reply</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-reply-all"></i> fa-reply-all</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-retweet"></i> fa-retweet</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-road"></i> fa-road</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-rocket"></i> fa-rocket</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-rss"></i> fa-rss</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-rss-square"></i> fa-rss-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-search"></i> fa-search</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-search-minus"></i> fa-search-minus</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-search-plus"></i> fa-search-plus</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-send"></i> fa-send <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-send-o"></i> fa-send-o <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-share"></i> fa-share</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-share-alt"></i> fa-share-alt</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-share-square"></i> fa-share-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-share-square-o"></i> fa-share-square-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-shield"></i> fa-shield</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sign-in"></i> fa-sign-in</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sign-out"></i> fa-sign-out</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-signal"></i> fa-signal</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sitemap"></i> fa-sitemap</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sliders"></i> fa-sliders</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-smile-o"></i> fa-smile-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sort"></i> fa-sort</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sort-asc"></i> fa-sort-asc</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sort-desc"></i> fa-sort-desc</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-space-shuttle"></i> fa-space-shuttle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-spinner"></i> fa-spinner</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-spoon"></i> fa-spoon</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-square"></i> fa-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-square-o"></i> fa-square-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-star"></i> fa-star</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-star-half"></i> fa-star-half</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-star-half-o"></i> fa-star-half-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-star-o"></i> fa-star-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-suitcase"></i> fa-suitcase</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-sun-o"></i> fa-sun-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-support"></i> fa-support <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-tablet"></i> fa-tablet</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-tachometer"></i> fa-tachometer</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-tag"></i> fa-tag</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-tags"></i> fa-tags</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-tasks"></i> fa-tasks</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-taxi"></i> fa-taxi</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-terminal"></i> fa-terminal</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-ticket"></i> fa-ticket</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-times"></i> fa-times</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-times-circle"></i> fa-times-circle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-tint"></i> fa-tint</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-trash-o"></i> fa-trash-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-tree"></i> fa-tree</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-trophy"></i> fa-trophy</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-truck"></i> fa-truck</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-umbrella"></i> fa-umbrella</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-university"></i> fa-university</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-unlock"></i> fa-unlock</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-upload"></i> fa-upload</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-user"></i> fa-user</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-users"></i> fa-users</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-video-camera"></i> fa-video-camera</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-volume-down"></i> fa-volume-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-volume-off"></i> fa-volume-off</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-volume-up"></i> fa-volume-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-wrench"></i> fa-wrench</div>

                                            </div>

                                        </section>


                                        <section id="file-type">
                                            <h5 class="page-header">File Type Icons</h5>

                                            <div class="row icon-list-demo">

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file"></i> fa-file</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-code-o"></i> fa-file-code-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-image-o"></i> fa-file-image-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-o"></i> fa-file-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-text"></i> fa-file-text</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-text-o"></i> fa-file-text-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-video-o"></i> fa-file-video-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-word-o"></i> fa-file-word-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span>
                                                </div>

                                            </div>

                                        </section>
                                        <section id="form-control">
                                            <h5 class="page-header">Form Control Icons</h5>

                                            <div class="row icon-list-demo">

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-check-square"></i> fa-check-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-circle"></i> fa-circle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-circle-o"></i> fa-circle-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-minus-square"></i> fa-minus-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-plus-square"></i> fa-plus-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-square"></i> fa-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-square-o"></i> fa-square-o</div>

                                            </div>
                                        </section>

                                        <section id="currency">
                                            <h5 class="page-header">Currency Icons</h5>

                                            <div class="row icon-list-demo">



                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-btc"></i> fa-btc</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-eur"></i> fa-eur</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-gbp"></i> fa-gbp</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-inr"></i> fa-inr</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-jpy"></i> fa-jpy</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-krw"></i> fa-krw</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-money"></i> fa-money</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-rub"></i> fa-rub</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-try"></i> fa-try</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-usd"></i> fa-usd</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span>
                                                </div>

                                            </div>

                                        </section>

                                        <section id="text-editor">
                                            <h5 class="page-header">Text Editor Icons</h5>

                                            <div class="row icon-list-demo">



                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-align-center"></i> fa-align-center</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-align-justify"></i> fa-align-justify</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-align-left"></i> fa-align-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-align-right"></i> fa-align-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bold"></i> fa-bold</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-chain-broken"></i> fa-chain-broken</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-clipboard"></i> fa-clipboard</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-columns"></i> fa-columns</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-eraser"></i> fa-eraser</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file"></i> fa-file</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-o"></i> fa-file-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-text"></i> fa-file-text</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-file-text-o"></i> fa-file-text-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-files-o"></i> fa-files-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-floppy-o"></i> fa-floppy-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-font"></i> fa-font</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-header"></i> fa-header</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-indent"></i> fa-indent</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-italic"></i> fa-italic</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-link"></i> fa-link</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-list"></i> fa-list</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-list-alt"></i> fa-list-alt</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-list-ol"></i> fa-list-ol</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-list-ul"></i> fa-list-ul</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-outdent"></i> fa-outdent</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-paperclip"></i> fa-paperclip</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-paragraph"></i> fa-paragraph</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-repeat"></i> fa-repeat</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-scissors"></i> fa-scissors</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-strikethrough"></i> fa-strikethrough</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-subscript"></i> fa-subscript</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-superscript"></i> fa-superscript</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-table"></i> fa-table</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-text-height"></i> fa-text-height</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-text-width"></i> fa-text-width</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-th"></i> fa-th</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-th-large"></i> fa-th-large</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-th-list"></i> fa-th-list</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-underline"></i> fa-underline</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-undo"></i> fa-undo</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span>
                                                </div>

                                            </div>

                                        </section>


                                        <section id="directional">
                                            <h5 class="page-header">Directional Icons</h5>

                                            <div class="row icon-list-demo">



                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-angle-double-down"></i> fa-angle-double-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-angle-down"></i> fa-angle-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-angle-left"></i> fa-angle-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-angle-right"></i> fa-angle-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-angle-up"></i> fa-angle-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrow-down"></i> fa-arrow-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrow-left"></i> fa-arrow-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrow-right"></i> fa-arrow-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrow-up"></i> fa-arrow-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrows"></i> fa-arrows</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-caret-down"></i> fa-caret-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-caret-left"></i> fa-caret-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-caret-right"></i> fa-caret-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-caret-up"></i> fa-caret-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-chevron-down"></i> fa-chevron-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-chevron-left"></i> fa-chevron-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-chevron-right"></i> fa-chevron-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-chevron-up"></i> fa-chevron-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-hand-o-down"></i> fa-hand-o-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-hand-o-left"></i> fa-hand-o-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-hand-o-right"></i> fa-hand-o-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-hand-o-up"></i> fa-hand-o-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span>
                                                </div>

                                            </div>

                                        </section>

                                        <section id="video-player">
                                            <h5 class="page-header">Video Player Icons</h5>

                                            <div class="row icon-list-demo">



                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-backward"></i> fa-backward</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-compress"></i> fa-compress</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-eject"></i> fa-eject</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-expand"></i> fa-expand</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-fast-backward"></i> fa-fast-backward</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-fast-forward"></i> fa-fast-forward</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-forward"></i> fa-forward</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-pause"></i> fa-pause</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-play"></i> fa-play</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-play-circle"></i> fa-play-circle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-step-backward"></i> fa-step-backward</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-step-forward"></i> fa-step-forward</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-stop"></i> fa-stop</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>

                                            </div>

                                        </section>

                                        <section id="brand">
                                            <h5 class="page-header">Brand Icons</h5>

                                            <div class="alert alert-success">
                                                <ul class="margin-bottom-none padding-left-lg">
                                                    <li>All brand icons are trademarks of their respective owners.</li>
                                                    <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
                                                </ul>

                                            </div>
                                            <div class="row icon-list-demo">

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-adn"></i> fa-adn</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-android"></i> fa-android</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-apple"></i> fa-apple</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-behance"></i> fa-behance</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-behance-square"></i> fa-behance-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bitbucket"></i> fa-bitbucket</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-btc"></i> fa-btc</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-codepen"></i> fa-codepen</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-css3"></i> fa-css3</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-delicious"></i> fa-delicious</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-deviantart"></i> fa-deviantart</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-digg"></i> fa-digg</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-dribbble"></i> fa-dribbble</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-dropbox"></i> fa-dropbox</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-drupal"></i> fa-drupal</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-empire"></i> fa-empire</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-facebook"></i> fa-facebook</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-facebook-square"></i> fa-facebook-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-flickr"></i> fa-flickr</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-foursquare"></i> fa-foursquare</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-ge"></i> fa-ge <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-git"></i> fa-git</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-git-square"></i> fa-git-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-github"></i> fa-github</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-github-alt"></i> fa-github-alt</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-github-square"></i> fa-github-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-gittip"></i> fa-gittip</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-google"></i> fa-google</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-google-plus"></i> fa-google-plus</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-google-plus-square"></i> fa-google-plus-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-hacker-news"></i> fa-hacker-news</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-html5"></i> fa-html5</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-instagram"></i> fa-instagram</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-joomla"></i> fa-joomla</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-jsfiddle"></i> fa-jsfiddle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-linkedin"></i> fa-linkedin</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-linkedin-square"></i> fa-linkedin-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-linux"></i> fa-linux</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-maxcdn"></i> fa-maxcdn</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-openid"></i> fa-openid</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-pagelines"></i> fa-pagelines</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-pied-piper"></i> fa-pied-piper</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-pied-piper-alt"></i> fa-pied-piper-alt</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-pinterest"></i> fa-pinterest</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-pinterest-square"></i> fa-pinterest-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-qq"></i> fa-qq</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-ra"></i> fa-ra <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-rebel"></i> fa-rebel</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-reddit"></i> fa-reddit</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-reddit-square"></i> fa-reddit-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-renren"></i> fa-renren</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-share-alt"></i> fa-share-alt</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-skype"></i> fa-skype</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-slack"></i> fa-slack</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-soundcloud"></i> fa-soundcloud</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-spotify"></i> fa-spotify</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-stack-overflow"></i> fa-stack-overflow</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-steam"></i> fa-steam</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-steam-square"></i> fa-steam-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-stumbleupon"></i> fa-stumbleupon</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-stumbleupon-circle"></i> fa-stumbleupon-circle</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-tencent-weibo"></i> fa-tencent-weibo</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-trello"></i> fa-trello</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-tumblr"></i> fa-tumblr</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-tumblr-square"></i> fa-tumblr-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-twitter"></i> fa-twitter</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-twitter-square"></i> fa-twitter-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-vine"></i> fa-vine</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-vk"></i> fa-vk</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-wechat"></i> fa-wechat <span class="text-muted">(alias)</span>
                                                </div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-weibo"></i> fa-weibo</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-weixin"></i> fa-weixin</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-windows"></i> fa-windows</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-wordpress"></i> fa-wordpress</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-xing"></i> fa-xing</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-xing-square"></i> fa-xing-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-yahoo"></i> fa-yahoo</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-youtube"></i> fa-youtube</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-youtube-square"></i> fa-youtube-square</div>

                                            </div>
                                        </section>

                                        <section id="medical">
                                            <h5 class="page-header">Medical Icons</h5>

                                            <div class="row icon-list-demo">
                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-ambulance"></i> fa-ambulance</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-h-square"></i> fa-h-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-hospital-o"></i> fa-hospital-o</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-medkit"></i> fa-medkit</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-plus-square"></i> fa-plus-square</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-stethoscope"></i> fa-stethoscope</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-user-md"></i> fa-user-md</div>

                                                <div class="col-sm-6 col-lg-4 col-xl-3 col-12 fa-icon"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
                                            </div>

                                        </section>
                                    </div>
                                </div>

                            </div> <!-- End Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-box">
                                        <h5 class="page-header">Examples</h5>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="m-b-30">
                                                    <h5 class="text-muted m-b-20">Larger Icons</h5>

                                                    <i class="fa fa-camera-retro fa-lg"></i> fa-lg <br/>
                                                    <i class="fa fa-camera-retro fa-2x"></i> fa-2x <br/>
                                                    <i class="fa fa-camera-retro fa-3x"></i> fa-3x <br/>
                                                    <i class="fa fa-camera-retro fa-4x"></i> fa-4x <br/>
                                                    <i class="fa fa-camera-retro fa-5x"></i> fa-5x <br/>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="m-b-30">
                                                    <h5 class="text-muted m-b-20">Fixed Width Icons</h5>

                                                    <div class="list-group">
                                                        <a class="list-group-item" href="#"><i class="fa fa-home fa-fw"></i>&nbsp;
                                                            Home</a>
                                                        <a class="list-group-item" href="#"><i class="fa fa-book fa-fw"></i>&nbsp;
                                                            Library</a>
                                                        <a class="list-group-item" href="#"><i class="fa fa-pencil fa-fw"></i>&nbsp;
                                                            Applications</a>
                                                        <a class="list-group-item" href="#"><i class="fa fa-cog fa-fw"></i>&nbsp;
                                                            Settings</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="m-b-30">
                                                    <h5 class="text-muted m-b-20">List Icons</h5>

                                                    <ul class="fa-ul">
                                                        <li><i class="fa-li fa fa-check-square"></i>List icons</li>
                                                        <li><i class="fa-li fa fa-spinner fa-spin"></i>as bullets</li>
                                                        <li><i class="fa-li fa fa-square"></i>in lists</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="m-b-30">
                                                    <h5 class="text-muted m-b-20">Bordered & Pulled Icons</h5>

                                                    <i class="fa fa-quote-left fa-3x fa-pull-left fa-border"></i>
                                                    ...tomorrow we will run faster, stretch out our arms farther...
                                                    And then one fine morning— So we beat on, boats against the
                                                    current, borne back ceaselessly into the past.
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="m-b-30">
                                                    <h5 class="text-muted m-b-20">Rotated & Flipped</h5>

                                                    <i class="fa fa-shield"></i> normal<br>
                                                    <i class="fa fa-shield fa-rotate-90"></i> fa-rotate-90<br>
                                                    <i class="fa fa-shield fa-rotate-180"></i> fa-rotate-180<br>
                                                    <i class="fa fa-shield fa-rotate-270"></i> fa-rotate-270<br>
                                                    <i class="fa fa-shield fa-flip-horizontal"></i> fa-flip-horizontal<br>
                                                    <i class="fa fa-shield fa-flip-vertical"></i> icon-flip-vertical
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="m-b-30">
                                                    <h5 class="text-muted m-b-20">Stacked Icons</h5>

                                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-square-o fa-stack-2x"></i>
                                      <i class="fa fa-twitter fa-stack-1x"></i>
                                    </span>
                                                    fa-twitter on fa-square-o<br>
                                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
                                    </span>
                                                    fa-flag on fa-circle<br>
                                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-square fa-stack-2x"></i>
                                      <i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
                                    </span>
                                                    fa-terminal on fa-square<br>
                                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-camera fa-stack-1x"></i>
                                      <i class="fa fa-ban fa-stack-2x text-danger"></i>
                                    </span>
                                                    fa-ban on fa-camera
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="themify-icons">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row justify-content-end">
                                        <div class="col-md-4 m-t-20">
                                            <form>
                                                <div class="input-group">
                                                    <label for="icon-search" class="sr-only">Search</label>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon addon_button_background"><i class="fa fa-search"></i></span>
                                                        <input type="text" name="icon-search" id="icon-search2" class="form-control" placeholder="Search Icon">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                    <div class="card-box">
                                        <h5 class="page-header m-t-15">Arrows &amp; Direction Icons</h5>
                                        <p class="text-muted m-b-15 font-13">
                                            Use  <code>&lt;i class="ti-arrow-up"&gt;&lt;/i&gt;</code>.
                                        </p>

                                        <div class="row icon-list-demo">
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrow-up"></i> ti-arrow-up
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrow-right"></i> ti-arrow-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrow-left"></i> ti-arrow-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrow-down"></i> ti-arrow-down
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrows-vertical"></i> ti-arrows-vertical
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrows-horizontal"></i> ti-arrows-horizontal
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-angle-up"></i> ti-angle-up
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-angle-right"></i> ti-angle-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-angle-left"></i> ti-angle-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-angle-down"></i> ti-angle-down
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-angle-double-up"></i> ti-angle-double-up
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-angle-double-right"></i> ti-angle-double-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-angle-double-left"></i> ti-angle-double-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-angle-double-down"></i> ti-angle-double-down
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-move"></i> ti-move
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-fullscreen"></i> ti-fullscreen
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrow-top-right"></i> ti-arrow-top-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrow-top-left"></i> ti-arrow-top-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrow-circle-up"></i> ti-arrow-circle-up
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrow-circle-right"></i> ti-arrow-circle-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrow-circle-left"></i> ti-arrow-circle-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrow-circle-down"></i> ti-arrow-circle-down
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-arrows-corner"></i> ti-arrows-corner
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-split-v"></i> ti-split-v
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-split-v-alt"></i> ti-split-v-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-split-h"></i> ti-split-h
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-hand-point-up"></i> ti-hand-point-up
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-hand-point-right"></i> ti-hand-point-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-hand-point-left"></i> ti-hand-point-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-hand-point-down"></i> ti-hand-point-down
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-back-right"></i> ti-back-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-back-left"></i> ti-back-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-exchange-vertical"></i> ti-exchange-vertical
                                            </div>


                                        </div>
                                        <!-- End row -->

                                        <h5 class="page-header">Web App Icons</h5>
                                        <div class="row icon-list-demo">
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-wand"></i> ti-wand
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-save"></i> ti-save
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-save-alt"></i> ti-save-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-direction"></i> ti-direction
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-direction-alt"></i> ti-direction-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-user"></i> ti-user
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-link"></i> ti-link
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-unlink"></i> ti-unlink
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-trash"></i> ti-trash
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-target"></i> ti-target
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-tag"></i> ti-tag
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-desktop"></i> ti-desktop
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-tablet"></i> ti-tablet
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-mobile"></i> ti-mobile
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-email"></i> ti-email
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-star"></i> ti-star
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-spray"></i> ti-spray
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-signal"></i> ti-signal
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-shopping-cart"></i> ti-shopping-cart
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-shopping-cart-full"></i> ti-shopping-cart-full
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-settings"></i> ti-settings
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-search"></i> ti-search
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-zoom-in"></i> ti-zoom-in
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-zoom-out"></i> ti-zoom-out
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-cut"></i> ti-cut
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-ruler-alt-2"></i> ti-ruler-alt-2
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-ruler"></i> ti-ruler
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-ruler-pencil"></i> ti-ruler-pencil
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-ruler-alt"></i> ti-ruler-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-bookmark"></i> ti-bookmark
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-bookmark-alt"></i> ti-bookmark-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-reload"></i> ti-reload
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-plus"></i> ti-plus
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-minus"></i> ti-minus
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-close"></i> ti-close
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-pin"></i> ti-pin
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-pencil"></i> ti-pencil
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-pencil-alt"></i> ti-pencil-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-paint-roller"></i> ti-paint-roller
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-paint-bucket"></i> ti-paint-bucket
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-na"></i> ti-na
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-medall"></i> ti-medall
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-medall-alt"></i> ti-medall-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-marker"></i> ti-marker
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-marker-alt"></i> ti-marker-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-lock"></i> ti-lock
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-unlock"></i> ti-unlock
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-location-arrow"></i> ti-location-arrow
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout"></i> ti-layout
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layers"></i> ti-layers
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layers-alt"></i> ti-layers-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-key"></i> ti-key
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-image"></i> ti-image
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-heart"></i> ti-heart
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-heart-broken"></i> ti-heart-broken
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-hand-stop"></i> ti-hand-stop
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-hand-open"></i> ti-hand-open
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-hand-drag"></i> ti-hand-drag
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-flag"></i> ti-flag
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-flag-alt"></i> ti-flag-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-flag-alt-2"></i> ti-flag-alt-2
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-eye"></i> ti-eye
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-import"></i> ti-import
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-export"></i> ti-export
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-cup"></i> ti-cup
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-crown"></i> ti-crown
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-comments"></i> ti-comments
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-comment"></i> ti-comment
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-comment-alt"></i> ti-comment-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-thought"></i> ti-thought
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-clip"></i> ti-clip
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-check"></i> ti-check
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-check-box"></i> ti-check-box
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-camera"></i> ti-camera
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-announcement"></i> ti-announcement
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-brush"></i> ti-brush
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-brush-alt"></i> ti-brush-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-palette"></i> ti-palette
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-briefcase"></i> ti-briefcase
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-bolt"></i> ti-bolt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-bolt-alt"></i> ti-bolt-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-blackboard"></i> ti-blackboard
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-bag"></i> ti-bag
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-world"></i> ti-world
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-wheelchair"></i> ti-wheelchair
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-car"></i> ti-car
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-truck"></i> ti-truck
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-timer"></i> ti-timer
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-ticket"></i> ti-ticket
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-thumb-up"></i> ti-thumb-up
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-thumb-down"></i> ti-thumb-down
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-stats-up"></i> ti-stats-up
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-stats-down"></i> ti-stats-down
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-shine"></i> ti-shine
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-shift-right"></i> ti-shift-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-shift-left"></i> ti-shift-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-shift-right-alt"></i> ti-shift-right-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-shift-left-alt"></i> ti-shift-left-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-shield"></i> ti-shield
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-notepad"></i> ti-notepad
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-server"></i> ti-server
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-pulse"></i> ti-pulse
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-printer"></i> ti-printer
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-power-off"></i> ti-power-off
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-plug"></i> ti-plug
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-pie-chart"></i> ti-pie-chart
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-panel"></i> ti-panel
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-package"></i> ti-package
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-music"></i> ti-music
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-music-alt"></i> ti-music-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-mouse"></i> ti-mouse
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-mouse-alt"></i> ti-mouse-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-money"></i> ti-money
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-microphone"></i> ti-microphone
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-menu"></i> ti-menu
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-menu-alt"></i> ti-menu-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-map"></i> ti-map
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-map-alt"></i> ti-map-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-location-pin"></i> ti-location-pin
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-light-bulb"></i> ti-light-bulb
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-info"></i> ti-info
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-infinite"></i> ti-infinite
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-id-badge"></i> ti-id-badge
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-hummer"></i> ti-hummer
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-home"></i> ti-home
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-help"></i> ti-help
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-headphone"></i> ti-headphone
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-harddrives"></i> ti-harddrives
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-harddrive"></i> ti-harddrive
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-gift"></i> ti-gift
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-game"></i> ti-game
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-filter"></i> ti-filter
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-files"></i> ti-files
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-file"></i> ti-file
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-zip"></i> ti-zip
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-folder"></i> ti-folder
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-envelope"></i> ti-envelope
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-dashboard"></i> ti-dashboard
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-cloud"></i> ti-cloud
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-cloud-up"></i> ti-cloud-up
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-cloud-down"></i> ti-cloud-down
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-clipboard"></i> ti-clipboard
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-calendar"></i> ti-calendar
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-book"></i> ti-book
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-bell"></i> ti-bell
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-basketball"></i> ti-basketball
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-bar-chart"></i> ti-bar-chart
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-bar-chart-alt"></i> ti-bar-chart-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-archive"></i> ti-archive
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-anchor"></i> ti-anchor
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-alert"></i> ti-alert
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-alarm-clock"></i> ti-alarm-clock
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-agenda"></i> ti-agenda
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-write"></i> ti-write
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-wallet"></i> ti-wallet
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-video-clapper"></i> ti-video-clapper
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-video-camera"></i> ti-video-camera
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-vector"></i> ti-vector
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-support"></i> ti-support
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-stamp"></i> ti-stamp
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-slice"></i> ti-slice
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-shortcode"></i> ti-shortcode
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-receipt"></i> ti-receipt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-pin2"></i> ti-pin2
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-pin-alt"></i> ti-pin-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-pencil-alt2"></i> ti-pencil-alt2
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-eraser"></i> ti-eraser
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-more"></i> ti-more
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-more-alt"></i> ti-more-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-microphone-alt"></i> ti-microphone-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-magnet"></i> ti-magnet
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-line-double"></i> ti-line-double
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-line-dotted"></i> ti-line-dotted
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-line-dashed"></i> ti-line-dashed
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-ink-pen"></i> ti-ink-pen
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-info-alt"></i> ti-info-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-help-alt"></i> ti-help-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-headphone-alt"></i> ti-headphone-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-gallery"></i> ti-gallery
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-face-smile"></i> ti-face-smile
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-face-sad"></i> ti-face-sad
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-credit-card"></i> ti-credit-card
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-comments-smiley"></i> ti-comments-smiley
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-time"></i> ti-time
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-share"></i> ti-share
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-share-alt"></i> ti-share-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-rocket"></i> ti-rocket
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-new-window"></i> ti-new-window
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-rss"></i> ti-rss
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-rss-alt"></i> ti-rss-alt
                                            </div>

                                        </div>
                                        <!-- End row -->

                                        <h5 class="page-header">Control Icons</h5>

                                        <div class="row icon-list-demo">

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-control-stop"></i> ti-control-stop
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-control-shuffle"></i> ti-control-shuffle
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-control-play"></i> ti-control-play
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-control-pause"></i> ti-control-pause
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-control-forward"></i> ti-control-forward
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-control-backward"></i> ti-control-backward
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-volume"></i> ti-volume
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-control-skip-forward"></i> ti-control-skip-forward
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-control-skip-backward"></i> ti-control-skip-backward
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-control-record"></i> ti-control-record
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-control-eject"></i> ti-control-eject
                                            </div>


                                        </div>
                                        <!-- End row -->


                                        <h5 class="page-header">Text Editor</h5>

                                        <div class="row icon-list-demo">

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-paragraph"></i> ti-paragraph
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-uppercase"></i> ti-uppercase
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-underline"></i> ti-underline
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-text"></i> ti-text
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-Italic"></i> ti-Italic
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-smallcap"></i> ti-smallcap
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-list"></i> ti-list
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-list-ol"></i> ti-list-ol
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-align-right"></i> ti-align-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-align-left"></i> ti-align-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-align-justify"></i> ti-align-justify
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-align-center"></i> ti-align-center
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-quote-right"></i> ti-quote-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-quote-left"></i> ti-quote-left
                                            </div>

                                        </div>
                                        <!-- End row -->

                                        <h5 class="page-header">Layout Icons</h5>

                                        <div class="row icon-list-demo">

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-width-full"></i> ti-layout-width-full
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-width-default"></i> ti-layout-width-default
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-width-default-alt"></i> ti-layout-width-default-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-tab"></i> ti-layout-tab
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-tab-window"></i> ti-layout-tab-window
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-tab-v"></i> ti-layout-tab-v
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-tab-min"></i> ti-layout-tab-min
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-slider"></i> ti-layout-slider
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-slider-alt"></i> ti-layout-slider-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-sidebar-right"></i> ti-layout-sidebar-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-sidebar-none"></i> ti-layout-sidebar-none
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-sidebar-left"></i> ti-layout-sidebar-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-placeholder"></i> ti-layout-placeholder
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-menu"></i> ti-layout-menu
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-menu-v"></i> ti-layout-menu-v
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-menu-separated"></i> ti-layout-menu-separated
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-menu-full"></i> ti-layout-menu-full
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-media-right"></i> ti-layout-media-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-media-right-alt"></i> ti-layout-media-right-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-media-overlay"></i> ti-layout-media-overlay
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-media-overlay-alt"></i> ti-layout-media-overlay-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-media-left"></i> ti-layout-media-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-media-overlay-alt-2"></i> ti-layout-media-overlay-alt-2
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-media-left-alt"></i> ti-layout-media-left-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-media-center"></i> ti-layout-media-center
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-media-center-alt"></i> ti-layout-media-center-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-list-thumb"></i> ti-layout-list-thumb
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-list-thumb-alt"></i> ti-layout-list-thumb-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-list-post"></i> ti-layout-list-post
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-list-large-image"></i> ti-layout-list-large-image
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-line-solid"></i> ti-layout-line-solid
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-grid4"></i> ti-layout-grid4
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-grid3"></i> ti-layout-grid3
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-grid2"></i> ti-layout-grid2
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-grid2-thumb"></i> ti-layout-grid2-thumb
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-cta-right"></i> ti-layout-cta-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-cta-left"></i> ti-layout-cta-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-cta-center"></i> ti-layout-cta-center
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-cta-btn-right"></i> ti-layout-cta-btn-right
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-cta-btn-left"></i> ti-layout-cta-btn-left
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-column4"></i> ti-layout-column4
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-column3"></i> ti-layout-column3
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-accordion-merged"></i> ti-layout-accordion-merged
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-column2"></i> ti-layout-column2
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-accordion-list"></i> ti-layout-accordion-list
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-widgetized"></i> ti-widgetized
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-widget"></i> ti-widget
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-widget-alt"></i> ti-widget-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-view-list"></i> ti-view-list
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-view-list-alt"></i> ti-view-list-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-view-grid"></i> ti-view-grid
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-upload"></i> ti-upload
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-download"></i> ti-download
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-loop"></i> ti-loop
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-sidebar-2"></i> ti-layout-sidebar-2
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-grid4-alt"></i> ti-layout-grid4-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-grid3-alt"></i> ti-layout-grid3-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-grid2-alt"></i> ti-layout-grid2-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-column4-alt"></i> ti-layout-column4-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-column3-alt"></i> ti-layout-column3-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-layout-column2-alt"></i> ti-layout-column2-alt
                                            </div>


                                        </div>
                                        <!-- End row -->

                                        <h5 class="page-header">Brand Icons</h5>

                                        <div class="row icon-list-demo">

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-flickr"></i> ti-flickr
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-flickr-alt"></i> ti-flickr-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-instagram"></i> ti-instagram
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-google"></i> ti-google
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-github"></i> ti-github
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-facebook"></i> ti-facebook
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-dropbox"></i> ti-dropbox
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-dropbox-alt"></i> ti-dropbox-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-dribbble"></i> ti-dribbble
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-apple"></i> ti-apple
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-android"></i> ti-android
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-yahoo"></i> ti-yahoo
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-trello"></i> ti-trello
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-stack-overflow"></i> ti-stack-overflow
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-soundcloud"></i> ti-soundcloud
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-sharethis"></i> ti-sharethis
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-sharethis-alt"></i> ti-sharethis-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-reddit"></i> ti-reddit
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-microsoft"></i> ti-microsoft
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-microsoft-alt"></i> ti-microsoft-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-linux"></i> ti-linux
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-jsfiddle"></i> ti-jsfiddle
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-joomla"></i> ti-joomla
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-html5"></i> ti-html5
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-css3"></i> ti-css3
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-drupal"></i> ti-drupal
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-wordpress"></i> ti-wordpress
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-tumblr"></i> ti-tumblr
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-tumblr-alt"></i> ti-tumblr-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-skype"></i> ti-skype
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-youtube"></i> ti-youtube
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-vimeo"></i> ti-vimeo
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-vimeo-alt"></i> ti-vimeo-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-twitter"></i> ti-twitter
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-twitter-alt"></i> ti-twitter-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-linkedin"></i> ti-linkedin
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-pinterest"></i> ti-pinterest
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-pinterest-alt"></i> ti-pinterest-alt
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-themify-logo"></i> ti-themify-logo
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-themify-favicon"></i> ti-themify-favicon
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 themify_icon">
                                                <i class="ti-themify-favicon-alt"></i> ti-themify-favicon-alt
                                            </div>

                                        </div>
                                        <!-- End row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="ionicons">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row justify-content-end">
                                        <div class="col-md-4 m-t-20">
                                            <form>
                                                <div class="input-group">
                                                    <label for="icon-search" class="sr-only">Search</label>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon addon_button_background"><i class="fa fa-search"></i></span>
                                                        <input type="text" name="icon-search" id="icon-search3" class="form-control" placeholder="Search Icon">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 m-t-15 m-b-20">
                                            Class starts with <span class="text-danger">ion-*</span>
                                        </div>
                                    </div>
                                    <div class="card-box">
                                        <div class="row icon-list-demo">
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ionic"></i>ionic
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-up-a"></i>arrow-up-a
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-right-a"></i>arrow-right-a
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-down-a"></i>arrow-down-a
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-left-a"></i>arrow-left-a
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-up-b"></i>arrow-up-b
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-right-b"></i>arrow-right-b
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-down-b"></i>arrow-down-b
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-left-b"></i>arrow-left-b
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-up-c"></i>arrow-up-c
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-right-c"></i>arrow-right-c
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-down-c"></i>arrow-down-c
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-left-c"></i>arrow-left-c
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-return-right"></i>arrow-return-right
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-return-left"></i>arrow-return-left
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-swap"></i>arrow-swap
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-shrink"></i>arrow-shrink
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-expand"></i>arrow-expand
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-move"></i>arrow-move
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-resize"></i>arrow-resize
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-chevron-up"></i>chevron-up
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-chevron-right"></i>chevron-right
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-chevron-down"></i>chevron-down
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-chevron-left"></i>chevron-left
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-navicon-round"></i>navicon-round
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-navicon"></i>navicon
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-drag"></i>drag
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-log-in"></i>log-in
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-log-out"></i>log-out
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-checkmark-round"></i>checkmark-round
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-checkmark"></i>checkmark
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-checkmark-circled"></i>checkmark-circled
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-close-round"></i>close-round
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-close"></i>close
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-close-circled"></i>close-circled
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-plus-round"></i>plus-round
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-plus"></i>plus
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-plus-circled"></i>plus-circled
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-minus-round"></i>minus-round
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-minus"></i>minus
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-minus-circled"></i>minus-circled
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-information"></i>information
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-information-circled"></i>information-circled
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-help"></i>help
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-help-circled"></i>help-circled
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-help-buoy"></i>help-buoy
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-asterisk"></i>asterisk
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-alert"></i>alert
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-alert-circled"></i>alert-circled
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-refresh"></i>refresh
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-loop"></i>loop
                                            </div>


                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-shuffle"></i>shuffle
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-home"></i>home
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-search"></i>search
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-flag"></i>flag
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-star"></i>star
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-heart"></i>heart
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-heart-broken"></i>heart-broken
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-gear-a"></i>gear-a
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-gear-b"></i>gear-b
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-toggle-filled"></i>toggle-filled
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-toggle"></i>toggle
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-settings"></i>settings
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-wrench"></i>wrench
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-folder"></i>folder
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-hammer"></i>hammer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-edit"></i>edit
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-trash-a"></i>trash-a
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-trash-b"></i>trash-b
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-document"></i>document
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-document-text"></i>document-text
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-clipboard"></i>clipboard
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-scissors"></i>scissors
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-funnel"></i>funnel
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-bookmark"></i>bookmark
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-email"></i>email
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-folder"></i>folder
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-filing"></i>filing
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-archive"></i>archive
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-reply"></i>reply
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-reply-all"></i>reply-all
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-forward"></i>forward
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-share"></i>share
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-paper-airplane"></i>paper-airplane
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-link"></i>link
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-paperclip"></i>ion paperclip
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-compose"></i>compose
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-briefcase"></i>briefcase
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-medkit"></i>medkit
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-at"></i>at
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-pound"></i>pound
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-quote"></i>quote
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-cloud"></i>cloud
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-upload"></i>upload
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-more"></i>more
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-grid"></i>grid
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-calendar"></i>calendar
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-clock"></i>clock
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-compass"></i>compass
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-pinpoint"></i>pinpoint
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-pin"></i>pin
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-navigate"></i>navigate
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-location"></i>location
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-map"></i>map
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-model-s"></i>model-s
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-locked"></i>locked
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-unlocked"></i>unlocked
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-key"></i>key
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-graph-up-right"></i>arrow-graph-up-right
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-graph-down-right"></i>arrow-graph-down-right
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-arrow-graph-down-left"></i>arrow-graph-down-left
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-stats-bars"></i>stats-bars
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-connection-bars"></i>connection-bars
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-pie-graph"></i>pie-graph
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-chatbubble"></i>chatbubble
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-chatbubble-working"></i>chatbubble-working
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-chatbubbles"></i>chatbubbles
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-chatbox"></i>chatbox
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-chatbox-working"></i>chatbox-working
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-chatboxes"></i>chatboxes
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-person"></i>person
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-person-add"></i>person-add
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-person-stalker"></i>person-stalker
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-woman"></i>woman
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-man"></i>man
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-female"></i>female
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-male"></i>male
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-fork"></i>fork
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-knife"></i>knife
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-spoon"></i>spoon
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-beer"></i>beer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-wineglass"></i>wineglass
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-coffee"></i>coffee
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-icecream"></i>icecream
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-pizza"></i>pizza
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-power"></i>power
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-mouse"></i>mouse
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-battery-full"></i>battery-full
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-battery-half"></i>battery-half
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-battery-low"></i>battery-low
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-battery-empty"></i>battery-empty
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-battery-charging"></i>battery-charging
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-wifi"></i>wifi
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-bluetooth"></i>bluetooth
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-calculator"></i>calculator
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-camera"></i>camera
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-eye"></i>eye
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-eye-disabled"></i>eye-disabled
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-flash"></i>flash
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-flash-off"></i>flash-off
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-qr-scanner"></i>qr-scanner
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-image"></i>image
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-images"></i>images
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-contrast"></i>contrast
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-wand"></i>wall
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-aperture"></i>aperture
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-monitor"></i>monitor
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-laptop"></i>laptop
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ipad"></i>ipad
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-iphone"></i>iphone
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ipod"></i>ipod
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-printer"></i>printer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-usb"></i>usb
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-outlet"></i>outlet
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-bug"></i>bug
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-code"></i>code
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-code-working"></i>code-working
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-code-download"></i>code-download
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-fork-repo"></i>fork-repo
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-network"></i>network
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-pull-request"></i>pull-request
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-merge"></i>go
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-game-controller-a"></i>game-controller-a
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-game-controller-b"></i>game-controller-b
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-xbox"></i>xbox
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-playstation"></i>playstation
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-steam"></i>steam
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-closed-captioning"></i>closed-captioning
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-videocamera"></i>camera
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-film-marker"></i>film-marker
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-disc"></i>disc
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-headphone"></i>headphone
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-music-note"></i>music-note
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-radio-waves"></i>radio-waves
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-speakerphone"></i>speakerphone
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-mic-a"></i>mic-a
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-mic-b"></i>mic-b
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-mic-c"></i>mic-c
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-volume-high"></i>volume-high
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-volume-medium"></i>volume-medium
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-volume-low"></i>volume-low
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-volume-mute"></i>volume-mute
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-levels"></i>levels
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-play"></i>play
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-pause"></i>pause
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-stop"></i>stop
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-record"></i>record
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-skip-forward"></i>skip-forward
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-skip-backward"></i>skip-backward
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-eject"></i>eject
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-bag"></i>bag
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-card"></i>card
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-cash"></i>cash
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-pricetag"></i>pricetag
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-pricetags"></i>pricetags
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-thumbsup"></i>thumbsup
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-thumbsdown"></i>thumbsdown
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-happy"></i>happy
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-sad"></i>sad
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-trophy"></i>trophy
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-podium"></i>podium
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ribbon-a"></i>ribbon-a
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ribbon-b"></i>ribbon-b
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-university"></i>university
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-magnet"></i>magnet
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-beaker"></i>beaker
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-flask"></i>flask
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-egg"></i>egg
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-earth"></i>earth
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-planet"></i>planet
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-lightbulb"></i>lightbulb
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-cube"></i>cube
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-leaf"></i>leaf
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-waterdrop"></i>waterdrop
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-flame"></i>flame
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-fireball"></i>fireball
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-bonfire"></i>bonfire
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-umbrella"></i>umbrella
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-nuclear"></i>nuclear
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-no-smoking"></i>no-smoking
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-thermometer"></i>thermometer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-speedometer"></i>speedometer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-plane"></i>plane
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-jet"></i>jet
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-load-a"></i>load-a
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-load-b"></i>load-b
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-load-c"></i>load-c
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-load-d"></i>load-d
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 m-t-15 m-b-20">
                                                Class starts with <span class="text-danger">ion-ios7-*</span>
                                            </div>
                                        </div>
                                        <div class="row icon-list-demo">
                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-ionic-outline"></i>ionic-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-arrow-back"></i>arrow-back
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-arrow-forward"></i>arrow-forward
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-arrow-up"></i>arrow-up
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-arrow-right"></i>arrow-right
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-arrow-down"></i>arrow-down
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-arrow-left"></i>arrow-left
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-arrow-thin-up"></i>arrow-thin-up
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-arrow-thin-right"></i>arrow-thin-right
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-arrow-thin-down"></i>arrow-thin-down
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-arrow-thin-left"></i>arrow-thin-left
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-circle-filled"></i>circle-filled
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-circle-outline"></i>circle-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-checkmark-empty"></i>checkmark-empty
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-checkmark-outline"></i>checkmark-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-checkmark"></i>checkmark
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-plus-empty"></i>plus-empty
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-plus-outline"></i>plus-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-plus"></i>ios7 more
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-close-empty"></i>close-empty
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-close-outline"></i>close-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-close"></i>close
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-minus-empty"></i>minus-empty
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-minus-outline"></i>minus-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-minus"></i>minus
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-information-empty"></i>information-empty
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-information-outline"></i>information-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-information"></i>information
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-help-empty"></i>help-empty
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-help-outline"></i>help-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-help"></i>help
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-search"></i>search
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-search-strong"></i>search-strong
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-star"></i>star
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-star-half"></i>star-half
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-star-outline"></i>star-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-heart"></i>heart
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-heart-outline"></i>heart-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-more"></i>more
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-more-outline"></i>more-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-home"></i>home
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-home-outline"></i>home-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cloud"></i>cloud
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cloud-outline"></i>cloud-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cloud-upload"></i>cloud-upload
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cloud-upload-outline"></i>cloud-upload-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cloud-download"></i>cloud-download
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cloud-download-outline"></i>cloud-download-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-upload"></i>upload
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-upload-outline"></i>upload-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-download"></i>download
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-download-outline"></i>download-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-refresh"></i>refresh
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-refresh-outline"></i>refresh-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-refresh-empty"></i>refresh-empty
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-reload"></i>reload
                                            </div>


                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-loop-strong"></i>loop-strong
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-loop"></i>loop
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-bookmarks"></i>bookmarks
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-bookmarks-outline"></i>bookmarks-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-flag"></i>flag
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-flag-outline"></i>flag-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-glasses"></i>glasses
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-glasses-outline"></i>glasses-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-browsers"></i>browsers
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-browsers-outline"></i>browsers-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-at"></i>at
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-at-outline"></i>at-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cart"></i>cart
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cart-outline"></i>cart-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-pricetag"></i>pricetag
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-pricetag-outline"></i>pricetag-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-pricetags"></i>pricetags
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-pricetags-outline"></i>pricetags-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-chatboxes"></i>chatboxes
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-chatboxes-outline"></i>chatboxes-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-chatbubble"></i>chatbubble
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-chatbubble-outline"></i>chatbubble-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cog"></i>cog
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cog-outline"></i>cog-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-gear"></i>gear
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-gear-outline"></i>gear-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-settings"></i>settings
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-settings-strong"></i>settings-strong
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-toggle"></i>toggle
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-toggle-outline"></i>toggle-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-analytics"></i>analytics
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-analytics-outline"></i>analytics-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-pie"></i>pie
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-pie-outline"></i>pie-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-pulse"></i>pulse
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-pulse-strong"></i>pulse-strong
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-filing"></i>filing
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-filing-outline"></i>filing-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-box"></i>box
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-box-outline"></i>box-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-compose"></i>compose
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-compose-outline"></i>compose-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-trash"></i>trash
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-trash-outline"></i>trash-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-copy"></i>copy
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-copy-outline"></i>copy-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-email"></i>email
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-email-outline"></i>email-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-undo"></i>undo
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-undo-outline"></i>undo-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-redo"></i>ion ios7-ready
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-redo-outline"></i>redo-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-redo-outline"></i>redo-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-paperplane"></i>paperplane
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-paperplane-outline"></i>paperplane-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-folder"></i>folder
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-folder-outline"></i>folder-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-paper"></i>paper
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-paper-outline"></i>paper-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-world"></i>world
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-world-outline"></i>world-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-alarm"></i>alarm
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-alarm-outline"></i>alarm-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-speedometer"></i>speedometer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-speedometer-outline"></i>speedometer-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-stopwatch"></i>stopwatch
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-stopwatch-outline"></i>stopwatch-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-timer"></i>timer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-timer-outline"></i>timer-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-clock"></i>clock
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-clock-outline"></i>clock-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-time"></i>time
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-time-outline"></i>time-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-calendar"></i>calendar
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-calendar-outline"></i>calendar-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-photos"></i>photos
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-photos-outline"></i>photos-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-albums"></i>albums
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-albums-outline"></i>albums-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-camera"></i>camera
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-camera-outline"></i>camera-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-reverse-camera"></i>reverse-camera
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-reverse-camera-outline"></i>reverse-camera-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-eye"></i>eye
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-eye-outline"></i>eye-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-bolt"></i>bolt
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-bolt-outline"></i>bolt-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-barcode"></i>barcode
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-barcode-outline"></i>barcode-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-briefcase"></i>briefcase
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-briefcase-outline"></i>briefcase-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-medkit"></i>medkit
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-medkit-outline"></i>medkit-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-infinite"></i>infinite
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-infinite-outline"></i>infinite-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-calculator"></i>calculator
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-calculator-outline"></i>calculator-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-keypad"></i>keypad
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-keypad-outline"></i>keypad-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-telephone"></i>telephone
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-telephone-outline"></i>telephone-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-drag"></i>drag
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-location"></i>location
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-location-outline"></i>location-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-navigate"></i>navigate
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-navigate-outline"></i>navigate-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-locked"></i>locked
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-locked-outline"></i>locked-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-unlocked"></i>unlocked
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-unlocked-outline"></i>unlocked-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-monitor"></i>monitor
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-monitor-outline"></i>monitor-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-printer"></i>printer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-printer-outline"></i>printer-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-person"></i>person
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-person-outline"></i>person-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-personadd"></i>personadd
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-personadd-outline"></i>personadd-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-people"></i>people
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-people-outline"></i>people-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-tennisball"></i>ion ios7-tennis ball
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-tennisball-outline"></i>ion ios7 tennis ball outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-baseball"></i>baseball
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-baseball-outline"></i>baseball-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-basketball"></i>basketball
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-basketball-outline"></i>basketball-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-football"></i>football
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-football-outline"></i>football-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-americanfootball"></i>americanfootball
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-americanfootball-outline"></i>americanfootball-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-paw"></i>paw
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-paw-outline"></i>paw-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-sunny"></i>sunny
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-sunny-outline"></i>sunny-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-partlysunny"></i>partlysunny
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-partlysunny-outline"></i>partlysunny-Outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cloudy"></i>cloudy
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cloudy-outline"></i>cloudy-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-rainy"></i>rainy
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-rainy-outline"></i>rainy-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-thunderstorm"></i>thunderstorm
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-thunderstorm-outline"></i>thunderstorm-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-snowy"></i>snowy
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-moon"></i>moon
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-moon-outline"></i>moon-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cloudy-night"></i>cloudy-night
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-cloudy-night-outline"></i>cloudy-night-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-musical-notes"></i>musical-notes
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-musical-note"></i>musical-note
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-bell"></i>bell
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-bell-outline"></i>bell-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-mic"></i>small
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-mic-outline"></i>mic-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-mic-off"></i>mic-off
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-volume-high"></i>volume-high
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-volume-low"></i>volume-low
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-play"></i>play
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-play-outline"></i>play-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-pause"></i>pause
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-pause-outline"></i>pause-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-recording"></i>recording
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-recording-outline"></i>recording-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-fastforward"></i>iOS7-FastForward
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-fastforward-outline"></i>iOS7-FastForward-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-rewind"></i>rewind
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-rewind-outline"></i>rewind-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-skipbackward"></i>skipbackward
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-skipbackward-outline"></i>skipbackward-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-skipforward"></i>skipforward
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-skipforward-outline"></i>skipforward-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-videocam"></i>iOS7-videocam
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-videocam-outline"></i>videocam-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-film"></i>film
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-film-outline"></i>film-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-lightbulb"></i>lightbulb
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-lightbulb-outline"></i>lightbulb-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-wineglass"></i>wineglass
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-ios7-wineglass-outline"></i>wineglass-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-system-back"></i>android-system-back
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-system-home"></i>android-system-home
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-system-windows"></i>android-system-windows
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-wifi"></i>android-wifi
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-battery"></i>android-battery
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-storage"></i>android-storage
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-keypad"></i>android-keypad
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-call"></i>android-call
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-arrow-back"></i>android-arrow-back
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-arrow-forward"></i>android-arrow-forward
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-arrow-up-right"></i>android-arrow-up-right
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-arrow-down-right"></i>android-arrow-down-right
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-arrow-down-left"></i>android-arrow-down-left
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-arrow-up-left"></i>android-arrow-up-left
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-sort"></i>android-sort
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-drawer"></i>android-drawer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-stair-drawer"></i>android-stair-drawer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-more"></i>android-more
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-dropdown"></i>android-dropdown
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-settings"></i>android-settings
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-mixer"></i>android-mixer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-display"></i>android-display
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-star"></i>android-star
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-search"></i>android-search
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-microphone"></i>android-microphone
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-checkmark"></i>android-checkmark
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-information"></i>android-information
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-add"></i>android-add
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-remove"></i>android-remove
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-close"></i>android-close
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-trash"></i>android-trash
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-volume"></i>android-volume
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-printer"></i>android-printer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-download"></i>android-download
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-hand"></i>android-hand
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-developer"></i>android-developer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-calendar"></i>android-calendar
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-clock"></i>android-clock
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-alarm"></i>android-alarm
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-stopwatch"></i>android-stopwatch
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-data"></i>android-data
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-timer"></i>android-timer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-camera"></i>android-camera
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-image"></i>android-image
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-location"></i>android-location
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-locate"></i>android-locate
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-earth"></i>android-earth
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-book"></i>android-book
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-note"></i>android-note
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-promotion"></i>android-promotion
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-playstore"></i>android-playstore
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-share"></i>android-share
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-send"></i>android-send
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-mail"></i>android-mail
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-inbox"></i>android-inbox
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-archive"></i>android-archive
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-folder"></i>android-folder
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-forums"></i>android-forums
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-chat"></i>android-chat
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-user-menu"></i>android-user-menu
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-contact"></i>android-contact
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-contacts"></i>android-contacts
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-friends"></i>android-friends
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-add-contact"></i>android-add-contact
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-social-user"></i>android-social-user
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-social"></i>android-social
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-reminder"></i>android-reminder
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-android-lightbulb"></i>android-lightbulb
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-twitter"></i>social-twitter
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-twitter-outline"></i>social-twitter-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-facebook"></i>social-facebook
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-facebook-outline"></i>social-facebook-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-googleplus"></i>social-googleplus
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-googleplus-outline"></i>social-googleplus-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-google"></i>social-google
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-google-outline"></i>social-google-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-dribbble"></i>social-dribbble
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-dribbble-outline"></i>social-dribbble-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-github"></i>social-github
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-github-outline"></i>social-github-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-instagram"></i>social-instagram
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-instagram-outline"></i>social-instagram-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-foursquare"></i>social-foursquare
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-foursquare-outline"></i>social-foursquare-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-pinterest"></i>social-pinterest
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-pinterest-outline"></i>social-pinterest-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-rss"></i>social-rss
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-rss-outline"></i>social-rss-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-tumblr"></i>social-tumblr
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-tumblr-outline"></i>social-tumblr-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-wordpress"></i>social-wordpress
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-wordpress-outline"></i>social-wordpress-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-reddit"></i>social-reddit
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-reddit-outline"></i>social-reddit-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-hackernews"></i>social-hackernews
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-hackernews-outline"></i>social-hackernews-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-designernews"></i>social-designernews
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-designernews-outline"></i>social-designernews-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-yahoo"></i>social-yahoo
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-yahoo-outline"></i>social-yahoo-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-buffer"></i>social-buffer
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-buffer-outline"></i>social-buffer-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-skype"></i>social-skype
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-skype-outline"></i>social-skype-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-linkedin"></i>social-linkedin
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-linkedin-outline"></i>social-linkedin-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-usd"></i>social-usd
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-usd-outline"></i>social-usd-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-bitcoin"></i>social-bitcoin
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-bitcoin-outline"></i>social-bitcoin-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-vimeo"></i>social-vimeo
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-vimeo-outline"></i>social-vimeo-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-youtube"></i>social-youtube
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-youtube-outline"></i>social-youtube-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-dropbox"></i>social-dropbox
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-dropbox-outline"></i>social-dropbox-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-apple"></i>social-apple
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-apple-outline"></i>social-apple-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-android"></i>social-android
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-android-outline"></i>social-android-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-windows"></i>social-windows
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-windows-outline"></i>social-windows-outline
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-tux"></i>social-tux
                                            </div>

                                            <div class="col-sm-6 col-lg-4 col-xl-3 col-12 ion_icon"><i class="ion-social-freebsd-devil"></i>social-freebsd-devil
                                            </div>
                                        </div> <!-- End row -->
                                    </div><!-- end panel-body -->
                                </div> <!-- col-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/icons.js')}}"></script>
    <!-- end page level scripts -->
@stop