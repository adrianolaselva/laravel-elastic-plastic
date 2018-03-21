<?php

use Sleimanx2\Plastic\Map\Blueprint;
use Sleimanx2\Plastic\Mappings\Mapping;

class AppODMTransaction extends Mapping
{
    /**
     * Full name of the model that should be mapped
     *
     * @var string
     */
    protected $model = App\ODM\Transaction::class;

    /**
     * Run the mapping.
     *
     * @return void
     */
    public function map()
    {
        Map::create($this->getModelType(),function(Blueprint $map){
//            $map->string('acquire')->store('true')->index('analyzed');
//            $map->string('brand')->store('true')->index('analyzed');
//            $map->string('operation')->store('true')->index('analyzed');
//            $map->string('value')->store('true')->index('analyzed');
//
//            // instead of the fluent syntax we can use the second method argument to fill the attributes
            $map->completion('suggestion', ['analyzer' => 'simple', 'search_analyzer' => 'simple']);
        },$this->getModelIndex());
    }
}
