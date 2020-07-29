<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Chalet;
use App\Repository\ChaletRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ChaletController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservation(EntityManagerInterface $manager, Request $request) {

        $reservation = new Client();

        $form = $this->createFormBuilder($reservation)
                ->add('name', TextType::class)
                ->add('firstname', TextType::class)
                ->add('nom_ent', TextType::class, [
                    'required' => false
                ])
                ->add('siret', IntegerType::class, [
                    'required' => false
                ])
                ->add('tel', TelType::class)
                ->add('email', EmailType::class)
                ->add('type', EntityType::class, [
                    'class' => Chalet::class,
                    'choice_label' => 'type',
                    'expanded' => true
                ])
                ->add('save', SubmitType::class, [
                    'label' => 'Valider',
                    'attr' => [
                        'class' => 'btn btn-primary'
                    ]
                ])
                ->getForm();

                $form->handleRequest($request);

                if($form->isSubmitted() && $form->isValid()) {
                    $manager->persist($reservation);
                    $manager->flush();
                }
        return $this->render('reservation/index.html.twig', [
            'formReservation' => $form->createView()
        ]);
    }
}
