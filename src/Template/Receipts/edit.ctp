<div class="row col-sm-12"> 
    <div class="row col-sm-6"> 
    
        <?= $this->Form->create($receipt, [
            'type' => 'file',
            'class' => 'receipts'
            ]) ?>
        <?= $this->Form->hidden('id') ?>
        <div class="form-group col-sm-12">        
            <?=$this->Form->input('title', [
              'type' => 'text',
              'class' => 'form-control',
               'value' => $receipt->title]
                  )?>        
        </div>
        
        <div class="form-group col-sm-12">
            <?=$this->Form->input('description', [
              'type' => 'text',
              'class' => 'form-control',
               ' label' => __('description'),
               'value' => $receipt->description]
                  )?> 
        </div>
        
        <div class="form-group col-sm-12">
            <?=$this->Form->input('warranty', [
              'class' => 'form-control',
               'value' => $receipt->warranty,
                'autocomplete' => 'off',
                'label' => __('warranty_months')]
                  )?> 
        </div>
        
        <div class="form-group col-sm-12">
            <label for="purchased"><?=__('purchased')?></label>
            <?=$this->Form->date('purchased', [
                'label' => __('purchased'),
              'class' => 'form-control',
               'value' => $receipt->purchased,
                ]
                  )?> 
        </div>
        
         <div class="form-group col-sm-12">
        <?=$this->Form->input('filename', [
                  'type' => 'file',
                  'class' => 'form-control',
                    'label' => __('filename')]
                      )?> 
       </div>
        
        <div class="form-group col-sm-12">
             <?= $this->Form->button(__('save'),[
                    'class'=> 'btn btn-custom'
                ]); ?> 
            
        </div>
    </div>
    
    <div class="row col-sm-6"> 
        <div class="form-group col-sm-12">
                
            <?php 
               if(isset($receipt->filename) && !empty($receipt->filename)){
                   echo '<br>';

                   //check if file is jpg or png, else show view link
                   $ext = strtolower(pathinfo($receipt->filename, PATHINFO_EXTENSION));
                   if($ext == 'jpg' || $ext == 'jpeg'|| $ext == 'png'){
                       echo $this->Html->image('uploads/'.$receipt->filename, [
                           'alt' => $receipt->filename_original,
                           'class' => 'img-responsive receiptimage'
                           ]); 

                       echo '<br>';
                       echo $this->Form->button(__('delete_receipt') , ['type' => 'button', 'class' => 'deleteimage btn btn-custom']); 
                       echo $this->Form->hidden('deleted', ['value' => 0, 'class' => 'deleteimageval']);
                   }

                   echo $this->Form->button(__('view_receipt') , ['type' => 'button', 'class' => 'viewfile btn btn-custom']); 
               }
            ?>
        </div>
    </div>
</div>
<?= $this->Form->end() ?>

