<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'News',
            'slug' => 'Latest HUNGARIAN CIVIL LIBERTIES UNION News',
        ]);
        DB::table('categories')->insert([
            'name' => 'Drug Policy',
            'slug' => 'A drug policy is the policy, usually of a government, regarding the control and regulation of psychoactive substances (commonly referred to as drugs), particularly those that are addictive or cause physical and mental dependence.',
        ]);
        DB::table('categories')->insert([
            'name' => 'Disability rights',
            'slug' => 'The disability rights movement is a global social movement that seeks to secure equal opportunities and equal rights for all people with disabilities.',
        ]);
        DB::table('categories')->insert([
            'name' => 'Patients rights',
            'slug' => 'A patients bill of rights is a list of guarantees for those receiving medical care. It may take the form of a law or a non-binding declaration',
        ]);
        DB::table('categories')->insert([
            'name' => 'Right to Self-determination',
            'slug' => 'Essentially, the right to self-determination is the right of a people to determine its own destiny',
        ]);
        DB::table('categories')->insert([
            'name' => 'HIV/AIDS',
            'slug' => 'Human Immunodeficiency/Acquired Immune Deficiency Syndrome',
        ]);
        DB::table('categories')->insert([
            'name' => 'Data Protection',
            'slug' => 'Data protection is a set of strategies and processes you can use to secure the privacy, availability, and integrity of your data.',
        ]);

    }
}
