<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessagesController extends AbstractController
{
    /**
     * @Route("/messages", name="postMessage", methods={"POST"})
     */
    public function postMessages(): Response
    {

        $response = $this->json(["message" => "POST request from client"]);

        $response->setStatusCode("201");
        return $response;
    }

    /**
     * @Route("/messages", name="getMessages", methods={"GET"})
     */
    public function getMessages(Request $request): Response
    {
        return $this->json([
            "message" => "GET all messages response from server"
        ]);
    }

    /**
     * @Route("/messages/{id}", name="getMessage", methods={"GET"})
     */
    public function getMessage(Request $request): Response
    {
        return $this->json([
            "message" => "GET a single message from server"
        ]);
    }
    /**
     * @Route("/messages/{id}", name="putMessage", methods={"PUT"})
     */
    public function putMessage(Request $request): Response
    {
        return new Response();
    }
    /**
     * @Route("/messages/{id}", name="deleteMessage", methods={"DELETE"})
     */
    public function deleteMessage(Request $request): Response
    {
        return new Response();
    }
}
