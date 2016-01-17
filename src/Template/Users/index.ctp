<div class="row col-sm-12">  
    <div class="form-group col-sm-12">  
        <?= $this->Html->link(__('Logout'), 
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
          'class' => 'form-control']
              )?>
      <div class="error" id="err-name" style="display: none;">Please enter name</div>
    </div> 
    
</div>

<div class="row col-sm-12">            
    <div class="form-group col-sm-4">      
      <?=$this->Form->input('email', [
          'class' => 'form-control']
              )?>
      <div class="error" id="err-name" style="display: none;">Please enter name</div>
    </div> 
</div>

<div class="row col-sm-12">            
    <div class="form-group col-sm-4">      
      <?=$this->Form->input('password', [
          'class' => 'form-control',
          'value' => "",
          'required' => false
          ]
              )?>
      <div class="error" id="err-name" style="display: none;">Please enter name</div>
    </div> 
</div>

<div class="row col-sm-12"> 
    <div class="form-group col-sm-4"> 
        <?= $this->Form->button('Save',[
            'class'=> 'btn btn-custom'
        ]); ?> 
    </div>
</div>

<?= $this->Form->end() ?>
