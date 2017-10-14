<?php

/* pagelayout/page_head_script.html.twig */
class __TwigTemplate_e8fa0879355088c59ecf514cbd7618b1a79592a4c7c84b12ea913b1bd7b2ec4e extends Twig_Template
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
        $__internal_e347fbb17d5311b36c830cde02807cb1030edfc44005c2931dfc8fe3cf031a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e347fbb17d5311b36c830cde02807cb1030edfc44005c2931dfc8fe3cf031a5c->enter($__internal_e347fbb17d5311b36c830cde02807cb1030edfc44005c2931dfc8fe3cf031a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head_script.html.twig"));

        $__internal_7f09eaf699e223c4745dc2847247705bb01cc811ef10fc8c3c2d9bb28197bfde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f09eaf699e223c4745dc2847247705bb01cc811ef10fc8c3c2d9bb28197bfde->enter($__internal_7f09eaf699e223c4745dc2847247705bb01cc811ef10fc8c3c2d9bb28197bfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head_script.html.twig"));

        // line 1
        echo "<script async src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/js/app_head.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>";
        
        $__internal_e347fbb17d5311b36c830cde02807cb1030edfc44005c2931dfc8fe3cf031a5c->leave($__internal_e347fbb17d5311b36c830cde02807cb1030edfc44005c2931dfc8fe3cf031a5c_prof);

        
        $__internal_7f09eaf699e223c4745dc2847247705bb01cc811ef10fc8c3c2d9bb28197bfde->leave($__internal_7f09eaf699e223c4745dc2847247705bb01cc811ef10fc8c3c2d9bb28197bfde_prof);

    }

    public function getTemplateName()
    {
        return "pagelayout/page_head_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script async src=\"{{ asset('assets/app/js/app_head.js') }}\" type=\"text/javascript\" ></script>", "pagelayout/page_head_script.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/pagelayout/page_head_script.html.twig");
    }
}
