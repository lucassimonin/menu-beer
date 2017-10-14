<?php

/* pagelayout/page_head_style.html.twig */
class __TwigTemplate_d78f2cd332d4fe2cb65e26c988e7012b6dd1fba818adba111a3666f6eec52eae extends Twig_Template
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
        $__internal_7fb830645a21b9f1976270ef226c5e9420d59dbabbfa79fcd420a667a09b122c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb830645a21b9f1976270ef226c5e9420d59dbabbfa79fcd420a667a09b122c->enter($__internal_7fb830645a21b9f1976270ef226c5e9420d59dbabbfa79fcd420a667a09b122c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head_style.html.twig"));

        $__internal_c438ec7f2aa3941fe29c5f6e7d8698ec50233fc61bd1885345fe3dbb4434e8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c438ec7f2aa3941fe29c5f6e7d8698ec50233fc61bd1885345fe3dbb4434e8cf->enter($__internal_c438ec7f2aa3941fe29c5f6e7d8698ec50233fc61bd1885345fe3dbb4434e8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head_style.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7fb830645a21b9f1976270ef226c5e9420d59dbabbfa79fcd420a667a09b122c->leave($__internal_7fb830645a21b9f1976270ef226c5e9420d59dbabbfa79fcd420a667a09b122c_prof);

        
        $__internal_c438ec7f2aa3941fe29c5f6e7d8698ec50233fc61bd1885345fe3dbb4434e8cf->leave($__internal_c438ec7f2aa3941fe29c5f6e7d8698ec50233fc61bd1885345fe3dbb4434e8cf_prof);

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
