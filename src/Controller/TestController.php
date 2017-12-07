<?php
/**
 * Created by PhpStorm.
 * User: Fixe
 * Date: 07/12/2017
 * Time: 17:35
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends Controller
{

    /**
     * @param \Swift_Mailer $mailer
     *
     * @Route("email")
     *
     * @return Response
     */
    public function sendEmailAction(\Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody('test email')
        ;

        return new Response(var_export($mailer->send($message), true));
    }

}