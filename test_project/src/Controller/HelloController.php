<?php
/**
 * @package App\Controller
 * @category Controller
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 * @see AbstractController
 */
class HelloController extends AbstractController
{

    /**
     * @access public
     * @param string $name
     * @return Response
     * @since 1.0
     * @link /hello/{name}
     */
     #[Route("/hello/{name}", name: "hello")]
    public function index($name = 'Word')
    {
        return new Response('Hello ' . $name);
    }
}