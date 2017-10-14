<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f858510bd3191b37665041f11f975f32be17740210d87eccdb81b8a798b06fdb extends Twig_Template
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
        $__internal_992cca7f3e4c537abb006eeba4cd1ab4d6b08536bbe344ca1fbd1131950e637c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992cca7f3e4c537abb006eeba4cd1ab4d6b08536bbe344ca1fbd1131950e637c->enter($__internal_992cca7f3e4c537abb006eeba4cd1ab4d6b08536bbe344ca1fbd1131950e637c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d2cbcc53496280275fd2587240639aea5137529f5e1fbeb5e76327783b3e34bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2cbcc53496280275fd2587240639aea5137529f5e1fbeb5e76327783b3e34bc->enter($__internal_d2cbcc53496280275fd2587240639aea5137529f5e1fbeb5e76327783b3e34bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_992cca7f3e4c537abb006eeba4cd1ab4d6b08536bbe344ca1fbd1131950e637c->leave($__internal_992cca7f3e4c537abb006eeba4cd1ab4d6b08536bbe344ca1fbd1131950e637c_prof);

        
        $__internal_d2cbcc53496280275fd2587240639aea5137529f5e1fbeb5e76327783b3e34bc->leave($__internal_d2cbcc53496280275fd2587240639aea5137529f5e1fbeb5e76327783b3e34bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb5cd4c8ae273cab91d8402feed24ddead32d6e7acc4b9944539fe187847bc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5cd4c8ae273cab91d8402feed24ddead32d6e7acc4b9944539fe187847bc4e->enter($__internal_bb5cd4c8ae273cab91d8402feed24ddead32d6e7acc4b9944539fe187847bc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ae15fc1dee48a1ff99be7d22e24415b7b490b60619103552e3945e4c46997470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae15fc1dee48a1ff99be7d22e24415b7b490b60619103552e3945e4c46997470->enter($__internal_ae15fc1dee48a1ff99be7d22e24415b7b490b60619103552e3945e4c46997470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ae15fc1dee48a1ff99be7d22e24415b7b490b60619103552e3945e4c46997470->leave($__internal_ae15fc1dee48a1ff99be7d22e24415b7b490b60619103552e3945e4c46997470_prof);

        
        $__internal_bb5cd4c8ae273cab91d8402feed24ddead32d6e7acc4b9944539fe187847bc4e->leave($__internal_bb5cd4c8ae273cab91d8402feed24ddead32d6e7acc4b9944539fe187847bc4e_prof);

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
