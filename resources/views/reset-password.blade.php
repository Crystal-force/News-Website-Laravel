@extends('layout.index')
 @section('content')

    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar position-left">
      <button class="off-canvas-close"><i class="ti-close"></i></button>
    </aside>
    <header class="main-header header-style-2 header-sticky">
        @include('component.menu')
    </header>
    
    <main class="mt-100 mb-100">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-6 col-md-10">
                  <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                      <div class="padding_eight_all bg-white">
                          <h2 class="mb-50 text-center position-relative divider-wave">Reset Password</h2>
                          <form method="post">
                              <div class="divider-text-center mt-15 mb-15 text-muted">
                                  <span> Reset Password </span>
                              </div>
                              <div class="plr-5-percent">
                                  <div class="form-group">
                                      <input type="text" required="" class="form-control" name="email" placeholder="New password">
                                  </div>
                                  <div class="form-group">
                                      <input type="text" required="" class="form-control" name="email" placeholder="Confirm New password">
                                  </div>
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-dark btn-block" name="login">Reset Password</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </main>
 
    <div class="dark-mark"></div>
@endsection