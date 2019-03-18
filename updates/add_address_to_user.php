<?php namespace Zombiecorp\Superuser\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddAddressToUser extends Migration
{
    public function up()
    {
        if (Schema::hasColumns('users', [
            'cep', 'tipo_logradouro', 'logradouro',
            'numero', 'complemento', 'bairro', 'cidade', 'estado'
        ])) {
            return;
        }

        Schema::table('users', function($table)
        {
            $table->string('cep')->nullable()->index();
            $table->string('tipo_logradouro')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->dropColumn([
                    'cep',
                    'tipo_logradouro',
                    'logradouro',
                    'numero',
                    'complemento',
                    'bairro',
                    'cidade',
                    'estado',
                            'state_id', 'country_id'
                ]);
            });
        }
    }
}
