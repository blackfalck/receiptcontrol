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
            <h1 class="animated fadeInDown wow home-title" data-wow-delay=".1s"><?= __('sign_in') ?></h1>
            <h4 class="animated fadeInDown wow" data-wow-delay=".2s">
                Don't you just hate it when something stops working and the store asks for the receipt, but you've lost it. 
                Have full control over your receipts!<br>
                And yep, it is free.
            </h4>            
               
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-sm-4 col-sm-offset-2">
          <div class="home-wrapper signin">
              
              
              <?= $this->Form->create(null, [
                  'url' => [
                      'controller' => 'Users',
                      'action' => 'login'
                      ],
                  'class' => 'intro-form',
                  'id' => 'register_form',
                  'role'=>'form'
              ]) ?>
              
              <h3 class="text-center"> <?= __('login') ?> </h3>
              
              <div class="form-group">
              <?= $this->Form->input( 'email', 
                      [
                          'type' => 'text',
                          'class' => 'form-control',
                          'placeholder' => __('email'),
                          'required' => 'required'
                          
                          ]); 
                ?>
                  </div>
              <div class="form-group">
              <?= $this->Form->input( 'password', 
                      [
                          'type' => 'password',
                          'class' => 'form-control',
                          'placeholder' => __('password'),
                          'required' => 'required'
                          
                          ]); 
                ?>
              </div>
               <div class="form-group text-center">
               <?= $this->Form->button( __('sign_in'),[
                   'class'=> 'btn btn-custom'
               ]); ?> 
                   
               <?= $this->Html->link(__('forgot_passwordq'), [
                   'controller' => 'users', 'action' => 'forgot'
                   ],
                   ['class' => 'forgotpw']) 
               ?>
               </div>
              <?= $this->Form->end() ?>
               
            </div>
          
            <div class="home-wrapper forgot" style="display:none;">                

              <?= $this->Form->create(null, [
                'url' => [
                    'controller' => 'Users',
                    'action' => 'forgot'
                    ],
                'class' => 'intro-form',
                'id' => 'register_form',
                'role'=>'form'
               ]) ?>

              <h3 class="text-center"> <?= __('forgot_password') ?> </h3>
              <div class="form-group text-center">

                  <?= $this->Form->input('email', 
                    [
                        'type' => 'email',
                        'class' => 'form-control',
                        'placeholder' => 'email',
                        'required' => 'required',
                        'label' => __('email')

                        ]); 
                  ?>

              </div>
              <div class="form-group text-right">
                  <?= $this->Form->button( __('sign_in'),[
                        'class'=> 'btn btn-custom signin'
                    ]); ?>
                  
                  <?= $this->Form->button( __('submit'),[
                      'class'=> 'btn btn-custom'
                  ]); ?> 

                  <?= $this->Form->end() ?>

              </div>
                
          </div>
              
          </div>
      </div>
    </div>
  </section>
  <!-- END HOME -->

