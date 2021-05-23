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
          <div class="entry-header entry-header-style-1 mb-30 mt-50">
              <h1 class="entry-title mb-30 font-weight-500">
                  {{$each_data->title}}
              </h1>
              <div class="row">
                  <div class="col-lg-6">
                      <div class="entry-meta align-items-center meta-2 font-small color-muted">
                          <p class="mb-5">
                              <a class="author-avatar" href="javascript:;"><img class="img-circle" src="{{ asset($user_data->avarter)}}" alt=""></a>
                              By <a href="javascript:;"><span class="author-name font-weight-bold">{{$user_data->name}}</span></a>
                          </p>
                          <span class="mr-10"> {{$user_data->updated_at}}</span>
                          <span class="has-dot"> 8 mins read</span>
                      </div>
                  </div>
                  <div class="col-lg-6 text-right">
                      <div class="single-tools">
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
              </div>
          </div>
          <!--end single header-->
          <figure class="image mb-30 m-auto text-center border-radius-2">
              <img src="{{ asset($each_data->img)}}" alt="post-title" />
          </figure>
          <!--figure-->
          <article class="entry-wraper mb-50">
              <div class="excerpt mb-30 content_detail">
                  <p>{{$each_data->content}}</p>
              </div>
              {{-- <div class="entry-left-col">
                  <div class="social-sticky">
                      <a href="#"><i class="ti-facebook"></i></a>
                      <a href="#"><i class="ti-twitter"></i></a>
                      <a href="#"><i class="ti-heart"></i></a>
                      <a href="#"><i class="ti-email"></i></a>
                  </div>
              </div> --}}
              <div class="entry-main-content dropcap wow fadeIn animated">
                  <h3>Popular News</h3>
                  <hr class="wp-block-separator is-style-wide">
                  <div class="wp-block-image">
                      <figure class="alignleft is-resized">
                          <img class="border-radius-5" src="{{ asset($other_data->img)}}" style="width:300px">
                      </figure>
                  </div>
                  <p class="content_detail">{{$other_data->content}}</p>
                  <hr class="section-divider">
                  <!--Begin Subcrible-->
                  <div class="border-radius-5 mb-50 border p-30 wow fadeIn animated">
                      <div class="row justify-content-between">
                          <div class="col-md-5 mb-2 mb-md-0">
                              <h5 class="font-weight-bold secondfont mb-30 mt-0">Become a member</h5>
                              <p class="font-small">Get the latest news right in your inbox. We never spam!</p>
                          </div>
                          <div class="col-md-7">
                              <div class="row">
                                  <div class="col-md-12">
                                      <input type="text" class="form-control" placeholder="Enter your e-mail address">
                                  </div>
                                  <div class="col-md-12 mt-2">
                                      <button type="submit" class="btn btn-info btn-block">Subscribe</button>
                                  </div>
                              </div>
                          </div>
                      </div>
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
              
              <!--Comments-->
              {{-- <div class="comments-area">
                  <h3 class="mb-30">03 Comments</h3>
                  <div class="comment-list wow fadeIn animated">
                      <div class="single-comment justify-content-between d-flex">
                          <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                  <img src="http://via.placeholder.com/133x133" alt="">
                              </div>
                              <div class="desc">
                                  <p class="comment">
                                      Vestibulum euismod, leo eget varius gravida, eros enim interdum urna, non rutrum enim ante quis metus. Duis porta ornare nulla ut bibendum
                                  </p>
                                  <div class="d-flex justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <h5>
                                              <a href="#">Robert Edition</a>
                                          </h5>
                                          <p class="date">6 minutes ago </p>
                                      </div>
                                      <div class="reply-btn">
                                          <a href="#" class="btn-reply">Reply</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="comment-list wow fadeIn animated">
                      <div class="single-comment justify-content-between d-flex">
                          <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                  <img src="http://via.placeholder.com/133x133" alt="">
                              </div>
                              <div class="desc">
                                  <p class="comment">
                                      Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                  </p>
                                  <div class="d-flex justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <h5>
                                              <a href="#">Agatha Christie</a>
                                          </h5>
                                          <p class="date">December 4, 2020 at 3:12 pm </p>
                                      </div>
                                      <div class="reply-btn">
                                          <a href="#" class="btn-reply">Reply</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="comment-list wow fadeIn animated">
                      <div class="single-comment justify-content-between d-flex">
                          <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                  <img src="http://via.placeholder.com/133x133" alt="">
                              </div>
                              <div class="desc">
                                  <p class="comment">
                                      Donec in ullamcorper quam. Aenean vel nibh eu magna gravida fermentum. Praesent eget nisi pulvinar, sollicitudin eros vitae, tristique odio.
                                  </p>
                                  <div class="d-flex justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <h5>
                                              <a href="#">Danielle Steel</a>
                                          </h5>
                                          <p class="date">December 4, 2020 at 3:12 pm </p>
                                      </div>
                                      <div class="reply-btn">
                                          <a href="#" class="btn-reply">Reply</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> --}}
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