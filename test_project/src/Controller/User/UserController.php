<?php
/**
 * @package App\Controller\User
 * @category Controller
 */
namespace App\Controller\User;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Form\User\UserType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 * @see AbstractController
 */
class UserController extends AbstractController
{

    /**
     * @access private
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @access private
     * @var ValidatorInterface
     */
    private $validator;

    /**
     * @access public
     * @param SerializerInterface $serializer
     * @param ValidatorInterface $validator
     */
    public function __construct(SerializerInterface $serializer, ValidatorInterface $validator)
    {
        $this->serializer = $serializer;
        $this->validator = $validator;
    }

    /**
     * @access public
     * @param Request $request
     * @return Response
     * @throws ExceptionInterface
     * @link /user/new
     * @see  UserType::class
     * @see  User::class
     * @since 1.0
     */
    #[Route('/user/new', name: "user_new")]
    public function new(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $data = $this->serializer->normalize(
                    $user,
                    null,
                    [AbstractNormalizer::ATTRIBUTES => ['username', 'email']]
                );
                file_put_contents('users.json', json_encode($data));

                return new Response(Response::HTTP_CREATED);
            } elseif ($form->isSubmitted()) {
                $errors = $this->validator->validate($user);
                if (count($errors) > 0) {
                    $errorMessages = $this->getErrorsFromValidation($errors);

                    return new JsonResponse(['errors' => $errorMessages], Response::HTTP_BAD_REQUEST);
                }
            }
            return new Response(Response::HTTP_BAD_REQUEST);
        }

        return $this->render('user/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @access private
     * @param ConstraintViolationList $errors
     * @return array
     */
    private function getErrorsFromValidation(ConstraintViolationList $errors): array
    {
        $errorMessages = [];

        foreach ($errors as $violation) {
            $errorMessages[] = $violation->getMessage();
        }

        return $errorMessages;
    }

}