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
          <a class="navbar-brand logo" href="index.html">
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
                      'action' => 'login'
                      ],
                  'class' => 'intro-form',
                  'id' => 'register_form',
                  'role'=>'form'
              ]) ?>
              
              <h3 class="text-center"> Login </h3>
              
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
               <?= $this->Form->button('Sign in',[
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

