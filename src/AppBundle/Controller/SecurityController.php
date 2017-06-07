<?php

namespace AppBundle\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use FOS\UserBundle\Controller\SecurityController as BaseSecurityController;


class SecurityController extends BaseSecurityController
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function loginAction(Request $request)
    {
        if ($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirect($this->generateUrl('homepage'));
        }

        $response = parent::loginAction($request);

        return $response;
    }
}
