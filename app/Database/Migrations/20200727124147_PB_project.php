<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUser extends Migration
{

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 100,
                        ],
                        'phone'          => [
                                'type'           => 'INT',
                                'constraint'     => 10,
                        ],
                        'email' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 100,
                        ],
                        'bday'          => [
                                'type'           => 'DATE',
                        ],
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('user');
        }

        public function down()
        {
                $this->forge->dropTable('user');
        }
}
