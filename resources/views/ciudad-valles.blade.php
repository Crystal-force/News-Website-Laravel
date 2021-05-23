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
            <div class="archive-header">
                <div class="breadcrumb font-small">
                    <a href="/">Home</a>
                    <span></span> CIUDAD VALLES
                </div>
                <h2 class="font-weight-bold"><span class="font-family-normal">CIUDAD VALLES</span></h2>
                <span class="line-dots mt-30 mb-30"></span>
            </div>
            <div class="row vertical-divider mb-50">
                <div class="col-lg-9 col-md-12">
                    <div class="mb-30">
                        <article class="first-post mb-md-4 mb-lg-0 mb-30">
                            <figure class="mb-30">
                                <a href="{{ route('ciudad-valles.show', $last_data->id) }}">
                                    <img src="{{$last_data->img}}" alt="">
                                </a>
                            </figure>
                            <div class="post-content">
                                <h3 class="mb-20 position-relative font-weight-bold">
                                    <a href="{{ route('ciudad-valles.show', $last_data->id) }}">{{$last_data->title}}</a>
                                </h3>
                                <p class="excerpt content-small-part-one">
                                    {{$last_data->content}}
                                </p>
                                <div class="entry-meta align-items-center meta-2 font-small color-muted">
                                    <p class="mb-5">
                                        <a class="author-avatar" href="javascript:;"><img class="img-circle" src="{{$user_data->avarter}}" alt=""></a>
                                        By <a href="javascript:;"><span class="author-name font-weight-bold">{{$user_data->name}}</span></a>
                                    </p>
                                    <span class="mr-10"> {{$last_data->updated_at}}</span>
                                </div>
                            </div>
                        </article>
                        
                        <h6 class="font-weight-bold widget-header widget-header-style-5 mb-10">
                            <span class="d-inline-block block mb-10 widget-title font-family-normal"></span>
                        </h6>
                        <div class="loop-grid-3">
                            @foreach($all_data as $All_Data)
                              <article class="row wow fadeIn animated">
                                  <div class="col-md-4 each-news-img">
                                      <figure class="mb-md-0 mb-sm-3"><a href="{{ route('ciudad-valles.show', $All_Data->id) }}"><img src="{{$All_Data->img}}" alt=""></a></figure>
                                  </div>
                                  <div class="col-md-8">
                                      <h4 class="post-title mb-10 font-weight-bold">
                                          <a href="{{ route('ciudad-valles.show', $All_Data->id) }}">{{$All_Data->title}}</a>
                                      </h4>
                                      <p class="excerpt mb-20 content-small-part-two">
                                          {{$All_Data->content}}
                                      </p>
                                      <div class="entry-meta meta-2 font-x-small color-muted">
                                          <span class="mr-10"> {{$All_Data->updated_at}}</span>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="horizontal-divider mt-15 mb-15"></div>
                                  </div>
                              </article>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="pagination-area pt-15 border-top-2 mt-30 font-heading wow fadeIn  animated">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="single-wrap d-flex">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-3 col-md-12 primary-sidebar sticky-sidebar">
                    <div class="widget-area">
                        <div class="sidebar-widget widget-latest-posts mb-30 mt-15 wow fadeIn animated">
                            <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                <span>SLP News</span>
                            </h6>
                            <div class="post-block-list post-module-1 post-module-5">
                                <ul class="list-post">
                                  @foreach($other_data as $key=>$other_data)
                                  @if($key == 5)
                                  @break
                                  @endif
                                    <li class="mb-15">
                                        <div class="d-flex">
                                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                                <a class="color-white" href="{{ route('ciudad-valles.show', $other_data->id) }}">
                                                    <img src="{{$other_data->img}}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-10 text-limit-2-row"><a href="{{ route('ciudad-valles.show', $other_data->id) }}">{{$other_data->title}}</a></h6>
                                                <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                    <span class="post-on mr-15">{{$other_data->updated_at}}</span>
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
        </div>
    </main>
    
  
    <div class="dark-mark"></div>
@endsection