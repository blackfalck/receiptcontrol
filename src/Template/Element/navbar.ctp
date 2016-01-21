<!-- HOME -->
  <section class="home bg-dark">
    <div class="navbar navbar-custom" role="navigation">
      <div class="container">
        <!-- Navbar-header -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="ion-navicon"></i>
          </button>
          <!-- LOGO -->
          <a class="navbar-brand logo" href="/">
            <i class="ion-social-buffer"></i>
              <span>Receipts Management</span>
          </a>
        </div>
        <!-- end navbar-header -->

        <!-- menu -->
            <?=$this->element('menu') ?>
        <!--/Menu -->
      </div>
      <!-- end container -->
    </div>
    <!-- End navbar -->

    <div class="container low">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="home-wrapper low">
            <h1 class="animated fadeInDown wow" data-wow-delay=".1s"><?= __($title) ?></h1>
            <h4 class="page-sub-title animated fadeInDown wow" data-wow-delay=".3s"><?= __($subtitle) ?></h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- END HOME -->
