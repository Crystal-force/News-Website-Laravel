@extends('layout.index')
 @section('content')

    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar position-left">
      <button class="off-canvas-close"><i class="ti-close"></i></button>
    </aside>
    <header class="main-header header-style-2 header-sticky">
      @include('component.menu')
    </header>


    <main class="mt-100">
        <div class="container blank-page">
           <p class="blank-title">Sorry! You can't find the News now. we are updating the website now.</p>
        </div>
    </main>
 
@endsection    