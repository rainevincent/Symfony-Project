<?php
/**
 * @Author: raine_v
 * @Date:   2016-01-21 22:57:11
 * @Last Modified by:   rainevincent
 * @Last Modified time: 2016-01-22 01:09:35
 */
 
 // src/WC/PlatformBundle/Controller/AdvertController.php
 
 namespace WC\PlatformBundle\Controller;
 
 use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 use Symfony\Component\HttpFoundation\Response;

 class AdvertController extends Controller
 {
 	/**
 	 * Display content page resquest
 	 *
 	 * @return Response
 	 * @author raine_v
 	 */
 	public function indexAction()
 	{
 		$content = $this->get("templating")->render("WCPlatformBundle:Advert:index.html.twig");
 		return new Response($content);
 	}
 }
 