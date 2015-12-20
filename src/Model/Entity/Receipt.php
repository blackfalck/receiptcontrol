<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Receipt Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $title
 * @property string $description
 * @property string $filename
 * @property int $warranty
 * @property \Cake\I18n\Time $purchased
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Receipt extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
