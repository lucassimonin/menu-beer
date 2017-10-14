<?php

/* pagelayout/page_head_script.html.twig */
class __TwigTemplate_b2b4cb6cf8780edad9057a17e14bc1ca1f8e6c3c31999015b9ebdac151ae7747 extends Twig_Template
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
        $__internal_895a9a4a4e423869a36ce27c4caa3ffcd3e60534beef7c07c81bf30c5aa218e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895a9a4a4e423869a36ce27c4caa3ffcd3e60534beef7c07c81bf30c5aa218e2->enter($__internal_895a9a4a4e423869a36ce27c4caa3ffcd3e60534beef7c07c81bf30c5aa218e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head_script.html.twig"));

        $__internal_6530a7c2e9f9c1a42644d4425367570677381e509369612bfa62805cb2965aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6530a7c2e9f9c1a42644d4425367570677381e509369612bfa62805cb2965aba->enter($__internal_6530a7c2e9f9c1a42644d4425367570677381e509369612bfa62805cb2965aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_head_script.html.twig"));

        // line 1
        echo "<script async src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/js/app_head.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>";
        
        $__internal_895a9a4a4e423869a36ce27c4caa3ffcd3e60534beef7c07c81bf30c5aa218e2->leave($__internal_895a9a4a4e423869a36ce27c4caa3ffcd3e60534beef7c07c81bf30c5aa218e2_prof);

        
        $__internal_6530a7c2e9f9c1a42644d4425367570677381e509369612bfa62805cb2965aba->leave($__internal_6530a7c2e9f9c1a42644d4425367570677381e509369612bfa62805cb2965aba_prof);

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
