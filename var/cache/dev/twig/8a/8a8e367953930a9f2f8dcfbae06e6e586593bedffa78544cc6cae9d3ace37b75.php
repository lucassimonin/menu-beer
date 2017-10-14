<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_57c182ae1921e39165ce6eae6dbba0778a22c0cbc50d66e25f9784e2af2c7c07 extends Twig_Template
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
        $__internal_fec093f40f812e895fd52c19d4ae32c593d0982ceeea494df8bd7bffaf40e53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec093f40f812e895fd52c19d4ae32c593d0982ceeea494df8bd7bffaf40e53a->enter($__internal_fec093f40f812e895fd52c19d4ae32c593d0982ceeea494df8bd7bffaf40e53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_ee362c26b735a82c006f22380f56c7a5199756954d01bd31dca4703a99c8391d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee362c26b735a82c006f22380f56c7a5199756954d01bd31dca4703a99c8391d->enter($__internal_ee362c26b735a82c006f22380f56c7a5199756954d01bd31dca4703a99c8391d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fec093f40f812e895fd52c19d4ae32c593d0982ceeea494df8bd7bffaf40e53a->leave($__internal_fec093f40f812e895fd52c19d4ae32c593d0982ceeea494df8bd7bffaf40e53a_prof);

        
        $__internal_ee362c26b735a82c006f22380f56c7a5199756954d01bd31dca4703a99c8391d->leave($__internal_ee362c26b735a82c006f22380f56c7a5199756954d01bd31dca4703a99c8391d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
