<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
/*
$router->get('/', function () use ($router) {
    return $router->app->version();
});
*/

//$router->get('companies', 'CompaniesController@showAllCompanies');


$router->group(['prefix' => 'api'], function () use ($router)

{
	//COMPANIES

	$router->get('companies',  ['uses' => 'CompaniesController@showAllCompanies']);

	$router->get('companies/{id}',  ['uses' => 'CompaniesController@showOneCompany']);

	$router->post('companies',  ['uses' => 'CompaniesController@create']);

	$router->post('companies/{id}',  ['uses' => 'CompaniesController@create']);

	$router->delete('companies/{id}',  ['uses' => 'CompaniesController@delete']);

	$router->put('companies/{id}',  ['uses' => 'CompaniesController@update']);

	$router->put('companies',  ['uses' => 'CompaniesController@update']);


	//EMPLOYEES


	$router->get('employees',  ['uses' => 'EmployeesController@showAllEmployees']);

	$router->get('employees/{id}',  ['uses' => 'EmployeesController@showOneEmployee']);

	$router->post('employees',  ['uses' => 'EmployeesController@create']);
	$router->post('employees/{id}',  ['uses' => 'EmployeesController@create']);

	//$router->post('employees/{id}',  ['uses' => 'EmployeessController@create']);

	$router->delete('employees/{id}',  ['uses' => 'EmployeesController@delete']);

	$router->put('employees/{id}',  ['uses' => 'EmployeesController@update']);

	$router->put('employees',  ['uses' => 'EmployeesController@update']);


});

