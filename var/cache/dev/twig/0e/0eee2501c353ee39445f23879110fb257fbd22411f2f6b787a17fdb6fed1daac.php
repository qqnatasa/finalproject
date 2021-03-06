<?php

/* quizshow4.html.twig */
class __TwigTemplate_440c93c081adb2df0c5e7d509f62ee820d8e2f95fbe7a5e1894a1b77a4cf7fcf extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quizshow4.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quizshow4.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
      <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
      <header class=\"header\">
      <div>
        <span> Welcome! ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo " </span>
        <span class=\"navi\">
           <span><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">Logout</a></span>
        </span>
        </div>
        <img class=\"logo-icon\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/student.png"), "html", null, true);
        echo "\">
     </header>
<body>
<div class=\"container\">
<h2>SSAMMETTA exam in Arithmetic </h2>
<form method=\"post\" action=\"/answer\">

";
        // line 31
        $context["count"] = 0;
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["question"], "cat_id", array()) == 4)) {
                // line 34
                $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 34, $this->source); })()) + 1);
                // line 35
                echo "<table class=\"table table-bordered\">
<thead>
<tr class=\"info\">
<th>&nbsp;";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "&emsp;
";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", array()), "html", null, true);
                echo "</th>
</tr>
</thead>
<tbody>
  ";
                // line 43
                if (twig_get_attribute($this->env, $this->source, $context["question"], "ans1", array(), "any", true, true)) {
                    // line 44
                    echo "<tr>
<td>&nbsp;1&emsp;<input type=\"radio\" value=\"0\">&nbsp;  ";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "ans1", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
                // line 47
                echo "  ";
                if (twig_get_attribute($this->env, $this->source, $context["question"], "ans2", array(), "any", true, true)) {
                    // line 48
                    echo "<tr>
<td>&nbsp;2&emsp;<input type=\"radio\" value=\"1\">&nbsp;  ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "ans2", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
                // line 51
                echo "  ";
                if (twig_get_attribute($this->env, $this->source, $context["question"], "ans3", array(), "any", true, true)) {
                    // line 52
                    echo "<tr>
<td>&nbsp;3&emsp;<input type=\"radio\" value=\"2\">&nbsp;  ";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "ans3", array()), "html", null, true);
                    echo "</td>
</tr>
";
                }
                // line 56
                echo "  ";
                if (twig_get_attribute($this->env, $this->source, $context["question"], "ans4", array(), "any", true, true)) {
                    // line 57
                    echo "<tr>
<td>&nbsp;4&emsp;<input type=\"radio\" value=\"3\">&nbsp;  ";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "ans4", array()), "html", null, true);
                    echo "</td>
</tr>
";
                }
                // line 61
                echo "</tr>
</tbody>
</table>
";
            }
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "<center><input type=\"submit\" value=\"submit Exam\" class=\"btn btn-success\"/></center>
</form>
</div>
<div class=\"col-sm-2\">
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
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

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"/css/style.css\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quizshow4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 13,  196 => 12,  178 => 4,  161 => 67,  148 => 61,  142 => 58,  139 => 57,  136 => 56,  130 => 53,  127 => 52,  124 => 51,  119 => 49,  116 => 48,  113 => 47,  108 => 45,  105 => 44,  103 => 43,  96 => 39,  92 => 38,  87 => 35,  85 => 34,  83 => 33,  78 => 32,  76 => 31,  66 => 24,  60 => 21,  55 => 19,  49 => 15,  47 => 12,  36 => 4,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
      <title>{% block title %}SSAMMETA{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
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
        <img class=\"logo-icon\" src=\"{{asset('img/student.png')}}\">
     </header>
<body>
<div class=\"container\">
<h2>SSAMMETTA exam in Arithmetic </h2>
<form method=\"post\" action=\"/answer\">

{% set count = 0 %}
{% for question in questions%}
{% if question.cat_id ==4 %}
{% set count = count +1%}
<table class=\"table table-bordered\">
<thead>
<tr class=\"info\">
<th>&nbsp;{{ count }}&emsp;
{{ question.question }}</th>
</tr>
</thead>
<tbody>
  {% if question.ans1 is defined %}
<tr>
<td>&nbsp;1&emsp;<input type=\"radio\" value=\"0\">&nbsp;  {{ question.ans1 }}</td>
</tr>{% endif %}
  {% if question.ans2 is defined %}
<tr>
<td>&nbsp;2&emsp;<input type=\"radio\" value=\"1\">&nbsp;  {{ question.ans2 }}</td>
</tr>{% endif %}
  {% if question.ans3 is defined %}
<tr>
<td>&nbsp;3&emsp;<input type=\"radio\" value=\"2\">&nbsp;  {{ question.ans3 }}</td>
</tr>
{% endif %}
  {% if question.ans4 is defined %}
<tr>
<td>&nbsp;4&emsp;<input type=\"radio\" value=\"3\">&nbsp;  {{ question.ans4 }}</td>
</tr>
{% endif %}
</tr>
</tbody>
</table>
{% endif %}
{% else %}
{% endfor %}
<center><input type=\"submit\" value=\"submit Exam\" class=\"btn btn-success\"/></center>
</form>
</div>
<div class=\"col-sm-2\">
</div>
</body>
</html>
", "quizshow4.html.twig", "C:\\Bitnami\\wampstack-7.1.22-0\\frameworks\\project\\templates\\quizshow4.html.twig");
    }
}
