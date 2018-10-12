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
use Symfon\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\configuration\Method;
use Symfony\Component\HttpFoundation\Request;


class QuizController extends  Controller {

  public function quiz(){

    $questions= $this->getDoctrine()->getRepository
    (Question::class)->findAll();
    return $this->render('quizshow.html.twig',array('questions' =>$questions));
  }

  public function answer($data){
    $right=0;
    $wrong=0;
    $no_answer=0;
    $ans=implode("",$data);

    $questions= $this->getDoctrine()->getRepository
    (Question::class)->findAll();
      return $this->render('quizshow.html.twig',array('questions' =>$questions));
    while($questions->getDoctrine()->getRepository
    (Question::class)->findAll()){

      if($question['ans']==$_POST($question['id'])){
        $right++;
      }
      else if($_POST($question['id']=="no_attempt")){
        $no_answer++;
      }
      else {
        $wrong++;
      }
    }

    $array=array();
    $array['rgiht']=$right;
    $array['wrong']=$wrong;
    $array['no_answer']=$no_answer;
    return $this->render('answer.html.twig',array('array' =>$array));
  }

}
