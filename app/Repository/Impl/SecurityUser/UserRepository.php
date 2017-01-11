<?php
/**
 * @project pip-api.
 * @since 9/1/2016 11:47 AM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\SecurityUser;

use App\Repository\IInquiryRepository;

interface UserRepository extends IInquiryRepository
{

    public function doLogin($p_UserCode);

    public function doLogout($p_UserCode);

    public function getUserLoggedIn();
}