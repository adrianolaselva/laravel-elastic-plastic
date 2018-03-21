<?php

namespace App\ODM;

use Illuminate\Database\Eloquent\Model;
use Sleimanx2\Plastic\Searchable;

class Transaction extends Model
{
    use Searchable;

    protected $table = 'transactions';

    public $documentType = 'transacao';

    public $documentIndex = 'pr-01';

    public $searchable = ['id', 'date', 'acquire', 'brand', 'operation', 'value'];

    public $fillable = ['id', 'date', 'acquire', 'brand', 'operation', 'value'];

}
