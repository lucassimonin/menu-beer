<?php

/* pagelayout/page_head.html.twig */
class __TwigTemplate_4fbc4c189a2dfca9350d9217e5dcf148f92f2d325743a2031bbf9817e5b9689f extends Twig_Template
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
        $__internal_4c999a08aefa9e0b3a72754f126a44251ac8cb950a075621448e1cdf864744b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c999a08aefa9e0b3a72754f126a44251ac8cb950a075621448e1cdf864744b4->enter($__internal_4c999a08aefa9e0b3a72754f126a44251ac8cb950a075621448e1cdf864744b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head.html.twig"));

        $__internal_d9c20c6626e85f62d1b56ab55df76fb1bf44df6d108735f7aad54c506ff149b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c20c6626e85f62d1b56ab55df76fb1bf44df6d108735f7aad54c506ff149b2->enter($__internal_d9c20c6626e85f62d1b56ab55df76fb1bf44df6d108735f7aad54c506ff149b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta name=\"author\" content=\"Lucas SIMONIN\">
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4c999a08aefa9e0b3a72754f126a44251ac8cb950a075621448e1cdf864744b4->leave($__internal_4c999a08aefa9e0b3a72754f126a44251ac8cb950a075621448e1cdf864744b4_prof);

        
        $__internal_d9c20c6626e85f62d1b56ab55df76fb1bf44df6d108735f7aad54c506ff149b2->leave($__internal_d9c20c6626e85f62d1b56ab55df76fb1bf44df6d108735f7aad54c506ff149b2_prof);

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
