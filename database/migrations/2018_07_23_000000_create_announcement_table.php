<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementTable extends Migration{
    public function up(){
        Schema::create('announcements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('标题');
            $table->string('content')->comment('公告内容');
            $table->string('summary')->comment('简介');
            $table->tinyInteger('status')->comment('状态, 是否显示，1为显示，0为不显示');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('announcements');
    }
}

/**
 * Created by PhpStorm.
 * User: 20170
 * Date: 2018/7/23
 * Time: 21:23
 */