<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
    @include('style.style')
    </head>
    <body > 
      <div class="scroll-progress bg-dark"></div>
      <!-- Start Preloader -->
      <div class="preloader font-heading">
          <div class="counter">0</div>
      </div> 
      @yield('content')
      @include('component.footer');
      @include('script.script')
    </body>
</html>