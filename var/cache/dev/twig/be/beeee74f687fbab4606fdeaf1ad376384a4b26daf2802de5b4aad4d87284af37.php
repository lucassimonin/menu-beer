<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b816f25a2afd17d826e6c048ba2a144a7be7f717abbe8beefba9b4422539eef1 extends Twig_Template
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
        $__internal_d15cb4ab37dab093e0d4e33596b8af287190f4e7c2419d7b7c12eb647689fd01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15cb4ab37dab093e0d4e33596b8af287190f4e7c2419d7b7c12eb647689fd01->enter($__internal_d15cb4ab37dab093e0d4e33596b8af287190f4e7c2419d7b7c12eb647689fd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_62d28031010e9c877d9ffb894f0b6b510cf960f9950007cbce384592a8c245d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d28031010e9c877d9ffb894f0b6b510cf960f9950007cbce384592a8c245d5->enter($__internal_62d28031010e9c877d9ffb894f0b6b510cf960f9950007cbce384592a8c245d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d15cb4ab37dab093e0d4e33596b8af287190f4e7c2419d7b7c12eb647689fd01->leave($__internal_d15cb4ab37dab093e0d4e33596b8af287190f4e7c2419d7b7c12eb647689fd01_prof);

        
        $__internal_62d28031010e9c877d9ffb894f0b6b510cf960f9950007cbce384592a8c245d5->leave($__internal_62d28031010e9c877d9ffb894f0b6b510cf960f9950007cbce384592a8c245d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e660e31674fc54daccfe55cd4769ec2fe8873a51846e9dec9d88c2df820f3b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e660e31674fc54daccfe55cd4769ec2fe8873a51846e9dec9d88c2df820f3b1b->enter($__internal_e660e31674fc54daccfe55cd4769ec2fe8873a51846e9dec9d88c2df820f3b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a8e0f6aae809c828162ccaf54a65255d89b53f28bf4b2fd748d612a1e0e86f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e0f6aae809c828162ccaf54a65255d89b53f28bf4b2fd748d612a1e0e86f44->enter($__internal_a8e0f6aae809c828162ccaf54a65255d89b53f28bf4b2fd748d612a1e0e86f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a8e0f6aae809c828162ccaf54a65255d89b53f28bf4b2fd748d612a1e0e86f44->leave($__internal_a8e0f6aae809c828162ccaf54a65255d89b53f28bf4b2fd748d612a1e0e86f44_prof);

        
        $__internal_e660e31674fc54daccfe55cd4769ec2fe8873a51846e9dec9d88c2df820f3b1b->leave($__internal_e660e31674fc54daccfe55cd4769ec2fe8873a51846e9dec9d88c2df820f3b1b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_670984a4338a294f5b4ebe207baafc8a036761864a72fced88e5987f4f25781e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670984a4338a294f5b4ebe207baafc8a036761864a72fced88e5987f4f25781e->enter($__internal_670984a4338a294f5b4ebe207baafc8a036761864a72fced88e5987f4f25781e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6e2c16439a9f3a6b6ec24d4cb535f05054faa9204cc1c7a452356122e5952ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2c16439a9f3a6b6ec24d4cb535f05054faa9204cc1c7a452356122e5952ff2->enter($__internal_6e2c16439a9f3a6b6ec24d4cb535f05054faa9204cc1c7a452356122e5952ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6e2c16439a9f3a6b6ec24d4cb535f05054faa9204cc1c7a452356122e5952ff2->leave($__internal_6e2c16439a9f3a6b6ec24d4cb535f05054faa9204cc1c7a452356122e5952ff2_prof);

        
        $__internal_670984a4338a294f5b4ebe207baafc8a036761864a72fced88e5987f4f25781e->leave($__internal_670984a4338a294f5b4ebe207baafc8a036761864a72fced88e5987f4f25781e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6553309f21ae3696165cbca4e1d747210f31716aa43d51ef431956e516b5a74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6553309f21ae3696165cbca4e1d747210f31716aa43d51ef431956e516b5a74f->enter($__internal_6553309f21ae3696165cbca4e1d747210f31716aa43d51ef431956e516b5a74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e27586438426bd07bacb9c7dffe0f7230f72325895674553a9627961ad026dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27586438426bd07bacb9c7dffe0f7230f72325895674553a9627961ad026dad->enter($__internal_e27586438426bd07bacb9c7dffe0f7230f72325895674553a9627961ad026dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e27586438426bd07bacb9c7dffe0f7230f72325895674553a9627961ad026dad->leave($__internal_e27586438426bd07bacb9c7dffe0f7230f72325895674553a9627961ad026dad_prof);

        
        $__internal_6553309f21ae3696165cbca4e1d747210f31716aa43d51ef431956e516b5a74f->leave($__internal_6553309f21ae3696165cbca4e1d747210f31716aa43d51ef431956e516b5a74f_prof);

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
