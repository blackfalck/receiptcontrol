<div class="row col-sm-12">  
    <div class="form-group col-sm-12">  
        <?= $this->Html->link(__('logout'), 
            ['controller' => 'Users', 'action' => 'logout'],
            ['class' => 'btn btn-custom']) 
        ?>   
  </div>
</div>

<?= $this->Form->create($user) ?>
<div class="row col-sm-12">            
    <div class="form-group col-sm-4">      
      <?=$this->Form->input('fullname', [
          'type' => 'text',
          'class' => 'form-control',
          'value' => $user->fullname,
          'label' => __('full_name')
          ]
              )?>
      <div class="error" id="err-name" style="display: none;"><?=__('full_name_error')?></div>
    </div> 
    
</div>

<div class="row col-sm-12">            
    <div class="form-group col-sm-4">      
      <?=$this->Form->input('email', [
          'class' => 'form-control',
          'value' => $user->email,
          'label' => __('email')]
              )?>
      <div class="error" id="err-name" style="display: none;"><?=__('email_error')?></div>
    </div> 
</div>

<div class="row col-sm-12">            
    <div class="form-group col-sm-4">      
      <?=$this->Form->input('password', [
          'class' => 'form-control',
          'value' => "",
          'type' => 'password',
          'required' => false,
          'label' => __('password')
          ]
              )?>
      <div class="error" id="err-name" style="display: none;"><?=__('password_error')?></div>
    </div> 
</div>

<div class="row col-sm-12"> 
    <div class="form-group col-sm-4"> 
        <?= $this->Form->button(__('save'),[
            'class'=> 'btn btn-custom'
        ]); ?> 
    </div>
</div>

<?= $this->Form->end() ?>
