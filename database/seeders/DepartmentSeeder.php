<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        Department::updateOrCreate(
            ['code' => 'TI'],
            [
                'name' => 'Tecnologia da Informação',
            ]
        );

        Department::updateOrCreate(
            ['code' => 'RH'],
            [
                'name' => 'Recursos Humanos',
            ]
        );

        Department::updateOrCreate(
            ['code' => 'FIN'],
            [
                'name' => 'Financeiro',
            ]
        );

        Department::updateOrCreate(
            ['code' => 'CONT'],
            [
                'name' => 'Contabilidade',
            ]
        );

        Department::updateOrCreate(
            ['code' => 'COM'],
            [
                'name' => 'Comercial',
            ]
        );

        Department::updateOrCreate(
            ['code' => 'MKT'],
            [
                'name' => 'Marketing',
            ]
        );

        Department::updateOrCreate(
            ['code' => 'LOG'],
            [
                'name' => 'Logística',
            ]
        );

        Department::updateOrCreate(
            ['code' => 'ADM'],
            [
                'name' => 'Administrativo',
            ]
        );

        Department::updateOrCreate(
            ['code' => 'SAC'],
            [
                'name' => 'Atendimento ao Cliente',
            ]
        );

        Department::updateOrCreate(
            ['code' => 'JUR'],
            [
                'name' => 'Jurídico',
            ]
        );
    }
}
