<div class="receipts form large-9 medium-8 columns content">
    <?= $this->Form->create($receipt, ['type' => 'file']) ?>
    <fieldset>
        
        <?php
            echo $this->Form->hidden('id');
            echo $this->Form->input('title', array('type' => 'text'));
            echo $this->Form->input('description', array('type' => 'text'));
            echo $this->Form->file('filename');
            echo $this->Form->button('delete' , ['type' => 'button', 'class' => 'deleteimage']);
            echo $this->Form->hidden('deleted', ['value' => 0, 'class' => 'deleted']);
            
           
            echo $this->Html->image('uploads/'.$receipt->filename, ['alt' => 'CakePHP']);
            echo $this->Form->input('warranty');
            echo $this->Form->datetime('purchased',
                [
                   'hour' => [
                        'class' => 'hidden',
                    ],
                    'minute' => [
                        'class' => 'hidden',
                    ],
                ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
