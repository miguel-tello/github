<?php

use Project\users\usersControler;
use Project\main\mainControler;

$authentication = $app->getContainer()->get('authentication');
$app->get('/users', usersControler::class . ':getAll');
$app->get('/contacts', mainControler::class . ':getContacts');
$app->get('/educations', mainControler::class . ':geteducation');
$app->get('/languages', mainControler::class . ':getlanguage');
$app->get('/mains', mainControler::class . ':getmain');
$app->get('/profesionalinfos', mainControler::class . ':getprofesionalinfo');
$app->get('/projects', mainControler::class . ':getprojects');
$app->get('/quotes', mainControler::class . ':getquote');
$app->get('/skills', mainControler::class . ':getskill');
$app->get('/testimonials', mainControler::class . ':gettestimonial');
$app->get('/workexperiences', mainControler::class . ':getworkexperience');
$app->get('/users/{id}', UsersControler::class . ':getUserById');
$app->put('/users/{id}', usersControler::class . ':updateUser');
$app->put('/contacts/{id}', mainControler::class . ':updateContact');
$app->put('/educations/{id}', mainControler::class . ':updateeducation');
$app->put('/languages/{id}', mainControler::class . ':updatelanguage');
$app->put('/mains/{id}', mainControler::class . ':updatemain');
$app->put('/profesionalinfos/{id}', mainControler::class . ':updateprofesionalinfo');
$app->put('/projects/{id}', mainControler::class . ':updateprojects');
$app->put('/quotes/{id}', mainControler::class . ':updatequote');
$app->put('/skills/{id}', mainControler::class . ':updateskill');
$app->put('/testimonials/{id}', mainControler::class . ':updatetestimonial');
$app->put('/workexperiences/{id}', mainControler::class . ':updateworkexperience');
$app->post('/users', UsersControler::class . ':createUser');
$app->post('/login', UsersControler::class . ':loginUser');
$app->post('/contacts', mainControler::class . ':createContact');
$app->post('/educations', mainControler::class . ':createeducation');
$app->post('/languages', mainControler::class . ':createlanguage');
$app->post('/projects', mainControler::class . ':createprojects');
$app->post('/skills', mainControler::class . ':createskill');
$app->post('/testimonials', mainControler::class . ':createtestimonial');
$app->post('/workexperiences', mainControler::class . ':createworkexperience');
$app->delete('/users/{id}', UsersControler::class . ':deleteUser');
$app->delete('/contacts/{id}', mainControler::class . ':deleteContact');
$app->delete('/educations/{id}', mainControler::class . ':deleteeducation');
$app->delete('/languages/{id}', mainControler::class . ':deletelanguage');
$app->delete('/projects/{id}', mainControler::class . ':deleteprojects');
$app->delete('/skills/{id}', mainControler::class . ':createskill');
$app->delete('/testimonials/{id}', mainControler::class . ':deletetestimonial');
$app->delete('/workexperiences/{id}', mainControler::class . ':deleteworkexperience');