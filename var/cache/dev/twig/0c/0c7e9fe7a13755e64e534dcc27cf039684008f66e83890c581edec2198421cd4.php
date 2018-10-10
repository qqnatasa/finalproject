<?php

/* @FOSUser/Controller/ChangePasswordController.php */
class __TwigTemplate_89046c4635e4558e060fc3d1d2a6ef8c8e9aa6200c55e3538dc650e0ead8fd74 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Controller/ChangePasswordController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Controller/ChangePasswordController.php"));

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
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;

/**
 * Controller managing the password change.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class ChangePasswordController extends Controller
{
    private \$eventDispatcher;
    private \$formFactory;
    private \$userManager;

    public function __construct(EventDispatcherInterface \$eventDispatcher, FactoryInterface \$formFactory, UserManagerInterface \$userManager)
    {
        \$this->eventDispatcher = \$eventDispatcher;
        \$this->formFactory = \$formFactory;
        \$this->userManager = \$userManager;
    }

    /**
     * Change user password.
     *
     * @param Request \$request
     *
     * @return Response
     */
    public function changePasswordAction(Request \$request)
    {
        \$user = \$this->getUser();
        if (!is_object(\$user) || !\$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        \$event = new GetResponseUserEvent(\$user, \$request);
        \$this->eventDispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_INITIALIZE, \$event);

        if (null !== \$event->getResponse()) {
            return \$event->getResponse();
        }

        \$form = \$this->formFactory->createForm();
        \$form->setData(\$user);

        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$event = new FormEvent(\$form, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_SUCCESS, \$event);

            \$this->userManager->updateUser(\$user);

            if (null === \$response = \$event->getResponse()) {
                \$url = \$this->generateUrl('fos_user_profile_show');
                \$response = new RedirectResponse(\$url);
            }

            \$this->eventDispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_COMPLETED, new FilterUserResponseEvent(\$user, \$request, \$response));

            return \$response;
        }

        return \$this->render('@FOSUser/ChangePassword/change_password.html.twig', array(
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
        return "@FOSUser/Controller/ChangePasswordController.php";
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
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;

/**
 * Controller managing the password change.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class ChangePasswordController extends Controller
{
    private \$eventDispatcher;
    private \$formFactory;
    private \$userManager;

    public function __construct(EventDispatcherInterface \$eventDispatcher, FactoryInterface \$formFactory, UserManagerInterface \$userManager)
    {
        \$this->eventDispatcher = \$eventDispatcher;
        \$this->formFactory = \$formFactory;
        \$this->userManager = \$userManager;
    }

    /**
     * Change user password.
     *
     * @param Request \$request
     *
     * @return Response
     */
    public function changePasswordAction(Request \$request)
    {
        \$user = \$this->getUser();
        if (!is_object(\$user) || !\$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        \$event = new GetResponseUserEvent(\$user, \$request);
        \$this->eventDispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_INITIALIZE, \$event);

        if (null !== \$event->getResponse()) {
            return \$event->getResponse();
        }

        \$form = \$this->formFactory->createForm();
        \$form->setData(\$user);

        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$event = new FormEvent(\$form, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_SUCCESS, \$event);

            \$this->userManager->updateUser(\$user);

            if (null === \$response = \$event->getResponse()) {
                \$url = \$this->generateUrl('fos_user_profile_show');
                \$response = new RedirectResponse(\$url);
            }

            \$this->eventDispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_COMPLETED, new FilterUserResponseEvent(\$user, \$request, \$response));

            return \$response;
        }

        return \$this->render('@FOSUser/ChangePassword/change_password.html.twig', array(
            'form' => \$form->createView(),
        ));
    }
}
", "@FOSUser/Controller/ChangePasswordController.php", "C:\\Bitnami\\wampstack-7.1.22-0\\frameworks\\project\\templates\\bundles\\FOSUserBundle\\Controller\\ChangePasswordController.php");
    }
}
