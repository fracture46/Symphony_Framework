<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1c6a3b486821fabe7ae60ed6ebe1b112e0ecd9b6bbf7fd4ef9a393f00faacb9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_948f2d6729464adb6fe9c10319cd5248612bcfe86497e258c29e51335c7f2875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948f2d6729464adb6fe9c10319cd5248612bcfe86497e258c29e51335c7f2875->enter($__internal_948f2d6729464adb6fe9c10319cd5248612bcfe86497e258c29e51335c7f2875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6fa04a84fdf30cef8521feb10e00ad4738a02e46ac5e6491d445080137bf2403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa04a84fdf30cef8521feb10e00ad4738a02e46ac5e6491d445080137bf2403->enter($__internal_6fa04a84fdf30cef8521feb10e00ad4738a02e46ac5e6491d445080137bf2403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_948f2d6729464adb6fe9c10319cd5248612bcfe86497e258c29e51335c7f2875->leave($__internal_948f2d6729464adb6fe9c10319cd5248612bcfe86497e258c29e51335c7f2875_prof);

        
        $__internal_6fa04a84fdf30cef8521feb10e00ad4738a02e46ac5e6491d445080137bf2403->leave($__internal_6fa04a84fdf30cef8521feb10e00ad4738a02e46ac5e6491d445080137bf2403_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d79ba56741a43255c63384ca6367e2cfeee3180bc51bcde532daabba442e20cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79ba56741a43255c63384ca6367e2cfeee3180bc51bcde532daabba442e20cf->enter($__internal_d79ba56741a43255c63384ca6367e2cfeee3180bc51bcde532daabba442e20cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c4ed524c0cf5fbdd5c25282a45290cc74f7e9499a8d889c83b4c186302eeaaaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ed524c0cf5fbdd5c25282a45290cc74f7e9499a8d889c83b4c186302eeaaaf->enter($__internal_c4ed524c0cf5fbdd5c25282a45290cc74f7e9499a8d889c83b4c186302eeaaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c4ed524c0cf5fbdd5c25282a45290cc74f7e9499a8d889c83b4c186302eeaaaf->leave($__internal_c4ed524c0cf5fbdd5c25282a45290cc74f7e9499a8d889c83b4c186302eeaaaf_prof);

        
        $__internal_d79ba56741a43255c63384ca6367e2cfeee3180bc51bcde532daabba442e20cf->leave($__internal_d79ba56741a43255c63384ca6367e2cfeee3180bc51bcde532daabba442e20cf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Loïc\\Documents\\IUT\\M4102 Framework WEB\\symphony-tds\\firstApp\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
