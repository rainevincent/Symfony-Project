<?php
/**
 * @Author: raine_v
 * @Date:   2016-01-21 22:57:11
 * @Last Modified by:   raine_v
 * @Last Modified time: 2016-01-21 23:06:44
 */
 
 // src/WC/PlatformBundle/Controller/AdvertController.php
 
 namespace WC\PlatformBundle\Controller;
 use Symfony\Component\HttpFoundation\Response;

 class AdvertController 
 {
 	/**
 	 * Display content page resquest
 	 *
 	 * @return Response
 	 * @author raine_v
 	 */
 	public function indexAction()
 	{
 		return new Response("Hello World !");
 	}
 }
 