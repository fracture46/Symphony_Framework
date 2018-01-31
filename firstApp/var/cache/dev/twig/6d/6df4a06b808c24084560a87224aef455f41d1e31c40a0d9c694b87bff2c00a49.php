<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_75dd867d2f62bb79c482f3067a690e36924c1715d57ae4145954fc8ce3a413f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b41cefee551a69af37fad0d11a52cefd4e55388422443d402857f2277ec6340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b41cefee551a69af37fad0d11a52cefd4e55388422443d402857f2277ec6340->enter($__internal_6b41cefee551a69af37fad0d11a52cefd4e55388422443d402857f2277ec6340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cd9b2ccd48cc5418b116b5eb4986bde08279b824f97fde6a2e3a4812dfc160ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd9b2ccd48cc5418b116b5eb4986bde08279b824f97fde6a2e3a4812dfc160ff->enter($__internal_cd9b2ccd48cc5418b116b5eb4986bde08279b824f97fde6a2e3a4812dfc160ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b41cefee551a69af37fad0d11a52cefd4e55388422443d402857f2277ec6340->leave($__internal_6b41cefee551a69af37fad0d11a52cefd4e55388422443d402857f2277ec6340_prof);

        
        $__internal_cd9b2ccd48cc5418b116b5eb4986bde08279b824f97fde6a2e3a4812dfc160ff->leave($__internal_cd9b2ccd48cc5418b116b5eb4986bde08279b824f97fde6a2e3a4812dfc160ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42589798f160a89479a6cf19a7b35235ec07544c358d10ecb441bc3576b29e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42589798f160a89479a6cf19a7b35235ec07544c358d10ecb441bc3576b29e5d->enter($__internal_42589798f160a89479a6cf19a7b35235ec07544c358d10ecb441bc3576b29e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a2fa95f6c00807f9c5dee0181eea5362960d3bccf18c4a0594a5f99770bdebf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fa95f6c00807f9c5dee0181eea5362960d3bccf18c4a0594a5f99770bdebf7->enter($__internal_a2fa95f6c00807f9c5dee0181eea5362960d3bccf18c4a0594a5f99770bdebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a2fa95f6c00807f9c5dee0181eea5362960d3bccf18c4a0594a5f99770bdebf7->leave($__internal_a2fa95f6c00807f9c5dee0181eea5362960d3bccf18c4a0594a5f99770bdebf7_prof);

        
        $__internal_42589798f160a89479a6cf19a7b35235ec07544c358d10ecb441bc3576b29e5d->leave($__internal_42589798f160a89479a6cf19a7b35235ec07544c358d10ecb441bc3576b29e5d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_847c059ca9cf11d9602bfe5538800391836ba6ef978e6e37f8ff257650231397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847c059ca9cf11d9602bfe5538800391836ba6ef978e6e37f8ff257650231397->enter($__internal_847c059ca9cf11d9602bfe5538800391836ba6ef978e6e37f8ff257650231397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8d41f7d901a5ff86198322329e98b62829727c958350cc1bb04d8b74b435ff5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d41f7d901a5ff86198322329e98b62829727c958350cc1bb04d8b74b435ff5f->enter($__internal_8d41f7d901a5ff86198322329e98b62829727c958350cc1bb04d8b74b435ff5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8d41f7d901a5ff86198322329e98b62829727c958350cc1bb04d8b74b435ff5f->leave($__internal_8d41f7d901a5ff86198322329e98b62829727c958350cc1bb04d8b74b435ff5f_prof);

        
        $__internal_847c059ca9cf11d9602bfe5538800391836ba6ef978e6e37f8ff257650231397->leave($__internal_847c059ca9cf11d9602bfe5538800391836ba6ef978e6e37f8ff257650231397_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73dea367918622fced736d8a377bfa202de8c43cf8b9262faa35f0ab8914b852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dea367918622fced736d8a377bfa202de8c43cf8b9262faa35f0ab8914b852->enter($__internal_73dea367918622fced736d8a377bfa202de8c43cf8b9262faa35f0ab8914b852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a48310cfa09d0e4b490e8867638262c81143d95b2deaf7ead74c3ad186a16ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48310cfa09d0e4b490e8867638262c81143d95b2deaf7ead74c3ad186a16ff8->enter($__internal_a48310cfa09d0e4b490e8867638262c81143d95b2deaf7ead74c3ad186a16ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_a48310cfa09d0e4b490e8867638262c81143d95b2deaf7ead74c3ad186a16ff8->leave($__internal_a48310cfa09d0e4b490e8867638262c81143d95b2deaf7ead74c3ad186a16ff8_prof);

        
        $__internal_73dea367918622fced736d8a377bfa202de8c43cf8b9262faa35f0ab8914b852->leave($__internal_73dea367918622fced736d8a377bfa202de8c43cf8b9262faa35f0ab8914b852_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Loïc\\Documents\\IUT\\M4102 Framework WEB\\symphony-tds\\firstApp\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
