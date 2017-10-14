<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7a10c5a041bf74eb893ebf93fb680bba153791df4ebc401c9739d8c9e1f3b032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b949a333a9a87a5a3a1c9886431117a12758f7d2afc4fe957e3b54d29f20211e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b949a333a9a87a5a3a1c9886431117a12758f7d2afc4fe957e3b54d29f20211e->enter($__internal_b949a333a9a87a5a3a1c9886431117a12758f7d2afc4fe957e3b54d29f20211e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_54f1d136036e5bed87435d6badfa14198434f322d8ada4cbcc65ce8ac46f05dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f1d136036e5bed87435d6badfa14198434f322d8ada4cbcc65ce8ac46f05dd->enter($__internal_54f1d136036e5bed87435d6badfa14198434f322d8ada4cbcc65ce8ac46f05dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b949a333a9a87a5a3a1c9886431117a12758f7d2afc4fe957e3b54d29f20211e->leave($__internal_b949a333a9a87a5a3a1c9886431117a12758f7d2afc4fe957e3b54d29f20211e_prof);

        
        $__internal_54f1d136036e5bed87435d6badfa14198434f322d8ada4cbcc65ce8ac46f05dd->leave($__internal_54f1d136036e5bed87435d6badfa14198434f322d8ada4cbcc65ce8ac46f05dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_79a7ff68098efe139bd9197a36100254e12fe13b8446ed016abf83c8edfcefc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a7ff68098efe139bd9197a36100254e12fe13b8446ed016abf83c8edfcefc7->enter($__internal_79a7ff68098efe139bd9197a36100254e12fe13b8446ed016abf83c8edfcefc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0c9c1aacdae07d56bc45708c64f0b424057d2ab0912094d045747fc2985fbaa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9c1aacdae07d56bc45708c64f0b424057d2ab0912094d045747fc2985fbaa3->enter($__internal_0c9c1aacdae07d56bc45708c64f0b424057d2ab0912094d045747fc2985fbaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0c9c1aacdae07d56bc45708c64f0b424057d2ab0912094d045747fc2985fbaa3->leave($__internal_0c9c1aacdae07d56bc45708c64f0b424057d2ab0912094d045747fc2985fbaa3_prof);

        
        $__internal_79a7ff68098efe139bd9197a36100254e12fe13b8446ed016abf83c8edfcefc7->leave($__internal_79a7ff68098efe139bd9197a36100254e12fe13b8446ed016abf83c8edfcefc7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d710fba1a17e007edd601b0efe8dc6dfe181df99ceaebef55ed47751202afc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d710fba1a17e007edd601b0efe8dc6dfe181df99ceaebef55ed47751202afc5->enter($__internal_4d710fba1a17e007edd601b0efe8dc6dfe181df99ceaebef55ed47751202afc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d592284ed4ce0462630a01467da144c2fb7e5d131b2d9ed140bba801c39f316f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d592284ed4ce0462630a01467da144c2fb7e5d131b2d9ed140bba801c39f316f->enter($__internal_d592284ed4ce0462630a01467da144c2fb7e5d131b2d9ed140bba801c39f316f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d592284ed4ce0462630a01467da144c2fb7e5d131b2d9ed140bba801c39f316f->leave($__internal_d592284ed4ce0462630a01467da144c2fb7e5d131b2d9ed140bba801c39f316f_prof);

        
        $__internal_4d710fba1a17e007edd601b0efe8dc6dfe181df99ceaebef55ed47751202afc5->leave($__internal_4d710fba1a17e007edd601b0efe8dc6dfe181df99ceaebef55ed47751202afc5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a639aa5c2e333b3b35eae829a4764e6f6f217f0a6e8d0f94f6b309f4c0df211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a639aa5c2e333b3b35eae829a4764e6f6f217f0a6e8d0f94f6b309f4c0df211->enter($__internal_1a639aa5c2e333b3b35eae829a4764e6f6f217f0a6e8d0f94f6b309f4c0df211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57e4c2239389abfefd2a02ac876ce358210ab274977f8c44563b9e5037e14f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e4c2239389abfefd2a02ac876ce358210ab274977f8c44563b9e5037e14f8d->enter($__internal_57e4c2239389abfefd2a02ac876ce358210ab274977f8c44563b9e5037e14f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_57e4c2239389abfefd2a02ac876ce358210ab274977f8c44563b9e5037e14f8d->leave($__internal_57e4c2239389abfefd2a02ac876ce358210ab274977f8c44563b9e5037e14f8d_prof);

        
        $__internal_1a639aa5c2e333b3b35eae829a4764e6f6f217f0a6e8d0f94f6b309f4c0df211->leave($__internal_1a639aa5c2e333b3b35eae829a4764e6f6f217f0a6e8d0f94f6b309f4c0df211_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
