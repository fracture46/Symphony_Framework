<?php

/* users/users.html.twig */
class __TwigTemplate_54ea79873b544bbb15030f4d45058703d6b98aa84cc81b143afd23bcce3a7088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c56c84d57f6f9845c0be72bd627957ede4fc3ce09009731a63f3d7da906affe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56c84d57f6f9845c0be72bd627957ede4fc3ce09009731a63f3d7da906affe3->enter($__internal_c56c84d57f6f9845c0be72bd627957ede4fc3ce09009731a63f3d7da906affe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $__internal_f36bfe9ae49d562c6dbb102cb55928f517d2f13cd6b2c5dac53d8f95795cbd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36bfe9ae49d562c6dbb102cb55928f517d2f13cd6b2c5dac53d8f95795cbd35->enter($__internal_f36bfe9ae49d562c6dbb102cb55928f517d2f13cd6b2c5dac53d8f95795cbd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        // line 1
        echo "<h1>Utilisateur</h1>
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "
<h2>Compétences</h2>
";
        
        $__internal_c56c84d57f6f9845c0be72bd627957ede4fc3ce09009731a63f3d7da906affe3->leave($__internal_c56c84d57f6f9845c0be72bd627957ede4fc3ce09009731a63f3d7da906affe3_prof);

        
        $__internal_f36bfe9ae49d562c6dbb102cb55928f517d2f13cd6b2c5dac53d8f95795cbd35->leave($__internal_f36bfe9ae49d562c6dbb102cb55928f517d2f13cd6b2c5dac53d8f95795cbd35_prof);

    }

    public function getTemplateName()
    {
        return "users/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Utilisateur</h1>
{{user}}
<h2>Compétences</h2>
", "users/users.html.twig", "C:\\Users\\LoÃ¯c\\Documents\\IUT\\M4102 Framework WEB\\symphony-tds\\firstApp\\templates\\users\\users.html.twig");
    }
}
