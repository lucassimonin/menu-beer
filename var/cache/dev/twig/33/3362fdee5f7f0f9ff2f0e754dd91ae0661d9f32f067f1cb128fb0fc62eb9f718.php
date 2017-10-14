<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_11f8ce5a0575c929f2e2cdfff9a8586e1ed0491e7ce0ac8f51b5b3535c942b36 extends Twig_Template
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
        $__internal_029c74429b268163d8af1bbb35d698f6438e8ae31e7af0df025789c6c87ccb15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_029c74429b268163d8af1bbb35d698f6438e8ae31e7af0df025789c6c87ccb15->enter($__internal_029c74429b268163d8af1bbb35d698f6438e8ae31e7af0df025789c6c87ccb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c902bf5f23af5d9b30b5ada0edb0a96783c361ffdc54a3d3dad6a1a1042ab836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c902bf5f23af5d9b30b5ada0edb0a96783c361ffdc54a3d3dad6a1a1042ab836->enter($__internal_c902bf5f23af5d9b30b5ada0edb0a96783c361ffdc54a3d3dad6a1a1042ab836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_029c74429b268163d8af1bbb35d698f6438e8ae31e7af0df025789c6c87ccb15->leave($__internal_029c74429b268163d8af1bbb35d698f6438e8ae31e7af0df025789c6c87ccb15_prof);

        
        $__internal_c902bf5f23af5d9b30b5ada0edb0a96783c361ffdc54a3d3dad6a1a1042ab836->leave($__internal_c902bf5f23af5d9b30b5ada0edb0a96783c361ffdc54a3d3dad6a1a1042ab836_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16e20d5620b48a2d5445d63abeb558fef8fb9f443f6f9cf4f464dfc3723ae209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e20d5620b48a2d5445d63abeb558fef8fb9f443f6f9cf4f464dfc3723ae209->enter($__internal_16e20d5620b48a2d5445d63abeb558fef8fb9f443f6f9cf4f464dfc3723ae209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd881db7140f050840425b5ff9d950085c8bf533e71a02d5b74b84a463da82a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd881db7140f050840425b5ff9d950085c8bf533e71a02d5b74b84a463da82a9->enter($__internal_fd881db7140f050840425b5ff9d950085c8bf533e71a02d5b74b84a463da82a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fd881db7140f050840425b5ff9d950085c8bf533e71a02d5b74b84a463da82a9->leave($__internal_fd881db7140f050840425b5ff9d950085c8bf533e71a02d5b74b84a463da82a9_prof);

        
        $__internal_16e20d5620b48a2d5445d63abeb558fef8fb9f443f6f9cf4f464dfc3723ae209->leave($__internal_16e20d5620b48a2d5445d63abeb558fef8fb9f443f6f9cf4f464dfc3723ae209_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_253c9d2021df2dfa9e8189b534035999fc6fdde9c6445577eb2d867ac7c05a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253c9d2021df2dfa9e8189b534035999fc6fdde9c6445577eb2d867ac7c05a60->enter($__internal_253c9d2021df2dfa9e8189b534035999fc6fdde9c6445577eb2d867ac7c05a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf447f9237e112830b0f0a63b0001d8ecdafebb0d88414e368a8df31a82a5300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf447f9237e112830b0f0a63b0001d8ecdafebb0d88414e368a8df31a82a5300->enter($__internal_bf447f9237e112830b0f0a63b0001d8ecdafebb0d88414e368a8df31a82a5300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bf447f9237e112830b0f0a63b0001d8ecdafebb0d88414e368a8df31a82a5300->leave($__internal_bf447f9237e112830b0f0a63b0001d8ecdafebb0d88414e368a8df31a82a5300_prof);

        
        $__internal_253c9d2021df2dfa9e8189b534035999fc6fdde9c6445577eb2d867ac7c05a60->leave($__internal_253c9d2021df2dfa9e8189b534035999fc6fdde9c6445577eb2d867ac7c05a60_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_711cd5e83ba8e45b5415c31635183c727cf5a9dfd8b8cfc141bf5628eb35a6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711cd5e83ba8e45b5415c31635183c727cf5a9dfd8b8cfc141bf5628eb35a6a2->enter($__internal_711cd5e83ba8e45b5415c31635183c727cf5a9dfd8b8cfc141bf5628eb35a6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d85102bddcc62c7a70665ba76e523ec8f3f4cf8b3da1f127bb903c7007727bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d85102bddcc62c7a70665ba76e523ec8f3f4cf8b3da1f127bb903c7007727bf->enter($__internal_4d85102bddcc62c7a70665ba76e523ec8f3f4cf8b3da1f127bb903c7007727bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d85102bddcc62c7a70665ba76e523ec8f3f4cf8b3da1f127bb903c7007727bf->leave($__internal_4d85102bddcc62c7a70665ba76e523ec8f3f4cf8b3da1f127bb903c7007727bf_prof);

        
        $__internal_711cd5e83ba8e45b5415c31635183c727cf5a9dfd8b8cfc141bf5628eb35a6a2->leave($__internal_711cd5e83ba8e45b5415c31635183c727cf5a9dfd8b8cfc141bf5628eb35a6a2_prof);

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
", "@Twig/layout.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
