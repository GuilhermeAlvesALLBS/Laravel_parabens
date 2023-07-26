<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $user = [];

        if (($open = fopen(storage_path() . "/users.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $user[] = $data;
            }

            fclose($open);
        }

        echo "<pre>";
        print_r($user);
    }
}
