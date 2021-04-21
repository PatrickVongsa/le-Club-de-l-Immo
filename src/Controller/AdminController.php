<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class AdminController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function loggin()
    {
        return $this->twig->render('admin/loggin.html.twig');
    }
    public function index()
    {
        return $this->twig->render('admin/index.html.twig');
    }
    public function modifAnnonce()
    {
        return $this->twig->render('admin/modifannonce.html.twig');
    }
    public function ajoutAnnonce()
    {
        return $this->twig->render('admin/ajoutannonce.html.twig');
    }
    public function modifSlogan()
    {
        return $this->twig->render('admin/modifslogan.html.twig');
    }
    public function modifDocument()
    {
        return $this->twig->render('admin/modifdocument.html.twig');
    }
    public function ajoutPhoto()
    {
        var_dump($_POST);
        $this->upload();
        return $this->twig->render('admin/ajoutphoto.html.twig');
    }
    //fonction d'ajout des images par formulaire 
    private function upload()
    {
        //check methode serveur
        if ($_SERVER["REQUEST_METHOD"] === "POST" && (!empty($_FILES))) {
            //set dossier reception
            $uploadDir = __DIR__ . "/";
            //recup extension fichier
            $extension = pathinfo($_FILES['pictureUpload']['name'], PATHINFO_EXTENSION);
            //set chemin destination fichier
            $uploadFile = $uploadDir . basename($_FILES['pictureUpload']['name']);
            //set liste d'extensions
            $extensionsOk = ['jpg', 'jpeg', 'png'];
            //check extension du fichier vs extensions autorisées
            if (!in_array($extension, $extensionsOk)) {
                echo 'L\'image doit etre de type jpeg, jpg ou png.';
            } else {
                move_uploaded_file($_FILES['pictureUpload']['tmp_name'], $uploadFile);
                echo "file uploaded";
            }
        }
    }
}
