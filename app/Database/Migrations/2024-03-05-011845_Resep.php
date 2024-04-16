<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Resep extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=> 'INT',
                'constraint'=> 11,
                'auto_increment'=> true,
                'unsigned'=> true,
            ],
            'title'=>[
                'type'=> 'VARCHAR',
                'constraint'=> 255,
            ],
            'description'=>[
                'type'=> 'TEXT',
            ],
            'bahan'=>[
                'type'=> 'TEXT',
            ],
            'cara'=>[
                'type'=> 'TEXT',
            ],
            'image_path'=>[
                'type'=> 'VARCHAR',
                'constraint'=>255
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('recipes');
    }

    public function down()
    {
        $this->forge->dropTable('recipes');
    }
}