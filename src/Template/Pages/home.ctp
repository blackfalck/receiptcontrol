<!-- Pre-loader -->


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

    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-left">
          <div class="home-wrapper">
            <h1 class="animated fadeInDown wow home-title" data-wow-delay=".1s"><?=__('receipts_management')?></h1>
            <h4 class="animated fadeInDown wow" data-wow-delay=".2s">
                <?=__('home_subtitle')?>                
            </h4>            
                <?= $this->Html->link(__('learn_more'), 
                      ['controller' => 'Pages', 'action' => 'faq'],
                      ['class' => 'btn btn-custom btn-rnd animated fadeInDown wow']) 
                ?>   
                <?= $this->Html->link(__('login'), 
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
                            'placeholder' => __('full_name'),
                            'required' => 'required'
                            ]); 
                ?> 
                  </div>
              <div class="form-group">
              <?= $this->Form->input('email', 
                      [
                          'type' => 'text',
                          'class' => 'form-control',
                          'placeholder' => __('email'),
                          'required' => 'required'
                          
                          ]); 
                ?>
                  </div>
              <div class="form-group">
              <?= $this->Form->input('password', 
                      [
                          'type' => 'password',
                          'class' => 'form-control',
                          'placeholder' => __('password'),
                          'required' => 'required'
                          
                          ]); 
                ?>
              </div>
               <div class="form-group text-center">
               <?= $this->Form->button( __('sign_up'),[
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
          <h1 class="title zoomIn animated wow" data-wow-delay=".1s"> <?=__('home_service_title')?></h1>
          <p class="sub-title zoomIn animated wow" data-wow-delay=".2s"><?=__('home_service_subtitle')?></p>
        </div> 
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div class="service-item animated fadeInLeft wow" data-wow-delay=".1s">
            <i class="ion-social-buffer"></i>
            <div class="service-detail">
              <h4><?=__('home_infoblock1_title')?></h4>
              <p><?=__('home_infoblock1_text')?></p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInDown wow" data-wow-delay=".3s">
            <i class="ion-ipad"></i>
            <div class="service-detail">
              <h4><?=__('home_infoblock2_title')?></h4>
              <p><?=__('home_infoblock2_text')?></p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInRight wow" data-wow-delay=".5s">
            <i class="ion-wand"></i>
            <div class="service-detail">
              <h4><?=__('home_infoblock3_title')?></h4>
              <p><?=__('home_infoblock3_text')?></p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->       
      </div> <!--end row -->


      <div class="row">
        <div class="col-sm-4">
          <div class="service-item animated fadeInLeft wow" data-wow-delay=".7s">
            <i class="ion-coffee"></i>
            <div class="service-detail">
              <h4><?=__('home_infoblock4_title')?></h4>
              <p><?=__('home_infoblock4_text')?></p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInUp wow" data-wow-delay=".9s">
            <i class="ion-stats-bars"></i>
            <div class="service-detail">
              <h4><?=__('home_infoblock5_title')?></h4>
              <p><?=__('home_infoblock5_text')?></p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInRight wow" data-wow-delay="1.1s">
            <i class="ion-help-buoy"></i>
            <div class="service-detail">
              <h4><?=__('home_infoblock6_title')?></h4>
              <p><?=__('home_infoblock6_text')?></p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->         
      </div> <!-- end row -->
    </div>
        
        
      </div>
    </div>
  </section>
  <!-- END FEATURES-1 -->

