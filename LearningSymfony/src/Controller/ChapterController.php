<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\MakerBundle\Validator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Chapter;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Email;

use App\Form\ChapterType;

class ChapterController extends AbstractController
{
    /**
     * @Route("/chapter", name="chapter")
     */
    public function index(): Response
    {
        $chapterRepository = $this->getDoctrine()->getRepository(Chapter::class);

        $chapters = $chapterRepository->findAll();

        /*
        $chapter = $chapterRepository->findOneBy([
            "primarch" => "Fulgrim"
        ]);
        $chapter = $chapterRepository->findBy([
            "primarch" => "Fulgrim"
        ], [
            'id' => 'DESC']);
        var_dump($chapter);

        $queryBuilder = $chapterRepository->createQueryBuilder('a')->andWhere("a.primarch IS NULL")->getQuery();
        $resultSet = $queryBuilder->execute();
        var_dump($resultSet);

        echo '<hr>';

        $entityManager = $this->getDoctrine()->getManager();
        $dql = "SELECT a FROM App\Entity\Chapter a WHERE a.primarch = 'Fulgrim'";
        $dqlQuery = $entityManager->createQuery($dql);
        $resultDql = $dqlQuery->execute();
        var_dump($resultDql);

        echo '<hr>';

        $dbConnection = $this->getDoctrine()->getConnection();
        $sql = "SELECT * FROM chapters ORDER BY id DESC";
        $prepare = $dbConnection->prepare($sql);
        $prepare->execute();
        $sqlResults =$prepare->fetchAll();
        var_dump($sqlResults);
        echo '<hr>';

        */
        /*
        $chaptersWithoutPrimarch = $chapterRepository->findByPrimarch('IS NULL');
        var_dump($chaptersWithoutPrimarch);
        echo '<hr>';
        $emperorsChildren = $chapterRepository->findByName("= 'Emperors Children'");
        var_dump($emperorsChildren);
        echo '<hr>';
        $bloodRavens = $chapterRepository->findByChapterMaster("= 'Gabriel Angelos'");
        var_dump($bloodRavens);
*/
        return $this->render('chapter/register.html.twig', [
            'chapters' => $chapters,
        ]);
    }

    public function validateEmail($email)
    {
        $validator = Validation::createValidator();
        $errors = $validator->validate($email, [
            new Email()
        ]);

        if (count($errors) != 0) {
            $message = '<h2>Email validation failed</h2><ul>';
        foreach ($errors as $error){
            $message.= "<li>$error</li>";
            }
        $message.='</ul>';
        } else {
            $message = '<h2>Email validation successful</h2>';
        }
        echo "<h1>$email</h1>$message";

        die();
    }

    public function create(Request $request): Response
    {
        $chapter = new Chapter();
        /*
                $form = $this->createFormBuilder($chapter)
                    //->setAction('save')
                    ->setMethod('POST')
                    ->add('name', TextType::class, [
                        'label' => 'Chapter name',
                        'attr' => ['style' => 'display: block']
                    ])
                    ->add('primarch', TextType::class, [
                        'label' => 'Genefather',
                        'attr' => ['style' => 'display: block']
                    ])
                    ->add('chapter_master', TextType::class, [
                        'label' => 'Chapter master',
                        'attr' => ['style' => 'display: block']
                    ])
                    ->add('submit', SubmitType::class, [
                        'label' => 'Register chapter',
                        'attr' => ['class' => 'btn']
                    ])
                    ->getForm();
        */
        $form = $this->createForm(ChapterType::class, $chapter);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chapter);
            $entityManager->flush();
            $session = new Session();
            $session->getFlashBag()->add('message', 'Chapter added to the Imperial ledger');
            return $this->redirectToRoute('chapter.create');
        }

        return $this->render('chapter/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function save(): Response
    {
//        $entityManager = $this->getDoctrine()->getManager();


//        $entityManager = $this->getDoctrine()->getManager();
//        $chapter = new Chapter();
//        $chapter->setName("Emperors Children");
//        $chapter->setPrimarch("Fulgrim");
//        $chapter->setChapterMaster("Eidolon");
//        $entityManager->persist($chapter);
//        $entityManager->flush();
        if (isset($_POST['form'])) {
            $message = "<h1>Chapter has been included in the ledger of the Imperium, bearing the ID number #" . $chapter->getId() . "</h1>";
        } else {
            $message = "<h1>Chapter has not been included, please check your application.</h1>";
        }

        return new Response($message);
    }

    public function find(Chapter $chapter = null): Response //int $id): Response
    {
        //$chapterRepository = $this->getDoctrine()->getRepository(Chapter::class);
        //$chapter = $chapterRepository->find($id);
        // Al castear el parámetro hará el Find automáticamente con poner el ID en el parámetro; nos podemos ahorrar el find manual


        if ($chapter instanceof Chapter) {
            $message = "The " . $chapter->getName() . " chapter bear";
            if (!!$chapter->getPrimarch()) {
                $message .= " the geneseed of " . $chapter->getPrimarch();
            } else {
                $message .= " an unknown geneseed";
            }
            $message .= " and are led by Chapter Master " . $chapter->getChapterMaster();
        } else {
            $message = "There is no such Chapter";
        }
        return new Response("<h1>$message</h1>");
    }

    public function update($id)
    {
        $doctrine = $this->getDoctrine();
        $entityManager = $doctrine->getManager();
        $chapterRepository = $entityManager->getRepository(Chapter::class);
        $chapter = $chapterRepository->find($id);

        if (!($chapter instanceof Chapter)) {
            $message = "Requested chapter was not found on the Imperial Ledger";
        } else {
            $chapter->setName("Sentinel Titans");
            $chapter->setPrimarch("Vulcan");
            $chapter->setChapterMaster("Zavala");
        }

        $entityManager->persist($chapter);
        $entityManager->flush();

        return new Response("Chapter " . $chapter->getName() . " data updated");
    }

    public function delete(Chapter $chapter = null)
    {
        if ($chapter instanceof Chapter) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($chapter);
            $entityManager->flush();
            $message = "<h1>Chapter " . $chapter->getName() . " deleted from all Imperial records</h1>";
        } else {
            $message = "<h1>Requested chapter does not exist on Imperial records</h1>";
        }
        return new Response($message);
    }
}
