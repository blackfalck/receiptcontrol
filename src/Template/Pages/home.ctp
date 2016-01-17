<!-- Pre-loader -->
<div class="preloader">
   <div class="status">&nbsp;</div>
</div>

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
              <span>Lugada</span>
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

    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-left">
          <div class="home-wrapper">
            <h1 class="animated fadeInDown wow home-title" data-wow-delay=".1s">Receipt Control</h1>
            <h4 class="animated fadeInDown wow" data-wow-delay=".2s">
                Don't you just hate it when something stops working and the store asks for the receipt, but you've lost it. 
                Have full control over your receipts!<br>
                And yep, it is free.
            </h4>            
                <?= $this->Html->link(__('Learn more'), 
                      ['controller' => 'Pages', 'action' => 'faq'],
                      ['class' => 'btn btn-custom btn-rnd animated fadeInDown wow']) 
                ?>   
                <?= $this->Html->link(__('Login'), 
                      ['controller' => 'Users', 'action' => 'login'],
                      ['class' => 'btn btn-custom btn-rnd animated fadeInDown wow']) 
                ?>   
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-sm-4 col-sm-offset-2">
          <div class="home-wrapper">
              
              <?= $this->Form->create(null, [
                  'url' => [
                      'controller' => 'Users',
                      'action' => 'register'
                      ],
                  'class' => 'intro-form',
                  'id' => 'register_form',
                  'role'=>'form'
              ]) ?>
              
              <h3 class="text-center"> Register for free </h3>
              <div class="form-group">
                <?= $this->Form->input('fullname', [
                            'type' => 'text',
                            'class' => 'form-control',
                            'placeholder' => 'Full name',
                            'required' => 'required'
                            ]); 
                ?> 
                  </div>
              <div class="form-group">
              <?= $this->Form->input('email', 
                      [
                          'type' => 'text',
                          'class' => 'form-control',
                          'placeholder' => 'Email',
                          'required' => 'required'
                          
                          ]); 
                ?>
                  </div>
              <div class="form-group">
              <?= $this->Form->input('password', 
                      [
                          'type' => 'text',
                          'class' => 'form-control',
                          'placeholder' => 'password',
                          'required' => 'required'
                          
                          ]); 
                ?>
              </div>
               <div class="form-group text-center">
               <?= $this->Form->button('Sign up',[
                   'class'=> 'btn btn-custom'
               ]); ?> 
                   </div>
              <?= $this->Form->end() ?>
               
              
               
               
            </div>
          </div>
      </div>
    </div>
  </section>
  <!-- END HOME -->
  
  <!-- FEATURES-1 -->
  <section class="section" id="features">
    <div class="container">
      <div class="container">

      <div class="row">
        <div class="col-sm-12 text-center">
          <h1 class="title zoomIn animated wow" data-wow-delay=".1s">Best Services</h1>
          <p class="sub-title zoomIn animated wow" data-wow-delay=".2s">Constituto voluptatibus mei ex. Eum soleat lorem Ipsum is simply dummy<br/> text of the printing and typesetting industry. </p>
        </div> 
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div class="service-item animated fadeInLeft wow" data-wow-delay=".1s">
            <i class="ion-social-buffer"></i>
            <div class="service-detail">
              <h4>Strategy Solutions</h4>
              <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInDown wow" data-wow-delay=".3s">
            <i class="ion-ipad"></i>
            <div class="service-detail">
              <h4>Digital Design</h4>
              <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInRight wow" data-wow-delay=".5s">
            <i class="ion-wand"></i>
            <div class="service-detail">
              <h4>SEO</h4>
              <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->       
      </div> <!--end row -->


      <div class="row">
        <div class="col-sm-4">
          <div class="service-item animated fadeInLeft wow" data-wow-delay=".7s">
            <i class="ion-coffee"></i>
            <div class="service-detail">
              <h4>Graphic Design</h4>
              <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInUp wow" data-wow-delay=".9s">
            <i class="ion-stats-bars"></i>
            <div class="service-detail">
              <h4>Analystics</h4>
              <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInRight wow" data-wow-delay="1.1s">
            <i class="ion-help-buoy"></i>
            <div class="service-detail">
              <h4>Dedicated Support</h4>
              <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->         
      </div> <!-- end row -->
    </div>
        
        
      </div>
    </div>
  </section>
  <!-- END FEATURES-1 -->

