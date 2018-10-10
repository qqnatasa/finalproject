<?php

/* @FOSUser/Controller/GroupController.php */
class __TwigTemplate_d71b33f292d739f2344ed958a2ed51c92e0ec53b5f51134a2f89449b79e2083d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Controller/GroupController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Controller/GroupController.php"));

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

use FOS\\UserBundle\\Event\\FilterGroupResponseEvent;
use FOS\\UserBundle\\Event\\FormEvent;
use FOS\\UserBundle\\Event\\GetResponseGroupEvent;
use FOS\\UserBundle\\Event\\GroupEvent;
use FOS\\UserBundle\\Form\\Factory\\FactoryInterface;
use FOS\\UserBundle\\FOSUserEvents;
use FOS\\UserBundle\\Model\\GroupInterface;
use FOS\\UserBundle\\Model\\GroupManagerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

/**
 * RESTful controller managing group CRUD.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class GroupController extends Controller
{
    private \$eventDispatcher;
    private \$formFactory;
    private \$groupManager;

    public function __construct(EventDispatcherInterface \$eventDispatcher, FactoryInterface \$formFactory, GroupManagerInterface \$groupManager)
    {
        \$this->eventDispatcher = \$eventDispatcher;
        \$this->formFactory = \$formFactory;
        \$this->groupManager = \$groupManager;
    }

    /**
     * Show all groups.
     */
    public function listAction()
    {
        return \$this->render('@FOSUser/Group/list.html.twig', array(
            'groups' => \$this->groupManager->findGroups(),
        ));
    }

    /**
     * Show one group.
     *
     * @param string \$groupName
     *
     * @return Response
     */
    public function showAction(\$groupName)
    {
        return \$this->render('@FOSUser/Group/show.html.twig', array(
            'group' => \$this->findGroupBy('name', \$groupName),
        ));
    }

    /**
     * Edit one group, show the edit form.
     *
     * @param Request \$request
     * @param string  \$groupName
     *
     * @return Response
     */
    public function editAction(Request \$request, \$groupName)
    {
        \$group = \$this->findGroupBy('name', \$groupName);

        \$event = new GetResponseGroupEvent(\$group, \$request);
        \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_EDIT_INITIALIZE, \$event);

        if (null !== \$event->getResponse()) {
            return \$event->getResponse();
        }

        \$form = \$this->formFactory->createForm();
        \$form->setData(\$group);

        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$event = new FormEvent(\$form, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_EDIT_SUCCESS, \$event);

            \$this->groupManager->updateGroup(\$group);

            if (null === \$response = \$event->getResponse()) {
                \$url = \$this->generateUrl('fos_user_group_show', array('groupName' => \$group->getName()));
                \$response = new RedirectResponse(\$url);
            }

            \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_EDIT_COMPLETED, new FilterGroupResponseEvent(\$group, \$request, \$response));

            return \$response;
        }

        return \$this->render('@FOSUser/Group/edit.html.twig', array(
            'form' => \$form->createView(),
            'group_name' => \$group->getName(),
        ));
    }

    /**
     * Show the new form.
     *
     * @param Request \$request
     *
     * @return Response
     */
    public function newAction(Request \$request)
    {
        \$group = \$this->groupManager->createGroup('');

        \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_CREATE_INITIALIZE, new GroupEvent(\$group, \$request));

        \$form = \$this->formFactory->createForm();
        \$form->setData(\$group);

        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$event = new FormEvent(\$form, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_CREATE_SUCCESS, \$event);

            \$this->groupManager->updateGroup(\$group);

            if (null === \$response = \$event->getResponse()) {
                \$url = \$this->generateUrl('fos_user_group_show', array('groupName' => \$group->getName()));
                \$response = new RedirectResponse(\$url);
            }

            \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_CREATE_COMPLETED, new FilterGroupResponseEvent(\$group, \$request, \$response));

            return \$response;
        }

        return \$this->render('@FOSUser/Group/new.html.twig', array(
            'form' => \$form->createView(),
        ));
    }

    /**
     * Delete one group.
     *
     * @param Request \$request
     * @param string  \$groupName
     *
     * @return RedirectResponse
     */
    public function deleteAction(Request \$request, \$groupName)
    {
        \$group = \$this->findGroupBy('name', \$groupName);
        \$this->groupManager->deleteGroup(\$group);

        \$response = new RedirectResponse(\$this->generateUrl('fos_user_group_list'));

        \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_DELETE_COMPLETED, new FilterGroupResponseEvent(\$group, \$request, \$response));

        return \$response;
    }

    /**
     * Find a group by a specific property.
     *
     * @param string \$key   property name
     * @param mixed  \$value property value
     *
     * @throws NotFoundHttpException if user does not exist
     *
     * @return GroupInterface
     */
    protected function findGroupBy(\$key, \$value)
    {
        if (!empty(\$value)) {
            \$group = \$this->groupManager->{'findGroupBy'.ucfirst(\$key)}(\$value);
        }

        if (empty(\$group)) {
            throw new NotFoundHttpException(sprintf('The group with \"%s\" does not exist for value \"%s\"', \$key, \$value));
        }

        return \$group;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Controller/GroupController.php";
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

use FOS\\UserBundle\\Event\\FilterGroupResponseEvent;
use FOS\\UserBundle\\Event\\FormEvent;
use FOS\\UserBundle\\Event\\GetResponseGroupEvent;
use FOS\\UserBundle\\Event\\GroupEvent;
use FOS\\UserBundle\\Form\\Factory\\FactoryInterface;
use FOS\\UserBundle\\FOSUserEvents;
use FOS\\UserBundle\\Model\\GroupInterface;
use FOS\\UserBundle\\Model\\GroupManagerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

/**
 * RESTful controller managing group CRUD.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class GroupController extends Controller
{
    private \$eventDispatcher;
    private \$formFactory;
    private \$groupManager;

    public function __construct(EventDispatcherInterface \$eventDispatcher, FactoryInterface \$formFactory, GroupManagerInterface \$groupManager)
    {
        \$this->eventDispatcher = \$eventDispatcher;
        \$this->formFactory = \$formFactory;
        \$this->groupManager = \$groupManager;
    }

    /**
     * Show all groups.
     */
    public function listAction()
    {
        return \$this->render('@FOSUser/Group/list.html.twig', array(
            'groups' => \$this->groupManager->findGroups(),
        ));
    }

    /**
     * Show one group.
     *
     * @param string \$groupName
     *
     * @return Response
     */
    public function showAction(\$groupName)
    {
        return \$this->render('@FOSUser/Group/show.html.twig', array(
            'group' => \$this->findGroupBy('name', \$groupName),
        ));
    }

    /**
     * Edit one group, show the edit form.
     *
     * @param Request \$request
     * @param string  \$groupName
     *
     * @return Response
     */
    public function editAction(Request \$request, \$groupName)
    {
        \$group = \$this->findGroupBy('name', \$groupName);

        \$event = new GetResponseGroupEvent(\$group, \$request);
        \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_EDIT_INITIALIZE, \$event);

        if (null !== \$event->getResponse()) {
            return \$event->getResponse();
        }

        \$form = \$this->formFactory->createForm();
        \$form->setData(\$group);

        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$event = new FormEvent(\$form, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_EDIT_SUCCESS, \$event);

            \$this->groupManager->updateGroup(\$group);

            if (null === \$response = \$event->getResponse()) {
                \$url = \$this->generateUrl('fos_user_group_show', array('groupName' => \$group->getName()));
                \$response = new RedirectResponse(\$url);
            }

            \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_EDIT_COMPLETED, new FilterGroupResponseEvent(\$group, \$request, \$response));

            return \$response;
        }

        return \$this->render('@FOSUser/Group/edit.html.twig', array(
            'form' => \$form->createView(),
            'group_name' => \$group->getName(),
        ));
    }

    /**
     * Show the new form.
     *
     * @param Request \$request
     *
     * @return Response
     */
    public function newAction(Request \$request)
    {
        \$group = \$this->groupManager->createGroup('');

        \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_CREATE_INITIALIZE, new GroupEvent(\$group, \$request));

        \$form = \$this->formFactory->createForm();
        \$form->setData(\$group);

        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$event = new FormEvent(\$form, \$request);
            \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_CREATE_SUCCESS, \$event);

            \$this->groupManager->updateGroup(\$group);

            if (null === \$response = \$event->getResponse()) {
                \$url = \$this->generateUrl('fos_user_group_show', array('groupName' => \$group->getName()));
                \$response = new RedirectResponse(\$url);
            }

            \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_CREATE_COMPLETED, new FilterGroupResponseEvent(\$group, \$request, \$response));

            return \$response;
        }

        return \$this->render('@FOSUser/Group/new.html.twig', array(
            'form' => \$form->createView(),
        ));
    }

    /**
     * Delete one group.
     *
     * @param Request \$request
     * @param string  \$groupName
     *
     * @return RedirectResponse
     */
    public function deleteAction(Request \$request, \$groupName)
    {
        \$group = \$this->findGroupBy('name', \$groupName);
        \$this->groupManager->deleteGroup(\$group);

        \$response = new RedirectResponse(\$this->generateUrl('fos_user_group_list'));

        \$this->eventDispatcher->dispatch(FOSUserEvents::GROUP_DELETE_COMPLETED, new FilterGroupResponseEvent(\$group, \$request, \$response));

        return \$response;
    }

    /**
     * Find a group by a specific property.
     *
     * @param string \$key   property name
     * @param mixed  \$value property value
     *
     * @throws NotFoundHttpException if user does not exist
     *
     * @return GroupInterface
     */
    protected function findGroupBy(\$key, \$value)
    {
        if (!empty(\$value)) {
            \$group = \$this->groupManager->{'findGroupBy'.ucfirst(\$key)}(\$value);
        }

        if (empty(\$group)) {
            throw new NotFoundHttpException(sprintf('The group with \"%s\" does not exist for value \"%s\"', \$key, \$value));
        }

        return \$group;
    }
}
", "@FOSUser/Controller/GroupController.php", "C:\\Bitnami\\wampstack-7.1.22-0\\frameworks\\project\\templates\\bundles\\FOSUserBundle\\Controller\\GroupController.php");
    }
}
