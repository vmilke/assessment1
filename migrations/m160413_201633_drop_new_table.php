<?php

use yii\db\Migration;

class m160413_201633_drop_new_table extends Migration
{
    public function up()
    {
        $this->dropTable('new_table');
    }

    public function down()
    {
        $this->createTable('new_table', [
            'id' => $this->primaryKey()
        ]);
    }
}
