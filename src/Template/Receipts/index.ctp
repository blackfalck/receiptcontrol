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
                    
                    <tr class="clickabletr" type="receipts" action="edit" id="<?=$receipt->id?>">
                        <td><?= h($receipt->title) ?></td>
                        <td><?= h($receipt->warranty)?> 
                            <?php
                            if($receipt->warranty == 1){
                               echo __('Month');
                            }
                            else{
                                echo __('Months');
                            }                        
                         ?>
                        </td>
                        <td><?= h($receipt->purchased) ?></td>

                        <td class="actions">                              
                            <a href="/receipts/view/<?=$receipt->id?>">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>
                            <a href="/receipts/edit/<?=$receipt->id?>">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a href="/receipts/delete/5965fbbb-3ad0-4664-9a84-d346225ce286" onclick="return confirm('Are you sure?')">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>   
        </div>
    </div>
</div>
            
            
            
