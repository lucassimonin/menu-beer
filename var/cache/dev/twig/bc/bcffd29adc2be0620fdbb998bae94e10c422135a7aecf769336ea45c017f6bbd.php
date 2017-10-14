<?php

/* :parts:actions.html.twig */
class __TwigTemplate_d5a1147be6e69c011b4b0859feeeaa193ead7a65d8c3cf8ab86921abfec0ff97 extends Twig_Template
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
        $__internal_9584bb50381dca6939b9dcfd3697cefb351773cd479d58b6f9cbd81b822634e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9584bb50381dca6939b9dcfd3697cefb351773cd479d58b6f9cbd81b822634e8->enter($__internal_9584bb50381dca6939b9dcfd3697cefb351773cd479d58b6f9cbd81b822634e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parts:actions.html.twig"));

        $__internal_1af6569471147d2869a1128fe7d1b4d0bb6299eaabc40f6d756566005217d3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af6569471147d2869a1128fe7d1b4d0bb6299eaabc40f6d756566005217d3c5->enter($__internal_1af6569471147d2869a1128fe7d1b4d0bb6299eaabc40f6d756566005217d3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parts:actions.html.twig"));

        // line 1
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 2
            echo "    <td>
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("beer_edit", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 3, $this->getSourceContext()); })()))), "html", null, true);
            echo "\" class=\"btn btn-default\" title=\"Edit\">
            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
        </a>
    </td>
";
        }
        
        $__internal_9584bb50381dca6939b9dcfd3697cefb351773cd479d58b6f9cbd81b822634e8->leave($__internal_9584bb50381dca6939b9dcfd3697cefb351773cd479d58b6f9cbd81b822634e8_prof);

        
        $__internal_1af6569471147d2869a1128fe7d1b4d0bb6299eaabc40f6d756566005217d3c5->leave($__internal_1af6569471147d2869a1128fe7d1b4d0bb6299eaabc40f6d756566005217d3c5_prof);

    }

    public function getTemplateName()
    {
        return ":parts:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_SUPER_ADMIN\") %}
    <td>
        <a href=\"{{ path('beer_edit', {'id': id}) }}\" class=\"btn btn-default\" title=\"Edit\">
            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
        </a>
    </td>
{% endif %}
", ":parts:actions.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/parts/actions.html.twig");
    }
}
