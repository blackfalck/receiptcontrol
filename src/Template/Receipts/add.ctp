<div class="row col-sm-12"> 
    <?= $this->Form->create($receipt, ['type' => 'file']) ?>
    <div class="form-group col-sm-4">        
        <?=$this->Form->input('title', [
          'type' => 'text',
          'class' => 'form-control',
            'label' => __('title')]
              )?>        
    </div>
</div>

<div class="row col-sm-12"> 
    <div class="form-group col-sm-4">
        <?=$this->Form->input('description', [
          'type' => 'text',
          'class' => 'form-control',
            'label' => __('description')]
              )?> 
        
    </div>
</div>

<div class="row col-sm-12"> 
    <div class="form-group col-sm-4">
        <?=$this->Form->input('filename', [
          'type' => 'file',
          'class' => 'form-control',
            'label' => __('filename')]
              )?> 
        
    </div>
</div>
<div class="row col-sm-12"> 
    <div class="form-group col-sm-4">
        <?=$this->Form->input('warranty', [
          'class' => 'form-control',
            'value' => $receipt->warranty,
            'autocomplete' => 'off',
            'label' => __('Warranty_months')]
              )?> 
        
    </div>
</div>
<div class="row col-sm-12"> 
    <div class="form-group col-sm-4">
        
                
        <?=$this->Form->input('purchased', [
          'class' => 'form-control',
            'value' => $receipt->purchased,
             'label' => __('purchased')]
              )?> 
        
    </div>
</div>

<div class="row col-sm-12"> 
    <div class="form-group col-sm-4">
     <?= $this->Form->button(__('save'),[
            'class'=> 'btn btn-custom'
        ]); ?> 
    <?= $this->Form->end() ?>
    </div>
</div>

