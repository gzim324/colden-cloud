<?php
 
namespace App\Controller;

use App\Entity\File;
use App\Entity\Message;
use App\Form\DocType;
use App\Form\MessageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class StartController extends Controller
{

    /**
     * @Route("/", name="home")
     * @Template("start/home.html.twig")
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @Security("has_role('ROLE_USER')")
     */
    public function homeAction(Request $request) //for role_admin
    {
        //@Security allow role_user, because inside I check what roles has user.

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) { //if user has role_user, I redirect him to method below
            return $this->redirectToRoute('homeUser');
        }

        $addFile = new File();  // instance class file

        //Why DocType? because FileType is already exist
        $formFile = $this->createForm(DocType::class, $addFile); //form adding file

        $formFile->handleRequest($request); //I'm getting what's data was in the form

        if($request->isMethod('POST')){ //I'm checking if this is method post
            if($formFile->isSubmitted() && $formFile->isValid()) { //checking if data is valid and submitted
                $entityManager = $this->getDoctrine()->getManager(); //

                if($addFile->getName() === null) { //if there is no name, it'll be get
                    $addFile->upload();
                }else {
                    $addFile->setName($addFile->getPath());
                    $file = $addFile->getFile(); //add file
                    $fileName = $addFile->getPath(); //get path


                    $file->move(
                        $file->getUploadRootDir(),
                        $fileName
                    );

                    $addFile->setFile($fileName);
                    $addFile->setVisibility(false); //set visibility file's to false
                }
 
                $entityManager->persist($addFile);
                $entityManager->flush();

                $formFile->getData();

                return $this->redirect($this->generateUrl('home')); //after adding, it redirects to home
            }
        }
        $resultFormFile = $this->getDoctrine()->getRepository(File::class)->allFile(); //select all file

        ////////////////

        $addMessage = new Message(); //instance class message

        $formMessage = $this->createForm(MessageType::class, $addMessage); //form adding message

        $formMessage->handleRequest($request);

        if($request->isMethod('POST')){
            if($formMessage->isSubmitted() && $formMessage->isValid()){
                $entityManager = $this->getDoctrine()->getManager();
                $addMessage->setVisibility(false); //set visibility message's to false
                $entityManager->persist($addMessage);
                $entityManager->flush();

                $formMessage->getData();

                return $this->redirect($this->generateUrl('home'));
            }
        }
        $resultFormMessage = $this->getDoctrine()->getRepository(Message::class)->allMessage(); //select all message

        return array(
            'resultFormFile' => $resultFormFile,
            'resultFormMessage' => $resultFormMessage,
            'formFile' => isset($formFile) ? $formFile->createView() : null,
            'formMessage' => isset($formMessage) ? $formMessage->createView() : null
        );
    }

    /**
     * @Route("/home", name="homeUser")
     * @Template("start/homeUser.html.twig")
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @Security("has_role('ROLE_USER')")
     */
    public function homeUserAction(Request $request)  //for role_user
    {
        $addFile = new File();

        $formFile = $this->createForm(DocType::class, $addFile);

        $formFile->handleRequest($request);

        if($request->isMethod('POST')){
            if($formFile->isSubmitted() && $formFile->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();

                if($addFile->getName() === null){
                    $addFile->upload();
                }else {
                    $file = $addFile->getFile();
                    $fileName = $addFile->getPath();

                    $file->move(
                        $file->getUploadRootDir(),
                        $fileName
                    );

                    $addFile->setFile($fileName);
                }

                $addFile->setVisibility(true); //set visibility file's to true
                $entityManager->persist($addFile);
                $entityManager->flush();

                $formFile->getData();

                return $this->redirect($this->generateUrl('homeUser'));
            }
        }
        $resultFormFile = $this->getDoctrine()->getRepository(File::class)->fileVisibility(); //select visibility file

        ////////////////

        $addMessage = new Message();

        $formMessage = $this->createForm(MessageType::class, $addMessage);

        $formMessage->handleRequest($request);

        if($request->isMethod('POST')){
            if($formMessage->isSubmitted() && $formMessage->isValid()){
                $entityManager = $this->getDoctrine()->getManager();
                $addMessage->setVisibility(true);    //set visibility message's to true
                $entityManager->persist($addMessage);
                $entityManager->flush();

                $formMessage->getData();

                return $this->redirect($this->generateUrl('homeUser'));
            }
        }
        $resultFormMessage = $this->getDoctrine()->getRepository(Message::class)->messageVisibility(); //select visibility message

        return array(
            'resultFormFile' => $resultFormFile,
            'resultFormMessage' => $resultFormMessage,
            'formFile' => isset($formFile) ? $formFile->createView() : null,
            'formMessage' => isset($formMessage) ? $formMessage->createView() : null
        );
    }
}