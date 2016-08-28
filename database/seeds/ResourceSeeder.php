<?php

use Illuminate\Database\Seeder;

use App\Resource;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lista_recurso = ["Impressora Maxxer", "Plotter Lenni", "Textcolorful 1000", "BarrinhosAlados"];
        $lista_techDesc = ["Impressoras 3D excelente", "Plotadoras de uso geral excelente", "Máquinas de uso industrial excelente", "Máquinas de uso doméstico excelente"];
        $lista_infDesc = ["Impressoras 3D e só isso", "Plotadoras de uso geral excelente e só isso", "Máquinas de uso industrial excelente e só isso", "Máquinas de uso doméstico excelente e só isso"];
        $lista_imgLoc = ["{[json1]}", "{[json2]}", "{[json3]}","{[json4]}"];

        $qtd_recurso = count($lista_recurso);
        $qtd_techDesc = count($lista_techDesc);
        $qtd_infDesc = count($lista_infDesc);
        $qtd_imgLoc = count($lista_imgLoc);

        /*for($i=0; $i < $qtd; $i++){

            Category::create([
                'name' => $lista_categoria[$i],
                'description' => $lista_desc[$i],
                'uriResources' =>
            ]);
        }*/
    }
}
