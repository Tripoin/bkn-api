<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return "RESTful API for BKN v1";
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::post('command=100001', 'AuthRestController@test');

/**
 * API V1
 */
Route::group(['prefix' => '000000/1/'], function ()
{

    Route::get('select/pagination/{limit}', 'KecamatanRestController@pagination');

    /**
     * Login
     */
    Route::post('command=100001', 'AuthRestController@login');

    /**
     * Logout
     */
    Route::get('command=100002', 'AuthRestController@logout');

    Route::group(['middleware' => ['jwt.auth', 'jwt.refresh']], function() {

        Route::get('sample', 'SampleRestController@sampleResponse');

        /**
         * MASTER DATA
         */
        Route::group(['prefix' => '130000'], function ()
        {
            Route::group(['prefix' => '130010'], function ()
            {
                Route::get('command=100003', 'ProvinceRestController@all');
                Route::post('command=100004', 'ProvinceRestController@insert');
                Route::put('command=100005', 'ProvinceRestController@update');
                Route::delete('command=100006', 'ProvinceRestController@delete');
                Route::post('command=100007', 'ProvinceRestController@findById');
                Route::post('command=100008', 'ProvinceRestController@findByCode');
                Route::post('command=100009', 'ProvinceRestController@findByName');
                Route::post('command=100010', 'ProvinceRestController@advancedPagination');
                Route::post('command=100011', 'ProvinceRestController@simplePagination');
                Route::get('command=100012', 'ProvinceRestController@selectLOV');
            });
            Route::group(['prefix' => '130004'], function ()
            {
                Route::get('command=100003', 'CityRestController@all');
                Route::post('command=100004', 'CityRestController@insert');
                Route::put('command=100005', 'CityRestController@update');
                Route::delete('command=100006', 'CityRestController@delete');
                Route::post('command=100007', 'CityRestController@findById');
                Route::post('command=100008', 'CityRestController@findByCode');
                Route::post('command=100009', 'CityRestController@findByName');
                Route::post('command=100010', 'CityRestController@advancedPagination');
                Route::post('command=100011', 'CityRestController@simplePagination');
                Route::get('command=100012', 'CityRestController@selectLOV');
                Route::post('command=100013', 'CityRestController@findByIdLovProvince');
            });
            Route::group(['prefix' => '130005'], function ()
            {
                Route::get('command=100003', 'DistrictRestController@all');
                Route::post('command=100004', 'DistrictRestController@insert');
                Route::put('command=100005', 'DistrictRestController@update');
                Route::delete('command=100006', 'DistrictRestController@delete');
                Route::post('command=100007', 'DistrictRestController@findById');
                Route::post('command=100008', 'DistrictRestController@findByCode');
                Route::post('command=100009', 'DistrictRestController@findByName');
                Route::post('command=100010', 'DistrictRestController@advancedPagination');
                Route::post('command=100011', 'DistrictRestController@simplePagination');
                Route::get('command=100012', 'DistrictRestController@selectLOV');
            });
            Route::group(['prefix' => '130011'], function ()
            {
                Route::get('command=100003', 'VillageRestController@all');
                Route::post('command=100004', 'VillageRestController@insert');
                Route::put('command=100005', 'VillageRestController@update');
                Route::delete('command=100006', 'VillageRestController@delete');
                Route::post('command=100007', 'VillageRestController@findById');
                Route::post('command=100008', 'VillageRestController@findByCode');
                Route::post('command=100009', 'VillageRestController@findByName');
                Route::post('command=100010', 'VillageRestController@advancedPagination');
                Route::post('command=100011', 'VillageRestController@simplePagination');
                Route::get('command=100012', 'VillageRestController@selectLOV');
            });

            Route::group(['prefix' => '130008'], function ()
            {
                Route::get('command=100003', 'JobRestController@all');
                Route::post('command=100004', 'JobRestController@insert');
                Route::put('command=100005', 'JobRestController@update');
                Route::delete('command=100006', 'JobRestController@delete');
                Route::post('command=100007', 'JobRestController@findById');
                Route::post('command=100008', 'JobRestController@findByCode');
                Route::post('command=100009', 'JobRestController@findByName');
                Route::post('command=100010', 'JobRestController@advancedPagination');
                Route::post('command=100011', 'JobRestController@simplePagination');
                Route::get('command=100012', 'JobRestController@selectLOV');
            });

            Route::group(['prefix' => '130006'], function ()
            {
                Route::get('command=100003', 'EducationRestController@all');
                Route::post('command=100004', 'EducationRestController@insert');
                Route::put('command=100005', 'EducationRestController@update');
                Route::delete('command=100006', 'EducationRestController@delete');
                Route::post('command=100007', 'EducationRestController@findById');
                Route::post('command=100008', 'EducationRestController@findByCode');
                Route::post('command=100009', 'EducationRestController@findByName');
                Route::post('command=100010', 'EducationRestController@advancedPagination');
                Route::post('command=100011', 'EducationRestController@simplePagination');
                Route::get('command=100012', 'EducationRestController@selectLOV');
            });

            Route::group(['prefix' => '130003'], function ()
            {
                Route::get('command=100003', 'BenefitTypeRestController@all');
                Route::post('command=100004', 'BenefitTypeRestController@insert');
                Route::put('command=100005', 'BenefitTypeRestController@update');
                Route::delete('command=100006', 'BenefitTypeRestController@delete');
                Route::post('command=100007', 'BenefitTypeRestController@findById');
                Route::post('command=100008', 'BenefitTypeRestController@findByCode');
                Route::post('command=100009', 'BenefitTypeRestController@findByName');
                Route::post('command=100010', 'BenefitTypeRestController@advancedPagination');
                Route::post('command=100011', 'BenefitTypeRestController@simplePagination');
                Route::get('command=100012', 'BenefitTypeRestController@selectLOV');
                Route::get('command=100013', 'BudgetTypeRestController@all');
            });

        });

        /**
         * SECURITY
         */
        Route::group(['prefix' => '190000'], function ()
        {
            Route::group(['prefix' => '190001'], function ()
            {
                Route::get('command=100003', 'SecurityBranchRestController@all');
                Route::post('command=100004', 'SecurityBranchRestController@insert');
                Route::put('command=100005', 'SecurityBranchRestController@update');
                Route::delete('command=100006', 'SecurityBranchRestController@delete');
                Route::post('command=100007', 'SecurityBranchRestController@findById');
                Route::post('command=100008', 'SecurityBranchRestController@findByCode');
                Route::post('command=100009', 'SecurityBranchRestController@findByName');
                Route::post('command=100010', 'SecurityBranchRestController@advancedPagination');
                Route::post('command=100011', 'SecurityBranchRestController@simplePagination');
                Route::get('command=100012', 'SecurityBranchRestController@selectLOV');
            });
            Route::group(['prefix' => '190002'], function ()
            {
                Route::get('command=100003', 'SecurityFunctionRestController@all');
                Route::post('command=100004', 'SecurityFunctionRestController@insert');
                Route::put('command=100005', 'SecurityFunctionRestController@update');
                Route::delete('command=100006', 'SecurityFunctionRestController@delete');
                Route::post('command=100007', 'SecurityFunctionRestController@findById');
                Route::post('command=100008', 'SecurityFunctionRestController@findByCode');
                Route::post('command=100009', 'SecurityFunctionRestController@findByName');
                Route::post('command=100010', 'SecurityFunctionRestController@advancedPagination');
                Route::post('command=100011', 'SecurityFunctionRestController@simplePagination');
            });
            Route::group(['prefix' => '190003'], function ()
            {
                Route::get('command=100003', 'SecurityFunctionAssignmentRestController@all');
                Route::post('command=100004', 'SecurityFunctionAssignmentRestController@insert');
                Route::put('command=100005', 'SecurityFunctionAssignmentRestController@update');
                Route::delete('command=100006', 'SecurityFunctionAssignmentRestController@delete');
                Route::post('command=100007', 'SecurityFunctionAssignmentRestController@findById');
                Route::post('command=100008', 'SecurityFunctionAssignmentRestController@findByCode');
                Route::post('command=100009', 'SecurityFunctionAssignmentRestController@findByName');
                Route::post('command=100010', 'SecurityFunctionAssignmentRestController@advancedPagination');
                Route::post('command=100011', 'SecurityFunctionAssignmentRestController@simplePagination');
            });
            Route::group(['prefix' => '190004'], function ()
            {
                Route::get('command=100003', 'SecurityGroupRestController@all');
                Route::post('command=100004', 'SecurityGroupRestController@insert');
                Route::put('command=100005', 'SecurityGroupRestController@update');
                Route::delete('command=100006', 'SecurityGroupRestController@delete');
                Route::post('command=100007', 'SecurityGroupRestController@findById');
                Route::post('command=100008', 'SecurityGroupRestController@findByCode');
                Route::post('command=100009', 'SecurityGroupRestController@findByName');
                Route::post('command=100010', 'SecurityGroupRestController@advancedPagination');
                Route::post('command=100011', 'SecurityGroupRestController@simplePagination');
                Route::get('command=100012', 'SecurityGroupRestController@selectLOV');
            });

            Route::group(['prefix' => '190005'], function ()
            {
                Route::get('command=100003', 'SecurityUserRestController@all');
                Route::post('command=100004', 'SecurityUserRestController@insert');
                Route::put('command=100005', 'SecurityUserRestController@update');
                Route::delete('command=100006', 'SecurityUserRestController@delete');
                Route::post('command=100007', 'SecurityUserRestController@findById');
                Route::post('command=100008', 'SecurityUserRestController@findByCode');
                Route::post('command=100009', 'SecurityUserRestController@findByName');
                Route::post('command=100010', 'SecurityUserRestController@advancedPagination');
                Route::post('command=100011', 'SecurityUserRestController@simplePagination');
                Route::get('command=100012', 'SecurityUserRestController@selectLOV');
            });
            Route::group(['prefix' => '190006'], function ()
            {
                Route::get('command=100003', 'SecurityUserProfileRestController@all');
                Route::post('command=100004', 'SecurityUserProfileRestController@insert');
                Route::put('command=100005', 'SecurityUserProfileRestController@update');
                Route::delete('command=100006', 'SecurityUserProfileRestController@delete');
                Route::post('command=100007', 'SecurityUserProfileRestController@findById');
                Route::post('command=100008', 'SecurityUserProfileRestController@findByCode');
                Route::post('command=100009', 'SecurityUserProfileRestController@findByName');
                Route::post('command=100010', 'SecurityUserProfileRestController@advancedPagination');
                Route::post('command=100011', 'SecurityUserProfileRestController@simplePagination');
            });
            Route::get('command=100003', 'MenuGeneratorRestController@generateMenu');
        });

        /**
         * TRANSACTION
         */
        Route::group(['prefix' => '200000'], function ()
        {
            /**
             * Benefit Provider REST
             */
            Route::group(['prefix' => '130002'], function ()
            {
                /**
                 * Register Benefit Provider REST
                 */
                Route::post('command=100003', 'RegisterProviderRestController@listWithPagination');
                Route::post('command=100004', 'RegisterProviderRestController@registerNewProvider');
                Route::post('command=100012', 'RegisterProviderRestController@approvalRegisteredNewProvider');
                Route::post('command=100013', 'RegisterProviderRestController@rejectedNewProvider');
                Route::post('command=100010', 'RegisterProviderRestController@advancedPagination');

                /**
                 * Edited Benefit Provider REST
                 */
                Route::post('command=100005', 'EditProviderRestController@advancedPagination');
                Route::post('command=100006', 'EditProviderRestController@listEditWithPagination');
                Route::post('command=100007', 'EditProviderRestController@listStagingWithPagination');
                Route::post('command=100011', 'EditProviderRestController@saveEdited');
                Route::post('command=100014', 'EditProviderRestController@approvedEdited');
                Route::post('command=100015', 'EditProviderRestController@rejectedEdited');

                /**
                 * Cancel Benefit Provider REST
                 */
                Route::post('command=100016', 'CancelProviderRestController@advancedPagination');
                Route::post('command=100017', 'CancelProviderRestController@listForCancellation');
                Route::post('command=100018', 'CancelProviderRestController@doCancellation');
                Route::post('command=100019', 'CancelProviderRestController@listForApprovedCancel');
                Route::post('command=100020', 'CancelProviderRestController@approveCancellation');
                Route::post('command=100021', 'CancelProviderRestController@rejectCancellation');
            });
        });

    });
});