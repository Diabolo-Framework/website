<style>
.guide-cmd {padding: 15px 0px;font-size: 1.3em;color: #8c8c8c;background-color: #dcdbdb;border-radius: 50px;box-shadow: 10px 10px 5px #888888;    margin: 25px;}
</style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <img src="/assets/img/logo.png" style="widht:30px;height:34px;">
      Diabolo
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#guide">Guide</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#document">Document</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header class="masthead">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-lg-7 my-auto">
        <div class="header-content mx-auto">
          <h1 class="mb-5">Diabolo is a PHP framework that helps you easily to build web applications and API services !</h1>
          <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Start Now !</a>
        </div>
      </div>
      <div class="col-lg-5 my-auto">
        <div class="device-container">
          <div class="device-mockup iphone6_plus portrait white">
            <div class="device">
              <div class="screen">
                <img src="/assets/img/big-logo.png" class="img-fluid" alt="">
              </div>
              <div class="button">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="download bg-primary text-center" id="guide">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2 class="section-heading">setup the application</h2>
        <div class="guide-cmd"> composer create-project diabolo/diabolo-application </div>
        <p>
          <br><br>
          <a href="#document" style="color:white">
          <i class="icon-arrow-right"></i>
          Go to manual
         </a>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="features" id="document">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 my-auto">
        <div class="device-container">
          <div class="device-mockup iphone6_plus portrait white">
            <div class="device">
              <div class="screen">
                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                <img src="/assets/img/big-logo.png" class="img-fluid" alt="">
              </div>
              <div class="button">
                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 my-auto">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="feature-item">
                <i class="icon-book-open text-primary"></i>
                <h3>Manual</h3>
                <p class="text-muted">Start to build your application step by step !</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="feature-item">
                <i class="icon-list text-primary"></i>
                <h3>Class Reference</h3>
                <p class="text-muted">Find out how the class works !</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="feature-item">
                <i class="icon-present text-primary"></i>
                <h3>Extensions</h3>
                <p class="text-muted">A lot of extensions to save your time !</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact bg-primary" id="contact">
  <div class="container">
    <h2>We <i class="fa fa-heart"></i> new friends!</h2>
    <ul class="list-inline list-social">
      <li class="list-inline-item social-github">
        <a href="https://github.com/Diabolo-Framework/Diabolo">
          <i class="fa fa-github"></i>
        </a>
      </li>
      <li class="list-inline-item social-mail">
        <a href="mailto:michaelluthor@163.com">
          <i class="fa fa-envelope"></i>
        </a>
      </li>
    </ul>
  </div>
</section>

<footer>
  <div class="container">
    <p>&copy; Diabolo Framework <?php echo date('Y'); ?>. All Rights Reserved.</p>
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href="javascript:;">Privacy</a>
      </li>
      <li class="list-inline-item">
        <a href="javascript:;">Terms</a>
      </li>
      <li class="list-inline-item">
        <a href="javascript:;">FAQ</a>
      </li>
    </ul>
  </div>
</footer>