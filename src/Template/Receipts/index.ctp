<div class="row">  
    <div class="col-sm-12 ">  
        <div class="col-sm-5">
            <?= $this->Html->link(__('Add'), 
                      ['controller' => 'Receipts', 'action' => 'add'],
                      ['class' => 'btn btn-custom btn-sqr animated fadeInDown wow']) 
                ?> 
        </div>
        
        <div class="col-sm-3">
            <?= $this->Form->create(null, [
                  'url' => [
                      'controller' => 'Receipts',
                      'action' => 'index'
                      ],
                  'class' => '',
                  'id' => 'register_form',
                  'role'=>'form'
              ]) ?>
            <?=  $this->Form->select('year', [
                       'all'  => 'all',
                       '2016' => '2016',
                       '2015' => '2015',
                       '2014' => '2014',
                        ],[
                          'default' => 'all',                            
                          'class' => 'form-control',
                        ]
                    ); ?>
        </div>
        <div class="col-sm-3">
            
         
            <?= $this->Form->input('query', 
                      [
                          'type' => 'text',
                          'class' => 'form-control',
                          'placeholder' => 'Search',
                          'label' => false
                          ]); 
                ?>
            </div>
         <div class="col-sm-1">   
            <?= $this->Form->button('Search',[
                   'class'=> 'btn btn-custom'
               ]); ?> 
            
            <?= $this->Form->end() ?>
        </div>
    </div>    

<div class="row">  
    <div class="col-sm-12 ">  
        <div class="table-responsive"> 
            
            <br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th><?= __('title') ?></th>
                        <th><?= __('warranty') ?></th>
                        <th><?= __('purchased') ?></th>      
                        <th><?= __('under warranty') ?></th>
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
                        <td><?php
                        $pur_date = date('d-m-Y ', strtotime($receipt->purchased));
                        echo $pur_date;
                        ?></td>
                        <td>
                            <?php
                            $last_warr_date = date('Y-m-d', strtotime("+".$receipt->warranty." months", strtotime($pur_date)));
                            if($last_warr_date >= date("Y-m-d")){
                                echo '<span class="glyphicon glyphicon-play"></span>';
                            }
                            else{
                                echo '<span class="glyphicon glyphicon-stop"></span>';
                            }
                            ?>
                        </td>
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
            
            
            
