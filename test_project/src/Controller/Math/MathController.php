<?php
/**
 * @package App\Controller\Math
 * @category Controller
 */
namespace App\Controller\Math;

use App\Service\Math\AdditionService;
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
class MathController extends AbstractController
{
    /**
     * @access private
     * @var AdditionService
     */
    private $additionService;

    /**
     * @access public
     * @param AdditionService $additionService
     */
    public function __construct(AdditionService $additionService)
    {
        $this->additionService = $additionService;
    }

    /**
     * @access public
     * @param float $a
     * @param float $b
     * @return Response
     * @since 1.0
     * @link /add/{a}/{b}
     * @see AdditionService::add()
     */
    #[Route("/add/{a}/{b}", name: "add")]
    public function add(float $a, float $b): Response
    {
        $result = $this->additionService->add($a, $b);
        return new Response('Result: ' . $result);

    }

}