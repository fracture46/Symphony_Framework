<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4ee3c3faaf48e1f8cc919312b24c6e594dd4bca65b2d5531240d20835a923fad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_458c7304ce4c0430231ecf4782376035387719931e660a1689f5c0670ef022b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458c7304ce4c0430231ecf4782376035387719931e660a1689f5c0670ef022b6->enter($__internal_458c7304ce4c0430231ecf4782376035387719931e660a1689f5c0670ef022b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f01dbbe29d998b64a2fed355575856f53a1d7506e75978d5a4caa722e46cddd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f01dbbe29d998b64a2fed355575856f53a1d7506e75978d5a4caa722e46cddd6->enter($__internal_f01dbbe29d998b64a2fed355575856f53a1d7506e75978d5a4caa722e46cddd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_458c7304ce4c0430231ecf4782376035387719931e660a1689f5c0670ef022b6->leave($__internal_458c7304ce4c0430231ecf4782376035387719931e660a1689f5c0670ef022b6_prof);

        
        $__internal_f01dbbe29d998b64a2fed355575856f53a1d7506e75978d5a4caa722e46cddd6->leave($__internal_f01dbbe29d998b64a2fed355575856f53a1d7506e75978d5a4caa722e46cddd6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12bf15bc6b8c1ede864eab3697932acf01a28d34e0608a6f0252a5fe97e6dee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bf15bc6b8c1ede864eab3697932acf01a28d34e0608a6f0252a5fe97e6dee5->enter($__internal_12bf15bc6b8c1ede864eab3697932acf01a28d34e0608a6f0252a5fe97e6dee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4c1b3feac07cdb00b8af47e6d72fd9677fd2c913fad531e3f520010e5cbcdee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1b3feac07cdb00b8af47e6d72fd9677fd2c913fad531e3f520010e5cbcdee1->enter($__internal_4c1b3feac07cdb00b8af47e6d72fd9677fd2c913fad531e3f520010e5cbcdee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c1b3feac07cdb00b8af47e6d72fd9677fd2c913fad531e3f520010e5cbcdee1->leave($__internal_4c1b3feac07cdb00b8af47e6d72fd9677fd2c913fad531e3f520010e5cbcdee1_prof);

        
        $__internal_12bf15bc6b8c1ede864eab3697932acf01a28d34e0608a6f0252a5fe97e6dee5->leave($__internal_12bf15bc6b8c1ede864eab3697932acf01a28d34e0608a6f0252a5fe97e6dee5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23e9a635e369f66b35d54ed5e931f3d95d6cf8fe2a6fda89cce46ef499238ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e9a635e369f66b35d54ed5e931f3d95d6cf8fe2a6fda89cce46ef499238ff9->enter($__internal_23e9a635e369f66b35d54ed5e931f3d95d6cf8fe2a6fda89cce46ef499238ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3979be9a7716e4a5f661eea7a697ee88b259652fd67295abe324cd52cacb0818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3979be9a7716e4a5f661eea7a697ee88b259652fd67295abe324cd52cacb0818->enter($__internal_3979be9a7716e4a5f661eea7a697ee88b259652fd67295abe324cd52cacb0818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3979be9a7716e4a5f661eea7a697ee88b259652fd67295abe324cd52cacb0818->leave($__internal_3979be9a7716e4a5f661eea7a697ee88b259652fd67295abe324cd52cacb0818_prof);

        
        $__internal_23e9a635e369f66b35d54ed5e931f3d95d6cf8fe2a6fda89cce46ef499238ff9->leave($__internal_23e9a635e369f66b35d54ed5e931f3d95d6cf8fe2a6fda89cce46ef499238ff9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d9c75451453b123d2b46eb5ee14135f4c1feedab18a4a937d92444ef4a3f3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9c75451453b123d2b46eb5ee14135f4c1feedab18a4a937d92444ef4a3f3d2->enter($__internal_3d9c75451453b123d2b46eb5ee14135f4c1feedab18a4a937d92444ef4a3f3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d9c58c1a953ef258ba01096dedc4ef52f0410aba63aac44e45c5c6937cf15835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c58c1a953ef258ba01096dedc4ef52f0410aba63aac44e45c5c6937cf15835->enter($__internal_d9c58c1a953ef258ba01096dedc4ef52f0410aba63aac44e45c5c6937cf15835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d9c58c1a953ef258ba01096dedc4ef52f0410aba63aac44e45c5c6937cf15835->leave($__internal_d9c58c1a953ef258ba01096dedc4ef52f0410aba63aac44e45c5c6937cf15835_prof);

        
        $__internal_3d9c75451453b123d2b46eb5ee14135f4c1feedab18a4a937d92444ef4a3f3d2->leave($__internal_3d9c75451453b123d2b46eb5ee14135f4c1feedab18a4a937d92444ef4a3f3d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Loïc\\Documents\\IUT\\M4102 Framework WEB\\symphony-tds\\firstApp\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
