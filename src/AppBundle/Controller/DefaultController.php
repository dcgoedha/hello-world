<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Klant;
use AppBundle\Form\Type\KlantType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
    * @Route("/hallo/wereld", name="zeghallo")
    */
    public function zegHallo(Request $request) {
      return new Response('Hallo jij daar!');
    }

    /**
    * @Route("/alle/klanten", name="alleklanten")
    */
    public function alleKlanten(Request $request) {
      $klanten = $this->getDoctrine()->getRepository("AppBundle:klant")->findAll();
      $tekst = "";
      foreach($klanten as $klant) {
      $tekst = $tekst . $klant->getVoornaam() . $klant->getAchternaam() . $klant->getWoonplaats() . "<br />";

      }
      return new Response($tekst);
    }


    /**
    * @Route("/klanten/{voornaam}", name="klantopvoornaam")
    */
    public function KlantOpVoornaam(Request $request, $voornaam) {
      $klanten = $this->getDoctrine()->getRepository("AppBundle:klant")->findByVoornaam($voornaam);
      $tekst = "";
      foreach($klanten as $klant) {
      $tekst = $tekst . $klant->getVoornaam() . $klant->getAchternaam() . $klant->getWoonplaats() . "<br />";

      }
      return new Response($tekst);
    }

    /**
    * @Route("/omschrijving", name="artikel")
    */
    public function artikel(Request $request) {
      $artikelen = $this->getDoctrine()->getRepository("AppBundle:artikel")->findAll();
      $tekst = "";
      foreach($artikelen as $artikel) {
      $tekst = $tekst . $artikel->getOmschrijving() . "<br />";

      }
      return new Response($tekst);
    }
	
	/**
	* @Route("/klant/nieuw", name="klantnieuw")
	*/
	public function nieuweKlant(Request $request) {
		$nieuweKlant = new Klant();
		$form = $this->createForm(KlantType::class, $nieuweKlant);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($nieuweKlant);
			$em->flush();
			return $this->redirect($this->generateurl("klantnieuw"));
		}

		return new Response($this->render('form.html.twig', array('form' => $form->createView())));
	}
}
