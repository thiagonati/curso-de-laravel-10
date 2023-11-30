<?php

namespace App\Adapters;

use App\Http\Resources\DefaultResource;
use App\Repositories\PaginationIntarface;

class ApiAdapter
{
    public static function toJson(
        PaginationIntarface $data
    ){
        return DefaultResource::collection($data->items())
        ->additional([
            'meta' => [
                'total' => $data->total(),
                'is_first_page' => $data->isFirstPage(),
                'is_last_page' => $data->isLastPage(),
                'current_page' => $data->currentPage(),
                'get_number_next_page' => $data->getNumberNextPage(),
                'get_number_previous_page' => $data->getNumberPreviousPage(),
            ]
        ]);
    }

    public static function toXml()
    {

    }

}
