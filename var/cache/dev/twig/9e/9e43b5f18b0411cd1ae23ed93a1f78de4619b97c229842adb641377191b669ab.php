<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a9406af56e3316ba9d69bc01fe228e05da04d1d07991510ed21da55d2479202d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30b9a1f64c1a80d870febdd450c006f4c3cac8923f6c7265b64869e0f5a6f55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b9a1f64c1a80d870febdd450c006f4c3cac8923f6c7265b64869e0f5a6f55f->enter($__internal_30b9a1f64c1a80d870febdd450c006f4c3cac8923f6c7265b64869e0f5a6f55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5e99237d85caded1ce5618bfadb31f3037a5404abdf503c1b015674be02136b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e99237d85caded1ce5618bfadb31f3037a5404abdf503c1b015674be02136b9->enter($__internal_5e99237d85caded1ce5618bfadb31f3037a5404abdf503c1b015674be02136b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b9a1f64c1a80d870febdd450c006f4c3cac8923f6c7265b64869e0f5a6f55f->leave($__internal_30b9a1f64c1a80d870febdd450c006f4c3cac8923f6c7265b64869e0f5a6f55f_prof);

        
        $__internal_5e99237d85caded1ce5618bfadb31f3037a5404abdf503c1b015674be02136b9->leave($__internal_5e99237d85caded1ce5618bfadb31f3037a5404abdf503c1b015674be02136b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_778a4ec0b995d31d7412efbc876f9dc252052fbee132789c3ab690f991d651d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778a4ec0b995d31d7412efbc876f9dc252052fbee132789c3ab690f991d651d1->enter($__internal_778a4ec0b995d31d7412efbc876f9dc252052fbee132789c3ab690f991d651d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7f82bb56fdcbc55200fff08ac04315e38b16412a6c1a2590103495b672b6069a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f82bb56fdcbc55200fff08ac04315e38b16412a6c1a2590103495b672b6069a->enter($__internal_7f82bb56fdcbc55200fff08ac04315e38b16412a6c1a2590103495b672b6069a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7f82bb56fdcbc55200fff08ac04315e38b16412a6c1a2590103495b672b6069a->leave($__internal_7f82bb56fdcbc55200fff08ac04315e38b16412a6c1a2590103495b672b6069a_prof);

        
        $__internal_778a4ec0b995d31d7412efbc876f9dc252052fbee132789c3ab690f991d651d1->leave($__internal_778a4ec0b995d31d7412efbc876f9dc252052fbee132789c3ab690f991d651d1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
