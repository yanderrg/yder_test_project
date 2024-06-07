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
class JavaSriptSectionController extends AbstractController
{
    /**
     * @access public
     * @return Response
     * @since 1.0
     * @link /javascript
     */
    #[Route("/javascript", name: "javascript")]
    public function index()
    {
        return $this->render('index.html.twig');
    }
}