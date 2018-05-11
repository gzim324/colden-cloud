<?php
 
namespace App\Controller;

use App\Entity\Message;
use App\Form\UpdateMessageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class MessageController extends Controller
{
    /**
     * @Route("/delete-message/{id}", name="delete_message")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteMessageAction($id){
        $message = $this->getDoctrine()->getRepository(Message::class)->find($id); //i'm looking for a message id

        if ($message === null) {
            throw $this->createNotFoundException('Not Found entry in this database');
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($message);
        $entityManager->flush(); 

        return $this->redirect($this->generateUrl('home'));
    }

    /**
     * @Route("/update-message/{id}", name="update_message")
     * @Security("has_role('ROLE_ADMIN')")
     * @Template("message/updateMessage.html.twig")
     */
    public function updateMessageAction(Request $request, $id){
        $updateMessage = $this->getDoctrine()->getRepository(Message::class)->find($id); //i'm looking for a message id

        if($updateMessage === null){
            throw $this->createNotFoundException('Not Found entry in this database');
        }

        $formUpdateMessage = $this->createForm(UpdateMessageType::class, $updateMessage); //edit form

        $formUpdateMessage->handleRequest($request);

        if($request->isMethod('POST')){
            if($formUpdateMessage->isValid()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($updateMessage);
                $entityManager->flush();

                $formUpdateMessage->getData();

                return $this->redirect($this->generateUrl('home'));
            }
        }

        return array(
            'updateMessage' => $updateMessage,
            'formUpdateMessage' => isset($formUpdateMessage) ? $formUpdateMessage->createView() : null
        );
    }
}
