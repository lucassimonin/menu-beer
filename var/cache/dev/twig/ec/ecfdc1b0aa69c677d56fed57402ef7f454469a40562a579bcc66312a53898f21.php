<?php

/* admin/form/edit_beer.html.twig */
class __TwigTemplate_e0034a5ac7e7762ae9c64406dabbb67802d826b81228e35aaf4d5dc664ac916d extends Twig_Template
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
        $__internal_a4ca8b16744e17af106dede17c601f89f665001d1287601efb4de832aece747f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ca8b16744e17af106dede17c601f89f665001d1287601efb4de832aece747f->enter($__internal_a4ca8b16744e17af106dede17c601f89f665001d1287601efb4de832aece747f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/form/edit_beer.html.twig"));

        $__internal_6005132cb4c37dd51d5e4fedf8aa25febd0bad1168afd9d2aaa7b253f8d64b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6005132cb4c37dd51d5e4fedf8aa25febd0bad1168afd9d2aaa7b253f8d64b94->enter($__internal_6005132cb4c37dd51d5e4fedf8aa25febd0bad1168afd9d2aaa7b253f8d64b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/form/edit_beer.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ca8b16744e17af106dede17c601f89f665001d1287601efb4de832aece747f->leave($__internal_a4ca8b16744e17af106dede17c601f89f665001d1287601efb4de832aece747f_prof);

        
        $__internal_6005132cb4c37dd51d5e4fedf8aa25febd0bad1168afd9d2aaa7b253f8d64b94->leave($__internal_6005132cb4c37dd51d5e4fedf8aa25febd0bad1168afd9d2aaa7b253f8d64b94_prof);

    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_9e1b1d982f146922fd8a792a7bef996915323ff88c1a687aa9547c8f6c85fc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1b1d982f146922fd8a792a7bef996915323ff88c1a687aa9547c8f6c85fc4c->enter($__internal_9e1b1d982f146922fd8a792a7bef996915323ff88c1a687aa9547c8f6c85fc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_ba4012bdabe0b70ba4b97279ef0a492e83ec028f00f3cb4f5fbbe463d0968d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4012bdabe0b70ba4b97279ef0a492e83ec028f00f3cb4f5fbbe463d0968d21->enter($__internal_ba4012bdabe0b70ba4b97279ef0a492e83ec028f00f3cb4f5fbbe463d0968d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.list"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.edit"), "html", null, true);
        
        $__internal_ba4012bdabe0b70ba4b97279ef0a492e83ec028f00f3cb4f5fbbe463d0968d21->leave($__internal_ba4012bdabe0b70ba4b97279ef0a492e83ec028f00f3cb4f5fbbe463d0968d21_prof);

        
        $__internal_9e1b1d982f146922fd8a792a7bef996915323ff88c1a687aa9547c8f6c85fc4c->leave($__internal_9e1b1d982f146922fd8a792a7bef996915323ff88c1a687aa9547c8f6c85fc4c_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0bab63b537782e9d0e8233800a1124afac583f54f24fffd5e10900f363b323e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bab63b537782e9d0e8233800a1124afac583f54f24fffd5e10900f363b323e->enter($__internal_d0bab63b537782e9d0e8233800a1124afac583f54f24fffd5e10900f363b323e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_780cf31905379704d27007ec4e4f92d3eb64bdde3f8c3d505e829d89e8fd0341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780cf31905379704d27007ec4e4f92d3eb64bdde3f8c3d505e829d89e8fd0341->enter($__internal_780cf31905379704d27007ec4e4f92d3eb64bdde3f8c3d505e829d89e8fd0341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_780cf31905379704d27007ec4e4f92d3eb64bdde3f8c3d505e829d89e8fd0341->leave($__internal_780cf31905379704d27007ec4e4f92d3eb64bdde3f8c3d505e829d89e8fd0341_prof);

        
        $__internal_d0bab63b537782e9d0e8233800a1124afac583f54f24fffd5e10900f363b323e->leave($__internal_d0bab63b537782e9d0e8233800a1124afac583f54f24fffd5e10900f363b323e_prof);

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
