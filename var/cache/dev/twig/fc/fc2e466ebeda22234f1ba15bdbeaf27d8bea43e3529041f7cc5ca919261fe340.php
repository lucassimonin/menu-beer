<?php

/* :parts:actions.html.twig */
class __TwigTemplate_a6579debde0e2057bac984538adcfed2fad3220432b09fd7b6d83c7bcf1017d5 extends Twig_Template
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
        $__internal_f4de98733ebb2cf65cef6c72e8de048010792ea86c0df61e8064e115c5a956d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4de98733ebb2cf65cef6c72e8de048010792ea86c0df61e8064e115c5a956d7->enter($__internal_f4de98733ebb2cf65cef6c72e8de048010792ea86c0df61e8064e115c5a956d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parts:actions.html.twig"));

        $__internal_01bb66a8add6f987213fc4b7cc08e886ada37a947f86717615922b3e428fd656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bb66a8add6f987213fc4b7cc08e886ada37a947f86717615922b3e428fd656->enter($__internal_01bb66a8add6f987213fc4b7cc08e886ada37a947f86717615922b3e428fd656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parts:actions.html.twig"));

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
        
        $__internal_f4de98733ebb2cf65cef6c72e8de048010792ea86c0df61e8064e115c5a956d7->leave($__internal_f4de98733ebb2cf65cef6c72e8de048010792ea86c0df61e8064e115c5a956d7_prof);

        
        $__internal_01bb66a8add6f987213fc4b7cc08e886ada37a947f86717615922b3e428fd656->leave($__internal_01bb66a8add6f987213fc4b7cc08e886ada37a947f86717615922b3e428fd656_prof);

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
