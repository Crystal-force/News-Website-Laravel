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
                    <a href="index.html">Home</a>
                    <span></span> DE TODO
                </div>
                <h2 class="font-weight-bold"><span class="font-family-normal">DE TODO</span></h2>
                <span class="line-dots mt-30 mb-30"></span>
            </div>
            <div class="row vertical-divider mb-50">
                <div class="col-lg-3 col-md-12 primary-sidebar sticky-sidebar">
                  <div class="widget-area">
                      <div class="sidebar-widget widget-latest-posts mb-30 mt-15 wow fadeIn animated">
                          <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                              <span>Most comments</span>
                          </h6>
                          <div class="post-block-list post-module-1 post-module-5">
                              <ul class="list-post">
                                @foreach($side_data as $key => $Side_Data)
                                @if($key == 5)
                                @break
                                @endif
                                  <li class="mb-15">
                                      <div class="d-flex">
                                          <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                              <a class="color-white" href="{{route('de-todo.show', $Side_Data->id)}}">
                                                  <img src="{{$Side_Data->img}}" alt="">
                                              </a>
                                          </div>
                                          <div class="post-content media-body">
                                              <h6 class="post-title mb-10 text-limit-2-row"><a href="{{route('de-todo.show', $Side_Data->id)}}">{{$Side_Data->title}}</a></h6>
                                              <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                  <span class="post-on mr-15">{{$Side_Data->UserRegister->name}}</span>
                                                  <span class="hit-count has-dot">{{$Side_Data->updated_at}}</span>
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
                <div class="col-lg-9 col-md-12">
                    <div class="mb-30">
                        <article class="first-post mb-md-4 mb-lg-0 mb-30">
                            <div class="entry-meta meta-0 mb-15 font-small">
                                <a href="category.html"><span class="post-cat position-relative"># DE TODO</span></a>
                                <a href="category.html"><span class="post-cat position-relative"># News</span></a>
                            </div>
                            <h3 class="mb-20 position-relative font-weight-bold">
                                <a href="{{route('de-todo.show', $last_row_data->id)}}">{{$last_row_data->title}}</a>
                            </h3>
                            <figure class="mb-30">
                                <a href="{{route('de-todo.show', $last_row_data->id)}}">
                                    <img src="{{$last_row_data->img}}" alt="">
                                </a>
                            </figure>
                            <div class="post-content">
                                <p class="excerpt content-small-part-one">
                                  {{$last_row_data->content}}
                                </p>
                                <div class="entry-meta meta-2 font-x-small color-muted">
                                    <p class="mb-5">
                                        By <a href="javascript:;"><span class="author-name">{{$last_row_data->UserRegister->name}}</span></a>
                                    </p>
                                    <span class="mr-10"> {{$last_row_data->updated_at}}</span>
                                    <span class="has-dot"> 8 mins read</span>
                                </div>
                            </div>
                            <div class="horizontal-divider mt-15 mb-15"></div>
                        </article>
                        <h6 class="font-weight-bold widget-header widget-header-style-5 mb-10">
                            <span class="d-inline-block block mb-10 widget-title font-family-normal"></span>
                        </h6>
                        <div class="loop-grid-3">
                          @foreach($all_data as $All_Data)
                            <article class="row wow fadeIn animated">
                                <div class="col-md-6">
                                    <figure class="mb-md-0 mb-sm-3"><a href="{{route('de-todo.show', $All_Data->id)}}"><img src="{{$All_Data->img}}" alt=""></a></figure>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="post-title mb-10 font-weight-bold">
                                        <a href="{{route('de-todo.show', $All_Data->id)}}">{{$All_Data->title}}</a>
                                    </h4>
                                    <p class="excerpt mb-20 content-small-part-two">
                                      {{$All_Data->content}}
                                    </p>
                                    <div class="entry-meta meta-2 font-x-small color-muted">
                                        <p class="mb-5">
                                            By <a href="javascript:;"><span class="author-name">{{$All_Data->UserRegister->name}}</span></a>
                                        </p>
                                        <span class="mr-10"> {{$All_Data->updated_at}}</span>
                                        <span class="has-dot"> 8 mins read</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="horizontal-divider mt-15 mb-15"></div>
                                </div>
                            </article>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    

    <div class="dark-mark"></div>
@endsection