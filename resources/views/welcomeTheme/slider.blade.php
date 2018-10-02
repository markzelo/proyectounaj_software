<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ asset('welcome/laravel.png') }}" alt="laravel">
      <div class="carousel-caption">
        <h3>Laravel</h3>
      </div> 
    </div>

    <div class="item">
      <img src="{{ asset('welcome/mysql.jpg') }}" alt="mysql">
      <div class="carousel-caption">
        <h3>MySQL</h3>
      </div> 
    </div>

    <div class="item">
      <img src="{{ asset('welcome/hcj.jpg') }}" alt="hcj">
      <div class="carousel-caption">
        <h3>HTML5 - CSS3 - Javascript</h3>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>