<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Chapter;

class ChapterController extends AbstractController
{
    /**
     * @Route("/chapter", name="chapter")
     */
    public function index(): Response
    {
        $chapterRepository = $this->getDoctrine()->getRepository(Chapter::class);

        $chapters = $chapterRepository ->findAll();

        return $this->render('chapter/index.html.twig', [
            'chapters' => $chapters,
        ]);
    }

    public function save(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $chapter = new Chapter();
        $chapter->setName("Emperor's Children");
        $chapter->setPrimarch("Fulgrim");
        $chapter->setChapterMaster("Eidolon");

        $entityManager->persist($chapter);
        $entityManager->flush();

        return new Response("<h1>Chapter has been included in the annals of the Imperium, bearing the ID number #" . $chapter->getId() . "</h1>");
    }

    public function getChapter(int $id): Response// Chapter
    {
        $chapterRepository = $this->getDoctrine()->getRepository(Chapter::class);

        $chapter = $chapterRepository->find($id);

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
}
