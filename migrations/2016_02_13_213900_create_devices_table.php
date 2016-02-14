<?php
/**
 * @Author: Davisson Paulino
 * @Email: dhpaulino@gamil.com
 * @Date:   2016-02-13 21:41:47
 * @Last Modified by:   Davisson Paulino
 * @Last Modified time: 2016-02-13 22:28:04
 */

namespace Petcomputacaoufpr\Push\Migration;

use Flarum\Database\AbstractMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateDevicesTable extends AbstractMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('devices', function (Blueprint $table) {
        	$table->increments('id');
        	 $table->longText('token');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
            		->references('id')
            		->on('users')
            		->onDelete('cascade')
            		->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->drop('devices');
    }
}