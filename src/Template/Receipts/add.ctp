<div class="receipts form large-9 medium-8 columns content">
    <?= $this->Form->create($receipt) ?>
    <fieldset>
        
        <?php
         //   echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('title', array('type' => 'text'));
            echo $this->Form->input('description', array('type' => 'text'));
            echo $this->Form->input('filename' , ['type' => 'file']);
            echo $this->Form->input('warranty');
            echo $this->Form->input('purchased');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
