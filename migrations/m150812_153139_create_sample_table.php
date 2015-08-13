<?php

use yii\db\Schema;
use yii\db\Migration;

class m150812_153139_create_sample_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sample}}', [
            'id' => Schema::TYPE_PK,
            'thought' => Schema::TYPE_STRING.' NOT NULL DEFAULT ""',
            'goodness' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 0',
            'rank' => Schema::TYPE_INTEGER . ' NOT NULL',
            'censorship' => Schema::TYPE_STRING . ' NOT NULL',
            'occurred' => Schema::TYPE_DATE . ' NOT NULL',
        ], $tableOptions);
    }


    public function down()
    {
        $this->dropTable('{{%sample}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
