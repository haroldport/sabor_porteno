<?php

use Illuminate\Database\Seeder;

class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('establishments')->insert(
                ['name' => 'Sánduches El Primo',
                'email' => 'elprimo@gmail.com',
                'address' => 'Mendiburu #113 Y Rocafuerte Esquina',
                'description' => 'Los mejores sánduches de Chancho del Puerto Principal con excelente atención personalizada, A/C, WIFI, segundo piso con amplio espacio.',
                'type' => 'Comida Rápida',
                'phone' => '+(593) (4) 042301268',
                'lat' => -2.1877755,
                'lon' => -79.8818939,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'Corozo El Verdadero',
                'email' => 'corozo@gmail.com',
                'address' => 'Pedro Carbo # 103 - 105 Entre Roca Y Luis Urdaneta',
                'description' => 'En la década de los 70, Daniel Corozo llegó a Guayaquil desde su natal Esmeraldas y comenzó su aventura emprendedora con la venta de maní tostado en las calles de Guayaquil, negocio que duró hasta que se averió la tostadora y  tuvo que innovar. Fue cuando empezó a elaborar sus tradicionales bollos cuya receta mantiene hasta ahora en el local Corozo, el verdadero, ubicado en las calles Pedro Carbo y Roca.',
                'type' => 'Comida Variada',
                'phone' => '+(593) (4) 5000291',
                'lat' => -2.189516,
                'lon' => -79.880291,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'Dulcería La Palma',
                'email' => 'lapalma@gmail.com',
                'address' => 'Escobedo # 1308 y Vélez',
                'description' => 'La cafetería más antigua y tradicional de Guayaquil, desayunos, amplia variedad de bocaditos de sal y dulce, pasteles de carne, pollo, chorizo, acelga, borrachitos, dulce de higos,helados, biscotelas, biscochuelos, panes, briollos, cachitos.',
                'type' => 'Panadería/Repostería',
                'phone' => '+(593) (04) 2328058',
                'lat' => -2.1921626,
                'lon' => -79.8860157,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'El Manabita',
                'email' => 'elmanaba@gmail.com',
                'address' => 'Hurtado 401 y Av. del Ejercito',
                'description' => 'Marino Calderón sigue al frente de su negocio como hace 22 años, con mucha energía se lo ubica en cualquier puesto de trabajo de su hueca El Manabita; atiende en caja, limpia las mesas, pica frutas, endulza los jugos y batidos y se da un tiempo para dialogar con sus clientes.',
                'type' => 'Comida Rápida',
                'phone' => '+(593) (04) 2515859',
                'lat' => -2.1893148,
                'lon' => -79.8929707,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'Picantería El Pez Volador',
                'email' => 'pezvolador@gmail.com',
                'address' => 'Aguirre # 1800 entre Esmeraldas y José Mascote',
                'description' => 'Ven prueba nuestras especialidades el encebollado y bollo.',
                'type' => 'Comida Autóctona',
                'phone' => '+(593) 991635457',
                'lat' => -2.1910598,
                'lon' => -79.8954008,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'Picantería Aquí está Yulán',
                'email' => 'yulan@gmail.com',
                'address' => 'Hurtado # 208 y Antepara',
                'description' => 'El mejor caldo de manguera lo puedes encontrar en Yulán.',
                'type' => 'Comida Autóctona',
                'phone' => '+(593) (04) 2480600',
                'lat' => -2.1895701,
                'lon' => -79.892791,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'El palacio de los secos',
                'email' => 'palaciosecos@gmail.com',
                'address' => '9 de Octubre y José Mascote',
                'description' => 'La casa donde se ubica el restaurante es patrimonial y fue construida en 1929 por el arquitecto Francisco Macaferri, quien edificó el palacio municipal de Guayaquil. El seco de gallina de esta hueca se acompaña con arroz, maduro frito, salsa de ají y aguacate. El exquisito sabor se logra con la mezcla justa de especias, cebolla, pimiento, la chicha y otros ingredientes. Esta fue una de las 30 huecas que participó en la Feria Gastronómica Internacional Raíces.',
                'type' => 'Comida Autóctona',
                'phone' => '+(593) (04) 2361027',
                'lat' => -2.1882924,
                'lon' => -79.895017,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'El palacio de los bollos',
                'email' => 'palaciobollos@gmail.com',
                'address' => 'Letamendi # 106 y Eloy Alfaro',
                'description' => 'Ofrecemos comidas típicas como: El bollo, papa rellena, ensalada de frutas, jugos y gaseosas.',
                'type' => 'Comida Autóctona',
                'phone' => '+(593) (04) 2561181',
                'lat' => -2.2044639,
                'lon' => -79.8985325,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'La Guatita',
                'email' => 'guatita@gmail.com',
                'address' => 'Luque # 1039 y Pedro Moncayo',
                'description' => 'El negocio fue creado hace 65 años por un caballero oriundo de la provincia de Los Ríos, pero 15 años después doña Adela lo compró. Con el paso del tiempo, el establecimiento de La Guatita se amplió y actualmente tiene capacidad para recibir de forma simultánea a 70 personas. El local tiene un menú variado que incluye secos de chivo y de pollo, bandera, encebollados y desayunos.  Esta fue una de las 30 huecas que participó en la Feria Gastronómica Internacional Raíces.',
                'type' => 'Comida Autóctona',
                'phone' => '+(593) (04) 2480600',
                'lat' => -2.1914412,
                'lon' => -79.8911555,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'Super Morocho',
                'email' => 'supermorocho@gmail.com',
                'address' => 'Chimborazo # 3209 y Vacas Galindo',
                'description' => 'Súper Morocho es una marca registrada y reconocida en Guayaquil por su buen sabor. El negocio comenzó hace 22 años de las manos de doña Raquel Calderón y su hija Jeimmi Cueva. Al principio, la venta se realizaba en una carretilla, ubicada en las calles Pedro Moncayo y Luque, pero luego el negocio se trasladó a un local del sur de la ciudad porque algunos clientes se lo solicitaron. Tiempo después tuvo que ampliar sus locales al norte.',
                'type' => 'Comida Autóctona',
                'phone' => '+(593) (04) 5035765',
                'lat' => -2.2139166,
                'lon' => -79.8908282,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );
    }
}
