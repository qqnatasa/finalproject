<?php

/* @FOSUser/Controller/ResettingController.php */
class __TwigTemplate_f97d6558b59cebcbc0108525e5d0464c8a6dcba7c7e5029b35b67d8d8f0bd1e3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Controller/ResettingController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Controller/ResettingController.php"));

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
use FOS\\UserBundle\\Event\\GetResponseNullableUserEvent;
use FOS\\UserBundle\\Event\\GetResponseUserEvent;
use FOS\\UserBundle\\Form\\Factory\\FactoryInterface;
use FOS\\UserBundle\\FOSUserEvents;
use FOS\\UserBundle\\Mailer\\MailerInterface;
use FOS\\UserBundle\\Model\\UserManagerInterface;
use FOS\\UserBundle\\Util\\TokenGeneratorInterface;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Controller managing the resetting of the password.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class ResettingController extends Controller
{
    private \$eventDispatcher;
    private \$formFactory;
    private \$userManager;
    private \$tokenGenerator;
    private \$mailer;

    /**
     * @var int
     */
    private \$retryTtl;

    /**
     * @param EventDispatcherInterface \$eventDispatcher
     * @param FactoryInterface         \$formFactory
     * @param UserManagerInterface     \$userManager
     * @param TokenGeneratorInterface  \$tokenGenerator
     * @param MailerInterface          \$mailer
     * @param int                      \$retryTtl
     */
    public function __construct(EventDispatcherInterface \$eventDispatcher, FactoryInterface \$formFactory, UserManagerInterface \$userManager, TokenGeneratorInterface \$tokenGenerator, MailerInterface \$mailer, \$retryTtl)
    {
        \$this->eventDispatcher = \$eventDispatcher;
        \$this->formFactory = \$formFactory;
        \$this->userManager = \$userManager;
        \$this->tokenGenerator = \$tokenGenerator;
        \$this->mailer = \$mailer;
        \$this->retryTtl = \$retryTtl;
    }

    /**
     * Request reset user password: show form.
     */
    public function requestAction()
    {
        return \$this->render('@FOSUser/Resetting/request.html.twig');
    }

    /**
     * Request reset user password: submit form and send email.
     *
     * @param Request \$request
     *
     * @return Response
     */
    public function sendEmailAction(Request \$request)
    {
        \$username = \$request->request->get('username');

        \$user = \$this->userManager->findUserByUsernameOrEmail(\$username);

        \$event = new GetResponseNullableUserEvent(\$user, \$request);
        \$this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_SEND_EMAIL_INITIALIZE, \$event);

        if (null !== \$event->getResponse()) {
            return \$event->getResponse();
        }

        if (null !== \$user && !\$user->isPasswordRequestNonExpired(\$this->retryTtl)) {
            \$event = new GetResponseUserEvent(\$user, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_RESET_REQUEST, \$event);

            if (null !== \$event->getResponse()) {
                return \$event->getResponse();
            }

            if (null === \$user->getConfirmationToken()) {
                \$user->setConfirmationToken(\$this->tokenGenerator->generateToken());
            }

            \$event = new GetResponseUserEvent(\$user, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_SEND_EMAIL_CONFIRM, \$event);

            if (null !== \$event->getResponse()) {
                return \$event->getResponse();
            }

            \$this->mailer->sendResettingEmailMessage(\$user);
            \$user->setPasswordRequestedAt(new \\DateTime());
            \$this->userManager->updateUser(\$user);

            \$event = new GetResponseUserEvent(\$user, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_SEND_EMAIL_COMPLETED, \$event);

            if (null !== \$event->getResponse()) {
                return \$event->getResponse();
            }
        }

        return new RedirectResponse(\$this->generateUrl('fos_user_resetting_check_email', array('username' => \$username)));
    }

    /**
     * Tell the user to check his email provider.
     *
     * @param Request \$request
     *
     * @return Response
     */
    public function checkEmailAction(Request \$request)
    {
        \$username = \$request->query->get('username');

        if (empty(\$username)) {
            // the user does not come from the sendEmail action
            return new RedirectResponse(\$this->generateUrl('fos_user_resetting_request'));
        }

        return \$this->render('@FOSUser/Resetting/check_email.html.twig', array(
            'tokenLifetime' => ceil(\$this->retryTtl / 3600),
        ));
    }

    /**
     * Reset user password.
     *
     * @param Request \$request
     * @param string  \$token
     *
     * @return Response
     */
    public function resetAction(Request \$request, \$token)
    {
        \$user = \$this->userManager->findUserByConfirmationToken(\$token);

        if (null === \$user) {
            return new RedirectResponse(\$this->container->get('router')->generate('fos_user_security_login'));
        }

        \$event = new GetResponseUserEvent(\$user, \$request);
        \$this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_RESET_INITIALIZE, \$event);

        if (null !== \$event->getResponse()) {
            return \$event->getResponse();
        }

        \$form = \$this->formFactory->createForm();
        \$form->setData(\$user);

        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$event = new FormEvent(\$form, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_RESET_SUCCESS, \$event);

            \$this->userManager->updateUser(\$user);

            if (null === \$response = \$event->getResponse()) {
                \$url = \$this->generateUrl('fos_user_profile_show');
                \$response = new RedirectResponse(\$url);
            }

            \$this->eventDispatcher->dispatch(
                FOSUserEvents::RESETTING_RESET_COMPLETED,
                new FilterUserResponseEvent(\$user, \$request, \$response)
            );

            return \$response;
        }

        return \$this->render('@FOSUser/Resetting/reset.html.twig', array(
            'token' => \$token,
            'form' => \$form->createView(),
        ));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Controller/ResettingController.php";
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
use FOS\\UserBundle\\Event\\GetResponseNullableUserEvent;
use FOS\\UserBundle\\Event\\GetResponseUserEvent;
use FOS\\UserBundle\\Form\\Factory\\FactoryInterface;
use FOS\\UserBundle\\FOSUserEvents;
use FOS\\UserBundle\\Mailer\\MailerInterface;
use FOS\\UserBundle\\Model\\UserManagerInterface;
use FOS\\UserBundle\\Util\\TokenGeneratorInterface;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Controller managing the resetting of the password.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class ResettingController extends Controller
{
    private \$eventDispatcher;
    private \$formFactory;
    private \$userManager;
    private \$tokenGenerator;
    private \$mailer;

    /**
     * @var int
     */
    private \$retryTtl;

    /**
     * @param EventDispatcherInterface \$eventDispatcher
     * @param FactoryInterface         \$formFactory
     * @param UserManagerInterface     \$userManager
     * @param TokenGeneratorInterface  \$tokenGenerator
     * @param MailerInterface          \$mailer
     * @param int                      \$retryTtl
     */
    public function __construct(EventDispatcherInterface \$eventDispatcher, FactoryInterface \$formFactory, UserManagerInterface \$userManager, TokenGeneratorInterface \$tokenGenerator, MailerInterface \$mailer, \$retryTtl)
    {
        \$this->eventDispatcher = \$eventDispatcher;
        \$this->formFactory = \$formFactory;
        \$this->userManager = \$userManager;
        \$this->tokenGenerator = \$tokenGenerator;
        \$this->mailer = \$mailer;
        \$this->retryTtl = \$retryTtl;
    }

    /**
     * Request reset user password: show form.
     */
    public function requestAction()
    {
        return \$this->render('@FOSUser/Resetting/request.html.twig');
    }

    /**
     * Request reset user password: submit form and send email.
     *
     * @param Request \$request
     *
     * @return Response
     */
    public function sendEmailAction(Request \$request)
    {
        \$username = \$request->request->get('username');

        \$user = \$this->userManager->findUserByUsernameOrEmail(\$username);

        \$event = new GetResponseNullableUserEvent(\$user, \$request);
        \$this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_SEND_EMAIL_INITIALIZE, \$event);

        if (null !== \$event->getResponse()) {
            return \$event->getResponse();
        }

        if (null !== \$user && !\$user->isPasswordRequestNonExpired(\$this->retryTtl)) {
            \$event = new GetResponseUserEvent(\$user, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_RESET_REQUEST, \$event);

            if (null !== \$event->getResponse()) {
                return \$event->getResponse();
            }

            if (null === \$user->getConfirmationToken()) {
                \$user->setConfirmationToken(\$this->tokenGenerator->generateToken());
            }

            \$event = new GetResponseUserEvent(\$user, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_SEND_EMAIL_CONFIRM, \$event);

            if (null !== \$event->getResponse()) {
                return \$event->getResponse();
            }

            \$this->mailer->sendResettingEmailMessage(\$user);
            \$user->setPasswordRequestedAt(new \\DateTime());
            \$this->userManager->updateUser(\$user);

            \$event = new GetResponseUserEvent(\$user, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_SEND_EMAIL_COMPLETED, \$event);

            if (null !== \$event->getResponse()) {
                return \$event->getResponse();
            }
        }

        return new RedirectResponse(\$this->generateUrl('fos_user_resetting_check_email', array('username' => \$username)));
    }

    /**
     * Tell the user to check his email provider.
     *
     * @param Request \$request
     *
     * @return Response
     */
    public function checkEmailAction(Request \$request)
    {
        \$username = \$request->query->get('username');

        if (empty(\$username)) {
            // the user does not come from the sendEmail action
            return new RedirectResponse(\$this->generateUrl('fos_user_resetting_request'));
        }

        return \$this->render('@FOSUser/Resetting/check_email.html.twig', array(
            'tokenLifetime' => ceil(\$this->retryTtl / 3600),
        ));
    }

    /**
     * Reset user password.
     *
     * @param Request \$request
     * @param string  \$token
     *
     * @return Response
     */
    public function resetAction(Request \$request, \$token)
    {
        \$user = \$this->userManager->findUserByConfirmationToken(\$token);

        if (null === \$user) {
            return new RedirectResponse(\$this->container->get('router')->generate('fos_user_security_login'));
        }

        \$event = new GetResponseUserEvent(\$user, \$request);
        \$this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_RESET_INITIALIZE, \$event);

        if (null !== \$event->getResponse()) {
            return \$event->getResponse();
        }

        \$form = \$this->formFactory->createForm();
        \$form->setData(\$user);

        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$event = new FormEvent(\$form, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_RESET_SUCCESS, \$event);

            \$this->userManager->updateUser(\$user);

            if (null === \$response = \$event->getResponse()) {
                \$url = \$this->generateUrl('fos_user_profile_show');
                \$response = new RedirectResponse(\$url);
            }

            \$this->eventDispatcher->dispatch(
                FOSUserEvents::RESETTING_RESET_COMPLETED,
                new FilterUserResponseEvent(\$user, \$request, \$response)
            );

            return \$response;
        }

        return \$this->render('@FOSUser/Resetting/reset.html.twig', array(
            'token' => \$token,
            'form' => \$form->createView(),
        ));
    }
}
", "@FOSUser/Controller/ResettingController.php", "C:\\Bitnami\\wampstack-7.1.22-0\\frameworks\\project\\templates\\bundles\\FOSUserBundle\\Controller\\ResettingController.php");
    }
}
