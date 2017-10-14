<?php

/* pagelayout/page_head.html.twig */
class __TwigTemplate_93eb0d7b6107cc89ec434f0d9a14a6049d3ae0d3d75451fa430af8cbe95acbd8 extends Twig_Template
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
        $__internal_2a6e597e4d0ccb6603f68a446cb81e018dd9f645b033a1b983ad83c06cf4a59c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6e597e4d0ccb6603f68a446cb81e018dd9f645b033a1b983ad83c06cf4a59c->enter($__internal_2a6e597e4d0ccb6603f68a446cb81e018dd9f645b033a1b983ad83c06cf4a59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head.html.twig"));

        $__internal_8b730c51ca1c5d2ff6aa4258d9bbad27ca039bea6d849cae259b2903aed9fc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b730c51ca1c5d2ff6aa4258d9bbad27ca039bea6d849cae259b2903aed9fc89->enter($__internal_8b730c51ca1c5d2ff6aa4258d9bbad27ca039bea6d849cae259b2903aed9fc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta name=\"author\" content=\"Lucas SIMONIN\">
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2a6e597e4d0ccb6603f68a446cb81e018dd9f645b033a1b983ad83c06cf4a59c->leave($__internal_2a6e597e4d0ccb6603f68a446cb81e018dd9f645b033a1b983ad83c06cf4a59c_prof);

        
        $__internal_8b730c51ca1c5d2ff6aa4258d9bbad27ca039bea6d849cae259b2903aed9fc89->leave($__internal_8b730c51ca1c5d2ff6aa4258d9bbad27ca039bea6d849cae259b2903aed9fc89_prof);

    }

    public function getTemplateName()
    {
        return "pagelayout/page_head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta name=\"author\" content=\"Lucas SIMONIN\">
{% endspaceless %}
", "pagelayout/page_head.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/pagelayout/page_head.html.twig");
    }
}
