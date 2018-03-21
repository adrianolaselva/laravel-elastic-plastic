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
            'acquire' => 'CIELO',
            'brand' => 'VISA',
            'operation' => 'Venda débito',
            'value' => 198.12
        ]);

        $result = Transaction::all();
        return response()->json($result);
    }

    public function buscar()
    {
        $result = Transaction::search()->queryString('acquire:*')->get();

        return response()->json($result->hits()->all());
    }

}
