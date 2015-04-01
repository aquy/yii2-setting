<?php

use yii\db\Schema;
use yii\db\Migration;

class m150401_093913_create_setting_table extends Migration
{

    public function up()
    {
	    $tableOptions = null;
	    if ($this->db->driverName === 'mysql') {
		    $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
	    }
	    $this->createTable('{{%setting}}', [
		    'id'                => Schema::TYPE_PK,
		    'key'               => Schema::TYPE_STRING . ' COMMENT "ключь настройки"',
		    'value'             => Schema::TYPE_TEXT . ' COMMENT "значение настройки"',
	    ], $tableOptions);
	    echo "таблица setting успешно создана.\n";
    }

    public function down()
    {
	    $this->dropTable('{{%setting}}');
        echo "таблица setting успешно удалена.\n";
    }

}
