<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Config\Exception\FileLoaderLoadException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Swiftmailer;
use Symfony\Component\DependencyInjection\Container;
class mailcontroller extends Controller
 {
   public function mail(Request $request)
   {

     $form = $this->createFormBuilder()
      ->add('from',EmailType::class)
      ->add('message',TextareaType::class)
      ->add('send',SubmitType::class)
      ->getForm();

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()){
        $data = $form->getData();
        dump($data);
        $message = \Swift_Message::newInstance()
          ->setSubject('Support Form Submission')
          ->setForm($data['from'])
          ->setTo('dzfjfcon@sharklasers.com')
          ->setBody(
            $form->getData()['message'],
            'text/plain'
            )
            ;
            $this->Get['mailer']->send($message);
      }


      return $this->render('/mail.html.twig',[
          'our_form' => $form->createView()
      ]);
     }
    }
