<?php
    #database/seeds/QuoteTableSeeder.php CREATED FILE

    use App\Models\Quote;
    use Illuminate\Database\Seeder;

    class QuoteTableSeeder extends Seeder{
        public function run(){
            Quote::create([
                'text' => 'Success is going from failure to failure without losing your enthusiasm',
                'author' => 'Winston Churchill',
                'background' => '1.png'
            ]);
            Quote::create([
                'text' => 'Something exciting text',
                'author' => 'LaciGabi',
                'background' => '2.png'
            ]);
            quote::create([
                'text' => '3rd text',
                'author' => 'author_name',
                'background' => '3.jpg'
            ]);
        }
    }
?>