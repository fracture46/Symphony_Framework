<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_7aaf3215062b798393b4a09f6842da7eac8201c8dbcb1d0183e172bb40362a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a614c9a5fd022778aeecb50d4ec50fc5b5af3ef4602a765e8c0fb666f60044c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a614c9a5fd022778aeecb50d4ec50fc5b5af3ef4602a765e8c0fb666f60044c3->enter($__internal_a614c9a5fd022778aeecb50d4ec50fc5b5af3ef4602a765e8c0fb666f60044c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5a2bccdce4753f6c8b6836369b51028ff909a70284b531de7dcdf4b9521b4ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2bccdce4753f6c8b6836369b51028ff909a70284b531de7dcdf4b9521b4ef9->enter($__internal_5a2bccdce4753f6c8b6836369b51028ff909a70284b531de7dcdf4b9521b4ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a614c9a5fd022778aeecb50d4ec50fc5b5af3ef4602a765e8c0fb666f60044c3->leave($__internal_a614c9a5fd022778aeecb50d4ec50fc5b5af3ef4602a765e8c0fb666f60044c3_prof);

        
        $__internal_5a2bccdce4753f6c8b6836369b51028ff909a70284b531de7dcdf4b9521b4ef9->leave($__internal_5a2bccdce4753f6c8b6836369b51028ff909a70284b531de7dcdf4b9521b4ef9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_13093b7d7e2b469a11df4e9edcdca039748f40c8e91dbea5c6061d64e187087d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13093b7d7e2b469a11df4e9edcdca039748f40c8e91dbea5c6061d64e187087d->enter($__internal_13093b7d7e2b469a11df4e9edcdca039748f40c8e91dbea5c6061d64e187087d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4843c8cb63589e2848294c3a8fbc64c3e7beeba5f99d15a91ec3f981e2860a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4843c8cb63589e2848294c3a8fbc64c3e7beeba5f99d15a91ec3f981e2860a7c->enter($__internal_4843c8cb63589e2848294c3a8fbc64c3e7beeba5f99d15a91ec3f981e2860a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4843c8cb63589e2848294c3a8fbc64c3e7beeba5f99d15a91ec3f981e2860a7c->leave($__internal_4843c8cb63589e2848294c3a8fbc64c3e7beeba5f99d15a91ec3f981e2860a7c_prof);

        
        $__internal_13093b7d7e2b469a11df4e9edcdca039748f40c8e91dbea5c6061d64e187087d->leave($__internal_13093b7d7e2b469a11df4e9edcdca039748f40c8e91dbea5c6061d64e187087d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8dfb9fca928e9ad88e9298a6637efc419b8c2af26b82760506ddc510b49e0020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfb9fca928e9ad88e9298a6637efc419b8c2af26b82760506ddc510b49e0020->enter($__internal_8dfb9fca928e9ad88e9298a6637efc419b8c2af26b82760506ddc510b49e0020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_902e3ff6cb4de5a850192cf9e05c63ebca103622a2918a33acebfe05a2ef092d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902e3ff6cb4de5a850192cf9e05c63ebca103622a2918a33acebfe05a2ef092d->enter($__internal_902e3ff6cb4de5a850192cf9e05c63ebca103622a2918a33acebfe05a2ef092d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_902e3ff6cb4de5a850192cf9e05c63ebca103622a2918a33acebfe05a2ef092d->leave($__internal_902e3ff6cb4de5a850192cf9e05c63ebca103622a2918a33acebfe05a2ef092d_prof);

        
        $__internal_8dfb9fca928e9ad88e9298a6637efc419b8c2af26b82760506ddc510b49e0020->leave($__internal_8dfb9fca928e9ad88e9298a6637efc419b8c2af26b82760506ddc510b49e0020_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a83274e70aa61f259638ff2f2f3f807231e4b05d4b3d860c9304a8ad137d45f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83274e70aa61f259638ff2f2f3f807231e4b05d4b3d860c9304a8ad137d45f2->enter($__internal_a83274e70aa61f259638ff2f2f3f807231e4b05d4b3d860c9304a8ad137d45f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_631878bdd821053f51da4fafce03c5e007a99824205ddf2fa60f225f7cb89ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631878bdd821053f51da4fafce03c5e007a99824205ddf2fa60f225f7cb89ff3->enter($__internal_631878bdd821053f51da4fafce03c5e007a99824205ddf2fa60f225f7cb89ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_631878bdd821053f51da4fafce03c5e007a99824205ddf2fa60f225f7cb89ff3->leave($__internal_631878bdd821053f51da4fafce03c5e007a99824205ddf2fa60f225f7cb89ff3_prof);

        
        $__internal_a83274e70aa61f259638ff2f2f3f807231e4b05d4b3d860c9304a8ad137d45f2->leave($__internal_a83274e70aa61f259638ff2f2f3f807231e4b05d4b3d860c9304a8ad137d45f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\Loïc\\Documents\\IUT\\M4102 Framework WEB\\symphony-tds\\firstApp\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
