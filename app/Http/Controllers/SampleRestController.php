<?php

/**
 * @project pip-rest.
 * @since 8/24/2016 10:57 AM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;

use App\Dto\Response\GenericResponseDTO;

class SampleRestController extends Controller
{

    public function sampleResponse(){
        $genericResponseDTO = new GenericResponseDTO();
        $genericResponseDTO->statusCode = "200";
        return response()->json($genericResponseDTO);
    }

}