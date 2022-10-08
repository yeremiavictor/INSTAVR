<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
    public function up()
    {
        // create
        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'constraint'        => 12,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'post'  => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'foto'  => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'comment' =>[
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'like' =>[
                'type'              => 'INT',
                'constraint'        => 12
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        //key
        $this->forge->addkey('id', TRUE);

        //table
        $this->forge->createTable('post', TRUE);


    }

    public function down()
    {
        // drop
        $this->forge->dropTable('post');
    }
}
