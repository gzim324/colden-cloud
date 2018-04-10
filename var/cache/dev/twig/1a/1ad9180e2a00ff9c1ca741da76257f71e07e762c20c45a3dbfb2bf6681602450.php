<?php

/* start/home.html.twig */
class __TwigTemplate_3adcd82ca57a1e1cfea53bb5974a3d5d1bdb893c2b602fc5e55aa8db13d1ec61 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "start/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'file' => array($this, 'block_file'),
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "start/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "start/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "        <ul class=\"nav nav-pills nav-justified\">
            <li role=\"presentation\" class=\"active\"><a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Home</a></li>
            <li role=\"presentation\"><a href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Users</a></li>
        </ul>
    ";
        }
        // line 9
        echo " <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_file($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file"));

        // line 13
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "    <div class=\"row\">
        <div class=\"well\">
            <center><h2>FILE</h2></center>
            ";
            // line 17
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFile"]) || array_key_exists("formFile", $context) ? $context["formFile"] : (function () { throw new Twig_Error_Runtime('Variable "formFile" does not exist.', 17, $this->source); })()), 'form', array("attr" => array("novalidate" => "novalidate")));
            echo "
        </div>
    </div>
    <div class=\"row\">
            <table class=\"table table-hover table-bordered table-striped\">
                <thead>
                <tr>
                    <th>img</th>
                    <th>NAME</th>
                    <th>X</th>
                </tr>
                </thead>
                <tbody>

                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultFormFile"]) || array_key_exists("resultFormFile", $context) ? $context["resultFormFile"] : (function () { throw new Twig_Error_Runtime('Variable "resultFormFile" does not exist.', 31, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 32
                echo "                    <tr>
                        <td> <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["entry"], "path", array()))), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["entry"], "path", array()))), "html", null, true);
                echo "\" class=\"img-responsive\" width=\"20\"></a> </td>
                        <td> <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["entry"], "path", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "name", array()), "html", null, true);
                echo "</a></td>

                        <td>
                            <div class=\"dropdown pull-right\">
                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"options\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                    …
                                </button>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"options\">
                                    <li><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["entry"], "path", array()))), "html", null, true);
                echo "\" target=\"_blank\" download>Download</a></li>
                                    <li><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_file", array("id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", array()))), "html", null, true);
                echo "\">Update</a></li>
                                    <li><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_file", array("id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", array()))), "html", null, true);
                echo "\">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 50
                echo "                    <tr>
                        <td colspan=\"5\">No data in database</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                </tbody>
            </table>
    </div>
    ";
        }
        // line 58
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_message($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        // line 62
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 63
            echo "    <div class=\"row\">
        <div class=\"well\">
            <center><h2>NOTE</h2></center>
            ";
            // line 66
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new Twig_Error_Runtime('Variable "formMessage" does not exist.', 66, $this->source); })()), 'form', array("attr" => array("novalidate" => "novalidate")));
            echo "
        </div>
    </div>
    <div class=\"row\">
        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultFormMessage"]) || array_key_exists("resultFormMessage", $context) ? $context["resultFormMessage"] : (function () { throw new Twig_Error_Runtime('Variable "resultFormMessage" does not exist.', 70, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 71
                echo "            <div class=\"well\">
                <pre><font face=\"veranda\"><p>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "message", array()), "html", null, true);
                echo "</p></font></pre>
                <a class=\"btn btn-danger btn-sm\" href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_message", array("id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", array()))), "html", null, true);
                echo "\">DELETE</a>
                <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_message", array("id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", array()))), "html", null, true);
                echo "\">UPDATE</a>
            </div>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 77
                echo "            <p>No data in database</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "    </div>
        ";
        }
        // line 81
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "start/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 81,  243 => 79,  236 => 77,  228 => 74,  224 => 73,  220 => 72,  217 => 71,  212 => 70,  205 => 66,  200 => 63,  197 => 62,  188 => 61,  177 => 58,  171 => 54,  162 => 50,  151 => 44,  147 => 43,  143 => 42,  130 => 34,  124 => 33,  121 => 32,  116 => 31,  99 => 17,  94 => 14,  91 => 13,  82 => 12,  71 => 9,  65 => 7,  61 => 6,  58 => 5,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
    {% if is_granted('ROLE_ADMIN') %}
        <ul class=\"nav nav-pills nav-justified\">
            <li role=\"presentation\" class=\"active\"><a href=\"{{ path('home') }}\">Home</a></li>
            <li role=\"presentation\"><a href=\"{{ path('user_index') }}\">Users</a></li>
        </ul>
    {% endif %} <br>
{% endblock %}

{% block file %}
    {% if is_granted('ROLE_ADMIN') %}
    <div class=\"row\">
        <div class=\"well\">
            <center><h2>FILE</h2></center>
            {{ form(formFile, {'attr': {'novalidate': 'novalidate'}}) }}
        </div>
    </div>
    <div class=\"row\">
            <table class=\"table table-hover table-bordered table-striped\">
                <thead>
                <tr>
                    <th>img</th>
                    <th>NAME</th>
                    <th>X</th>
                </tr>
                </thead>
                <tbody>

                {% for entry in resultFormFile %}
                    <tr>
                        <td> <a href=\"{{ asset('uploads/'~entry.path) }}\" target=\"_blank\"><img src=\"{{ asset('uploads/'~entry.path) }}\" class=\"img-responsive\" width=\"20\"></a> </td>
                        <td> <a href=\"{{ asset('uploads/'~entry.path) }}\" target=\"_blank\">{{ entry.name }}</a></td>

                        <td>
                            <div class=\"dropdown pull-right\">
                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"options\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                    …
                                </button>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"options\">
                                    <li><a href=\"{{ asset('uploads/'~entry.path) }}\" target=\"_blank\" download>Download</a></li>
                                    <li><a href=\"{{ path(\"update_file\", {'id': entry.id}) }}\">Update</a></li>
                                    <li><a href=\"{{ path(\"delete_file\", {'id': entry.id}) }}\">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">No data in database</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
    </div>
    {% endif %}

{% endblock %}

{% block message %}
    {% if is_granted('ROLE_ADMIN') %}
    <div class=\"row\">
        <div class=\"well\">
            <center><h2>NOTE</h2></center>
            {{ form(formMessage, {'attr': {'novalidate': 'novalidate'}}) }}
        </div>
    </div>
    <div class=\"row\">
        {% for entry in resultFormMessage %}
            <div class=\"well\">
                <pre><font face=\"veranda\"><p>{{ entry.message }}</p></font></pre>
                <a class=\"btn btn-danger btn-sm\" href=\"{{ path(\"delete_message\", {'id': entry.id}) }}\">DELETE</a>
                <a class=\"btn btn-warning btn-sm\" href=\"{{ path('update_message', {'id': entry.id}) }}\">UPDATE</a>
            </div>
        {% else %}
            <p>No data in database</p>
        {% endfor %}
    </div>
        {% endif %}

{% endblock %}", "start/home.html.twig", "/Users/zima/projekty/coldencloud/templates/start/home.html.twig");
    }
}
