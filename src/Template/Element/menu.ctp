<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">            
      <li>
        <?= $this->Html->link(__('my_account'), ['controller' => 'Users', 'action' => 'index']) ?>        
      </li>
      <li>
        <?= $this->Html->link(__('receipts'), ['controller' => 'Receipts', 'action' => 'index']) ?>        
      </li>
      <li>
        <?= $this->Html->link(__('faq'), ['controller' => 'Pages', 'action' => 'faq']) ?>        
      </li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown">
          <?php echo __('language'); 
            echo '&nbsp;&nbsp;';
            echo $this->Html->image("".$this->request->session()->read('locale').'.png', [
                    "alt" => "Language"                   
                ]);?>
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu arrow">
          <li>
            <?= $this->Html->link(__('english'), ['controller' => 'Locale', 'action' => 'change' , 'en_US']) ?>
            <?= $this->Html->image('en_US.png', ["alt" => "English"]);?>
          </li>
          <li>
            <?= $this->Html->link(__('dutch'), ['controller' => 'Locale', 'action' => 'change' , 'nl_NL']) ?>
            <?= $this->Html->image('nl_NL.png', ["alt" => "Nederlands"]);?> 
          </li>
          <li>
            <?= $this->Html->link(__('german'), ['controller' => 'Locale', 'action' => 'change' , 'de_DE']) ?>
           <?= $this->Html->image('de_DE.png', ["alt" => "Deutsch"]);?>   
          </li>
        </ul>
      </li>
    </ul>
  </div>
