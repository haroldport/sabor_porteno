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
                'description' => '<p>El primo es el nombre del local y el pseudónimo del mismo propietario, va más de 20 años en el negocio, vendiendo sánduches de pernil, sánduches bañados en una salsa especial, con cebolla encurtida todo en medio de un pan crocante.</p> <p>Uno de los puntos característicos de este lugar, es sin lugar a dudas su propietario, el cual con su carisma te hará disfrutar de buenos momentos mientras degustas de su producto elaborado con el mejor cerdo, el cual, tal como menciona su propietario en un tono jocoso “son alimentados con yogurt y pan de yuca, bellota y cereales, además de realizar bailo terapia y trotar cuatro horas diarias, lo cual los mantiene con alta energía y potencia”.</p> <p>El primo es un personaje de esos que enriquecen esta ciudad, siempre alegre, trabajador y predispuesto a ofrecer a su clientela el mejor producto y el mejor servicio. Para comprobarlo debe acercarse al quiosco ubicado en las calles Mendiburo y Rocafuerte donde su propietario lo recibirá con un delicioso sánduche acompañado de una gran sonrisa.</p>',
                'type' => 'Comida Rápida',
                'phone' => '+(593) (4) 042301268',
                'lat' =>  -2.187781,
                'lon' => -79.87970519999999,
                'images' => '/photos/primo1.jpg;/photos/primo2.jpg;/photos/primo3.jpg;/photos/primo4.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'Corozo El Verdadero',
                'email' => 'corozo@gmail.com',
                'address' => 'Pedro Carbo # 103 - 105 Entre Roca Y Luis Urdaneta',
                'description' => '<p>El esmeraldeño Daniel Corozo ha ido ganando popularidad entre los habitantes de la ciudad, sazonando a sus comidas con un ingrediente secreto que se nos negó a contar, va en la ciudad un total de 40 años, y el negocio va por la segunda generación, tradición y gastronomía netamente esmeraldeña distinguida por el uso de elementos netamente naturales, palabras del propietario.</p> <p>Los mariscos son los ingredientes principales de sus platos, entre los cuales podemos encontrar el tan delicioso bollo, encebollado, así como el famoso encocado que puede ser de pescado, camarón, jaiba, cangrejo azul, concha, “pata de burro”, entre otros.</p> <p>Su propietario es un personaje con una gran historia de superación que se ha radicado en la ciudad permitiendo a los comensales de la misma disfrutar de una sazón exquisita de la cual usted también debe ser parte visitándolo en su establecimiento ubicado en las calles Pedro Carbo  # 103 y Rocafuerte.</p>',
                'type' => 'Comida Típica',
                'phone' => '+(593) (4) 5000291',
                'lat' => -2.189516,
                'lon' => -79.880291,
                'images' => '/photos/corozo1.jpg;/photos/corozo2.jpg;/photos/corozo3.jpg;/photos/corozo4.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'Dulcería La Palma',
                'email' => 'lapalma@gmail.com',
                'address' => 'Escobedo # 1308 y Vélez',
                'description' => '<p>Sinónimo de Tradición, con decir que esta dulcería tiene ya más de 100 años de existencia perteneciendo siempre a la familia Costa. Se debe tener una expectativa alta al visitar el espacio. Muchos lugareños suelen ir para degustar de un desayuno inolvidable o para pasar un buen momento relajándose, degustando la variedad de dulces que aquí se ofrecen.</p> <p>La peculiaridad de este sitio es la de poder elegir tú jugo natural, tu café, o la bebida de tu preferencia, o crear tu plato de bocaditos, entre sal y dulce, entre pasteles y empanadillas, mientras recreas parte de la historia del establecimiento y la ciudad contados a través de las fotografías, tan antiguas como el local, que adornan sus paredes.</p> <p>Tal como asegura una de sus propietarias “si el país está en crisis, los primeros en entrar en crisis deben ser los accionistas, pero sus clientes y trabajadores son la prioridad. Esta empresa siempre ha estado muy consiente de cuidar el presupuesto de sus clientes. Esa es una de las pautas por la cual la palma ha sobrevivido 107 años con la misma familia”.</p> <p>Son múltiples los personajes públicos que han llegado al negocio. El propietario se enorgullece de indicar que ha atendido a personalidades importantes como el expresidente Jaime Roldós Aguilera y su esposa Martha Bucaram, León Febres Cordero, Rafael Guerrero Valenzuela, entre otros.</p> <p>Ubicado en las calles Escobedo 1308 y Vélez este es sin duda un lugar que debes visitar cuando visitas Guayaquil.</p>',
                'type' => 'Bebidas/Piqueos',
                'phone' => '+(593) (04) 2328058',
                'lat' => -2.192168,
                'lon' => -79.883827,
                'images' => '/photos/palma1.jpg;/photos/palma2.jpg;/photos/palma3.jpg;/photos/palma4.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'El Manabita',
                'email' => 'elmanaba@gmail.com',
                'address' => 'Hurtado 401 y Av. del Ejercito',
                'description' => '<p>El propietario del local conocido como El Manabita, cuenta que sus inicios fueron vendiendo jugos en una carreta con su padre. En la actualidad deleita a la ciudadanía con platos que tienen las tres b, bueno, bonito, y barato. Decir que la comida es fresca y abundante es la cualidad perfecta, ofrece variedad de jugos y platos tradicionales, 25 años en trabajo constante han hecho de esta localidad uno de los más visitados de la ciudad.</p> <p>Entre los productos que ofrece se encuentran sus jugos 100% naturales hechos a bases de frutas como la guanábana, sandía, naranja, toronja, mandarina, ensalada de frutas, así también de platillos como tostadas, muchines, pasteles, corviches, bolón, y muchos más.</p> <p>Tal como menciona este simpático personaje “el éxito depende del dueño, estar pegado al trabajo siempre”. Su establecimiento más allá de la variedad de sus productos destaca por el servicio que ofrece, en la cual encontramos un gran número de colaboradores dispuestos a servirte de la mejor manera.</p> <p>Si deseas disfrutar de un delicioso plato o simplemente saciar la sed con un delicioso jugo natural, el lugar que estás buscando es sin duda el Manabita.</p>',
                'type' => 'Bebidas/Piqueos',
                'phone' => '+(593) (04) 2515859',
                'lat' => -2.1908746,
                'lon' => -79.89200779999999,
                'images' => '/photos/manabita1.jpg;/photos/manabita2.jpg;/photos/manabita3.jpg;/photos/manabita4.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'Picantería El Pez Volador',
                'email' => 'pezvolador@gmail.com',
                'address' => 'Aguirre # 1800 entre Esmeraldas y José Mascote',
                'description' => '<p>El mejor encebollado de Guayaquil, no hay mejor frase para describirlo, su sabor es algo único, es suave pero cargado de sabor al mismo tiempo, con buen pescado, con yucas lo suficiente suaves como para comerlas y lo suficiente duras como para que no parezca colada de tubérculo, todo a un precio muy accesible una hueca que deben visitarla sí o sí.</p> <p>Angélica Cujilán, es la propietaria de este establecimiento en el cual ofrece desde hace más de 30 años este plato tradicional de la ciudad. La preparación, calidad y sabor del mismo, han convertido a su establecimiento en uno de los más conocidos de la ciudad ganando varios reconocimientos como la Estrella Culinaria de Oro en la feria Raíces en el año 2014 realizado por el municipio de Guayaquil.</p> <p>Su propietaria se ha encargado de hablar con sus clientes, conocerlos para así poder cada día seguir mejorando su producto y su servicio, siendo esto la clave de su éxito, convirtiéndola  en un personaje inolvidable para quienes pueden disfrutar de su exquisita sazón.</p>',
                'type' => 'Comida Típica',
                'phone' => '+(593) 991635457',
                'lat' => -2.1910625,
                'lon' => -79.89430649999997,
                'images' => '/photos/pezvolador1.jpg;/photos/pezvolador2.jpg;/photos/pezvolador3.jpg;/photos/pezvolador4.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'LLulán',
                'email' => 'yulan@gmail.com',
                'address' => 'Calle Hurtado # 218 E/Machala y José de Antepara',
                'description' => '<p>Uno de los platos más destacados de la gastronomía ecuatoriana, pero sobretodo guayaquileña es el afamado “Caldo de salchicha” o “Caldo de manguera”, el cual aunque pueda resultar improbables para muchos, para otros es una exquisitez.</p> <p>La tripa del cerdo es su ingrediente principal, pero el éxito de su sabor radica en la sazón con la que se la condimente, de la cual podemos encontrar entre las mejores a LLULÁN, con muchos años de tradición se ha convertido en uno de los establecimientos más afamados para poder disfrutar de tan delicioso platillo.</p> <p>Aunque la preparación conlleva mucho tiempo y dedicación, los propietarios de este establecimiento trabajan con mucho ímpetu para ofrecer a sus comensales un producto de calidad, razón por la cual no debes dejar de visitarlo.</p>',
                'type' => 'Comida Típica',
                'phone' => '+(593) (04) 2480600',
                'lat' => -2.1895755,
                'lon' => -79.89060230000001,
                'images' => '/photos/llulan1.jpg;/photos/llulan2.jpg;/photos/llulan3.jpg;/photos/llulan4.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'El Palacio de los Secos',
                'email' => 'palaciosecos@gmail.com',
                'address' => '9 de Octubre y José Mascote',
                'description' => '<p>Uno de los establecimientos más reconocidos de la ciudad de Guayaquil es sin duda El Palacio de los secos, un restaurante ubicado en las calles José Mascote y 9 de Octubre, donde el plato típico es su seco de gallina que a su vez se acompaña con arroz, maduro frito, salsa de ají y aguacate. Este exquisito plato es el principal en el menú, pero además ofrecen otros secos tradicionales como el de chivo, cerdo y pato, además de otros platos como caldo de bolas, caldo de pata, caldo de gallina criolla, bandera, entre otros.</p> <p>Creado por la guayaquileña Sandra Assanza Ordóñez ya desde el 2010, ha hecho de este establecimiento algo más que un lugar donde comer rico. Este edificio que data del siglo XIX, que fue declarada Patrimonio Cultural y en la que estaba un antiguo atracadero de canoas cuenta una historia propia que va de la mano con la evolución de Guayaquil.</p> <p>Sus propietarios se han encargado de ofrecer a sus clientes más allá de una carta de exquisitos platos. El servicio es algo característico de este local, ofreciendo un excelente ambiente, cómodo, y en el cual más allá del exquisito olor de sus platos, se puede respirar arte, muestra de ello es aquel pianista que toca en vivo, mientras se atiende a los clientes. Sin duda un lugar que no puede faltar en tu itinerario dentro de la ciudad.</p>',
                'type' => 'Comida Típica',
                'phone' => '+(593) (04) 2361027',
                'lat' => -2.1882978,
                'lon' => -79.89282830000002,
                'images' => '/photos/palaciosecos1.jpg;/photos/palaciosecos2.jpg;/photos/palaciosecos3.jpg;/photos/palaciosecos4.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'El Palacio del Bollo',
                'email' => 'palaciobollos@gmail.com',
                'address' => 'Letamendi # 106 y Eloy Alfaro',
                'description' => '<p>Ya son 48 años de antigüedad que tiene este reconocido lugar. Tal como menciona su propietario Isaías Morán, esta es la segunda generación de la familia a cargo del local, caracterizado por tradición, sabor, frescura,  es otro de los restaurantes que posee la calificación de las tres b, bueno, bonito y barato.</p> <p>El producto que caracteriza el establecimiento y que a su vez le da parte de su nombre es sin duda el bollo, el cual tal como menciona el propietario “es su producto estrella”.</p> <p>¿Cuál es el secreto para mantenerse 48 años en el mercado?, sin duda es el cuidado que se le da al producto, cuidando la calidad del mismo y el servicio que le acompaña. Se ha vuelto una especie de marca registrada, pero sobretodo en un producto popular que han disfrutado una clientela muy variada como periodistas políticos, etc.</p> <p>Si quieres disfrutar de un plato típico lleno de tradición y sabor debes acercarte a El Palacio del Bollo, donde si gustas puedes acompañarlo con una exquisita papa rellena, algo que sin duda saciará el hambre en cuestión de segundos.</p>',
                'type' => 'Comida Típica',
                'phone' => '+(593) (04) 2561181',
                'lat' => -2.207493,
                'lon' => -79.884917,
                'images' => '/photos/palaciobollo1.jpg;/photos/palaciobollo2.jpg;/photos/palaciobollo3.jpg;/photos/palaciobollo4.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'La Guatita',
                'email' => 'guatita@gmail.com',
                'address' => 'Luque # 1039 y Pedro Moncayo',
                'description' => '<p>Desde 1964, este establecimiento se destaca por ofrecer a la ciudad una de las mejores versiones de uno de los platos más reconocidos en el Ecuador como lo es la guatita. A pesar que actualmente ofrecen otra variedad de platos, este particular, que a la vez le da el nombre al establecimiento, se ha convertido en el plato tradicional del local. El éxito según uno de los propietarios, el señor Fernando Campos, radica en que “es una guatita diferente, no es la misma que usted come en su casa. Es una fórmula especial”.</p> <p>Con el transcurso de los años el gusto de los comensales ha ido evolucionando por lo cual la forma de preparar este plato se ha ido adaptando permitiendo así satisfacer a los antiguos comensales así como los nuevos visitantes.</p> <p>Desde el momento que fue adquirido por el señor Francisco Campos Pazmiño y su esposa Adela Mera García, este establecimiento se ha convertido en un restaurante familiar. Muchos visitantes de otra provincia les han solicitado poner una sucursal en otras ciudades, pero tal como menciona su propietario “en este negocio la guatita es exclusiva. El plato es tan celoso que no puede darse la fórmula a cualquiera”, por lo cual la mejor forma de disfrutar la mejor guatita de la ciudad es acercándose a aquellos que lo han convertido en una fórmula única.</p> <p>Entre los varios personajes públicos que se han acercado a disfrutar de este delicioso plato, destacan el expresidente Abdalá Bucaram, quien ya desde muy joven visitaba el lugar quedando encantado con el mismo, llevando durante su mando a gran parte de su equipo de gobierno y seguridad a disfrutar junto con él la guatita que tanto ama.</p>',
                'type' => 'Comida Típica',
                'phone' => '+(593) (04) 2480600',
                'lat' => -2.1912354,
                'lon' => -79.88902889999997,
                'images' => '/photos/guatita1.jpg;/photos/guatita2.jpg;/photos/guatita3.jpg;/photos/guatita4.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );

        DB::table('establishments')->insert(
            ['name' => 'Super Morocho',
                'email' => 'supermorocho@gmail.com',
                'address' => 'Chimborazo # 3209 y Vacas Galindo',
                'description' => '<p>Con muchos años de tradición, este negocio, se ha vuelto una marca registrada y reconocida por los habitantes de la ciudad y sus visitantes. El éxito habla por sí solo ya que actualmente es una franquicia emergente cuya matriz ubicada en Chimborazo y Vacas Galindo con varias sucursales ubicadas a lo largo y ancho de la ciudad.</p> <p>Ofrecen varios platos pero sin duda el más destacado es la bebida que le da el nombre al establecimiento acompañado de unos deliciosos panes de yuca o empanadas.</p> <p>El morocho famoso por su sabor tan concentrado es una de las mejores maneras de deleitarse con un brebaje ecuatoriano, y en este establecimiento podemos encontrar una de las mejores fórmulas que se hayan creado para esta bebida.</p>',
                'type' => 'Bebidas/Piqueos',
                'phone' => '+(593) (04) 5035765',
                'lat' => -2.213731,
                'lon' => -79.888778,
                'images' => '/photos/supermorocho1.jpg;/photos/supermorocho2.jpg;/photos/supermorocho3.jpg;/photos/supermorocho4.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]
        );
    }
}
