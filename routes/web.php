<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Index(Home Page)
Route::resource('index', 'SignUpController');
Route::post('/signUp', 'SignUpController@store');
Route::get('/login', 'LoginController@login');
Route::resource('indexGuest', 'IndexGuestController');

// About Me
Route::get('aboutMe', 'AboutMeController@getData');
Route::resource('aboutMeAdmin', 'AboutMeAdminController');
Route::post('/updateAboutMe', 'AboutMeAdminController@updateAboutMe');

//Resume
Route::get('resume', 'ResumeController@getResumeData');
Route::resource('resumeAdminHome', 'ResumeAdminHomeController');
Route::resource('resumeUpdateCompany', 'ResumeUpdateCompanyController');
Route::post('/updateCompany', 'ResumeUpdateCompanyController@updateCompany');
Route::resource('resumeUpdateDesignation', 'ResumeUpdateDesignationController');
Route::post('/updateDesignation','ResumeUpdateDesignationController@updateDesignation');
Route::resource('deleteResume', 'ResumeDeleteController');
Route::post('/deleteResume', 'ResumeDeleteController@deleteResume');
Route::resource('insertResume', 'InsertResumeController');
Route::post('/insertResume', 'InsertResumeController@insertResume');

//Portfolio
Route::get('portfolio', 'PortfolioController@getData');
Route::resource('portfolioWebsite', 'PortfolioWebsiteController');
Route::resource('portfolioApps', 'PortfolioAppsController');
Route::resource('portfolioDesign', 'PortfolioDesignController');
Route::resource('portfolioPhotography', 'PortfolioPhotographyController');
Route::resource('portfolioHomePage','PortfolioHomeController');
Route::resource('portfolioInsertImage','PortfolioInsertImageController');
Route::resource('portfolioDeleteImage','PortfolioDeleteImageController');
Route::post('deleteImage', 'PortfolioDeleteImageController@deleteImage');
Route::post('insertImage', 'PortfolioInsertImageController@insertImage');
Route::resource('portfolioUpdateImage', 'PortfolioUpdateImageController');
Route::post('updateImage', 'PortfolioUpdateImageController@updateImage');

// Blog
Route::resource('blog', 'BlogController');

// References
Route::get('reference', 'ReferenceController@getReferenceData');
Route::resource('referencesHome', 'ReferencesHomeController');
Route::resource('insertReference', 'InsertReferencesController');
Route::resource('updateReference', 'ReferenceUpdateController');
Route::post('/updateReference', 'ReferenceUpdateController@updateReference');
Route::resource('deleteReference', 'DeleteReferenceController');
Route::post('/deleteReference', 'DeleteReferenceController@deleteReference');
Route::post('/insertReference', 'InsertReferencesController@insertReference');


// Hire Me
Route::get('hireMe', 'HireMeController@getData');
Route::resource('hireMeAdmin', 'HireMeAdminController');
Route::post('/hireMeUpdate','HireMeAdminController@updateHireMe');
Route::resource('hireMeHome', 'HireMeHomeController');
Route::resource('hireMeDelete', 'HireMeDeleteController');
Route::post('/hireMeDelete', 'HireMeDeleteController@deleteHireMe');
Route::resource('hireMeInsert', 'InsertHireMeController');
Route::post('/hireMeInsert', 'InsertHireMeController@insertHireMe');

//Skills
Route::get('skills', 'SkillsController@getSkillsData');
Route::resource('skillsHomeAdmin', 'SkillsHomeAdminController');
Route::resource('skillsUpdate', 'SkillsUpdateController');
Route::post('/updateSkills', 'SkillsUpdateController@updateSkills');
Route::resource('languageUpdate', 'LanguageUpdateController');
Route::post('/updateLanguage', 'LanguageUpdateController@updateLanguage');
Route::resource('deleteSkill', 'DeleteSkillController');
Route::post('/deleteSkill', 'DeleteSkillController@deleteSKill');
Route::resource('insertSkill', 'InsertSkillController');
Route::post('/insertSkill', 'InsertSkillController@insertSkill');


// Contact Me
Route::get('contactMe', 'ContactMeController@getData');
Route::post('/contactMe', 'ContactMeController@store');




// Admin (Edit Pannel)
Route::resource('admin', 'AdminController');
Route::resource('personalInformationAdmin', 'PersonalInformationController');
Route::post('/updatePersonalInformation', 'PersonalInformationController@updatePersonalInformation');
Route::resource('userHomePage','UserHomePageController');
Route::resource('changeUserRole','ChangeUserRoleController');
Route::resource('deleteUser','DeleteUserController');
Route::post('/changeUserRole', 'ChangeUserRoleController@updateUserRole');
Route::post('/deleteUser', 'DeleteUserController@deleteUser');



