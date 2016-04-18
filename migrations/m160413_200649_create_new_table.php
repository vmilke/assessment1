<?php

use yii\db\Migration;

class m160413_200649_create_new_table extends Migration
{
    public function up()
    {
        $this->createTable('new_table', [
            'id' => $this->primaryKey()
        ]);
    }

    public function down()
    {
        $this->dropTable('new_table');
    }
}
