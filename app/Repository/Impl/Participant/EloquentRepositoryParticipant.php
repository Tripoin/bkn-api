<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 3:10
 */

namespace App\Repository\Impl\Participant;


use App\Models\ModelParticipant;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryParticipant extends ABaseRepository implements ParticipantRepository
{
    /**
     * EloquentRepositoryParticipant constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelParticipant();
    }
}