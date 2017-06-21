<?php

Ajax::listen('newsletter', function() {

    $mailchimp = new MailchimpHelper();

    if (
        isset($_POST['newsletter-title']) && $_POST['newsletter-title'] !== '' &&
        isset($_POST['newsletter-firstname']) && $_POST['newsletter-firstname'] !== '' &&
        isset($_POST['newsletter-lastname']) && $_POST['newsletter-lastname'] !== '' &&
        isset($_POST['newsletter-compagny-name']) && $_POST['newsletter-compagny-name'] !== '' &&
        isset($_POST['newsletter-phone']) && $_POST['newsletter-phone'] !== '' &&
        isset($_POST['newsletter-email']) && $_POST['newsletter-email'] !== '' && filter_var($_POST['newsletter-email'], FILTER_VALIDATE_EMAIL)
    ) {
        $result = $mailchimp->save(
            $_POST['newsletter-email'],
            [
                'FNAME' => $_POST['newsletter-firstname'],
                'LNAME' => $_POST['newsletter-lastname'],
                'TITLE' => $_POST['newsletter-title'],
                'BUSINESS' => $_POST['newsletter-compagny-name'],
                'PHONE' => $_POST['newsletter-phone'],
            ]
        );

        if ($result['status'] === 'pending') {
            echo json_encode([
                'status' => 'success'
            ]);
            die();
        } else {
            echo json_encode([
                'status' => 'failed',
                'error' => [
                    'code' => 'email-exists',
                    'message' => pll__('Votre adresse est déjà inscrite dans notre base de données, merci de votre intérêt.'),
                ]
            ]);
        }
    } else {
        echo json_encode([
            'status' => 'failed',
            'error' => [
                'code' => 'invalid-request',
                'message' => pll__('La requête n\'est pas valide, veuillez réessayer.'),
            ]
        ]);
    }
    die();
});