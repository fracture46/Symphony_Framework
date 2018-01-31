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
        $__internal_88949394f7923c6b723ef0565d973caac7ac564d20a15aa7d22dfaf28828b5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88949394f7923c6b723ef0565d973caac7ac564d20a15aa7d22dfaf28828b5f0->enter($__internal_88949394f7923c6b723ef0565d973caac7ac564d20a15aa7d22dfaf28828b5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $__internal_dadd75788afe8f657697727352641f3a87a6941b08a2a09c1c190dcc48b9eb80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dadd75788afe8f657697727352641f3a87a6941b08a2a09c1c190dcc48b9eb80->enter($__internal_dadd75788afe8f657697727352641f3a87a6941b08a2a09c1c190dcc48b9eb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        // line 1
        echo "<h1>Utilisateur</h1>
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "
<h2>Compétences</h2>
<ul>
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) || array_key_exists("competences", $context) ? $context["competences"] : (function () { throw new Twig_Error_Runtime('Variable "competences" does not exist.', 5, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 6
            echo "\t    <li>";
            echo twig_escape_filter($this->env, $context["comp"], "html", null, true);
            echo "</li>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
";
        
        $__internal_88949394f7923c6b723ef0565d973caac7ac564d20a15aa7d22dfaf28828b5f0->leave($__internal_88949394f7923c6b723ef0565d973caac7ac564d20a15aa7d22dfaf28828b5f0_prof);

        
        $__internal_dadd75788afe8f657697727352641f3a87a6941b08a2a09c1c190dcc48b9eb80->leave($__internal_dadd75788afe8f657697727352641f3a87a6941b08a2a09c1c190dcc48b9eb80_prof);

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
        return array (  47 => 8,  38 => 6,  34 => 5,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Utilisateur</h1>
{{user}}
<h2>Compétences</h2>
<ul>
\t{% for comp in competences %}
\t    <li>{{comp}}</li>
\t {% endfor %}
</ul>
", "users/users.html.twig", "C:\\Users\\LoÃ¯c\\Documents\\IUT\\M4102 Framework WEB\\symphony-tds\\firstApp\\templates\\users\\users.html.twig");
    }
}
