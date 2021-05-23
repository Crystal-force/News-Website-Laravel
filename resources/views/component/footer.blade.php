<div class="footer-area">
  <div class="container">
      <div class="row pb-30">
          <div class=" col-12">
              <div class="divider-2 mb-30"></div>
          </div>
          <div class="col-lg-6 col-md-6 mb-lg-0 mb-md-4 mb-sm-4">
              <div class="sidebar-widget widget-latest-posts pr-50">
                  <h4 class="widget-header text-uppercase font-weight-bold color-black">
                      <span><a href="/">LATITUD</span>
                  </h4>
                  <div class="textwidget">
                      <p>
                          Start writing, no matter what. The water does not flow until the faucet is turned on.
                      </p>
                  </div>
              </div>
          </div>
          
          <div class="col-lg-6">
              <h5 class="mb-15">News list</h5>
              <ul class="float-left mr-30 font-small">
                  <li class="cat-item cat-item-3"><a href="ciudad-valles">CIUDAD VALLES</a></li>
                  <li class="cat-item cat-item-2"><a href="slp">SLP</a></li>
                  <li class="cat-item cat-item-4"><a href="huasteca">RIO VERDE</a></li>
                  <li class="cat-item cat-item-5"><a href="rio-verde">TAMAZUNCHALE</a></li>
                  <li class="cat-item cat-item-6"><a href="tamazunchale">HUASTECA </a></li>
                  <li class="cat-item cat-item-7"><a href="policia">POLICIA </a></li>
                  <li class="cat-item cat-item-2"><a href="de-todo">DE TODO</a></li>
              </ul>
          </div>
      </div>
  </div>
</div>

<div class="footer-bottom-area text-center text-muted">
  <div class="container">
      <div class="footer-border pt-20 pb-20">
          <div class="row d-flex align-items-center justify-content-between">
              <div class="col-12">
                  <div class="footer-copy-right">
                      <p class="font-small text-muted">© <span id="year"></span>, LATITUD | All rights reserved | Developed by <a href="javascript:;">Crystal team</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<script>
  var de = new Date();
  var time = de.getHours()+':'+de.getMinutes()+':'+de.getSeconds();
  console.log(time);
  var month = de.getMonth()+1;
  var day = de.getDate();
  var output = de.getFullYear() + '/' +
    (month<10 ? '0' : '') + month + '/' +
    (day<10 ? '0' : '') + day + '&nbsp;&nbsp;&nbsp;'+time;
    
  document.getElementById("year").innerHTML = new Date().getFullYear();
  document.getElementById("date").innerHTML = output;

</script>