<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">            
      <li>
        <a href="index.html#screenshots">My account</a>
      </li>
      <li>
        <?= $this->Html->link(__('Receipts'), ['controller' => 'Receipts', 'action' => 'index']) ?>        
      </li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown">
          Language 
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu arrow">
          <li>
            <?= $this->Html->link(__('English'), ['controller' => 'Locale', 'action' => 'change' , 'en_US']) ?>
          </li>
          <li>
            <?= $this->Html->link(__('Nederlands'), ['controller' => 'Locale', 'action' => 'change' , 'nl_NL']) ?></a>
          </li>
          <li>
            <?= $this->Html->link(__('Deutsch'), ['controller' => 'Locale', 'action' => 'change' , 'de_DE']) ?></a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
