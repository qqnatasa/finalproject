<?php

/* @FOSUser/Controller/RegistrationController.php */
class __TwigTemplate_5de13f131d50786601cc9fec53057761e0de0b492be0f1c765157104721bdc22 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Controller/RegistrationController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Controller/RegistrationController.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\\UserBundle\\Controller;

use FOS\\UserBundle\\Event\\FilterUserResponseEvent;
use FOS\\UserBundle\\Event\\FormEvent;
use FOS\\UserBundle\\Event\\GetResponseUserEvent;
use FOS\\UserBundle\\Form\\Factory\\FactoryInterface;
use FOS\\UserBundle\\FOSUserEvents;
use FOS\\UserBundle\\Model\\UserInterface;
use FOS\\UserBundle\\Model\\UserManagerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;

/**
 * Controller managing the registration.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class RegistrationController extends Controller
{
    private \$eventDispatcher;
    private \$formFactory;
    private \$userManager;
    private \$tokenStorage;

    /**
     * @param Request \$request
     *
     * @return Response
     */
    public function registerAction(Request \$request)
    {
        \$user = \$this->userManager->createUser();
        \$user->setEnabled(true);

        \$event = new GetResponseUserEvent(\$user, \$request);
        \$this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, \$event);

        if (null !== \$event->getResponse()) {
            return \$event->getResponse();
        }

        \$form = \$this->formFactory->createForm();
        \$form->setData(\$user);

        \$form->handleRequest(\$request);

        if (\$form->isSubmitted()) {
            if (\$form->isValid()) {
                \$event = new FormEvent(\$form, \$request);
                \$this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, \$event);

                \$this->userManager->updateUser(\$user);

                if (null === \$response = \$event->getResponse()) {
                    \$url = \$this->generateUrl('fos_user_registration_confirmed');
                    \$response = new RedirectResponse(\$url);
                }

                \$this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent(\$user, \$request, \$response));

                return \$response;
            }

            \$event = new FormEvent(\$form, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_FAILURE, \$event);

            if (null !== \$response = \$event->getResponse()) {
                return \$response;
            }
        }

        return \$this->render('@FOSUser/Registration/register.html.twig', array(
            'form' => \$form->createView(),
        ));
    }

    /**
     * Tell the user to check their email provider.
     */
    public function checkEmailAction(Request \$request)
    {
        \$email = \$request->getSession()->get('fos_user_send_confirmation_email/email');

        if (empty(\$email)) {
            return new RedirectResponse(\$this->generateUrl('fos_user_registration_register'));
        }

        \$request->getSession()->remove('fos_user_send_confirmation_email/email');
        \$user = \$this->userManager->findUserByEmail(\$email);

        if (null === \$user) {
            return new RedirectResponse(\$this->container->get('router')->generate('fos_user_security_login'));
        }

        return \$this->render('@FOSUser/Registration/check_email.html.twig', array(
            'user' => \$user,
        ));
    }

    /**
     * Receive the confirmation token from user email provider, login the user.
     *
     * @param Request \$request
     * @param string  \$token
     *
     * @return Response
     */
    public function confirmAction(Request \$request, \$token)
    {
        \$userManager = \$this->userManager;

        \$user = \$userManager->findUserByConfirmationToken(\$token);

        if (null === \$user) {
            throw new NotFoundHttpException(sprintf('The user with confirmation token \"%s\" does not exist', \$token));
        }

        \$user->setConfirmationToken(null);
        \$user->setEnabled(true);

        \$event = new GetResponseUserEvent(\$user, \$request);
        \$this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRM, \$event);

        \$userManager->updateUser(\$user);

        if (null === \$response = \$event->getResponse()) {
            \$url = \$this->generateUrl('fos_user_registration_confirmed');
            \$response = new RedirectResponse(\$url);
        }

        \$this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRMED, new FilterUserResponseEvent(\$user, \$request, \$response));

        return \$response;
    }

    /**
     * Tell the user his account is now confirmed.
     */
    public function confirmedAction(Request \$request)
    {
        \$user = \$this->getUser();
        if (!is_object(\$user) || !\$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return \$this->render('@FOSUser/Registration/confirmed.html.twig', array(
            'user' => \$user,
            'targetUrl' => \$this->getTargetUrlFromSession(\$request->getSession()),
        ));
    }

    /**
     * @return string|null
     */
    private function getTargetUrlFromSession(SessionInterface \$session)
    {
        \$key = sprintf('_security.%s.target_path', \$this->tokenStorage->getToken()->getProviderKey());

        if (\$session->has(\$key)) {
            return \$session->get(\$key);
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Controller/RegistrationController.php";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\\UserBundle\\Controller;

use FOS\\UserBundle\\Event\\FilterUserResponseEvent;
use FOS\\UserBundle\\Event\\FormEvent;
use FOS\\UserBundle\\Event\\GetResponseUserEvent;
use FOS\\UserBundle\\Form\\Factory\\FactoryInterface;
use FOS\\UserBundle\\FOSUserEvents;
use FOS\\UserBundle\\Model\\UserInterface;
use FOS\\UserBundle\\Model\\UserManagerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;

/**
 * Controller managing the registration.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class RegistrationController extends Controller
{
    private \$eventDispatcher;
    private \$formFactory;
    private \$userManager;
    private \$tokenStorage;

    /**
     * @param Request \$request
     *
     * @return Response
     */
    public function registerAction(Request \$request)
    {
        \$user = \$this->userManager->createUser();
        \$user->setEnabled(true);

        \$event = new GetResponseUserEvent(\$user, \$request);
        \$this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, \$event);

        if (null !== \$event->getResponse()) {
            return \$event->getResponse();
        }

        \$form = \$this->formFactory->createForm();
        \$form->setData(\$user);

        \$form->handleRequest(\$request);

        if (\$form->isSubmitted()) {
            if (\$form->isValid()) {
                \$event = new FormEvent(\$form, \$request);
                \$this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, \$event);

                \$this->userManager->updateUser(\$user);

                if (null === \$response = \$event->getResponse()) {
                    \$url = \$this->generateUrl('fos_user_registration_confirmed');
                    \$response = new RedirectResponse(\$url);
                }

                \$this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent(\$user, \$request, \$response));

                return \$response;
            }

            \$event = new FormEvent(\$form, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_FAILURE, \$event);

            if (null !== \$response = \$event->getResponse()) {
                return \$response;
            }
        }

        return \$this->render('@FOSUser/Registration/register.html.twig', array(
            'form' => \$form->createView(),
        ));
    }

    /**
     * Tell the user to check their email provider.
     */
    public function checkEmailAction(Request \$request)
    {
        \$email = \$request->getSession()->get('fos_user_send_confirmation_email/email');

        if (empty(\$email)) {
            return new RedirectResponse(\$this->generateUrl('fos_user_registration_register'));
        }

        \$request->getSession()->remove('fos_user_send_confirmation_email/email');
        \$user = \$this->userManager->findUserByEmail(\$email);

        if (null === \$user) {
            return new RedirectResponse(\$this->container->get('router')->generate('fos_user_security_login'));
        }

        return \$this->render('@FOSUser/Registration/check_email.html.twig', array(
            'user' => \$user,
        ));
    }

    /**
     * Receive the confirmation token from user email provider, login the user.
     *
     * @param Request \$request
     * @param string  \$token
     *
     * @return Response
     */
    public function confirmAction(Request \$request, \$token)
    {
        \$userManager = \$this->userManager;

        \$user = \$userManager->findUserByConfirmationToken(\$token);

        if (null === \$user) {
            throw new NotFoundHttpException(sprintf('The user with confirmation token \"%s\" does not exist', \$token));
        }

        \$user->setConfirmationToken(null);
        \$user->setEnabled(true);

        \$event = new GetResponseUserEvent(\$user, \$request);
        \$this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRM, \$event);

        \$userManager->updateUser(\$user);

        if (null === \$response = \$event->getResponse()) {
            \$url = \$this->generateUrl('fos_user_registration_confirmed');
            \$response = new RedirectResponse(\$url);
        }

        \$this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRMED, new FilterUserResponseEvent(\$user, \$request, \$response));

        return \$response;
    }

    /**
     * Tell the user his account is now confirmed.
     */
    public function confirmedAction(Request \$request)
    {
        \$user = \$this->getUser();
        if (!is_object(\$user) || !\$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return \$this->render('@FOSUser/Registration/confirmed.html.twig', array(
            'user' => \$user,
            'targetUrl' => \$this->getTargetUrlFromSession(\$request->getSession()),
        ));
    }

    /**
     * @return string|null
     */
    private function getTargetUrlFromSession(SessionInterface \$session)
    {
        \$key = sprintf('_security.%s.target_path', \$this->tokenStorage->getToken()->getProviderKey());

        if (\$session->has(\$key)) {
            return \$session->get(\$key);
        }

        return null;
    }
}
", "@FOSUser/Controller/RegistrationController.php", "C:\\Bitnami\\wampstack-7.1.22-0\\frameworks\\project\\templates\\bundles\\FOSUserBundle\\Controller\\RegistrationController.php");
    }
}
