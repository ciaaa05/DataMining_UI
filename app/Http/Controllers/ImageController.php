<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function index(){
        $data = [
            [
                "slug" => 'years-employed',
                "title" => "YEARS_EMPLOYED",
                "desc" => 'lorem dulu'
            ],
            [
                "slug" => 'age',
                "title" => "AGE",
                "desc" => 'lorem dulu'
            ],
            [
                "slug" => 'education-type',
                "title" => "NAME_EDUCATION_TYPE",
                "desc" => 'lorem dulu'
            ],
            [
                "slug" => 'gender',
                "title" => "CODE_GENDER",
                "desc" => 'lorem dulu'
            ],
            [
                "slug" => 'amount-credit',
                "title" => "AMOUNT_CREDIT",
                "desc" => 'lorem dulu'
            ],
            [
                "slug" => 'contract-type',
                "title" => "NAME_CONTRACT_TYPE",
                "desc" => 'lorem dulu'
            ],
            [
                "slug" => 'organization-type',
                "title" => "ORGANIZATION_TYPE",
                "desc" => 'lorem dulu'
            ],
            [
                "slug" => 'occupation-type',
                "title" => "OCCUPATION_TYPE",
                "desc" => 'lorem dulu'
            ],
            [
                "slug" => 'gender-vs-amount-credit',
                "title" => "CODE_GENDER VS AMOUNT_CREDIT",
                "desc" => 'lorem dulu'
            ],
            [
                "slug" => 'contract-type-vs-gender',
                "title" => "NAME_CONTRACT_TYPE VS CODE_GENDER",
                "desc" => 'lorem dulu'
            ]
        ];

        return view('visualization', compact('data'));
    }


}
