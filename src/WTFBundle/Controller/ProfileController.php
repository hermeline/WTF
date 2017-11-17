<?php
/**
 * Created by PhpStorm.
 * User: bibouille
 * Date: 17/11/17
 * Time: 11:01
 */
namespace WTFBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\ProfileController as BaseController;
use WTFBundle\Entity\Conference;

class ProfileController extends BaseController
{
    /**
     * Show the user own list.
     */
    public function showAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $currentId= $user->getId();
        $em = $this->getDoctrine()->getManager();

        $conferences = $em->getRepository('WTFBundle:Conference')->findById($currentId);

        return $this->render('@FOSUser/Profile/show.html.twig', array(
            'user' => $user,
            'conferences' => $conferences,
        ));
    }
}