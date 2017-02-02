<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 3:12
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelParticipant;
use App\Repository\Impl\Participant\ParticipantRepository;

class ParticipantRestController extends ARestController
{
    /**
     * ParticipantRestController constructor.
     */
    public function __construct(ParticipantRepository $participantRepository)
    {
        $this->repository = $participantRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelParticipant();
    }
}