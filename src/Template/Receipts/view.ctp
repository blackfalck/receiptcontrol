
<div class="row col-sm-12 form-group"> 
    <div class="row col-sm-6">
    
         <?= $this->Form->create($receipt, [
            'type' => 'file',
            'class' => 'receipts'              
            ]) ?>
        <?= $this->Form->hidden('id') ?>
        
        <div class="form-group col-sm-12">
            <?=$this->Form->input('warranty', [
              'class' => 'form-control',
                'autocomplete' => 'off',
                'label' => 'Warranty months',
                'readonly' ]
                  )?> 
        </div>
    
        <div class="form-group col-sm-12">
            <?=$this->Form->input('gekocht', [
              'class' => 'form-control',
                'value' => date('d-m-Y ', strtotime($receipt->purchased)),
                'readonly']
                  )?> 
        </div>
        
        <div class="form-group col-sm-12">
            <?=$this->Form->input('Aangemaakt', [
                'class' => 'form-control',
                 'value' => date('d-m-Y ', strtotime($receipt->created)),
                 'readonly']
              )?> 
            </div>
        
    </div>
    
    <div class="row col-sm-5 pull-right ">        
        
        <?php 
            if(isset($receipt->filename) && !empty($receipt->filename)){
                echo '<h4>';
                echo h($receipt->filename_original);
                echo '</h4>';
                
                //check if file is jpg or png, else show view link
                $ext = strtolower(pathinfo($receipt->filename, PATHINFO_EXTENSION));
                if($ext == 'jpg' || $ext == 'jpeg'|| $ext == 'png'){
                    echo $this->Html->image('uploads/'.$receipt->filename, [
                        'alt' => $receipt->filename_original,
                        'class' => 'img-responsive receiptimage'
                        ]); 

                    echo '<br>';
                    echo $this->Form->button('remove receipt' , ['type' => 'button', 'class' => 'deleteimage btn btn-custom']); 
                    echo $this->Form->hidden('deleted', ['value' => 0, 'class' => 'deleteimageval']);
                }
                
                echo $this->Form->button('view receipt' , ['type' => 'button', 'class' => 'viewfile btn btn-custom']); 
            }
         ?>
    </div>
</div>
