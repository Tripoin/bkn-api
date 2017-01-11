<?php

/**
 * @project pip-api.
 * @since 9/7/2016 7:03 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Repository\Impl\MenuGenerator\MenuGeneratorRepository;

class MenuGeneratorRestController extends Controller
{


    public function __construct(MenuGeneratorRepository $p_MenuGeneratorRepository)
    {
        $this->repository = $p_MenuGeneratorRepository;
    }

    public function generateMenu()
    {
        return response()->json($this->repository->generateMenu(), 200);
    }
}