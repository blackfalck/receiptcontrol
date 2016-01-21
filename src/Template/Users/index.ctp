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
      <?=$this->Form->input(__('full_name'), [
          'type' => 'text',
          'class' => 'form-control',
          'value' => $user->fullname
          ]
              )?>
      <div class="error" id="err-name" style="display: none;"><?=__('full_name_error')?></div>
    </div> 
    
</div>

<div class="row col-sm-12">            
    <div class="form-group col-sm-4">      
      <?=$this->Form->input(__('email'), [
          'class' => 'form-control',
          'value' => $user->email]
              )?>
      <div class="error" id="err-name" style="display: none;"><?=__('email_error')?></div>
    </div> 
</div>

<div class="row col-sm-12">            
    <div class="form-group col-sm-4">      
      <?=$this->Form->input(__('password'), [
          'class' => 'form-control',
          'value' => "",
          'required' => false
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
