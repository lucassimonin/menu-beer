<?php

/* base.html.twig */
class __TwigTemplate_c7d1d18001d861dc67b435ae3ca4eb58c596928adee34d8dc895d1dfea545310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf5d48a9228f7e20b58961963f1cdadda313de3f20723b7d95f5381021be22a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5d48a9228f7e20b58961963f1cdadda313de3f20723b7d95f5381021be22a5->enter($__internal_bf5d48a9228f7e20b58961963f1cdadda313de3f20723b7d95f5381021be22a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5b213eca7e72e12c137957cc6ad770ef43ce5509475ab2bc0290205de1216090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b213eca7e72e12c137957cc6ad770ef43ce5509475ab2bc0290205de1216090->enter($__internal_5b213eca7e72e12c137957cc6ad770ef43ce5509475ab2bc0290205de1216090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <!DOCTYPE html>
    <html>
    <head>
        <title>";
        // line 5
        $this->displayBlock('meta_title', $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.global.title"), "html", null, true);
        echo "</title>
        ";
        // line 6
        $this->loadTemplate("pagelayout/page_head.html.twig", "base.html.twig", 6)->display($context);
        // line 7
        echo "        ";
        $this->loadTemplate("pagelayout/page_head_style.html.twig", "base.html.twig", 7)->display($context);
        // line 8
        echo "        ";
        $this->loadTemplate("pagelayout/page_head_for_ie.html.twig", "base.html.twig", 8)->display($context);
        // line 9
        echo "        ";
        $this->loadTemplate("pagelayout/page_head_script.html.twig", "base.html.twig", 9)->display($context);
        // line 10
        echo "    </head>
    <body ";
        // line 11
        if (array_key_exists("classBody", $context)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["classBody"]) || array_key_exists("classBody", $context) ? $context["classBody"] : (function () { throw new Twig_Error_Runtime('Variable "classBody" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 12
        $this->loadTemplate("pagelayout/flashmessage.html.twig", "base.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "        ";
        $this->loadTemplate("pagelayout/page_footer_script.html.twig", "base.html.twig", 14)->display($context);
        // line 15
        echo "    </body>
    </html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bf5d48a9228f7e20b58961963f1cdadda313de3f20723b7d95f5381021be22a5->leave($__internal_bf5d48a9228f7e20b58961963f1cdadda313de3f20723b7d95f5381021be22a5_prof);

        
        $__internal_5b213eca7e72e12c137957cc6ad770ef43ce5509475ab2bc0290205de1216090->leave($__internal_5b213eca7e72e12c137957cc6ad770ef43ce5509475ab2bc0290205de1216090_prof);

    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_4953f98c9ee27a595665349318ac62e1cb47f2da286727e4b12445c85fd2a4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4953f98c9ee27a595665349318ac62e1cb47f2da286727e4b12445c85fd2a4e7->enter($__internal_4953f98c9ee27a595665349318ac62e1cb47f2da286727e4b12445c85fd2a4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_0aae90c654d498c17889adf7c73c2b40a141045a336c86ac7ba55c2846a27e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aae90c654d498c17889adf7c73c2b40a141045a336c86ac7ba55c2846a27e75->enter($__internal_0aae90c654d498c17889adf7c73c2b40a141045a336c86ac7ba55c2846a27e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        
        $__internal_0aae90c654d498c17889adf7c73c2b40a141045a336c86ac7ba55c2846a27e75->leave($__internal_0aae90c654d498c17889adf7c73c2b40a141045a336c86ac7ba55c2846a27e75_prof);

        
        $__internal_4953f98c9ee27a595665349318ac62e1cb47f2da286727e4b12445c85fd2a4e7->leave($__internal_4953f98c9ee27a595665349318ac62e1cb47f2da286727e4b12445c85fd2a4e7_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_eb5dc9154f7d735f51abd36d8c22632b4bd916a1dd10020005f63139db11b31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5dc9154f7d735f51abd36d8c22632b4bd916a1dd10020005f63139db11b31e->enter($__internal_eb5dc9154f7d735f51abd36d8c22632b4bd916a1dd10020005f63139db11b31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ddf78bb8ecbdfd13facbf99389ca9473f65a2f5d5df0fea631e097a6f2dff2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf78bb8ecbdfd13facbf99389ca9473f65a2f5d5df0fea631e097a6f2dff2bf->enter($__internal_ddf78bb8ecbdfd13facbf99389ca9473f65a2f5d5df0fea631e097a6f2dff2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ddf78bb8ecbdfd13facbf99389ca9473f65a2f5d5df0fea631e097a6f2dff2bf->leave($__internal_ddf78bb8ecbdfd13facbf99389ca9473f65a2f5d5df0fea631e097a6f2dff2bf_prof);

        
        $__internal_eb5dc9154f7d735f51abd36d8c22632b4bd916a1dd10020005f63139db11b31e->leave($__internal_eb5dc9154f7d735f51abd36d8c22632b4bd916a1dd10020005f63139db11b31e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 13,  83 => 5,  70 => 15,  67 => 14,  64 => 13,  62 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  40 => 6,  34 => 5,  29 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
    <!DOCTYPE html>
    <html>
    <head>
        <title>{% block meta_title %}{% endblock %} - {{ 'app.global.title'|trans }}</title>
        {% include 'pagelayout/page_head.html.twig' %}
        {% include 'pagelayout/page_head_style.html.twig' %}
        {% include 'pagelayout/page_head_for_ie.html.twig' %}
        {% include 'pagelayout/page_head_script.html.twig' %}
    </head>
    <body {% if classBody is defined %}class=\"{{ classBody }}\"{% endif %}>
        {% include 'pagelayout/flashmessage.html.twig' %}
        {% block content %}{% endblock %}
        {% include 'pagelayout/page_footer_script.html.twig' %}
    </body>
    </html>
{% endspaceless %}
", "base.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/base.html.twig");
    }
}
