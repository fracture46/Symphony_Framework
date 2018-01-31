<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_af641342d7d336949077a5ea137e66f3728a35680853746fd50dcf5afe8a8ec8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_685634e244cb9b3f4274b74786e83ad36682db7889dd0f9c288d88c5a7edbf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685634e244cb9b3f4274b74786e83ad36682db7889dd0f9c288d88c5a7edbf73->enter($__internal_685634e244cb9b3f4274b74786e83ad36682db7889dd0f9c288d88c5a7edbf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0e17b2e36de191bb934156959a80131218744df489b4d0f0ab1021dede61ad21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e17b2e36de191bb934156959a80131218744df489b4d0f0ab1021dede61ad21->enter($__internal_0e17b2e36de191bb934156959a80131218744df489b4d0f0ab1021dede61ad21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_685634e244cb9b3f4274b74786e83ad36682db7889dd0f9c288d88c5a7edbf73->leave($__internal_685634e244cb9b3f4274b74786e83ad36682db7889dd0f9c288d88c5a7edbf73_prof);

        
        $__internal_0e17b2e36de191bb934156959a80131218744df489b4d0f0ab1021dede61ad21->leave($__internal_0e17b2e36de191bb934156959a80131218744df489b4d0f0ab1021dede61ad21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd4bd54194e660a30cb73fe53576d32d3dbbdb613ba8f7a039e42e534cf63fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4bd54194e660a30cb73fe53576d32d3dbbdb613ba8f7a039e42e534cf63fa6->enter($__internal_dd4bd54194e660a30cb73fe53576d32d3dbbdb613ba8f7a039e42e534cf63fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d5d86affdfd5502c76db31e0fc8108dcb34157ee48e514578f8de14f7726031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5d86affdfd5502c76db31e0fc8108dcb34157ee48e514578f8de14f7726031->enter($__internal_0d5d86affdfd5502c76db31e0fc8108dcb34157ee48e514578f8de14f7726031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0d5d86affdfd5502c76db31e0fc8108dcb34157ee48e514578f8de14f7726031->leave($__internal_0d5d86affdfd5502c76db31e0fc8108dcb34157ee48e514578f8de14f7726031_prof);

        
        $__internal_dd4bd54194e660a30cb73fe53576d32d3dbbdb613ba8f7a039e42e534cf63fa6->leave($__internal_dd4bd54194e660a30cb73fe53576d32d3dbbdb613ba8f7a039e42e534cf63fa6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_64d26a779ffa6a5c2ff7fddd4605a24d1865c0d76b9abd5a7b527dba03e8ce30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d26a779ffa6a5c2ff7fddd4605a24d1865c0d76b9abd5a7b527dba03e8ce30->enter($__internal_64d26a779ffa6a5c2ff7fddd4605a24d1865c0d76b9abd5a7b527dba03e8ce30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_972343952901861b283dd0b094e2d6bf8c069e5e19c2801a80968efca2c0b40b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_972343952901861b283dd0b094e2d6bf8c069e5e19c2801a80968efca2c0b40b->enter($__internal_972343952901861b283dd0b094e2d6bf8c069e5e19c2801a80968efca2c0b40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_972343952901861b283dd0b094e2d6bf8c069e5e19c2801a80968efca2c0b40b->leave($__internal_972343952901861b283dd0b094e2d6bf8c069e5e19c2801a80968efca2c0b40b_prof);

        
        $__internal_64d26a779ffa6a5c2ff7fddd4605a24d1865c0d76b9abd5a7b527dba03e8ce30->leave($__internal_64d26a779ffa6a5c2ff7fddd4605a24d1865c0d76b9abd5a7b527dba03e8ce30_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c11a936d13e00034bfefdb49f308a6ebd335dc52fe4e6aeab22e2e2eb7ed29df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11a936d13e00034bfefdb49f308a6ebd335dc52fe4e6aeab22e2e2eb7ed29df->enter($__internal_c11a936d13e00034bfefdb49f308a6ebd335dc52fe4e6aeab22e2e2eb7ed29df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed1bc60f2b07ca7c91ef0f47c656209656dc4fac5ede183a83cf443db810593d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1bc60f2b07ca7c91ef0f47c656209656dc4fac5ede183a83cf443db810593d->enter($__internal_ed1bc60f2b07ca7c91ef0f47c656209656dc4fac5ede183a83cf443db810593d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ed1bc60f2b07ca7c91ef0f47c656209656dc4fac5ede183a83cf443db810593d->leave($__internal_ed1bc60f2b07ca7c91ef0f47c656209656dc4fac5ede183a83cf443db810593d_prof);

        
        $__internal_c11a936d13e00034bfefdb49f308a6ebd335dc52fe4e6aeab22e2e2eb7ed29df->leave($__internal_c11a936d13e00034bfefdb49f308a6ebd335dc52fe4e6aeab22e2e2eb7ed29df_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Loïc\\Documents\\IUT\\M4102 Framework WEB\\symphony-tds\\firstApp\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
