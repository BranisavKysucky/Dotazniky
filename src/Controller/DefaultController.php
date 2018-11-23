<?php
namespace App\Controller;

use App\Entity\MesacnyZaznam;
use App\Entity\TyzdennyZaznam;
use App\Entity\Zamestnanec;
use App\Form\HomeType;
use App\Form\MesacnyType;
use App\Form\Model\HomeModel;
use App\Form\TyzdennyType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response ;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher;


class DefaultController extends AbstractController
{
    /**
     * @Route(path="/", name="index_action")
     */
    public function home (EntityManagerInterface $em, Request $request) {
        /** @var HomeModel $homeData */
        $homeData = new HomeModel();
        $form = $this->createForm(HomeType::class, $homeData);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Zamestnanec $zamestnanec */
            $zamestnanec = $homeData->getZamestnanec();
            $typZobrazenia = $homeData->getTypZobrazenia();
            $twigName = '';

            if ($typZobrazenia == 'tyzdenny') {
                $twigName = 'default/tyzdenny.html.twig';
            } else {
                $twigName = 'default/mesacny.html.twig';
            }
            return $this->render($twigName,['zamestnanec' => $zamestnanec]);
        }

        $zamestnanec = $em->getRepository('App:Zamestnanec')->findAll();

        return $this->render('default/home.html.twig', ['zamestnanec' => $zamestnanec]);


// takymto sposobom si mozem zobrazit nejaky udaj z databazy

//        $em = $this->getDoctrine()->getManager();
//        $zamestnanec = $em->getRepository('App:Zamestnanec')
//            ->findAll();
//
//        return $this->render('default/home.html.twig', [
//            'zamestnanec' => $zamestnanec,
//
//        ]);






     //   return $this->render('default/home.html.twig');

    }


    /**
     * @Route(path="/tyzdenny", name="tyzdenny")
     */
    public function tyzdenny () {
        return $this->render('default/tyzdenny.html.twig');
    }



    /**
     * @Route(path="/tyzdenny_form", methods={"POST"}, name="tyzdenny_upload")
     */
    public function tyzdenny_Action (Request $request, EntityManagerInterface $em) {


        $tyzdennyData = new TyzdennyZaznam();
        $form = $this->createForm(TyzdennyType::class, $tyzdennyData);
       // $tyzdennyData->setDate(\DateTime::createFromFormat('d-m-Y'));
        $form->handleRequest($request);

       // $this->updated = new \DateTime("datum_vyplnenia");


        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($tyzdennyData);
            $em->flush();

            return new JsonResponse(['msg' => 'Nahrate'], Response::HTTP_OK);
        }

        return new JsonResponse(['msg' => 'Doslo k chybe'], Response::HTTP_BAD_REQUEST);

    }

    /**
     * @Route("/tyzdenny/{zamestnanec}", name="tyzdenny_show")
     */
    public function tyzdenny_show (Zamestnanec $zamestnanec)
    {

       // dump($zamestnanec->getMesacnyZaznam()->getOtazka1Komentar());

        dump($zamestnanec);

        return $this->render('default/tyzdenny.html.twig',[
            'zamestnanec' => $zamestnanec
        ]);

    }








    /**
     * @Route(path="/mesacny", methods={"GET"},  name="mesacny_view")
     */
    public function mesacny(Request $request, EntityManagerInterface $em)
    {
        return $this->render('default/mesacny.html.twig');
    }

    /**
     * @Route(path="/mesacny_form", methods={"POST"}, name="mesacny_upload")
     */
    public function mesacnyAction( Request $request, EntityManagerInterface $em)
    {
        $mesacnyData = new MesacnyZaznam();
        $form = $this->createForm(MesacnyType::class, $mesacnyData);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($mesacnyData);
            $em->flush();
            // tento Json vrati odpoved, ak vsetko prebehlo ok
            //return new JsonResponse();
            return new JsonResponse(['msg' => 'Nahrate'], Response::HTTP_OK);
        }

        // tento Json vrati odpoved, ak doslo k chybe
        return new JsonResponse(['msg' => 'Doslo k chybe'], Response::HTTP_BAD_REQUEST);
    }



    /**
     * @Route("/mesacny/{zamestnanec}", name="mesacny_show")
     */
//    public function show($id)
    public function mesacny_show(Zamestnanec $zamestnanec)
    {
//        $zamestnanec = $this->getDoctrine()
//            ->getRepository(Zamestnanec::class)
//            ->find($id);
//        $mesacny_zaznam =  $zamestnanec->getMesacnyZaznam();

        dump($zamestnanec->getMesacnyZaznam()->getOtazka1Komentar());

        return $this->render('default/mesacny.html.twig',[
            'zamestnanec' => $zamestnanec
        ]);

    }






}