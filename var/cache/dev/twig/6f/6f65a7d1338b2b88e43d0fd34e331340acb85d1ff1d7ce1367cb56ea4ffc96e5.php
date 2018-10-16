<?php

/* student.html.twig */
class __TwigTemplate_a7c1a9f4ed43e1ccc63f6f4c1f917d1754903d637744f9de24dd72264df5bc09 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
      <header class=\"header\">
      <div>
        <span> Welcome! ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo " </span>
        <span class=\"navi\">
           <span><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">Logout</a></span>
            <span><a href=\"/mail\">mail</a></span>
        </span>
        </div>
        <img class=\"logo-icon\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/student.png"), "html", null, true);
        echo "\">
     </header>
     <h2> Math exam in SSAMMETTA </h2>
     <ul class=\"nav nav-tabs\">
       <li class=\"active\"><a data-toggle=\"tab\" href=\"#Exam\">Exam</a></li>
       <li><a data-toggle=\"tab\" href=\"#menu1\">Profile</a></li>
       <li><a data-toggle=\"tab\" href=\"#menu2\">Result</a></li>
       <li><a data-toggle=\"tab\" href=\"#menu3\">Locked exam</a></li>
     </ul>

     <div class=\"tab-content\">
       <div id=\"Exam\" class=\"tab-pane fade in active\">
         <h3>Select a category. You can take tests at random!</h3>
         <center><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"tab\" href=\"#select\">Start exam</button></center>

          <div class=\"col-sm-4\"></div>
          <div class=\"col-sm-4\"><br>
          <div id=\"select\" class=\"tab-pane fade\">
              <select class=\"form-control\" onchange=\"location = this.value;\">
                <option >select category</option>
                <option value=\"quiz1\">Vector</option>
                <option value=\"quiz2\">Probability</option>
                <option value=\"quiz3\">Differential</option>
                <option value=\"quiz4\">Arithmetic</option>
              </select><br>


        </div>
        </div>
       <div class=\"col-sm-4\"></div>
      </div>
     <div id=\"menu1\" class=\"tab-pane fade\">
       <div class=\"container\">
         <h3>Showing Profile</h3>
         <table class=\"table\">
        <thead>
        <tr>
        <th>name</th>
        <th>email</th>
        <th>type</th>
        </tr>
        </thead>
        <tbody>
        </tr>
        <tr>
        <td><p>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 68, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo "</p></td>
        <td><p>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 69, $this->source); })()), "user", array()), "email", array()), "html", null, true);
        echo "</p></td>
        <td><p>student</p></td>
      </tr>
        </tbody>
        </table>
  </div>
       </div>
       <div id=\"menu2\" class=\"tab-pane fade\">
         <h3>Result</h3>
         <p>exam result</p>
       </div>
       <div id=\"menu3\" class=\"tab-pane fade\">
         <h3>Locked exam</h3>
         <p>.</p>
       </div>
     </div>
    <div class=\"main-content\">
      ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 86, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 87
            echo "          <div class=\"alert alert-success\">
            ";
            // line 88
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SSAMMETA";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"/css/style.css\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 11,  184 => 10,  166 => 5,  153 => 91,  144 => 88,  141 => 87,  137 => 86,  117 => 69,  113 => 68,  65 => 23,  58 => 19,  53 => 17,  47 => 13,  45 => 10,  37 => 5,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}SSAMMETA{% endblock %}</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"/css/style.css\">
        {% endblock %}
    </head>
    <body>
      <header class=\"header\">
      <div>
        <span> Welcome! {{app.user.username}} </span>
        <span class=\"navi\">
           <span><a href=\"{{ path('fos_user_security_logout') }}\">Logout</a></span>
            <span><a href=\"/mail\">mail</a></span>
        </span>
        </div>
        <img class=\"logo-icon\" src=\"{{asset('img/student.png')}}\">
     </header>
     <h2> Math exam in SSAMMETTA </h2>
     <ul class=\"nav nav-tabs\">
       <li class=\"active\"><a data-toggle=\"tab\" href=\"#Exam\">Exam</a></li>
       <li><a data-toggle=\"tab\" href=\"#menu1\">Profile</a></li>
       <li><a data-toggle=\"tab\" href=\"#menu2\">Result</a></li>
       <li><a data-toggle=\"tab\" href=\"#menu3\">Locked exam</a></li>
     </ul>

     <div class=\"tab-content\">
       <div id=\"Exam\" class=\"tab-pane fade in active\">
         <h3>Select a category. You can take tests at random!</h3>
         <center><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"tab\" href=\"#select\">Start exam</button></center>

          <div class=\"col-sm-4\"></div>
          <div class=\"col-sm-4\"><br>
          <div id=\"select\" class=\"tab-pane fade\">
              <select class=\"form-control\" onchange=\"location = this.value;\">
                <option >select category</option>
                <option value=\"quiz1\">Vector</option>
                <option value=\"quiz2\">Probability</option>
                <option value=\"quiz3\">Differential</option>
                <option value=\"quiz4\">Arithmetic</option>
              </select><br>


        </div>
        </div>
       <div class=\"col-sm-4\"></div>
      </div>
     <div id=\"menu1\" class=\"tab-pane fade\">
       <div class=\"container\">
         <h3>Showing Profile</h3>
         <table class=\"table\">
        <thead>
        <tr>
        <th>name</th>
        <th>email</th>
        <th>type</th>
        </tr>
        </thead>
        <tbody>
        </tr>
        <tr>
        <td><p>{{app.user.username}}</p></td>
        <td><p>{{app.user.email}}</p></td>
        <td><p>student</p></td>
      </tr>
        </tbody>
        </table>
  </div>
       </div>
       <div id=\"menu2\" class=\"tab-pane fade\">
         <h3>Result</h3>
         <p>exam result</p>
       </div>
       <div id=\"menu3\" class=\"tab-pane fade\">
         <h3>Locked exam</h3>
         <p>.</p>
       </div>
     </div>
    <div class=\"main-content\">
      {% for msg in app.session.flashBag.get('success')%}
          <div class=\"alert alert-success\">
            {{msg}}
          </div>
        {% endfor %}
    </body>

</html>
", "student.html.twig", "C:\\Bitnami\\wampstack-7.1.22-0\\frameworks\\project\\templates\\student.html.twig");
    }
}
