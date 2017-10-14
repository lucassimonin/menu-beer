<?php

/* pagelayout/page_head_for_ie.html.twig */
class __TwigTemplate_4c40c2ceb32ef5feb29c79c7e5ac0995938e593c0f7055292ccf8f9d65e6b473 extends Twig_Template
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
        $__internal_36833e44fe266f02030966e647b53ca2ebc5184b0b4cb3af9aaf4123bc6034ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36833e44fe266f02030966e647b53ca2ebc5184b0b4cb3af9aaf4123bc6034ad->enter($__internal_36833e44fe266f02030966e647b53ca2ebc5184b0b4cb3af9aaf4123bc6034ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head_for_ie.html.twig"));

        $__internal_b20218d7c4990fdc508385dde98f162a84208d5e4ebe856c9fea981d52dd75ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20218d7c4990fdc508385dde98f162a84208d5e4ebe856c9fea981d52dd75ac->enter($__internal_b20218d7c4990fdc508385dde98f162a84208d5e4ebe856c9fea981d52dd75ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head_for_ie.html.twig"));

        // line 1
        echo "<!--[if lt IE 9]>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/js/app_ie.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
<![endif]-->
<!--[if IE]><meta name=\"MSSmartTagsPreventParsing\" content=\"TRUE\"/><![endif]-->";
        
        $__internal_36833e44fe266f02030966e647b53ca2ebc5184b0b4cb3af9aaf4123bc6034ad->leave($__internal_36833e44fe266f02030966e647b53ca2ebc5184b0b4cb3af9aaf4123bc6034ad_prof);

        
        $__internal_b20218d7c4990fdc508385dde98f162a84208d5e4ebe856c9fea981d52dd75ac->leave($__internal_b20218d7c4990fdc508385dde98f162a84208d5e4ebe856c9fea981d52dd75ac_prof);

    }

    public function getTemplateName()
    {
        return "pagelayout/page_head_for_ie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--[if lt IE 9]>
<script src=\"{{ asset('assets/app/js/app_ie.js') }}\" type=\"text/javascript\" ></script>
<![endif]-->
<!--[if IE]><meta name=\"MSSmartTagsPreventParsing\" content=\"TRUE\"/><![endif]-->", "pagelayout/page_head_for_ie.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/pagelayout/page_head_for_ie.html.twig");
    }
}
