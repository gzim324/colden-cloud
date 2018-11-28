<?php

namespace App\Controller;
 
use App\Entity\File;
use App\Form\UpdateFileType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class FileController extends Controller
{
    /**
     * @Route("/delete/{id}", name="delete_file")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteFileAction($id)
    {
        $file = $this->getDoctrine()->getRepository(File::class)->find($id); //I'm looking for a file id

        if ($file === null) {
            throw $this->createNotFoundException('Not Found entry in this database');
        }

        $entityManager = $this->getDoctrine()->getManager();

        if($file->getFile() !== null) {
            $file->removeUpload();
        }

        $entityManager->remove($file); //it's remove because the site is supposed work on localhost
        $entityManager->flush();

        return $this->redirect($this->generateUrl('home'));
    }

    /**
     * @Route("/update-file/{id}", name="update_file")
     * @Security("has_role('ROLE_ADMIN')")
     * @Template("file/updateFile.html.twig")
     */
    public function updateFileAction(Request $request, $id)
    {
        $updateFile = $this->getDoctrine()->getRepository(File::class)->find($id); //i'm looking for a file id

        if($updateFile === null) {
            throw $this->createNotFoundException('Not Found entry in this database');
        }

        $updateFileForm = $this->createForm(UpdateFileType::class, $updateFile); //edit form

        $updateFileForm->handleRequest($request);

        if($request->isMethod('POST')){
            if($updateFileForm->isValid()){

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($updateFile);
                $entityManager->flush();

                $updateFileForm->getData();

                return $this->redirect($this->generateUrl('home'));
            }
        }

        return array(
            'updateFile' => $updateFile,
            'updateFileForm' => isset($updateFileForm) ? $updateFileForm->createView() : null
        );
    }
}
