<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2af622e164a9b4d95c2e96e73a7a0c64988aff1348dc05c61e4486f714f6518d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_35e9f151d908c567e80d9b96c3e9f3f60a5cc51457f96422a527fd47c5c8a188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e9f151d908c567e80d9b96c3e9f3f60a5cc51457f96422a527fd47c5c8a188->enter($__internal_35e9f151d908c567e80d9b96c3e9f3f60a5cc51457f96422a527fd47c5c8a188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_02567129012c59f1855f031a47725b194632127fadbe9091454f5e6cada45219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02567129012c59f1855f031a47725b194632127fadbe9091454f5e6cada45219->enter($__internal_02567129012c59f1855f031a47725b194632127fadbe9091454f5e6cada45219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35e9f151d908c567e80d9b96c3e9f3f60a5cc51457f96422a527fd47c5c8a188->leave($__internal_35e9f151d908c567e80d9b96c3e9f3f60a5cc51457f96422a527fd47c5c8a188_prof);

        
        $__internal_02567129012c59f1855f031a47725b194632127fadbe9091454f5e6cada45219->leave($__internal_02567129012c59f1855f031a47725b194632127fadbe9091454f5e6cada45219_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb3758d081e668654aaf50193d28c528aa8eb8de1773b880e8c1ae6edff60834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3758d081e668654aaf50193d28c528aa8eb8de1773b880e8c1ae6edff60834->enter($__internal_eb3758d081e668654aaf50193d28c528aa8eb8de1773b880e8c1ae6edff60834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c62486d68acabf26e37eb4db26d3507a549b3b48597cb35cbe0355fe7d6a007f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62486d68acabf26e37eb4db26d3507a549b3b48597cb35cbe0355fe7d6a007f->enter($__internal_c62486d68acabf26e37eb4db26d3507a549b3b48597cb35cbe0355fe7d6a007f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c62486d68acabf26e37eb4db26d3507a549b3b48597cb35cbe0355fe7d6a007f->leave($__internal_c62486d68acabf26e37eb4db26d3507a549b3b48597cb35cbe0355fe7d6a007f_prof);

        
        $__internal_eb3758d081e668654aaf50193d28c528aa8eb8de1773b880e8c1ae6edff60834->leave($__internal_eb3758d081e668654aaf50193d28c528aa8eb8de1773b880e8c1ae6edff60834_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb056479a35174aa5a458bfc065d82f561dd1f4ba58f801aaeb68b631eb5330e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb056479a35174aa5a458bfc065d82f561dd1f4ba58f801aaeb68b631eb5330e->enter($__internal_fb056479a35174aa5a458bfc065d82f561dd1f4ba58f801aaeb68b631eb5330e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7b00a353f393294e79dc6bf907696cdc842b3eb5a09ba5bde2748562d2b1251a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b00a353f393294e79dc6bf907696cdc842b3eb5a09ba5bde2748562d2b1251a->enter($__internal_7b00a353f393294e79dc6bf907696cdc842b3eb5a09ba5bde2748562d2b1251a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7b00a353f393294e79dc6bf907696cdc842b3eb5a09ba5bde2748562d2b1251a->leave($__internal_7b00a353f393294e79dc6bf907696cdc842b3eb5a09ba5bde2748562d2b1251a_prof);

        
        $__internal_fb056479a35174aa5a458bfc065d82f561dd1f4ba58f801aaeb68b631eb5330e->leave($__internal_fb056479a35174aa5a458bfc065d82f561dd1f4ba58f801aaeb68b631eb5330e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3def4cefdd0f60d087cf9b395b86925acaa13b09f75b864e09ca8bac3f35db2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3def4cefdd0f60d087cf9b395b86925acaa13b09f75b864e09ca8bac3f35db2c->enter($__internal_3def4cefdd0f60d087cf9b395b86925acaa13b09f75b864e09ca8bac3f35db2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c82055465b43f89d4a0a07b080ca0aea24abe40e5e45789e7d3cec6714b8c50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82055465b43f89d4a0a07b080ca0aea24abe40e5e45789e7d3cec6714b8c50c->enter($__internal_c82055465b43f89d4a0a07b080ca0aea24abe40e5e45789e7d3cec6714b8c50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_c82055465b43f89d4a0a07b080ca0aea24abe40e5e45789e7d3cec6714b8c50c->leave($__internal_c82055465b43f89d4a0a07b080ca0aea24abe40e5e45789e7d3cec6714b8c50c_prof);

        
        $__internal_3def4cefdd0f60d087cf9b395b86925acaa13b09f75b864e09ca8bac3f35db2c->leave($__internal_3def4cefdd0f60d087cf9b395b86925acaa13b09f75b864e09ca8bac3f35db2c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
