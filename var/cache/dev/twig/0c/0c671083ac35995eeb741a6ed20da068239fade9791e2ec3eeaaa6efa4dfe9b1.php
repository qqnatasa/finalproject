<?php

/* teacher.html.twig */
class __TwigTemplate_caca8c18e383b17815f99c7d7edb7151e08b8f23016a787fb7a7aa9e44cd6736 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teacher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teacher.html.twig"));

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
        </span>
        </div>
        <img class=\"logo-icon\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/teacher.png"), "html", null, true);
        echo "\">
     </header>
     <h2> Math exam in SSAMMETTA. Create math exam!</h2>
     <ul class=\"nav nav-tabs\">
       <li class=\"active\"><a data-toggle=\"tab\" href=\"#Create\">Create</a></li>
       <li><a data-toggle=\"tab\" href=\"#menu1\">Profile</a></li>
       <li><a data-toggle=\"tab\" href=\"#menu2\">Result</a></li>
       <li><a data-toggle=\"tab\" href=\"#menu3\">Send exam</a></li>
     </ul>



          <div class=\"tab-content\">
            <div id=\"Create\" class=\"tab-pane fade in active\">
              <h3>Select a category. You can take tests at random!</h3>

               <form method=\"post\" action=\"/quizadd\">

                              <div class=\"form-group\">
                                <label for=\"text\">Qustion</Q>:</label>
                                <input type=\"text\" class=\"form-control\" name=\"qus\" placeholder=\"Enter question\">
                              </div>
                              <div class=\"form-group\">
                                <label for=\"text\">option-1</Q>:</label>
                                <input type=\"text\" class=\"form-control\"  name=\"op1\" placeholder=\"Enter option-1\">
                              </div>
                              <div class=\"form-group\">
                                <label for=\"text\">option-2</Q>:</label>
                                <input type=\"text\" class=\"form-control\" name=\"op2\" placeholder=\"Enter option-1\">
                              </div>

                              <div class=\"form-group\">
                                <label for=\"text\">option-3</Q>:</label>
                                <input type=\"text\" class=\"form-control\" name=\"op3\"  placeholder=\"Enter option-1\">
                              </div>

                              <div class=\"form-group\">
                                <label for=\"text\">option-4</Q>:</label>
                                <input type=\"text\" class=\"form-control\"  name=\"op4\" placeholder=\"Enter option-1\">
                              </div>
                              <div class=\"form-group\">
                                <label for=\"text\">answer</Q>:</label>
                                <input type=\"text\" class=\"form-control\"  name=\"ans\" placeholder=\"answer\">
                              </div>

                              <select class=\"form-group\">
                                <option value=\"\">Choose Ctaegory</option>
                                <option value=\"\">Vector</option>
                                <option value=\"\">Probability</option>
                                <option value=\"\">Differential</option>
                                <option value=\"\">Arithmetic</option>
                              </select><br>


                                <button type=\"submit\" class=\"btn btn-default\">Submit</button><br>
                              </form>
            <div class=\"col-sm-4\"></div>
           </div>
       <div class=\"col-sm-4\"></div>

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
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 96, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo "</p></td>
          <td><p>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 97, $this->source); })()), "user", array()), "email", array()), "html", null, true);
        echo "</p></td>
          <td><p>teacher</p></td>
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
           <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
         </div>
     </div>
    <div class=\"main-content\">
      ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 114, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 115
            echo "          <div class=\"alert alert-success\">
            ";
            // line 116
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
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
        return "teacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 11,  212 => 10,  194 => 5,  181 => 119,  172 => 116,  169 => 115,  165 => 114,  145 => 97,  141 => 96,  64 => 22,  58 => 19,  53 => 17,  47 => 13,  45 => 10,  37 => 5,  31 => 1,);
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
        </span>
        </div>
        <img class=\"logo-icon\" src=\"{{asset('img/teacher.png')}}\">
     </header>
     <h2> Math exam in SSAMMETTA. Create math exam!</h2>
     <ul class=\"nav nav-tabs\">
       <li class=\"active\"><a data-toggle=\"tab\" href=\"#Create\">Create</a></li>
       <li><a data-toggle=\"tab\" href=\"#menu1\">Profile</a></li>
       <li><a data-toggle=\"tab\" href=\"#menu2\">Result</a></li>
       <li><a data-toggle=\"tab\" href=\"#menu3\">Send exam</a></li>
     </ul>



          <div class=\"tab-content\">
            <div id=\"Create\" class=\"tab-pane fade in active\">
              <h3>Select a category. You can take tests at random!</h3>

               <form method=\"post\" action=\"/quizadd\">

                              <div class=\"form-group\">
                                <label for=\"text\">Qustion</Q>:</label>
                                <input type=\"text\" class=\"form-control\" name=\"qus\" placeholder=\"Enter question\">
                              </div>
                              <div class=\"form-group\">
                                <label for=\"text\">option-1</Q>:</label>
                                <input type=\"text\" class=\"form-control\"  name=\"op1\" placeholder=\"Enter option-1\">
                              </div>
                              <div class=\"form-group\">
                                <label for=\"text\">option-2</Q>:</label>
                                <input type=\"text\" class=\"form-control\" name=\"op2\" placeholder=\"Enter option-1\">
                              </div>

                              <div class=\"form-group\">
                                <label for=\"text\">option-3</Q>:</label>
                                <input type=\"text\" class=\"form-control\" name=\"op3\"  placeholder=\"Enter option-1\">
                              </div>

                              <div class=\"form-group\">
                                <label for=\"text\">option-4</Q>:</label>
                                <input type=\"text\" class=\"form-control\"  name=\"op4\" placeholder=\"Enter option-1\">
                              </div>
                              <div class=\"form-group\">
                                <label for=\"text\">answer</Q>:</label>
                                <input type=\"text\" class=\"form-control\"  name=\"ans\" placeholder=\"answer\">
                              </div>

                              <select class=\"form-group\">
                                <option value=\"\">Choose Ctaegory</option>
                                <option value=\"\">Vector</option>
                                <option value=\"\">Probability</option>
                                <option value=\"\">Differential</option>
                                <option value=\"\">Arithmetic</option>
                              </select><br>


                                <button type=\"submit\" class=\"btn btn-default\">Submit</button><br>
                              </form>
            <div class=\"col-sm-4\"></div>
           </div>
       <div class=\"col-sm-4\"></div>

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
          <td><p>teacher</p></td>
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
           <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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
", "teacher.html.twig", "C:\\Bitnami\\wampstack-7.1.22-0\\frameworks\\project\\templates\\teacher.html.twig");
    }
}
