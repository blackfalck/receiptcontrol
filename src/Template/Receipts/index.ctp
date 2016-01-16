<div class="row">
    <div class="col-sm-12 text-center">
      <h1 class="title zoomIn animated wow animated"><?= __('Receipts') ?></h1>
    </div> 
 </div>

<div class="row">  
    <div class="col-sm-12 text-center">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('warranty') ?></th>
                    <th><?= $this->Paginator->sort('purchased') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($receipts as $receipt): ?>
                <tr>
                    <td><?= h($receipt->title) ?></td>
                    <td><?= h($receipt->warranty) ?></td>
                    <td><?= h($receipt->purchased) ?></td>
                    <td><?= h($receipt->created) ?></td>
                    <td><?= h($receipt->modified) ?></td>
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
            
            
            
