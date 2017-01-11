<?php

/**
 * @project pip-rest.
 * @since 8/23/2016 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Service;


use App\Repository\Impl\Benefit\BenefitProvider\BenefitProviderRepository;
use App\Repository\Impl\Benefit\BenefitProvider\BenefitProviderStRepository;
use App\Repository\Impl\Benefit\BenefitProvider\EloquentRepositoryBenefitProvider;
use App\Repository\Impl\Benefit\BenefitProvider\EloquentRepositoryBenefitProviderSt;
use App\Repository\Impl\Benefit\BenefitRepository;
use App\Repository\Impl\Benefit\BenefitType\BenefitTypeRepository;
use App\Repository\Impl\Benefit\BenefitType\EloquentRepositoryBenefitType;
use App\Repository\Impl\Benefit\CancelBenefit\CancelBenefitRepository;
use App\Repository\Impl\Benefit\CancelBenefit\EloquentRepositoryCancelBenefit;
use App\Repository\Impl\Benefit\EloquentRepositoryBenefit;
use App\Repository\Impl\City\EloquentRepositoryCity;
use App\Repository\Impl\City\CityRepository;
use App\Repository\Impl\District\DistrictRepository;
use App\Repository\Impl\District\EloquentRepositoryDistrict;
use App\Repository\Impl\Education\EducationRepository;
use App\Repository\Impl\Education\EloquentRepositoryEducation;
use App\Repository\Impl\Job\EloquentRepositoryJob;
use App\Repository\Impl\Job\JobRepository;
use App\Repository\Impl\Kecamatan\EloquentRepositoryKecamatan;
use App\Repository\Impl\Kecamatan\KecamatanRepository;

use App\Repository\Impl\MenuGenerator\EloquentRepositoryMenuGenerator;
use App\Repository\Impl\MenuGenerator\MenuGeneratorRepository;
use App\Repository\Impl\ProviderDevice\EloquentRepositoryProviderDevice;
use App\Repository\Impl\ProviderDevice\EloquentRepositoryProviderDeviceSt;
use App\Repository\Impl\ProviderDevice\ProviderDeviceRepository;
use App\Repository\Impl\ProviderDevice\ProviderDeviceStRepository;
use App\Repository\Impl\Province\EloquentRepositoryProvince;
use App\Repository\Impl\Province\ProvinceRepository;

use App\Repository\Impl\SecurityBranch\EloquentRepositorySecurityBranch;
use App\Repository\Impl\SecurityBranch\SecurityBranchRepository;
use App\Repository\Impl\SecurityFunction\EloquentRepositorySecurityFunction;
use App\Repository\Impl\SecurityFunction\SecurityFunctionRepository;
use App\Repository\Impl\SecurityFunctionAssignment\EloquentRepositorySecurityFunctionAssignment;
use App\Repository\Impl\SecurityFunctionAssignment\SecurityFunctionAssignmentRepository;
use App\Repository\Impl\SecurityGroup\EloquentRepositorySecurityGroup;
use App\Repository\Impl\SecurityGroup\EloquentRepositorySecurityUserProfile;
use App\Repository\Impl\SecurityGroup\SecurityGroupRepository;
use App\Repository\Impl\SecurityGroup\SecurityUserProfileRepository;
use App\Repository\Impl\SecurityUser\EloquentRepositoryUser;
use App\Repository\Impl\SecurityUser\UserRepository;

use App\Repository\Impl\Village\EloquentRepositoryVillage;
use App\Repository\Impl\Village\VillageRepository;
use Illuminate\Support\ServiceProvider;

class PIPRepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        /*MDA*/
        $this->app->bind(KecamatanRepository::class, EloquentRepositoryKecamatan::class);
        $this->app->bind(ProvinceRepository::class, EloquentRepositoryProvince::class);
        $this->app->bind(CityRepository::class, EloquentRepositoryCity::class);
        $this->app->bind(DistrictRepository::class, EloquentRepositoryDistrict::class);
        $this->app->bind(VillageRepository::class, EloquentRepositoryVillage::class);
        $this->app->bind(JobRepository::class, EloquentRepositoryJob::class);
        $this->app->bind(EducationRepository::class, EloquentRepositoryEducation::class);
        $this->app->bind(BenefitTypeRepository::class, EloquentRepositoryBenefitType::class);
		$this->app->bind(BenefitRepository::class, EloquentRepositoryBenefit::class);
		$this->app->bind(ProvinceRepository::class, EloquentRepositoryProvince::class);

        /*SECURITY*/
        $this->app->bind(UserRepository::class, EloquentRepositoryUser::class);
        
		$this->app->bind(SecurityFunctionRepository::class, EloquentRepositorySecurityFunction::class);
        $this->app->bind(SecurityGroupRepository::class, EloquentRepositorySecurityGroup::class);
        $this->app->bind(SecurityFunctionAssignmentRepository::class, EloquentRepositorySecurityFunctionAssignment::class);
        $this->app->bind(SecurityBranchRepository::class, EloquentRepositorySecurityBranch::class);
        $this->app->bind(SecurityUserProfileRepository::class, EloquentRepositorySecurityUserProfile::class);
        $this->app->bind(MenuGeneratorRepository::class, EloquentRepositoryMenuGenerator::class);

        /*TRANSACTION*/
        $this->app->bind(BenefitProviderRepository::class, EloquentRepositoryBenefitProvider::class);
        $this->app->bind(BenefitProviderStRepository::class, EloquentRepositoryBenefitProviderSt::class);
        $this->app->bind(ProviderDeviceRepository::class, EloquentRepositoryProviderDevice::class);
        $this->app->bind(ProviderDeviceStRepository::class, EloquentRepositoryProviderDeviceSt::class);
        $this->app->bind(CancelBenefitRepository::class, EloquentRepositoryCancelBenefit::class);

    }
}