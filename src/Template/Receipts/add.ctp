<div class="row col-sm-12"> 
    <?= $this->Form->create($receipt, ['type' => 'file']) ?>
    <div class="form-group col-sm-4">        
        <?=$this->Form->input('title', [
          'type' => 'text',
          'class' => 'form-control']
              )?>        
    </div>
</div>

<div class="row col-sm-12"> 
    <div class="form-group col-sm-4">
        <?=$this->Form->input('description', [
          'type' => 'text',
          'class' => 'form-control']
              )?> 
        
    </div>
</div>

<div class="row col-sm-12"> 
    <div class="form-group col-sm-4">
        <?=$this->Form->input('filename', [
          'type' => 'file',
          'class' => 'form-control']
              )?> 
        
    </div>
</div>
<div class="row col-sm-12"> 
    <div class="form-group col-sm-4">
        <?=$this->Form->input('warranty', [
          'class' => 'form-control',
            'autocomplete' => 'off',
            'label' => 'Warranty months']
              )?> 
        
    </div>
</div>
<div class="row col-sm-12"> 
    <div class="form-group col-sm-4">
        
                
        <?=$this->Form->input('purchased', [
          'class' => 'form-control']
              )?> 
        
    </div>
</div>

<div class="row col-sm-12"> 
    <div class="form-group col-sm-4">
     <?= $this->Form->button('Save',[
            'class'=> 'btn btn-custom'
        ]); ?> 
    <?= $this->Form->end() ?>
    </div>
</div>

