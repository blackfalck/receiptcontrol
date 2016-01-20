<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Receipts Management - Manage all your receipts in one environment</title>

    <!-- Bootstrap core CSS -->   
    <?= $this->Html->css('bootstrap.min.css') ?>

    <!-- Animate -->  
    <?= $this->Html->css('animate.css') ?>

    <!-- Magnific-popup --> 
    <?= $this->Html->css('magnific-popup.css') ?>
    
    <!-- Icon-font -->  
    <?= $this->Html->css('ionicons.min.css') ?>

    <!-- Custom styles for this template -->    
    <?= $this->Html->css('style.css') ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  
<body>
    
    <?php 
    if(isset($page) && $page == 'home'){
       echo  $this->element('../Pages/home');
    }
    elseif(isset($page) && $page == 'login')
    {
      echo  $this->element('../Users/login');  
    }
    else
    {    
        echo $this->element('navbar') ?>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->fetch('content') ?>    
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->
            </div>
        </section>
    <?php }?>
    <?= $this->element('footer') ?>
         
    <!-- js placed at the end of the document so the pages load faster -->
    <?= $this->Html->script('jquery') ?>
    <?= $this->Html->script('bootstrap.min') ?>    
    
    <!-- Jquery easing -->               
    <?= $this->Html->script('jquery.easing.1.3.min') ?>
    <?= $this->Html->script('SmoothScroll.js') ?>
    <?= $this->Html->script('wow.min.js') ?>
    <?= $this->Html->script('jquery.magnific-popup.min') ?>
   
    <!--common script for all pages-->
    <?= $this->Html->script('jquery.app') ?>
    
    <?= $this->Html->script('main') ?>
    <?php echo $this->Flash->render();  ?>
</body>
</html>
