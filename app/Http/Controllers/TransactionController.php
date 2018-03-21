<?php

namespace App\Http\Controllers;

use App\ODM\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function index()
    {
        Transaction::create([
            'date' => Carbon::now(),
            'acquire' => 'Cielo',
            'brand' => 'MasterCard',
            'operation' => 'Venda crédito',
            'value' => 98.12
        ]);

        $result = Transaction::all();
        var_dump($result->toArray());
    }

}
