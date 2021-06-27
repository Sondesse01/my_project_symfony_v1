<?php
namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Asset\Package;
//use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy;
//use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog_list", name="blog_list")
     */
    public function list(Request $request): Response
    {

//        $package = new Package(new EmptyVersionStrategy());
//        $package = new Package(new StaticVersionStrategy('v1'));
//        $package = new Package(new StaticVersionStrategy('v1', '%s?version=%s'));
//        $package = new Package(new JsonManifestVersionStrategy(__DIR__.'/rev-manifest.json'));


        // Absolute path
        // echo $package->getUrl('/image.png');
        // result: /image.png

        // Relative path
        //$pack = $package->getUrl('image.png');
        // result: image.png

//        $routeName = $request->attributes->get('_route');
//        $routeParameters = $request->attributes->get('_route_params');

// use this to get all the available attributes (not only routing ones):
//        $allAttributes = $request->attributes->all();
        // Absolute path
//        echo $package->getUrl('/image.png');
//// result: /image.png?v1
//
//// Relative path
//        echo $package->getUrl('image.png');
//// result: image.png?v1

//        echo $package->getUrl('/image.png');
// result: /image.png?version=v1

// puts the asset version before its path
//        $package = new Package(new StaticVersionStrategy('v1', '%2$s/%1$s'));
//
//        echo $package->getUrl('/image.png');
//// result: /v1/image.png
//
//        echo $package->getUrl('image.png');

//        echo $package->getUrl('css/app.css');



        return $this->render('blog/list.html.twig'
//            ,['pack' =>$pack, 'routeParameters' => $routeParameters]
        );
//        return $this->redirectToRoute('blog_list');

    }
    /**
     * @Route("/blog", name="blog")
     */
    public function index(){
        $rep = $this->getDoctrine()->getRepository(Article::class);
//        $article =$rep ->find(12);
          $articles =$rep ->findAll();

     return $this->render('blog/index.html.twig',['controller_name'=>'BlogController',
         'articles'=>$articles]);
    }
}