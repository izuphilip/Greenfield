<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";


//Route for the SITE//
//Home page//
$Route->add('/greenfield/', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("site.layouts.header");
    $Template->addfooter("site.layouts.footer");
    $Template->assign("title","Home");

    $Template->render("site.home");

}, 'GET');


//About page//
$Route->add('/greenfield/site/about', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("site.layouts.header");
    $Template->addfooter("site.layouts.footer");
    $Template->assign("title","About");

    $Template->render("site.about");

}, 'GET');
//About page//



//Contact page//
$Route->add('/greenfield/site/contact', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("site.layouts.header");
    $Template->addfooter("site.layouts.footer");
    $Template->assign("title","Contact");

    $Template->render("site.contact");

}, 'GET');
//Contact page//

//Conference page//
$Route->add('/greenfield/site/conference', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("site.layouts.header");
    $Template->addfooter("site.layouts.footer");
    $Template->assign("title","conference");

    $Template->render("site.conference");

}, 'GET');
//Conference page//

//Event page//
$Route->add('/greenfield/site/event', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("site.layouts.header");
    $Template->addfooter("site.layouts.footer");
    $Template->assign("title","event");

    $Template->render("site.event");

}, 'GET');
//Event page//

//Training page//
$Route->add('/greenfield/site/training', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("site.layouts.header");
    $Template->addfooter("site.layouts.footer");
    $Template->assign("title","training");

    $Template->render("site.training");

}, 'GET');
//Training page//



// Pages//
$Route->add('/greenfield/site/pages/{page}', function ($page) {
    
    $Template = new Apps\Template;
    $Template->addheader("site.layouts.header");
    $Template->addfooter("site.layouts.footer");
    $Template->assign("title",ucfirst($page));

    $Template->render("site.pages.{$page}");

}, 'GET');
// Pages//

// Pages//
$Route->add('/greenfield/site/pages/course/{course}', function ($course) {
    
    $Template = new Apps\Template;
    $Template->addheader("site.layouts.header");
    $Template->addfooter("site.layouts.footer");
    $Template->assign("title",ucfirst($course));

    $Template->render("site.pages.course.{$course}");

}, 'GET');
// Pages//

//END of site Route//




//Start Admin  login Route//

$Route->add('/greenfield/admin/login' , function(){

    $Template = new Apps\Template;
    $Template->assign("title","Home");
    $Template->render("admin.login.home");
    

}, 'GET');


//Admin Dashboard

$Route->add('/greenfield/admin/dashboard', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("admin.layouts.header");
    $Template->addfooter("admin.layouts.footer");
    $Template->assign("title","home");

    $Template->render("admin.dashboard.home");

}, 'GET');



//Logout Sessions//
$Route->add(
    '/auth/logout',
    function () {
        $Template = new Apps\Template;
        $Template->expire();
        $Template->cleanAll(session_delete_timout);
        $Template->redirect(auth_url);
    },
    'GET'
);
//Logout Sessions//



$Route->run('/');
