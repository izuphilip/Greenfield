<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";

//Home page//
$Route->add('/greenfield/', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","Home");

    $Template->render("home");

}, 'GET');


//About page//
$Route->add('/greenfield/about', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","About");

    $Template->render("about");

}, 'GET');
//About page//



//Contact page//
$Route->add('/greenfield/contact', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","Contact");

    $Template->render("contact");

}, 'GET');
//Contact page//

//Conference page//
$Route->add('/greenfield/conference', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","conference");

    $Template->render("conference");

}, 'GET');
//Conference page//

//Event page//
$Route->add('/greenfield/event', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","event");

    $Template->render("event");

}, 'GET');
//Event page//

//Training page//
$Route->add('/greenfield/training', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","training");

    $Template->render("training");

}, 'GET');
//Training page//



// Pages//
$Route->add('/greenfield/pages/{page}', function ($page) {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title",ucfirst($page));

    $Template->render("pages.{$page}");

}, 'GET');
// Pages//

// Pages//
$Route->add('/greenfield/pages/course/{course}', function ($course) {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title",ucfirst($course));

    $Template->render("pages.course.{$course}");

}, 'GET');
// Pages//





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
