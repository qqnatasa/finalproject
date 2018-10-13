<?php
namespace App\Controller;

use App\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Config\Exception\FileLoaderLoadException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Swiftmailer;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Respose;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\configuration\Method;
use Symfony\Component\HttpFoundation\Request;


class QuizController extends  Controller {

  public function quiz(){
    $questions= $this->getDoctrine()->getRepository
    (Question::class)->findall();
      return $this->render('quizshow.html.twig',array('questions' =>$questions));}
}
