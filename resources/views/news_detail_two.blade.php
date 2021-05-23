@extends('layout.index')
 @section('content')

    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar position-left">
      <button class="off-canvas-close"><i class="ti-close"></i></button>
    </aside>
  <header class="main-header header-style-2 header-sticky">
      @include('component.menu')
  </header>
  
  <main class="mt-150">
      <div class="container single-content">
        <div class="entry-header mb-30 mt-50">
          <div class="row">
              <div class="col-md-6 align-self-center">
                  <div class="post-content">
                      
                      <h1 class="entry-title mb-30 font-weight-500">
                        {{$each_data->title}}
                      </h1>
                     
                      <div class="entry-meta align-items-center meta-2 font-small color-muted">
                          <p class="mb-5">
                              <a class="author-avatar" href="#"><img class="img-circle"  src="{{ asset($user_data->avarter)}}" alt=""></a>
                              By <a href="javascript:;">
                                  <span class="author-name font-weight-bold color-black">{{$user_data->name}}</span>
                              </a>
                          </p>
                          <span class="live-now text-danger">{{$user_data->updated_at}}</span>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 mb-md-0 mb-sm-3">
                  <figure class="mb-0 mt-lg-0 mt-3">
                      <img src="{{ asset($each_data->img)}}" alt="">
                  </figure>
                  <div class="single-tools mt-15">
                      <div class="entry-meta align-items-center meta-2 font-small color-muted">
                          <span class="mr-15">
                              <span class="mr-5">Font size</span>
                              <i class="fonts-size-zoom-in ti-zoom-in mr-5"></i>
                              <i class="fonts-size-zoom-out ti-zoom-out"></i>
                          </span>
                          <a class="single-print mr-15"><span><i class="ti-printer mr-5"></i>Print</span></a>
                          <div class="vline-space d-inline-block"></div>
                          <a href="#"><span><i class="ti-email mr-5"></i>Email</span></a>
                      </div>
                  </div>
              </div>
              <hr class="wp-block-separator is-style-dots">
          </div>
          <article class="entry-wraper mb-50">
              <div class="excerpt mb-30 content_detail">
                  <p>{{$each_data->content}}</p>
              </div>
              <div class="entry-left-col">
                  <div class="social-sticky">
                      <a href="#"><i class="ti-facebook"></i></a>
                      <a href="#"><i class="ti-twitter"></i></a>
                      <a href="#"><i class="ti-heart"></i></a>
                      <a href="#"><i class="ti-email"></i></a>
                  </div>
              </div>

              <div class="related-posts">
                <h3 class="mb-30">Related posts</h3>
                <hr class="wp-block-separator is-style-wide">
                <div class="loop-list">
                  @foreach($latest_data as $key => $Latest)
                  @if($key == 3)
                  @break
                  @endif
                    <article class="row mb-30 wow fadeIn animated">
                        <div class="col-md-4">
                            <div class="post-thumb position-relative thumb-overlay mb-md-0 mb-3">
                                <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{ asset($Latest->img)}})">
                                    <a class="img-link" href="{{ route('huasteca.show', $Latest->id) }}"></a>
                                    <span class="top-right-icon background8"><i class="mdi mdi-flash-on"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 align-center-vertical">
                            <div class="post-content">
                                <div class="entry-meta meta-0 font-small mb-15"><a href="javascript:;"><span class="post-cat background2 color-white"># {{$Latest->UserRegister->name}}</span></a></div>
                                <h4 class="post-title mb-15">
                                    <a href="{{ route('huasteca.show', $Latest->id) }}">{{$Latest->title}}</a>
                                </h4>
                                <p class="font-medium excerpt content-small-part-one">{{$Latest->content}}/p>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
              </div>

              <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                  <div class="tags">
                      <a href="javascript:;" rel="tag">deer</a>
                      <a href="javascript:;" rel="tag">nature</a>
                      <a href="javascript:;" rel="tag">conserve</a>
                  </div>
              </div>
              <div class="single-social-share clearfix wow fadeIn animated">
                  <div class="entry-meta meta-1 font-small color-grey float-left mt-10">
                      <span class="hit-count mr-15"><i class="ti-comment mr-5"></i>182 comments</span>
                      <span class="hit-count mr-15"><i class="ti-heart mr-5"></i>268 likes</span>
                      <span class="hit-count"><i class="ti-star mr-5"></i>Rate: 9/10</span>
                  </div>
                  <ul class="d-inline-block list-inline float-md-right mt-md-0 mt-4">
                      <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center " target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                      <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                      <li class="list-inline-item"><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                      <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                  </ul>
              </div>
              <div class="bt-1 border-color-1 mt-30 mb-30"></div>
              <!--author box-->
              <div class="author-bio wow fadeIn animated">
                  <div class="author-image mb-30">
                      <a href="javascript:;"><img src="{{ asset($user_data->avarter)}}" alt="" class="avatar"></a>
                  </div>
                  <div class="author-info">
                      <h3><span class="vcard author"><span class="fn"><a href="javascript:;" title="Posted by Barbara Cartland" rel="author">{{$user_data->name}}</a></span></span>
                      </h3>
                      <h5>About author</h5>
                      <div class="author-description">You should write because you love the shape of stories and sentences and the creation of different words on a page. </div>
                  </div>
              </div>
              <!--related posts-->
             
              <!--More posts-->
              <div class="single-more-articles">
                  <h6 class="widget-title mb-30 font-weight-bold text">You might be interested in</h6>
                  <div class="post-block-list post-module-1 post-module-5">
                      <ul class="list-post">
                        
                          <li class="mb-15">
                              <div class="d-flex">
                                  <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                      <a class="color-white" href="{{ route('huasteca.show', $Latest->id) }}">
                                          <img src="{{asset($Latest->img)}}" alt="">
                                      </a>
                                  </div>
                                  <div class="post-content media-body">
                                      <h6 class="post-title mb-10 text-limit-2-row"><a href="{{ route('huasteca.show', $Latest->id) }}">{{$Latest->title}}</a></h6>
                                      <div class="entry-meta meta-1 font-x-small color-grey">
                                          <span class="post-on">{{$Latest->updated_at}}</span>
                                          <span class="hit-count has-dot"># {{$Latest->UserRegister->name}}</span>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
              
              <!--comment form-->
              <div class="comment-form wow fadeIn animated">
                  <h3 class="mb-30">Leave a Reply</h3>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                      <div class="row">
                          <div class="col-12">
                              <div class="form-group">
                                  <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn button button-contactForm">Post Comment</button>
                      </div>
                  </form>
              </div>
          </article>
      </div>
      <!--container-->
  </main>


@endsection    