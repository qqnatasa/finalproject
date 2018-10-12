<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="text")
     */

    private $question;
    /**
     * @ORM\Column(type="text")
     */
    private $ans1;
    /**
     * @ORM\Column(type="text")
     */
    private $ans2;
    /**
     * @ORM\Column(type="text")
     */
    private $ans3;
    /**
     * @ORM\Column(type="text")
     */
    private $ans4;
    /**
     * @ORM\Column(type="text")
     */
    private $ans;
    /**
     * @ORM\Column(type="text")
     */
    private $cat_id;

    public function getId()
    {
        return $this->id;
    }
    public function getquestion()
    {
        return $this->question;
    }
    public function getans1()
    {
        return $this->ans1;
    }
    public function getans2()
    {
        return $this->ans2;
    }
    public function getans3()
    {
        return $this->ans3;
    }
    public function getans4()
    {
        return $this->ans4;
    }
    public function getcat_id()
    {
        return $this->cat_id;
    }
    public function setquestion($question)
    {
        return $this->question;
    }
    public function setans1($ans1)
    {
        return $this->ans1;
    }
    public function setans2($ans2)
    {
        return $this->ans2;
    }
    public function setans3($ans3)
    {
        return $this->ans3;
    }
    public function setans4($ans4)
    {
        return $this->ans4;
    }
    public function setcat_id($cat_id)
    {
        return $this->cat_id;
    }
}
