<?php
use App\Product;
use Baum\Node;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        $data = array(
			[
				'name' 			=> 'Sistema Legend TurboHD 720P de 4 canales compatible con P2P, incluye 4 HRB900 (Bullet interior / exterior 900TVLs 3.6mm), transceptores, adaptadores de voltaje y fuente de poder profesional',
				'slug' 			=> 'sistema-legend-turbo-4canales-sturboxhrb4',
				'brand'			=> 'EPCOM',
				'sku'			=> 'STURBOXHRB4',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'quantity'		=> 100,
				'price' 		=> 275.00,
				'price_offer' 	=> 250.00,
				'price_dealer' 	=> 200.00,
				'badge'			=> 1,
                'image1'		=> 'http://ftp3.syscom.mx/usuarios/fotos/STURBOHRB4/STURBOHRB4.png',
                'image2'		=> 'http://ftp3.syscom.mx/usuarios/fotos/STURBOHRB4/STURBOHRB4.png',
                'image3'		=> 'http://ftp3.syscom.mx/usuarios/fotos/STURBOHRB4/STURBOHRB4.png',
                'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,

			],
			[
				'name' 			=> 'Sistema Legend TurboHD 720P de 4 canales compatible con P2P, incluye 4 HRB900 (Bullet interior / exterior 900TVLs 3.6mm), transceptores, adaptadores de voltaje y fuente de poder profesional',
				'slug' 			=> 'sistema-legend-turbo-4canales-sturboxhrb5',
				'brand'			=> 'EPCOM',
				'sku'			=> 'STURBOXHRB5',
				'description_short' 	=> 'Lorem ipsum dolor sit amet',
				'description_large' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'quantity'		=> 100.00,
				'price' 		=> 275.00,
				'price_offer' 	=> 250.00,
				'price_dealer' 	=> 200.00,
				'badge'			=> 1,
                'image1'		=> 'http://ftp3.syscom.mx/usuarios/fotos/STURBOHRB4/STURBOHRB4.png',
                'image2'		=> 'http://ftp3.syscom.mx/usuarios/fotos/STURBOHRB4/STURBOHRB4.png',
                'image3'		=> 'http://ftp3.syscom.mx/usuarios/fotos/STURBOHRB4/STURBOHRB4.png',
                'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,

			],
		);

		Product::insert($data);
    }
}

