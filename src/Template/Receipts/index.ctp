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
                    <tr>
                        <td><?= h($receipt->title) ?></td>
                        <td><?= h($receipt->warranty) ?></td>
                        <td><?= h($receipt->purchased) ?></td>

                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $receipt->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $receipt->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $receipt->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receipt->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>   
        </div>
    </div>
</div>
            
            
            
