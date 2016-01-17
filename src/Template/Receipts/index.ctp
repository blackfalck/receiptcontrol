<div class="row">  
    <div class="col-sm-12 ">             
        <div class="table-responsive"> 
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('title') ?></th>
                        <th><?= $this->Paginator->sort('warranty') ?></th>
                        <th><?= $this->Paginator->sort('purchased') ?></th>                   
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($receipts as $receipt): ?>
                    
                    <tr class="clickabletr" type="receipts" action="view" id="<?=$receipt->id?>">
                        <td><?= h($receipt->title) ?></td>
                        <td><?= h($receipt->warranty) ?></td>
                        <td><?= h($receipt->purchased) ?></td>

                        <td class="actions">                            
                            <?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', 
                                    ['action' => 'view', $receipt->id],
                                    false) ?>
                            
                            <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', 
                                    ['action' => 'edit', $receipt->id],
                                    false) ?>
                            
                            <?= $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', [
                                'action' => 'delete', $receipt->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receipt->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>   
        </div>
    </div>
</div>
            
            
            
