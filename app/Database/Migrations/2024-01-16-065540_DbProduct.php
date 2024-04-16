<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbProduct extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pegawai'    => [
                'type'      => 'INT',
                'unsigned'  => true,
                'constraint'=> '11',
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenis_kelamin' => [
                'type'      => 'VARCHAR',
                'constraint'=> '100',
            ],
            'no_telp'       => [
                'type'      => 'VARCHAR',
                'constraint'=> '100',
            ],
            'email'         => [
                'type'      => 'VARCHAR',
                'constraint'=> '100',
            ],
            'alamat'        => [
                'type'      => 'VARCHAR',
                'constraint'=> '100',
            ],
            'created_at'    => [
                'type'      => 'DATETIME',
                'null'      => true,
            ],
            'updated_at'    => [
                'type'      => 'DATETIME',
                'null'      => true,
            ]
            ]);
            $this->forge->addPrimaryKey('id_pegawai');
            $this->forge->createTable('pegawai');
        }

        public function down()
        {
            $this->forge->dropTable('pegawai');
        }
    }