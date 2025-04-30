<?php

namespace app\controllers;

use gdev\phpmvc\Application;
use gdev\phpmvc\Controller;
use gdev\phpmvc\Request;
use gdev\phpmvc\Response;
use app\models\ContactForm;

/**
 * Class SiteController
 * 
 * @author Maurizio Giambrone <email@email.com>
 * @package app\controllers
 * 
 */

 class SiteController extends Controller
 {

    public function home()
    {
        $params = [
            'name' => 'Maurizio',
        ];

        return $this->render('home', $params);
    } 

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();

        if ($request->isPost()) {
            $contact->loadData($request->getBody());

            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact', [
            'model' => $contact
        ]);
    }
 }