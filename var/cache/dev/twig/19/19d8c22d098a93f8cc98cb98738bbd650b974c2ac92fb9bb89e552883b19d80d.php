<?php

/* pagelayout/page_footer_script.html.twig */
class __TwigTemplate_a410ded35d76bde468fbd8ebb2b95c1540c0000f6a614db2c0bfcd9c7982f05e extends Twig_Template
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
        $__internal_1f6b96edc1af77a6450fc16bfbf12d27dcfa37e691353823f03615fc32a60e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6b96edc1af77a6450fc16bfbf12d27dcfa37e691353823f03615fc32a60e28->enter($__internal_1f6b96edc1af77a6450fc16bfbf12d27dcfa37e691353823f03615fc32a60e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_footer_script.html.twig"));

        $__internal_9e5a86908a309c322b6adef25621775b99749a47b28ef0af7fb8ad5da482ea9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5a86908a309c322b6adef25621775b99749a47b28ef0af7fb8ad5da482ea9e->enter($__internal_9e5a86908a309c322b6adef25621775b99749a47b28ef0af7fb8ad5da482ea9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_footer_script.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/js/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1f6b96edc1af77a6450fc16bfbf12d27dcfa37e691353823f03615fc32a60e28->leave($__internal_1f6b96edc1af77a6450fc16bfbf12d27dcfa37e691353823f03615fc32a60e28_prof);

        
        $__internal_9e5a86908a309c322b6adef25621775b99749a47b28ef0af7fb8ad5da482ea9e->leave($__internal_9e5a86908a309c322b6adef25621775b99749a47b28ef0af7fb8ad5da482ea9e_prof);

    }

    public function getTemplateName()
    {
        return "pagelayout/page_footer_script.html.twig";
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
    <script src=\"{{ asset('assets/app/js/app.js') }}\" type=\"text/javascript\" ></script>
{% endspaceless %}
", "pagelayout/page_footer_script.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/pagelayout/page_footer_script.html.twig");
    }
}
