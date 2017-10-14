<?php

/* admin/form/edit_beer.html.twig */
class __TwigTemplate_009c6b0134b0d0dcb24a151c8675dcd9253692e2468d6174edac46276045f729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/form/edit_beer.html.twig", 1);
        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b92101904b75acb7b050c29a8983671eaa9f46ae9adefab1e96a8a1ca196c55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92101904b75acb7b050c29a8983671eaa9f46ae9adefab1e96a8a1ca196c55a->enter($__internal_b92101904b75acb7b050c29a8983671eaa9f46ae9adefab1e96a8a1ca196c55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/form/edit_beer.html.twig"));

        $__internal_87e87007fefec4db90848b46cc07e4fd5f7e653413e85282b7a8560225280c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e87007fefec4db90848b46cc07e4fd5f7e653413e85282b7a8560225280c48->enter($__internal_87e87007fefec4db90848b46cc07e4fd5f7e653413e85282b7a8560225280c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/form/edit_beer.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b92101904b75acb7b050c29a8983671eaa9f46ae9adefab1e96a8a1ca196c55a->leave($__internal_b92101904b75acb7b050c29a8983671eaa9f46ae9adefab1e96a8a1ca196c55a_prof);

        
        $__internal_87e87007fefec4db90848b46cc07e4fd5f7e653413e85282b7a8560225280c48->leave($__internal_87e87007fefec4db90848b46cc07e4fd5f7e653413e85282b7a8560225280c48_prof);

    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_2a0289a1863c9ce63388efa5cf2e4315dad3a089288249f6338fdfa42fe46761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0289a1863c9ce63388efa5cf2e4315dad3a089288249f6338fdfa42fe46761->enter($__internal_2a0289a1863c9ce63388efa5cf2e4315dad3a089288249f6338fdfa42fe46761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_369c837fdc3a3417d897fe6a91edd69853f9370135498bae03a4c13b22ce2eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369c837fdc3a3417d897fe6a91edd69853f9370135498bae03a4c13b22ce2eb5->enter($__internal_369c837fdc3a3417d897fe6a91edd69853f9370135498bae03a4c13b22ce2eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.list"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.edit"), "html", null, true);
        
        $__internal_369c837fdc3a3417d897fe6a91edd69853f9370135498bae03a4c13b22ce2eb5->leave($__internal_369c837fdc3a3417d897fe6a91edd69853f9370135498bae03a4c13b22ce2eb5_prof);

        
        $__internal_2a0289a1863c9ce63388efa5cf2e4315dad3a089288249f6338fdfa42fe46761->leave($__internal_2a0289a1863c9ce63388efa5cf2e4315dad3a089288249f6338fdfa42fe46761_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_cfbebb992bd6320f3648765d555f5d0c3a42f5af7a400113925d6a554ac44194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfbebb992bd6320f3648765d555f5d0c3a42f5af7a400113925d6a554ac44194->enter($__internal_cfbebb992bd6320f3648765d555f5d0c3a42f5af7a400113925d6a554ac44194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_46f770c4a1497a5587b708627c4e279a7829bfba659991a5121a0e4f9d5e3d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f770c4a1497a5587b708627c4e279a7829bfba659991a5121a0e4f9d5e3d99->enter($__internal_46f770c4a1497a5587b708627c4e279a7829bfba659991a5121a0e4f9d5e3d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"container\" id=\"main\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start', array("attr" => array("id" => "edit_beer")));
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_46f770c4a1497a5587b708627c4e279a7829bfba659991a5121a0e4f9d5e3d99->leave($__internal_46f770c4a1497a5587b708627c4e279a7829bfba659991a5121a0e4f9d5e3d99_prof);

        
        $__internal_cfbebb992bd6320f3648765d555f5d0c3a42f5af7a400113925d6a554ac44194->leave($__internal_cfbebb992bd6320f3648765d555f5d0c3a42f5af7a400113925d6a554ac44194_prof);

    }

    public function getTemplateName()
    {
        return "admin/form/edit_beer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 8,  80 => 7,  76 => 6,  73 => 5,  64 => 4,  44 => 2,  34 => 1,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block meta_title %}{{ ('app.beer.list')|trans }} - {{ ('app.beer.edit')|trans }}{% endblock %}
{% form_theme form 'bootstrap_3_layout.html.twig' %}
{% block content %}
    <div class=\"container\" id=\"main\">
        {{ form_start(form, {'attr': {'id': 'edit_beer'}}) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    </div>
{% endblock %}", "admin/form/edit_beer.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/admin/form/edit_beer.html.twig");
    }
}
