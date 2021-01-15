<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    /**
     * @Route("/task", name="task")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();

        /*
        $taskRepo = $this->getDoctrine()->getRepository(Task::class);
        $tasks = $taskRepo->findAll();
        foreach($tasks as $task)
        {
            echo $task->getUser()->getName().": ".$task->getTitle().'<br>';
        }
        */
        /*
        $userRepo = $this->getDoctrine()->getRepository(User::class);
        $users = $userRepo->findAll();
        foreach($users as $user)
        {
            echo '<h1>'.$user->getName().' '.$user->getSurname().'</h1>';
            foreach($user->getTasks() as $task)
            {
                echo '<p>'.$task->getTitle().'</p>';
            }
        }
        */

        return $this->render('task/index.html.twig', [
            'controller_name' => 'TaskController',
        ]);
    }
}
