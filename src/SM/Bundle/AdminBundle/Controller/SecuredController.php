<?php

namespace SM\Bundle\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SM\Bundle\AdminBundle\Entity\Admin;

/**
 * @Route("/admin")
 */
class SecuredController extends Controller
{

    /**
     * @Route("/login", name="admin_login")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        // $user = new Admin();
        // $plainPassword = 'Thanhnganly1325';
        // $encoder = $this->container->get('security.password_encoder');
        // $encoded = $encoder->encodePassword($user, $plainPassword);
        // var_dump($encoded); die;
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        if (isset($error) && $error->getMessage() == 'Bad credentials.') {
            $code = 1;
            $message = 'Username / Password is incorrest';

            $error = new \Symfony\Component\Security\Core\Exception\BadCredentialsException($message, $code);
        }
        return array(
            'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
            'error' => $error,
        );

    }

    /**
     * @Route("/login_check", name="admin_security_check")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request

    }

    /**
     * @Route("/logout", name="admin_logout")
     */
    public function logoutAction()
    {
        // The security layer will intercept this request

    }

    /**
     * @Route("/hello", defaults={"name"="World"}),
     * @Route("/hello/{name}", name="_demo_secured_hello")
     * @Template()
     */
    public function helloAction($name)
    {
        return array(
            'name' => $name);

    }

    /**
     * @Route("/hello/admin/{name}", name="_demo_secured_hello_admin")
     * @Security("is_granted('ROLE_ADMIN')")
     * @Template()
     */
    public function helloadminAction($name)
    {
        return array(
            'name' => $name);

    }
}
