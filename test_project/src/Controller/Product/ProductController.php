<?php
/**
 * @package App\Controller\Product
 * @category Controller
 */
namespace App\Controller\Product;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\Product\ProductRepository;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 * @see AbstractController
 */
class ProductController extends AbstractController
{
    /**
     * @access private
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * @access public
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @access public
     * @return JsonResponse
     * @since 1.0
     * @link /product/expensive
     * @see ProductRepository::findExpensiveProducts()
     */
    #[Route("/product/expensive", name: "expensive_products")]
    public function expensiveProducts()
    {
        $products = $this->productRepository->findExpensiveProducts();

        $productsArray = [];
        foreach ($products as $product) {
            $productsArray[] = [
                'id' => $product->getId(),
                'price' => $product->getPrice(),
            ];
        }

        return new JsonResponse($productsArray);
    }
}