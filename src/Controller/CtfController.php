<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class CtfController extends AbstractController
{
    /**
     * @Route("/ctf", name="ctf")
     */
    public function index(): Response
	
    {
        return $this->render('ctf/index.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
	/**
	 * @Route("/", name="home")
	 */
	 public function home() 
	 {
		 return $this->render('ctf/home.html.twig',[
			'title' => "bienvenue",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page1", name="page1")
	 */
	 public function page1() 
	 {
		 return $this->render('ctf/page1.html.twig',[
			'title' => "page1",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page2", name="page2")
	 */
	 public function page2() 
	 {
		 return $this->render('ctf/page2.html.twig',[
			'title' => "page2",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page3", name="page3")
	 */
	 public function page3() 
	 {
		 return $this->render('ctf/page3.html.twig',[
			'title' => "page3",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page4", name="page4")
	 */
	 public function page4() 
	 {
		 return $this->render('ctf/page4.html.twig',[
			'title' => "page4",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page5", name="page5")
	 */
	 public function page5() 
	 {
		 return $this->render('ctf/page5.html.twig',[
			'title' => "page3",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page6", name="page6")
	 */
	 public function page6() 
	 {
		 return $this->render('ctf/page6.html.twig',[
			'title' => "page6",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page7", name="page7")
	 */
	 public function page7() 
	 {
		 return $this->render('ctf/page7.html.twig',[
			'title' => "page7",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page8", name="page8")
	 */
	 public function page8() 
	 {
		 return $this->render('ctf/page8.html.twig',[
			'title' => "page8",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page9", name="page9")
	 */
	 public function page9() 
	 {
		 return $this->render('ctf/page9.html.twig',[
			'title' => "page9",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page10", name="page10")
	 */
	 public function page10() 
	 {
		 return $this->render('ctf/page10.html.twig',[
			'title' => "page10",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page11", name="page11")
	 */
	 public function page11() 
	 {
		 return $this->render('ctf/page11.html.twig',[
			'title' => "page11",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page12", name="page12")
	 */
	 public function page12() 
	 {
		 return $this->render('ctf/page12.html.twig',[
			'title' => "page12",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/traitement", name="traitement ")
	 */
	 public function traitement() 
	 {
		 $pseudo = $request -> request -> get("pseudo") ;
        $classe = $request -> request -> get("classe") ;
	 
		 return $this->render('ctf/traitement.html.twig',[
			'title' => "traitement",
			'age' => 31
			
		]);
	}
}
