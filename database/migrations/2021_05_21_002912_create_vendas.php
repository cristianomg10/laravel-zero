<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

/*Migration de vendas: Deve-se criar uma tabela de Vendas, onde a tabela deve se chamar "vendas", contendo id, data, valor_total e id_cliente, que deve ser do tipo unsigned big integer e referenciar id na tabela clientes*/

    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('data')->nullable();
            $table->decimal('valor_total', 15, 2)->nullable();
            $table->foreignId('id_cliente')->constrained('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
