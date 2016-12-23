<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class NationsTable extends Table {

    public function initialize(array $config) {
        $this->table('sm_list_of_countries');
        $this->addBehavior('Timestamp');
    }

}
