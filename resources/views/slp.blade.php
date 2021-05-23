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
                  <span></span> SLP
              </div>
              <h2 class="font-weight-bold"><span class="font-family-normal">SLP</span></h2>
              <span class="line-dots mt-30 mb-30"></span>
          </div>
          <div class="grid row vertical-divider mb-30">
              @foreach($slp_data as $Slp_Data)
                <article class="grid-item col pb-50 wow fadeIn animated">
                    <figure class="mb-15">
                        <a href="{{ route('slp.show', $Slp_Data->id) }}">
                            <img src="{{$Slp_Data->img}}" alt="">
                        </a>
                    </figure>
                    <h6 class="post-title font-weight-bold mb-10">
                        <a href="{{ route('slp.show', $Slp_Data->id) }}">{{$Slp_Data->title}}</a>
                    </h6>
                    <p class="excerpt content-small-part-one">
                        {{$Slp_Data->content}} 
                    </p>
                    <div class="entry-meta meta-2 font-x-small color-muted">
                        <p class="mb-5">
                            By <a href="javascript:;"><span class="author-name">{{ $Slp_Data->UserRegister->name }}</span></a>
                        </p>
                        <span class="mr-10"> {{$Slp_Data->updated_at}}</span>
                        <span class="has-dot"> 8 mins read</span>
                    </div>
                </article>
              @endforeach
            
              <div class="masonry-grid grid-lines column-4">
                  <div class="grid-line masonry-grid-item">
                      <div class="grid-line-inner"></div>
                  </div>
                  <div class="grid-line masonry-grid-item">
                      <div class="grid-line-inner"></div>
                  </div>
                  <div class="grid-line masonry-grid-item">
                      <div class="grid-line-inner"></div>
                  </div>
                  <div class="grid-line masonry-grid-item">
                      <div class="grid-line-inner"></div>
                  </div>
              </div>
          </div>
      </div>
    </main>
    

    <div class="dark-mark"></div>
@endsection