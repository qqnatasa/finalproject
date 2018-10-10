<?php

/* @FOSUser/Controller/SecurityController.php */
class __TwigTemplate_5ba57a7d484ba2f2d04cfb41be2507972bdffe69109c2fc4fe10cc4aede65356 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Controller/SecurityController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Controller/SecurityController.php"));

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

use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;

/**
 * Controller managing security.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class SecurityController extends Controller
{
    private \$tokenManager;

    public function __construct(CsrfTokenManagerInterface \$tokenManager = null)
    {
        \$this->tokenManager = \$tokenManager;
    }

    /**
     * @param Request \$request
     *
     * @return Response
     */
    public function loginAction(Request \$request)
    {
        /** @var \$session Session */
        \$session = \$request->getSession();

        \$authErrorKey = Security::AUTHENTICATION_ERROR;
        \$lastUsernameKey = Security::LAST_USERNAME;

        // get the error if any (works with forward and redirect -- see below)
        if (\$request->attributes->has(\$authErrorKey)) {
            \$error = \$request->attributes->get(\$authErrorKey);
        } elseif (null !== \$session && \$session->has(\$authErrorKey)) {
            \$error = \$session->get(\$authErrorKey);
            \$session->remove(\$authErrorKey);
        } else {
            \$error = null;
        }

        if (!\$error instanceof AuthenticationException) {
            \$error = null; // The value does not come from the security component.
        }

        // last username entered by the user
        \$lastUsername = (null === \$session) ? '' : \$session->get(\$lastUsernameKey);

        \$csrfToken = \$this->tokenManager
            ? \$this->tokenManager->getToken('authenticate')->getValue()
            : null;

        return \$this->renderLogin(array(
            'last_username' => \$lastUsername,
            'error' => \$error,
            'csrf_token' => \$csrfToken,
        ));
    }

    public function checkAction()
    {
        throw new \\RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

    public function logoutAction()
    {
        throw new \\RuntimeException('You must activate the logout in your security firewall configuration.');
    }

    /**
     * Renders the login template with the given parameters. Overwrite this function in
     * an extended controller to provide additional data for the login template.
     *
     * @param array \$data
     *
     * @return Response
     */
    protected function renderLogin(array \$data)
    {
        return \$this->render('@FOSUser/Security/login.html.twig', \$data);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Controller/SecurityController.php";
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

use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;

/**
 * Controller managing security.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class SecurityController extends Controller
{
    private \$tokenManager;

    public function __construct(CsrfTokenManagerInterface \$tokenManager = null)
    {
        \$this->tokenManager = \$tokenManager;
    }

    /**
     * @param Request \$request
     *
     * @return Response
     */
    public function loginAction(Request \$request)
    {
        /** @var \$session Session */
        \$session = \$request->getSession();

        \$authErrorKey = Security::AUTHENTICATION_ERROR;
        \$lastUsernameKey = Security::LAST_USERNAME;

        // get the error if any (works with forward and redirect -- see below)
        if (\$request->attributes->has(\$authErrorKey)) {
            \$error = \$request->attributes->get(\$authErrorKey);
        } elseif (null !== \$session && \$session->has(\$authErrorKey)) {
            \$error = \$session->get(\$authErrorKey);
            \$session->remove(\$authErrorKey);
        } else {
            \$error = null;
        }

        if (!\$error instanceof AuthenticationException) {
            \$error = null; // The value does not come from the security component.
        }

        // last username entered by the user
        \$lastUsername = (null === \$session) ? '' : \$session->get(\$lastUsernameKey);

        \$csrfToken = \$this->tokenManager
            ? \$this->tokenManager->getToken('authenticate')->getValue()
            : null;

        return \$this->renderLogin(array(
            'last_username' => \$lastUsername,
            'error' => \$error,
            'csrf_token' => \$csrfToken,
        ));
    }

    public function checkAction()
    {
        throw new \\RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

    public function logoutAction()
    {
        throw new \\RuntimeException('You must activate the logout in your security firewall configuration.');
    }

    /**
     * Renders the login template with the given parameters. Overwrite this function in
     * an extended controller to provide additional data for the login template.
     *
     * @param array \$data
     *
     * @return Response
     */
    protected function renderLogin(array \$data)
    {
        return \$this->render('@FOSUser/Security/login.html.twig', \$data);
    }
}
", "@FOSUser/Controller/SecurityController.php", "C:\\Bitnami\\wampstack-7.1.22-0\\frameworks\\project\\templates\\bundles\\FOSUserBundle\\Controller\\SecurityController.php");
    }
}
