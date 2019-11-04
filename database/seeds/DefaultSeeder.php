<?php

use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new App\Category;
        $category1->name = 'SAARC student with out financial support.';
        $category1->remark = null;
        $category1->code_no = '1';
        $category1->save();

        $category2 = new App\Category;
        $category2->name = 'SAARC student with financial support.';
        $category2->remark = 'Please provide evidence such as a letter from the Head of the Department.';
        $category2->code_no = '2';
        $category2->save();

        $category3 = new App\Category;
        $category3->name = 'SAARC non-student (including teaching faculty pursuing PhD) or International student.';
        $category3->remark = null;
        $category3->code_no = '3';
        $category3->save();

        $category4 = new App\Category;
        $category4->name = 'International (Non-student).';
        $category4->remark = null;
        $category4->code_no = '4';
        $category4->save();
    }
}
