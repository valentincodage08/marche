<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ClientRepository;
use App\Entity\Chalet;
use App\Repository\ChaletRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ChaletController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservation(EntityManagerInterface $manager, Request $request, ChaletRepository $repo) {

        $reservation = new Client();
        $chalet = $repo->findOneBy(['type' => '2x2']);
        $chalet2 = $repo->findOneBy(['type' => '2x3']);

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
                ->getForm();
                if($chalet->getNumber() > 0 && $chalet2->getNumber() > 0) {
                    $form->add('type', ChoiceType::class, [
                        'choices'  => [
                            '2x2' => '1',
                            '2x3' => '2',],
                            'expanded' => 'true',
                        
                    ]);
                }
                if($chalet->getNumber() > 0 && $chalet2->getNumber() == 0) {
                    $form->add('type', ChoiceType::class, [
                        'choices'  => [
                            '2x2' => '1'
                        ],
                        'expanded' => 'true',
                    ]);
                }
                if($chalet->getNumber() == 0 && $chalet2->getNumber() > 0) {
                    $form->add('type', ChoiceType::class, [
                        'choices'  => [
                            '2x3' => '2'
                        ],
                        'expanded' => 'true',
                    ]);
                }
                if($chalet->getNumber() == 0 && $chalet2->getNumber() == 0) {
                    return $this->render('reservation/test.html.twig');
                }

                $form->handleRequest($request);

                if($form->isSubmitted() && $form->isValid()) {

                    if ($reservation->getType() == '1') {
                        $chalet = $repo->findOneBy(['type' => '2x2']);
                        $chalet->setNumber($chalet->getNumber()-1);
                        $manager->persist($reservation);
                        $manager->persist($chalet);
                    } else {
                        $chalet = $repo->findOneBy(['type' => '2x3']);
                        $chalet->setNumber($chalet->getNumber()-1);
                        $manager->persist($reservation);
                        $manager->persist($chalet);
                }
                $manager->flush();
                return $this->redirectToRoute('app_register');
            }
        return $this->render('reservation/index.html.twig', [
            'formReservation' => $form->createView()
        ]);
    }
}
