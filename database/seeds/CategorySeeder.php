<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lista_categoria = ["Impressoras 3D", "Plotadoras", "Máquinas Têxtil", "Máquinas Cerâmica"];
        $lista_desc      = ["Impressoras 3D", "Plotadoras de uso geral", "Máquinas de uso industrial", "Máquinas de uso doméstico"];
        $qtd = count($lista_categoria);

        for($i=0; $i < $qtd; $i++){

            Category::create([
                'name' => $lista_categoria[$i],
                'description' =>  $lista_desc[$i]
            ]);

        }
    }
}
