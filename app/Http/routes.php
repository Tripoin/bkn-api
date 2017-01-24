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
    return "<h1>RESTfull API for BKN v1</h1>";
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
            /**
             * Address
             */
            Route::group(['prefix' => '130038'], function ()
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
            /**
             * Province
             */
            Route::group(['prefix' => '130034'], function ()
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
            /**
             * City
             */
            Route::group(['prefix' => '130035'], function ()
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
            /**
             * District
             */
            Route::group(['prefix' => '130036'], function ()
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
            /**
             * Village
             */
            Route::group(['prefix' => '130037'], function ()
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

			/**
             * Documentation
             */
            Route::group(['prefix' => '130006'], function ()
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
			
            /**
             * Certificate
             */
            Route::group(['prefix' => '130012'], function ()
            {
                Route::get('command=100003', 'CertificateRestController@all');
                Route::post('command=100004', 'CertificateRestController@insert');
                Route::put('command=100005', 'CertificateRestController@update');
                Route::delete('command=100006', 'CertificateRestController@delete');
                Route::post('command=100007', 'CertificateRestController@findById');
                Route::post('command=100008', 'CertificateRestController@findByCode');
                Route::post('command=100009', 'CertificateRestController@findByName');
                Route::post('command=100010', 'CertificateRestController@advancedPagination');
                Route::post('command=100011', 'CertificateRestController@simplePagination');
                Route::get('command=100012', 'CertificateRestController@selectLOV');
                Route::get('command=100013', 'CertificateRestController@all');
            });
            /**
             * question category
             */
            Route::group(['prefix' => '130025'], function ()
            {
                Route::get('command=100003', 'QuestionCategoryRestController@all');
                Route::post('command=100004', 'QuestionCategoryRestController@insert');
                Route::put('command=100005', 'QuestionCategoryRestController@update');
                Route::delete('command=100006', 'QuestionCategoryRestController@delete');
                Route::post('command=100007', 'QuestionCategoryRestController@findById');
                Route::post('command=100008', 'QuestionCategoryRestController@findByCode');
                Route::post('command=100009', 'QuestionCategoryRestController@findByName');
                Route::post('command=100010', 'QuestionCategoryRestController@advancedPagination');
                Route::post('command=100011', 'QuestionCategoryRestController@simplePagination');
                Route::get('command=100012', 'QuestionCategoryRestController@selectLOV');
            });
            /**
             * question type
             */
            Route::group(['prefix' => '130048'], function ()
            {
                Route::get('command=100003', 'QuestionTypeRestController@all');
                Route::post('command=100004', 'QuestionTypeRestController@insert');
                Route::put('command=100005', 'QuestionTypeRestController@update');
                Route::delete('command=100006', 'QuestionTypeRestController@delete');
                Route::post('command=100007', 'QuestionTypeRestController@findById');
                Route::post('command=100008', 'QuestionTypeRestController@findByCode');
                Route::post('command=100009', 'QuestionTypeRestController@findByName');
                Route::post('command=100010', 'QuestionTypeRestController@advancedPagination');
                Route::post('command=100011', 'QuestionTypeRestController@simplePagination');
                Route::get('command=100012', 'QuestionTypeRestController@selectLOV');
            });
            /**
             * ROOM
             */
            Route::group(['prefix' => '130049'], function ()
            {
                Route::get('command=100003', 'RoomRestController@all');
                Route::post('command=100004', 'RoomRestController@insert');
                Route::put('command=100005', 'RoomRestController@update');
                Route::delete('command=100006', 'RoomRestController@delete');
                Route::post('command=100007', 'RoomRestController@findById');
                Route::post('command=100008', 'RoomRestController@findByCode');
                Route::post('command=100009', 'RoomRestController@findByName');
                Route::post('command=100010', 'RoomRestController@advancedPagination');
                Route::post('command=100011', 'RoomRestController@simplePagination');
                Route::get('command=100012', 'RoomRestController@selectLOV');
                Route::get('command=100013', 'RoomRestController@all');
            });

            /**
             * Religion
             */
            Route::group(['prefix' => '130021'], function ()
            {
                Route::get('command=100003', 'ReligionRestController@all');
                Route::post('command=100004', 'ReligionRestController@insert');
                Route::put('command=100005', 'ReligionRestController@update');
                Route::delete('command=100006', 'ReligionRestController@delete');
                Route::post('command=100007', 'ReligionRestController@findById');
                Route::post('command=100008', 'ReligionRestController@findByCode');
                Route::post('command=100009', 'ReligionRestController@findByName');
                Route::post('command=100010', 'ReligionRestController@advancedPagination');
                Route::post('command=100011', 'ReligionRestController@simplePagination');
                Route::get('command=100012', 'ReligionRestController@selectLOV');
                Route::get('command=100013', 'ReligionRestController@all');
            });
            /**
             * question
             */
            Route::group(['prefix' => '130031'], function()
            {
                Route::get('command=100003', 'QuestionRestController@all');
                Route::post('command=100004', 'QuestionRestController@insert');
                Route::put('command=100005', 'QuestionRestController@update');
                Route::delete('command=100006', 'QuestionRestController@delete');
                Route::post('command=100007', 'QuestionRestController@findById');
                Route::post('command=100008', 'QuestionRestController@findByCode');
                Route::post('command=100009', 'QuestionRestController@findByName');
                Route::post('command=100010', 'QuestionRestController@advancedPagination');
                Route::post('command=100011', 'QuestionRestController@simplePagination');
                Route::get('command=100012', 'QuestionRestController@selectLOV');
            });
            /**
             * questionnaire
             */
            Route::group(['prefix' => '130024'], function()
            {
                Route::get('command=100003', 'QuestionnaireRestController@all');
                Route::post('command=100004', 'QuestionnaireRestController@insert');
                Route::put('command=100005', 'QuestionnaireRestController@update');
                Route::delete('command=100006', 'QuestionnaireRestController@delete');
                Route::post('command=100007', 'QuestionnaireRestController@findById');
                Route::post('command=100008', 'QuestionnaireRestController@findByCode');
                Route::post('command=100009', 'QuestionnaireRestController@findByName');
                Route::post('command=100010', 'QuestionnaireRestController@advancedPagination');
                Route::post('command=100011', 'QuestionnaireRestController@simplePagination');
                Route::get('command=100012', 'QuestionnaireRestController@selectLOV');
            });
            /**
             * level akd
             */
            Route::group(['prefix' => '130023'], function()
            {
                Route::get('command=100003', 'LevelAkdRestController@all');
                Route::post('command=100004', 'LevelAkdRestController@insert');
                Route::put('command=100005', 'LevelAkdRestController@update');
                Route::delete('command=100006', 'LevelAkdRestController@delete');
                Route::post('command=100007', 'LevelAkdRestController@findById');
                Route::post('command=100008', 'LevelAkdRestController@findByCode');
                Route::post('command=100009', 'LevelAkdRestController@findByName');
                Route::post('command=100010', 'LevelAkdRestController@advancedPagination');
                Route::post('command=100011', 'LevelAkdRestController@simplePagination');
                Route::get('command=100012', 'LevelAkdRestController@selectLOV');
            });
            /**
             * subject type
             */
            Route::group(['prefix' => '130003'], function ()
            {
                Route::get('command=100003', 'SubjectTypeRestController@all');
                Route::post('command=100004', 'SubjectTypeRestController@insert');
                Route::put('command=100005', 'SubjectTypeRestController@update');
                Route::delete('command=100006', 'SubjectTypeRestController@delete');
                Route::post('command=100007', 'SubjectTypeRestController@findById');
                Route::post('command=100008', 'SubjectTypeRestController@findByCode');
                Route::post('command=100009', 'SubjectTypeRestController@findByName');
                Route::post('command=100010', 'SubjectTypeRestController@advancedPagination');
                Route::post('command=100011', 'SubjectTypeRestController@simplePagination');
                Route::get('command=100012', 'SubjectTypeRestController@selectLOV');
            });
            /**
             * BudgetType
             */
            Route::group(['prefix' => '130004'], function ()
            {
                Route::get('command=100003', 'BudgetTypeRestController@all');
                Route::post('command=100004', 'BudgetTypeRestController@insert');
                Route::put('command=100005', 'BudgetTypeRestController@update');
                Route::delete('command=100006', 'BudgetTypeRestController@delete');
                Route::post('command=100007', 'BudgetTypeRestController@findById');
                Route::post('command=100008', 'BudgetTypeRestController@findByCode');
                Route::post('command=100009', 'BudgetTypeRestController@findByName');
                Route::post('command=100010', 'BudgetTypeRestController@advancedPagination');
                Route::post('command=100011', 'BudgetTypeRestController@simplePagination');
                Route::get('command=100012', 'BudgetTypeRestController@selectLOV');
            });
            /**
             * MaterialSubject
             */
            Route::group(['prefix' => '130008'], function ()
            {
                Route::get('command=100003', 'MaterialSubjectRestController@all');
                Route::post('command=100004', 'MaterialSubjectRestController@insert');
                Route::put('command=100005', 'MaterialSubjectRestController@update');
                Route::delete('command=100006', 'MaterialSubjectRestController@delete');
                Route::post('command=100007', 'MaterialSubjectRestController@findById');
                Route::post('command=100008', 'MaterialSubjectRestController@findByCode');
                Route::post('command=100009', 'MaterialSubjectRestController@findByName');
                Route::post('command=100010', 'MaterialSubjectRestController@advancedPagination');
                Route::post('command=100011', 'MaterialSubjectRestController@simplePagination');
                Route::get('command=100012', 'MaterialSubjectRestController@selectLOV');
            });

            /**
             * SubjectCategory
             */
            Route::group(['prefix' => '130002'], function ()
            {
                Route::get('command=100003', 'SubjectCategoryRestController@all');
                Route::post('command=100004', 'SubjectCategoryRestController@insert');
                Route::put('command=100005', 'SubjectCategoryRestController@update');
                Route::delete('command=100006', 'SubjectCategoryRestController@delete');
                Route::post('command=100007', 'SubjectCategoryRestController@findById');
                Route::post('command=100008', 'SubjectCategoryRestController@findByCode');
                Route::post('command=100009', 'SubjectCategoryRestController@findByName');
                Route::post('command=100010', 'SubjectCategoryRestController@advancedPagination');
                Route::post('command=100011', 'SubjectCategoryRestController@simplePagination');
                Route::get('command=100012', 'SubjectCategoryRestController@selectLOV');
            });
            /**
             * Assignment Letter
             */
            Route::group(['prefix' => '130014'], function ()
            {
                Route::get('command=100003', 'AssignmentLetterRestController@all');
                Route::post('command=100004', 'AssignmentLetterRestController@insert');
                Route::put('command=100005', 'AssignmentLetterRestController@update');
                Route::delete('command=100006', 'AssignmentLetterRestController@delete');
                Route::post('command=100007', 'AssignmentLetterRestController@findById');
                Route::post('command=100008', 'AssignmentLetterRestController@findByCode');
                Route::post('command=100009', 'AssignmentLetterRestController@findByName');
                Route::post('command=100010', 'AssignmentLetterRestController@advancedPagination');
                Route::post('command=100011', 'AssignmentLetterRestController@simplePagination');
                Route::get('command=100012', 'AssignmentLetterRestController@selectLOV');
            });
            /**
             * Answer Category
             */
            Route::group(['prefix' => '130050'], function ()
            {
                Route::get('command=100003', 'AnswerCategoryRestController@all');
                Route::post('command=100004', 'AnswerCategoryRestController@insert');
                Route::put('command=100005', 'AnswerCategoryRestController@update');
                Route::delete('command=100006', 'AnswerCategoryRestController@delete');
                Route::post('command=100007', 'AnswerCategoryRestController@findById');
                Route::post('command=100008', 'AnswerCategoryRestController@findByCode');
                Route::post('command=100009', 'AnswerCategoryRestController@findByName');
                Route::post('command=100010', 'AnswerCategoryRestController@advancedPagination');
                Route::post('command=100011', 'AnswerCategoryRestController@simplePagination');
                Route::get('command=100012', 'AnswerCategoryRestController@selectLOV');
            });
            /**
             * Answer Type
             */
            Route::group(['prefix' => '130051'], function ()
            {
                Route::get('command=100003', 'AnswerTypeRestController@all');
                Route::post('command=100004', 'AnswerTypeRestController@insert');
                Route::put('command=100005', 'AnswerTypeRestController@update');
                Route::delete('command=100006', 'AnswerTypeRestController@delete');
                Route::post('command=100007', 'AnswerTypeRestController@findById');
                Route::post('command=100008', 'AnswerTypeRestController@findByCode');
                Route::post('command=100009', 'AnswerTypeRestController@findByName');
                Route::post('command=100010', 'AnswerTypeRestController@advancedPagination');
                Route::post('command=100011', 'AnswerTypeRestController@simplePagination');
                Route::get('command=100012', 'AnswerTypeRestController@selectLOV');
            });
            /**
             * Attachment
             */
            Route::group(['prefix' => '130052'], function ()
            {
                Route::get('command=100003', 'AttachmentRestController@all');
                Route::post('command=100004', 'AttachmentRestController@insert');
                Route::put('command=100005', 'AttachmentRestController@update');
                Route::delete('command=100006', 'AttachmentRestController@delete');
                Route::post('command=100007', 'AttachmentRestController@findById');
                Route::post('command=100008', 'AttachmentRestController@findByCode');
                Route::post('command=100009', 'AttachmentRestController@findByName');
                Route::post('command=100010', 'AttachmentRestController@advancedPagination');
                Route::post('command=100011', 'AttachmentRestController@simplePagination');
                Route::get('command=100012', 'AttachmentRestController@selectLOV');
            });
            /**
             * Checklist Usage
             */
            Route::group(['prefix' => '130017'], function ()
            {
                Route::get('command=100003', 'ChecklistUsageRestController@all');
                Route::post('command=100004', 'ChecklistUsageRestController@insert');
                Route::put('command=100005', 'ChecklistUsageRestController@update');
                Route::delete('command=100006', 'ChecklistUsageRestController@delete');
                Route::post('command=100007', 'ChecklistUsageRestController@findById');
                Route::post('command=100008', 'ChecklistUsageRestController@findByCode');
                Route::post('command=100009', 'ChecklistUsageRestController@findByName');
                Route::post('command=100010', 'ChecklistUsageRestController@advancedPagination');
                Route::post('command=100011', 'ChecklistUsageRestController@simplePagination');
                Route::get('command=100012', 'ChecklistUsageRestController@selectLOV');
            });
            /**
             * Contact
             */
            Route::group(['prefix' => '130039'], function ()
            {
                Route::get('command=100003', 'ContactRestController@all');
                Route::post('command=100004', 'ContactRestController@insert');
                Route::put('command=100005', 'ContactRestController@update');
                Route::delete('command=100006', 'ContactRestController@delete');
                Route::post('command=100007', 'ContactRestController@findById');
                Route::post('command=100008', 'ContactRestController@findByCode');
                Route::post('command=100009', 'ContactRestController@findByName');
                Route::post('command=100010', 'ContactRestController@advancedPagination');
                Route::post('command=100011', 'ContactRestController@simplePagination');
                Route::get('command=100012', 'ContactRestController@selectLOV');
            });
            /**
             * Contact Message
             */
            Route::group(['prefix' => '130054'], function ()
            {
                Route::get('command=100003', 'ContactMessageRestController@all');
                Route::post('command=100004', 'ContactMessageRestController@insert');
                Route::put('command=100005', 'ContactMessageRestController@update');
                Route::delete('command=100006', 'ContactMessageRestController@delete');
                Route::post('command=100007', 'ContactMessageRestController@findById');
                Route::post('command=100008', 'ContactMessageRestController@findByCode');
                Route::post('command=100009', 'ContactMessageRestController@findByName');
                Route::post('command=100010', 'ContactMessageRestController@advancedPagination');
                Route::post('command=100011', 'ContactMessageRestController@simplePagination');
                Route::get('command=100012', 'ContactMessageRestController@selectLOV');
            });
            /**
             * Evaluation
             */
            Route::group(['prefix' => '130055'], function ()
            {
                Route::get('command=100003', 'EvaluationRestController@all');
                Route::post('command=100004', 'EvaluationRestController@insert');
                Route::put('command=100005', 'EvaluationRestController@update');
                Route::delete('command=100006', 'EvaluationRestController@delete');
                Route::post('command=100007', 'EvaluationRestController@findById');
                Route::post('command=100008', 'EvaluationRestController@findByCode');
                Route::post('command=100009', 'EvaluationRestController@findByName');
                Route::post('command=100010', 'EvaluationRestController@advancedPagination');
                Route::post('command=100011', 'EvaluationRestController@simplePagination');
                Route::get('command=100012', 'EvaluationRestController@selectLOV');
            });
            /**
             * Evaluation Assess
             */
            Route::group(['prefix' => '130056'], function ()
            {
                Route::get('command=100003', 'EvaluationAssessRestController@all');
                Route::post('command=100004', 'EvaluationAssessRestController@insert');
                Route::put('command=100005', 'EvaluationAssessRestController@update');
                Route::delete('command=100006', 'EvaluationAssessRestController@delete');
                Route::post('command=100007', 'EvaluationAssessRestController@findById');
                Route::post('command=100008', 'EvaluationAssessRestController@findByCode');
                Route::post('command=100009', 'EvaluationAssessRestController@findByName');
                Route::post('command=100010', 'EvaluationAssessRestController@advancedPagination');
                Route::post('command=100011', 'EvaluationAssessRestController@simplePagination');
                Route::get('command=100012', 'EvaluationAssessRestController@selectLOV');
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