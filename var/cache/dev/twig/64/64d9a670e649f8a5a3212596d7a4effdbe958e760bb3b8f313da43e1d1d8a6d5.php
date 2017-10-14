<?php

/* pagelayout/page_head_for_ie.html.twig */
class __TwigTemplate_8c645088478b3e18ee424d3ccc5e727c2f7ddaeafb8a772ff40aaedf029218f7 extends Twig_Template
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
        $__internal_d5e0b1ad0aba9660484072999d620d53a790b0ab3b268df42f23f4367858f23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e0b1ad0aba9660484072999d620d53a790b0ab3b268df42f23f4367858f23e->enter($__internal_d5e0b1ad0aba9660484072999d620d53a790b0ab3b268df42f23f4367858f23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head_for_ie.html.twig"));

        $__internal_eed98127e1b09b6a745948a353bddfae3668b45c48af27ed6d506faccd921a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed98127e1b09b6a745948a353bddfae3668b45c48af27ed6d506faccd921a39->enter($__internal_eed98127e1b09b6a745948a353bddfae3668b45c48af27ed6d506faccd921a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head_for_ie.html.twig"));

        // line 1
        echo "<!--[if lt IE 9]>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/js/app_ie.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
<![endif]-->
<!--[if IE]><meta name=\"MSSmartTagsPreventParsing\" content=\"TRUE\"/><![endif]-->";
        
        $__internal_d5e0b1ad0aba9660484072999d620d53a790b0ab3b268df42f23f4367858f23e->leave($__internal_d5e0b1ad0aba9660484072999d620d53a790b0ab3b268df42f23f4367858f23e_prof);

        
        $__internal_eed98127e1b09b6a745948a353bddfae3668b45c48af27ed6d506faccd921a39->leave($__internal_eed98127e1b09b6a745948a353bddfae3668b45c48af27ed6d506faccd921a39_prof);

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
