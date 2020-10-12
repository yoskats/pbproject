<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddContacts extends Migration
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
                                'type'           => 'VARCHAR',
                                'constraint'     => 100,
                        ],
                        'email' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 100,
                        ],
                        'bday'          => [
                                'type'           => 'DATE',
                        ],
                        'created_at datetime default current_timestamp',
                        'updated_at datetime default current_timestamp on update current_timestamp',
                        'deleted_at datetime default current_timestamp on delete current_timestamp',
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('contacts');
        }

        public function down()
        {
                $this->forge->dropTable('contacts');
        }
}
