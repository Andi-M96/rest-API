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
// echo password_hash("andi", PASSWORD_DEFAULT);

// $password = "ande";
// $passwordHash = password_hash($password, PASSWORD_DEFAULT);



$passwordHash = '$2a$04$08KDO94wJ.T5FvBaao.qXO1H1dI1W3MuqPRQWLrnYOBDUMz6imGZW';

// if (password_verify($password, $passwordHash)) {
//     echo  " passwords match!";
// } else {
//     echo "passwords dont match";
// }



if ((isset($_SERVER['PHP_AUTH_USER']) && ($_SERVER['PHP_AUTH_USER'] == "onde")) &&
    (isset($_SERVER['PHP_AUTH_PW']) && (password_verify($_SERVER['PHP_AUTH_PW'], $passwordHash)))
) {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
} else {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
}
