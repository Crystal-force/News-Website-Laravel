@extends('layout.index')
 @section('content')

    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar position-left">
      <button class="off-canvas-close"><i class="ti-close"></i></button>
    </aside>
    <header class="main-header header-style-2 header-sticky">
      @include('component.menu')
    </header>


    <main class="mt-100">
        <div class="container">
            <div class="home-featured mb-20">
                <div class="row font-heading mb-20">
                    <div class="col-md-6 text-uppercase">
                        <nav class="tab-nav font-weight-bold">
                            <div class="nav nav-tabs" role="tablist">
                                <a class="nav-item nav-link nav-tab active" data-toggle="tab" href="#nav-highlight" role="tab" aria-controls="nav-highlight" aria-selected="true">Today Highlight</a>
                                <a class="nav-item nav-link nav-tab" data-toggle="tab" href="#nav-trending" role="tab" aria-controls="nav-trending" aria-selected="false">Hot & Trending</a>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-6 text-right d-none d-md-block">
                        <div id="date-time" class="d-inline-table">
                            <ul>
                                <li><i class="ti-time mr-5 font-x-small text-danger"></i><span id="date"></span></li>
                                <li><i class="ti-book mr-5 font-x-small text-danger"></i><a href="#">Get the Today’s Paper</a></li>
                                <li><i class="ti-shine mr-5 font-x-small text-danger"></i>33° Sunny, Washington DC</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-highlight" role="tabpanel" aria-labelledby="nav-highlight">
                                <div class="home-featured-1 post-module-1">
                                    <div class="post-thumb position-relative">
                                        <div class="thumb-overlay img-hover-slide transition-04s position-relative" style="background-image: url({{$background_1->img}})">
                                            <a class="img-link" href="{{route('home.show', $background_1->id)}}"></a>
                                            <div class="post-content-overlay transition-04s p-20">
                                                <div class="entry-meta mb-20 text-uppercase font-small text-white">
                                                    <span class="create-date mr-15 ">{{$background_1->updated_at}}</span>
                                                    <a href="javascript:;"><span class="post-cat text-white position-relative">{{$background_1->UserRegister->name}}</span></a>
                                                </div>
                                                <h4 class="post-title">
                                                    <a class="text-white" href="{{route('home.show', $background_1->id)}}">{{$background_1->title}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-thumb position-relative">
                                        <div class="thumb-overlay img-hover-slide transition-04s position-relative" style="background-image: url({{$background_2->img}})">
                                            <a class="img-link" href="{{route('home.show', $background_2->id)}}"></a>
                                            <div class="post-content-overlay transition-04s p-20">
                                                <div class="entry-meta mb-20 text-uppercase font-small text-white">
                                                    <span class="create-date mr-15 ">{{$background_2->updated_at}}</span>
                                                    <a href="javascript:;"><span class="post-cat text-white position-relative">{{$background_2->UserRegister->name}}</span></a>
                                                </div>
                                                <h4 class="post-title">
                                                    <a class="text-white" href="{{route('home.show', $background_2->id)}}">{{$background_2->title}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-thumb position-relative">
                                        <div class="thumb-overlay img-hover-slide transition-04s position-relative" style="background-image: url({{$background_3->img}})">
                                            <a class="img-link" href="{{route('home.show', $background_3->id)}}"></a>
                                            <div class="post-content-overlay transition-04s p-20">
                                                <div class="entry-meta mb-20 text-uppercase font-small text-white">
                                                    <span class="create-date mr-15 ">{{$background_3->updated_at}}</span>
                                                    <a href="javascript:;"><span class="post-cat text-white position-relative">{{$background_3->UserRegister->name}}</span></a>
                                                </div>
                                                <h4 class="post-title">
                                                    <a class="text-white" href="{{route('home.show', $background_3->id)}}">{{$background_3->title}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-trending" role="tabpanel" aria-labelledby="nav-trending">
                                <div class="home-featured-1 post-module-1">
                                    <div class="post-thumb position-relative">
                                        <div class="thumb-overlay img-hover-slide transition-04s position-relative" style="background-image: url({{$background_4->img}})">
                                            <a class="img-link" href="{{route('home.show', $background_4->id)}}"></a>
                                            <div class="post-content-overlay transition-04s p-20">
                                                <div class="entry-meta mb-20 text-uppercase font-small text-white">
                                                    <span class="create-date mr-15 ">{{$background_4->updated_at}}</span>
                                                    <a href="javascript:;"><span class="post-cat text-white position-relative">{{$background_4->UserRegister->name}}</span></a>
                                                </div>
                                                <h4 class="post-title">
                                                    <a class="text-white" href="{{route('home.show', $background_4->id)}}">{{$background_4->title}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-thumb position-relative">
                                        <div class="thumb-overlay img-hover-slide transition-04s position-relative" style="background-image: url({{$background_5->img}})">
                                            <a class="img-link" href="{{route('home.show', $background_5->id)}}"></a>
                                            <div class="post-content-overlay transition-04s p-20">
                                                <div class="entry-meta mb-20 text-uppercase font-small text-white">
                                                    <span class="create-date mr-15 ">{{$background_5->updated_at}}</span>
                                                    <a href="javascript:;"><span class="post-cat text-white position-relative">{{$background_5->UserRegister->name}}</span></a>
                                                </div>
                                                <h4 class="post-title">
                                                    <a class="text-white" href="{{route('home.show', $background_5->id)}}">{{$background_5->title}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-thumb position-relative">
                                        <div class="thumb-overlay img-hover-slide transition-04s position-relative" style="background-image: url({{$background_6->img}})">
                                            <a class="img-link" href="{{route('home.show', $background_6->id)}}"></a>
                                            <div class="post-content-overlay transition-04s p-20">
                                                <div class="entry-meta mb-20 text-uppercase font-small text-white">
                                                    <span class="create-date mr-15 ">{{$background_6->updated_at}}</span>
                                                    <a href="javascript:;"><span class="post-cat text-white position-relative">{{$background_6->UserRegister->name}}</span></a>
                                                </div>
                                                <h4 class="post-title">
                                                    <a class="text-white" href="{{route('home.show', $background_6->id)}}">{{$background_6->title}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-12">
                    <div class="news-flash-cover">
                        <h6 class="flash-news-title"><i class="ti-bolt mr-5"></i><span class="font-family-normal">Flash news</span></h6>
                        <div id="news-flash" class="d-inline-table">
                            <ul>
                                <li><a class="font-large post-title" href="{{route('home.show', $latest_news->id)}}">{{$latest_news->title}}</a></li>
                                <li><a class="font-large post-title" href="{{route('home.show', $de_data->id)}}">{{$de_data->title}}</a></li>
                                <li><a class="font-large post-title" href="{{route('home.show', $pol_data->id)}}">{{$pol_data->title}}</a></li>
                                <li><a class="font-large post-title" href="{{route('home.show', $tam_data->id)}}">{{$tam_data->title}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <section class="latest-post mb-30">
                <h3 class="widget-header widget-header-style-1 font-weight-bold text-center mb-20">
                    <span class="line-dots mb-10"></span>
                    <span class="pl-15 pr-15 bg-white font-family-normal">CIUDAD VALLES</span>
                </h3>
                <div class="loop-grid row mb-15 vertical-divider">
                  @foreach($ciudad_last as $key => $Ci_Data_One)
                  @if($key == 4)
                  @break
                  @endif
                    <article class="col-lg-3 col-md-6 col-sm-12">
                        <h5 class="post-title font-weight-bold mb-10">
                            <a href="{{route('home.show', $Ci_Data_One->id)}}">{{$Ci_Data_One->title}}</a>
                        </h5>
                        <p class="excerpt mb-15 content-small-part-one">{{$Ci_Data_One->content}}</p>
                        <figure class="mb-15">
                            <img src="{{$Ci_Data_One->img}}" alt="">
                        </figure>
                        <div class="entry-meta meta-2 text-uppercase font-x-small color-muted">
                            <a class="float-left mr-10 author-img" href="javascript:;">
                                <img src="{{$Ci_Data_One->UserRegister->avarter}}" alt="">
                            </a> By
                            <a href="javascript:;"><span class="author-name">{{$Ci_Data_One->UserRegister->name}}</span></a>
                            <span class="create-date ml-30">{{$Ci_Data_One->updated_at}}</span>
                        </div>
                    </article>
                    @endforeach
                </div>
                <div class="loop-grid-2 row vertical-divider">
                   @foreach($ciudad_first as $key => $Ci_Data_Two)
                   @if($key == 3)
                   @break
                   @endif
                    <article class="col-lg-4 col-md-6 col-sm-12 wow fadeIn animated">
                        <div class="row">
                            <div class="col-12">
                                <div class="has-top-border mb-25"></div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="post-title mb-10 font-weight-bold">
                                    <a href="{{route('home.show', $Ci_Data_One->id)}}">{{$Ci_Data_Two->title}}</a>
                                </h6>
                                <p class="excerpt mb-0 content-small-part-one">
                                  {{$Ci_Data_Two->content}}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <figure class="mb-15 mt-sm-3">
                                    <img src="{{$Ci_Data_Two->img}}" alt="">
                                </figure>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </section>

            <section class="the-world mb-30">
                <h3 class="font-weight-bold widget-header widget-header-style-2 mb-30">
                    <span class="d-block mb-10 text-uppercase font-family-normal">SLP</span>
                    <span class="line-dots"></span>
                </h3>
                <div class="loop-grid-3 row vertical-divider">
                    <div class="col-lg-7 col-md-12">
                        <article class="first-post wow fadeIn animated mb-md-4 mb-lg-0">
                            <figure class="mb-30">
                                <a href="{{route('home.show', $slp_last_data->id)}}">
                                    <img src="{{$slp_last_data->img}}" alt="">
                                </a>
                            </figure>
                            <div class="post-content text-center plr-5-percent">
                                <h2 class="post-title mb-30 position-relative">
                                    <a href="{{route('home.show', $slp_last_data->id)}}">{{$slp_last_data->title}}</a>
                                </h2>
                                <p class="excerpt content-small-part-one">
                                  {{$slp_last_data->content}}
                                </p>
                                <div class="entry-meta meta-0 mb-15 font-small">
                                    <a href="javascript:;"><span class="post-cat position-relative"># {{$slp_last_data->UserRegister->name}}</span></a>
                                    <a href="javascript:;"><span class="post-cat position-relative"># News</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row vertical-divider">
                          @foreach($slp_all_data as $key => $Slp_All_Data)
                          @if($key == 4)
                          @break
                          @endif
                            <article class="col-md-6 wow fadeIn animated">
                                <figure class="mb-15">
                                    <a href="{{route('home.show', $Slp_All_Data->id)}}">
                                        <img src="{{$Slp_All_Data->img}}" alt="">
                                    </a>
                                </figure>
                                <h6 class="post-title font-weight-bold mb-10">
                                    <a href="{{route('home.show', $Slp_All_Data->id)}}">{{$Slp_All_Data->title}}</a>
                                </h6>
                                <p class="excerpt content-small-part-one">
                                  {{$Slp_All_Data->content}}
                                </p>
                            </article>
                          @endforeach
                            <div class="col-12">
                                <div class="horizontal-divider mb-15 mt-15"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="editor-picked mb-30">
                <h3 class="font-weight-bold widget-header widget-header-style-3 mb-20">
                    <span class="d-inline-block block mb-10 text-uppercase widget-title font-family-normal">HUASTECA</span>
                    <span class="line-dots"></span>
                </h3>
                <div class="loop-grid-3 row vertical-divider">
                    <div class="col-lg-7 col-md-12">
                        <div class="row vertical-divider">
                          @for ($i = 0; $i < 2; $i++)
                            <article class="col-md-6 wow fadeIn animated">
                                <figure class="mb-15">
                                    <a href="{{route('home.show', $hua_data[$i]->id)}}">
                                        <img src="{{$hua_data[$i]->img}}" alt="">
                                    </a>
                                </figure>
                                <h6 class="post-title font-weight-bold mb-10">
                                    <a href="{{route('home.show', $hua_data[$i]->id)}}">{{$hua_data[$i]->title}}</a>
                                </h6>
                                <p class="excerpt content-small-part-one">
                                  {{$hua_data[$i]->content}}
                                </p>
                                <div class="entry-meta meta-0 mb-15 font-small">
                                    <a href="javascript:;"><span class="post-cat position-relative">By {{$hua_data[$i]->UserRegister->name}}</span></a>
                                </div>
                            </article>
                          @endfor
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 d-none d-lg-block">
                      @for ($i = 2; $i < 4; $i++)
                        <article class="row wow fadeIn animated pb-10">
                            <div class="col-md-6">
                                <h6 class="post-title mb-20 font-weight-bold">
                                    <a href="{{route('home.show', $hua_data[$i]->id)}}">{{$hua_data[$i]->title}}</a>
                                </h6>
                                <p class="excerpt mb-0 content-small-part-two">
                                  {{$hua_data[$i]->content}}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <figure class="mb-0">
                                    <img src="{{$hua_data[$i]->img}}" alt="">
                                </figure>
                            </div>
                        </article>
                      @endfor
                    </div>
                </div>
            </section>

            <section class="video-news mb-30 p-30 bg-grey">
                <h3 class="font-weight-bold text-uppercase widget-header mb-30 text-center divider-wave-1">
                    <span class="font-family-normal">RIO VERDE</span>
                </h3>
                <div class="loop-grid-4 row vertical-divider">
                    <div class="col-lg-5 col-md-12 wow fadeIn animated">
                        <div class="slide-fade mb-lg-0 mb-md-4 mb-sm-4">
                            <article class="slide-fade-item">
                                <figure class="mb-30">
                                    <a href="{{route('home.show', $rio_data['0']->id)}}">
                                        <img src="{{$rio_data['0']->img}}" alt="">
                                    </a>
                                    <span class="post-format position-top-right text-uppercase font-small">
                                        <i class="ti-video-camera"></i>
                                    </span>
                                </figure>
                                <div class="post-content text-center plr-5-percent">
                                    <h2 class="post-title mb-30 position-relative divider-wave">
                                        <a href="{{route('home.show', $rio_data['0']->id)}}">{{$rio_data['0']->title}}</a>
                                    </h2>
                                    <p class="excerpt content-small-part-one">
                                      {{$rio_data['0']->content}}
                                    </p>
                                </div>
                            </article>
                            <article class="slide-fade-item">
                                <figure class="mb-30">
                                    <a href="{{route('home.show', $rio_data['1']->id)}}">
                                        <img src="{{$rio_data['1']->img}}" alt="">
                                    </a>
                                    <span class="post-format position-top-right text-uppercase font-small">
                                        <i class="ti-video-camera"></i>
                                    </span>
                                </figure>
                                <div class="post-content text-center plr-5-percent">
                                    <h2 class="post-title mb-30 position-relative divider-wave">
                                        <a href="{{route('home.show', $rio_data['1']->id)}}">{{$rio_data['1']->title}}</a>
                                    </h2>
                                    <p class="excerpt content-small-part-one">
                                      {{$rio_data['1']->content}}
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        @foreach($rio_data as $key => $Rio_Data)
                        @if($key == 3)
                        @break
                        @endif
                        <article class="row wow fadeIn animated">
                            <div class="col-lg-6 col-md-9 mb-sm-3">
                                <h6 class="post-title mb-10 font-weight-bold">
                                    <a href="{{route('home.show', $Rio_Data->id)}}">{{$Rio_Data->title}}</a>
                                </h6>
                                <p class="excerpt mb-0 content-small-part-two">
                                    {{$Rio_Data->content}}
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-3">
                                <figure class="mb-0">
                                    <a href="{{route('home.show', $Rio_Data->id)}}"><img src="{{$Rio_Data->img}}" alt=""></a>
                                </figure>
                            </div>
                        </article>
                       @endforeach
                    </div>
                    <div class="col-md-3 d-none d-lg-block">
                        <ul class="list-post">
                          @foreach($rio_data_2 as $key => $Rio_Data_Two)
                          @if($key == 5)
                          @break
                          @endif
                            <li class="mb-15 wow fadeIn animated">
                                <div class="d-flex">
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 font-weight-500"><a href="{{route('home.show', $Rio_Data_Two->id)}}">{{$Rio_Data_Two->title}}</a></h6>
                                        <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                            <span class="post-on mr-15">{{$Rio_Data_Two->updated_at}}</span>
                                            <span class="hit-count has-dot">34k Views</span>
                                        </div>
                                    </div>
                                    <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale">
                                        <a class="color-white" href="{{route('home.show', $Rio_Data_Two->id)}}">
                                            <img src="{{$Rio_Data_Two->img}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                </div>
            </section>
            <section class="recent-new mb-30">
                <div class="row vertical-divider">
                    <div class="col-lg-9 col-md-12">
                        <h3 class="font-weight-bold widget-header widget-header-style-3 mb-20">
                            <span class="d-inline-block block mb-10 widget-title font-family-normal">Recent posts</span>
                            <span class="line-dots"></span>
                        </h3>
                        <div class="loop-grid-3">
                            <article class="row wow fadeIn animated">
                            	<div class="col-md-6 mb-md-0 mb-sm-3">	
	                                <figure class="mb-0">
	                                    <a href="{{route('home.show', $latest_news->id)}}">
	                                        <img src="{{$latest_news->img}}" alt="">
	                                    </a>
	                                    <span class="post-format position-top-right text-uppercase font-small">
	                                        <i class="ti-stats-up"></i>
	                                    </span>
	                                </figure>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="post-content text-center plr-5-percent">
                                        <div class="entry-meta meta-0 mb-15 font-small">
                                            <a href="javascript:;"><span class="post-cat position-relative"># {{$latest_news->updated_at}}</span></a>
                                            <a href="javascript:;"><span class="post-cat position-relative"># News</span></a>
                                        </div>
                                        <h2 class="post-title mb-30 position-relative divider-wave">
                                            <a href="{{route('home.show', $latest_news->id)}}">{{$latest_news->title}}</a>
                                        </h2>
                                        <p class="excerpt content-small-part-two">
                                          {{$latest_news->content}}
                                        </p>
                                        <p><span class="live-now text-danger">Live now</span></p>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="horizontal-divider mt-15 mb-15"></div>
                                </div>
                            </article>
                            <div class="row vertical-divider">
                                <div class="col-md-8">
                                  @foreach($ciudad_last as $key => $Ciudad)
                                  @if($key == 1)
                                  @break
                                  @endif
                                    <article class="row wow fadeIn animated">
                                        <div class="col-md-4">
                                            <figure class="mb-md-0 mb-sm-3">
                                                <img src="{{$Ciudad->img}}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <div class="entry-meta meta-0 mb-15 font-small">
                                                <a href="javascript:;"><span class="post-cat position-relative"># CIUDAD VALLES</span></a>
                                            </div>
                                            <h6 class="post-title mb-20 font-weight-bold">
                                                <a href="{{route('home.show', $Ciudad->id)}}">{{$Ciudad->title}}</a>
                                            </h6>
                                            <p class="excerpt mb-0 content-small-part-one">
                                              {{$Ciudad->content}}
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="horizontal-divider mt-15 mb-15"></div>
                                        </div>
                                    </article>
                                  @endforeach
                                  @foreach($slp_all_data as $key => $SLP_ALL)
                                    @if($key == 1)
                                    @break
                                    @endif
                                    <article class="row wow fadeIn animated">
                                        <div class="col-md-4">
                                            <figure class="mb-md-0 mb-sm-3">
                                                <img src="{{$SLP_ALL->img}}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <div class="entry-meta meta-0 mb-15 font-small">
                                                <a href="javascript:;"><span class="post-cat position-relative"># SLP News</span></a>
                                            </div>
                                            <h6 class="post-title mb-20 font-weight-bold">
                                                <a href="{{route('home.show', $SLP_ALL->id)}}">{{$SLP_ALL->title}}</a>
                                            </h6>
                                            <p class="excerpt mb-0 content-small-part-one">
                                              {{$SLP_ALL->content}}
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="horizontal-divider mt-15 mb-15"></div>
                                        </div>
                                    </article>
                                  @endforeach
                                  @foreach($hua_data as $key => $Hua_Data)
                                  @if($key == 1)
                                  @break
                                  @endif
                                    <article class="row wow fadeIn animated">
                                        <div class="col-md-4">
                                            <figure class="mb-md-0 mb-sm-3">
                                                <img src="{{$Hua_Data->img}}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <div class="entry-meta meta-0 mb-15 font-small">
                                                <a href="javascript:;"><span class="post-cat position-relative"># HUASTECA</span></a>
                                            </div>
                                            <h6 class="post-title mb-20 font-weight-bold">
                                                <a href="{{route('home.show', $Hua_Data->id)}}">{{$Hua_Data->title}}</a>
                                            </h6>
                                            <p class="excerpt mb-0 content-small-part-one">
                                              {{$Hua_Data->content}}
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="horizontal-divider mt-15 mb-15"></div>
                                        </div>
                                    </article>
                                  @endforeach
                                  @foreach($rio_data as $key => $Rio_Data)
                                  @if($key == 1)
                                  @break
                                  @endif
                                    <article class="row wow fadeIn animated">
                                        <div class="col-md-4">
                                            <figure class="mb-md-0 mb-sm-3">
                                                <img src="{{$Rio_Data->img}}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <div class="entry-meta meta-0 mb-15 font-small">
                                                <a href="javascript:;"><span class="post-cat position-relative"># RIO VERDE</span></a>
                                            </div>
                                            <h6 class="post-title mb-20 font-weight-bold">
                                                <a href="{{route('home.show', $Rio_Data->id)}}">{{$Rio_Data->title}}</a>
                                            </h6>
                                            <p class="excerpt mb-0 content-small-part-one">
                                              {{$Rio_Data->content}}
                                            </p>
                                        </div>
                                    </article>
                                  @endforeach
                                </div>
                                <div class="col-md-4">
                                    <article class="wow fadeIn animated">
                                        <figure class="mb-15">
                                            <a href="{{route('home.show', $tam_data->id)}}">
                                                <img src="{{$tam_data->img}}" alt="">
                                            </a>
                                        </figure>
                                        <h6 class="post-title font-weight-bold mb-10">
                                            <a href="{{route('home.show', $tam_data->id)}}">{{$tam_data->title}}</a>
                                        </h6>
                                        <p class="excerpt content-small-part-one">
                                          {{$tam_data->content}}
                                        </p>
                                        <div class="horizontal-divider mt-15 mb-15"></div>
                                    </article>
                                    <article class="wow fadeIn animated">
                                        <h6 class="post-title mb-10 font-weight-bold">
                                            <a href="{{route('home.show', $pol_data->id)}}">{{$pol_data->title}}</a>
                                        </h6>
                                        <p class="excerpt mb-0 content-small-part-one">
                                          {{$pol_data->content}}
                                        </p>
                                        <div class="horizontal-divider mt-15 mb-15"></div>
                                    </article>
                                    <article class="wow fadeIn animated">
                                        <h6 class="post-title mb-10 font-weight-bold">
                                            <a href="{{route('home.show', $de_data->id)}}">{{$de_data->title}}</a>
                                        </h6>
                                        <p class="excerpt mb-0 content-small-part-one">
                                          {{$de_data->content}}
                                        </p>
                                        <div class="horizontal-divider mt-15 mb-15"></div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 primary-sidebar sticky-sidebar">
                        <div class="widget-area">
                            <div class="sidebar-widget widget-latest-posts mb-30 mt-15 wow fadeIn animated">
                                <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                    <span>Author Award</span>
                                </h6>
                                <div class="author-content text-center">
                                    <a href="javascript:;"><img class="img-circle d-inline-block mb-10" src="{{$user_data->avarter}}" alt="" style="height:150px; width:150px"></a>
                                    <p><img src="{{$user_data->img}}" alt=""></p>
                                    <p>
                                        You should write because you love the shape of stories and sentences and the creation of different words on a page. Writing comes from reading, and reading is the finest teacher of how to write.
                                    </p>
                                    <ul class="header-social-network d-inline-block list-inline font-small">
                                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="javascript:;"><i class="ti-facebook"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="javascript:;"><i class="ti-twitter-alt"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="javascript:;"><i class="ti-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="javascript:;"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                    <p class="font-small mt-15 text-muted"><a href="#">View more</a></p>
                                </div>
                            </div>
                            <div class="sidebar-widget widget-latest-posts mb-30 mt-15 wow fadeIn animated">
                                <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                    <span>Most comments</span>
                                </h6>
                                <div class="post-block-list post-module-1 post-module-5">
                                    <ul class="list-post">
                                      @foreach($latest_allnews as $key=>$Latest)
                                      @if($key == 3)
                                      @break
                                      @endif
                                        <li class="mb-15">
                                            <div class="d-flex">
                                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                                    <a class="color-white" href="{{route('home.show', $Latest->id)}}">
                                                        <img src="{{$Latest->img}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="{{route('home.show', $Latest->id)}}">{{$Latest->title}}</a></h6>
                                                    <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                        <span class="post-on mr-15">{{$Latest->updated_at}}</span>
                                                        <span class="hit-count has-dot">54k Views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                      @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget widget_newsletter wow fadeIn animated">
                                <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                    <span>Newsletter</span>
                                </h6>
                                <div class="newsletter">
                                    <p class="">Continue reading uninterrupted with a subscription</p>
                                    <form target="_blank" action="#" method="get" class="subscribe_form relative mail_part">
                                        <div class="form-newsletter-cover">
                                            <div class="form-newsletter">
                                                <input type="email" name="EMAIL" placeholder="Email address" required="">
                                                <button type="submit">
                                                    <span class="long-arrow long-arrow-right"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
 
@endsection    