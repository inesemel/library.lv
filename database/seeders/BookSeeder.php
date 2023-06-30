<?php

namespace Database\Seeders;

use App\Models\Publisher;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zabc = Publisher::where('title', 'Zvaigzne ABC')->first();
        $zabc->books()->create(['title' => 'Vislielākais gardums pasaulē', 'pages' => 28, 'year' => 2018,
         'genre' => 'Bērnu literatūra', 'reprint' => false, 'cased' => false, 'description' => 'Apgāds Zvaigzne ABC ir aizsācis jaunu bērnu grāmatu sēriju. Tajā iekļautas mākslinieku pašu sarakstītas un ilustrētas grāmatas. Katru grāmatu mākslinieks vispirms ir ieraudzījis vizuāli un tikai tad pierakstījis klāt tekstu.
         Grāmatas ir ļoti atšķirīgas, un katrā no tām realizēts kāds aizraujošs stāsts. Tās ir gudras, labestīgas, varbūt reizēm šķietami nepareizas grāmatas, un tās lasīt būs interesanti gan bērniem, gan pieaugušajiem. Turklāt grāmatu daudzveidīgā tematika vecākiem dod iespēju sarunai ar bērnu – par ģimeni, draudzību, drosmi, prieku, atjautību un tieksmi uz pilnveidošanos.
         
         Varbūt atceries rakstnieces un tulkotājas Lilijas Berzinskas (Beļakovas) stāstus par neparasto, ļoti sirsnīgo meža radījumu Bolaci grāmatā "Nezināmais zvērs"? Tagad Bolacis atkal ir klāt autores pašas ilustrētajā pasakā "Vislielākais gardums pasaulē".
         Sirsnīgais stāsts, kurā Bolacis pēta, kas ir vislielākais gardums pasaulē, rāda ne tikai to, cik pasaule ir brīnumaini savdabīga, bet atklāj arī, kāda nozīme ir draugu kopīgi paveiktajam darbam.
         Tas ir stāsts par kopābūšanu un draudzību, kas dzīvi padara skaistu.', 'image_url' => 'https://www.zvaigzne.lv/images/books/158169/300x0_vislielakais_gardums.jpg']);
        $zabc->books()->create(['title' => 'Bille', 'pages' => 288, 'year' => 2023,
         'genre' => 'Romāns, autobiogrāfija', 'reprint' => false, 'cased' => true, 'description' => 'Vizma Belševica ir mana Vecāmāte, un atzīšos, ka bērnībā man “Bille” mazliet traucēja – bieži, kad izprašņāju Vecomāti par laiku, kad viņa bija maziņa, saņēmu neierasti stingru un strupu: “Lasi “Billi”.” Nu, kāpēc man jālasa, ja stāstnieks sēž pretī?
         Tagad, kad kāds laiciņš paskrējis, es esmu laimīga un pateicīga par šo grāmatu.', 'image_url' => 'https://www.zvaigzne.lv/images/books/203179/300x0_billevaks.jpg']);
        $zabc->books()->create(['title' => 'Zem zilās debesu bļodas', 'pages' => 64, 'year' => 2017,
         'genre' => 'Bērnu literatūra', 'reprint' => true, 'cased' => false, 'description' => '', 'image_url' => 'https://www.zvaigzne.lv/images/books/391/300x0_cover.jpg']);
        $zabc->books()->create(['title' => 'Billes skaistā jaunība', 'pages' => 256, 'year' => 2023,
         'genre' => 'Romāns, autobiogrāfija', 'reprint' => false, 'cased' => false, 'description' => '', 'image_url' => '']);
        $zabc->books()->create(['title' => 'Zirņa bērni', 'pages' => 32, 'year' => 2013,
         'genre' => 'Dzeja bērniem', 'reprint' => true, 'cased' => false, 'description' => '', 'image_url' => '']);
        $zabc->books()->create(['title' => 'Tik vienkārši', 'pages' => 680, 'year' => 2021,
         'genre' => 'Detektīvs', 'reprint' => false, 'cased' => true, 'description' => '', 'image_url' => '']);
        $zabc->books()->create(['title' => 'Slepkavība Austrumu ekspresī', 'pages' => 256, 'year' => 2022,
         'genre' => 'Detektīvs', 'reprint' => true, 'cased' => false, 'description' => '', 'image_url' => '']);
        $zabc->books()->create(['title' => 'Nāve uz Nīlas', 'pages' => 320, 'year' => 2022,
         'genre' => 'Detektīvs', 'reprint' => true, 'cased' => false, 'description' => '', 'image_url' => '']);
        $zabc->books()->create(['title' => 'Erkila Puaro Ziemassvētki', 'pages' => 270, 'year' => 2021,
         'genre' => 'Detektīvs', 'reprint' => true, 'cased' => false, 'description' => '', 'image_url' => '']);

        $lvmed = Publisher::where('title', 'Latvijas Mediji')->first();
        $lvmed->books()->create(['title' => 'Ronēns Mākonītis', 'pages' => 38, 'year' => 2023,
        'genre' => 'Bērnu literatūra', 'reprint' => false, 'cased' => false, 'description' => '', 'image_url' => '']);
        $lvmed->books()->create(['title' => 'Dīvainais Līgovakars', 'pages' => 358, 'year' => 2022,
        'genre' => 'Detektīvs', 'reprint' => false, 'cased' => false, 'description' => '', 'image_url' => '']);
        $lvmed->books()->create(['title' => 'Ziemas blūzs', 'pages' => 496, 'year' => 2021,
        'genre' => 'Detektīvs', 'reprint' => false, 'cased' => true, 'description' => '', 'image_url' => '']);
        $lvmed->books()->create(['title' => 'Lāsts', 'pages' => 334, 'year' => 2019,
        'genre' => 'Detektīvs', 'reprint' => false, 'cased' => true, 'description' => '', 'image_url' => '']);
        $lvmed->books()->create(['title' => 'Lāsts', 'pages' => 334, 'year' => 2019,
        'genre' => 'Detektīvs', 'reprint' => false, 'cased' => true, 'description' => '', 'image_url' => '']);
        $lvmed->books()->create(['title' => 'Melnā suņa kabinets', 'pages' => 228, 'year' => 2023,
        'genre' => 'Detektīvs', 'reprint' => false, 'cased' => true, 'description' => '', 'image_url' => '']);

        $dgram = Publisher::where('title', 'Dienas Grāmata')->first();
        $dgram->books()->create(['title' => 'Sešas pēdas', 'pages' => 352, 'year' => 2023,
        'genre' => 'Detektīvs', 'reprint' => false, 'cased' => true, 'description' => '', 'image_url' => '']);

        $lkomb = Publisher::where('title', 'Literatūras KOMBAINS')->first();
        $lkomb->books()->create(['title' => 'Vaska ezers', 'pages' => 84, 'year' => 2022,
        'genre' => 'Dzeja', 'reprint' => false, 'cased' => false, 'description' => '', 'image_url' => '']);

        $neput = Publisher::where('title', 'Neputns')->first();
        $neput->books()->create(['title' => 'Never', 'pages' => 104, 'year' => 2023,
        'genre' => 'Dzeja', 'reprint' => false, 'cased' => false, 'description' => '', 'image_url' => '']);
        $neput->books()->create(['title' => 'Mantojumi', 'pages' => 104, 'year' => 2021,
        'genre' => 'Dzeja', 'reprint' => false, 'cased' => false, 'description' => '', 'image_url' => '']);
        $neput->books()->create(['title' => 'Putna miegā', 'pages' => 80, 'year' => 2014,
        'genre' => 'Dzeja', 'reprint' => false, 'cased' => false, 'description' => '', 'image_url' => '']);
        $neput->books()->create(['title' => 'Kuģa žurnāls', 'pages' => 480, 'year' => 2016,
        'genre' => 'Dienasgrāmata', 'reprint' => false, 'cased' => true, 'description' => '', 'image_url' => '']);
        //
    }
}
