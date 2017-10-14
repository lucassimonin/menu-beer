<?php

/* pagelayout/page_head_style.html.twig */
class __TwigTemplate_612a5ae9fcaf99aa3db74c466c8a8ed4aacfb83f9d9db3fc259295f5e188580b extends Twig_Template
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
        $__internal_82830378f3df8f125a8aefdf13f99c63c3fd54be168e54025365e927ad550c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82830378f3df8f125a8aefdf13f99c63c3fd54be168e54025365e927ad550c45->enter($__internal_82830378f3df8f125a8aefdf13f99c63c3fd54be168e54025365e927ad550c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head_style.html.twig"));

        $__internal_08c72b0149ec5fa55f4b14d1e10ff47786a08207279164df627824beda20dabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c72b0149ec5fa55f4b14d1e10ff47786a08207279164df627824beda20dabf->enter($__internal_08c72b0149ec5fa55f4b14d1e10ff47786a08207279164df627824beda20dabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head_style.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_82830378f3df8f125a8aefdf13f99c63c3fd54be168e54025365e927ad550c45->leave($__internal_82830378f3df8f125a8aefdf13f99c63c3fd54be168e54025365e927ad550c45_prof);

        
        $__internal_08c72b0149ec5fa55f4b14d1e10ff47786a08207279164df627824beda20dabf->leave($__internal_08c72b0149ec5fa55f4b14d1e10ff47786a08207279164df627824beda20dabf_prof);

    }

    public function getTemplateName()
    {
        return "pagelayout/page_head_style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/app/css/style.css') }}\" type=\"text/css\" />
{% endspaceless %}
", "pagelayout/page_head_style.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/pagelayout/page_head_style.html.twig");
    }
}
