<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class NavigationTable extends Table {

    public function initialize(array $config) {
        $this->table('sm_access_rights');
        $this->addBehavior('Timestamp');
        
        $this->belongsTo('Parent', [
            'className' => 'Navigation',
            'foreignKey' => 'parent_option',
            'propertyName' => 'Parent',
        ]);
    }

}
