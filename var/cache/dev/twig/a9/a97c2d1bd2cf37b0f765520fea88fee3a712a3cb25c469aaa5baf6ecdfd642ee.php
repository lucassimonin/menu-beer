<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7e30fb8dbde3c16ac07c4da8606687e576a0b996b5cd25b5de7852d7d88eb313 extends Twig_Template
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
        $__internal_6b5077f564a777b4f74a774722a7fa6ce86f212d73b7c254db3fdd5723d0e616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5077f564a777b4f74a774722a7fa6ce86f212d73b7c254db3fdd5723d0e616->enter($__internal_6b5077f564a777b4f74a774722a7fa6ce86f212d73b7c254db3fdd5723d0e616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e587f7dea6e411d4cbd5c2cf8e19acea9ef35e974330b6bd0c22c906b45921c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e587f7dea6e411d4cbd5c2cf8e19acea9ef35e974330b6bd0c22c906b45921c5->enter($__internal_e587f7dea6e411d4cbd5c2cf8e19acea9ef35e974330b6bd0c22c906b45921c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b5077f564a777b4f74a774722a7fa6ce86f212d73b7c254db3fdd5723d0e616->leave($__internal_6b5077f564a777b4f74a774722a7fa6ce86f212d73b7c254db3fdd5723d0e616_prof);

        
        $__internal_e587f7dea6e411d4cbd5c2cf8e19acea9ef35e974330b6bd0c22c906b45921c5->leave($__internal_e587f7dea6e411d4cbd5c2cf8e19acea9ef35e974330b6bd0c22c906b45921c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47d6549f866d4da05409f80dcfb7770f5c227e7623ff6c2ba12f9376044eaa3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d6549f866d4da05409f80dcfb7770f5c227e7623ff6c2ba12f9376044eaa3f->enter($__internal_47d6549f866d4da05409f80dcfb7770f5c227e7623ff6c2ba12f9376044eaa3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fefd284328d41097c16b587b5db121ab6523feb4e6786b9ac652a68e7f0b7034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefd284328d41097c16b587b5db121ab6523feb4e6786b9ac652a68e7f0b7034->enter($__internal_fefd284328d41097c16b587b5db121ab6523feb4e6786b9ac652a68e7f0b7034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fefd284328d41097c16b587b5db121ab6523feb4e6786b9ac652a68e7f0b7034->leave($__internal_fefd284328d41097c16b587b5db121ab6523feb4e6786b9ac652a68e7f0b7034_prof);

        
        $__internal_47d6549f866d4da05409f80dcfb7770f5c227e7623ff6c2ba12f9376044eaa3f->leave($__internal_47d6549f866d4da05409f80dcfb7770f5c227e7623ff6c2ba12f9376044eaa3f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e1df9d260e59a5ef512c05a2d63c70c56ea29ebfd08168fc3056d40e4b5f246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1df9d260e59a5ef512c05a2d63c70c56ea29ebfd08168fc3056d40e4b5f246->enter($__internal_7e1df9d260e59a5ef512c05a2d63c70c56ea29ebfd08168fc3056d40e4b5f246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7d0e34cf92d35477aefe39b6fedb6df5d48c82c7ba261744d88f9523df2c3997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0e34cf92d35477aefe39b6fedb6df5d48c82c7ba261744d88f9523df2c3997->enter($__internal_7d0e34cf92d35477aefe39b6fedb6df5d48c82c7ba261744d88f9523df2c3997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7d0e34cf92d35477aefe39b6fedb6df5d48c82c7ba261744d88f9523df2c3997->leave($__internal_7d0e34cf92d35477aefe39b6fedb6df5d48c82c7ba261744d88f9523df2c3997_prof);

        
        $__internal_7e1df9d260e59a5ef512c05a2d63c70c56ea29ebfd08168fc3056d40e4b5f246->leave($__internal_7e1df9d260e59a5ef512c05a2d63c70c56ea29ebfd08168fc3056d40e4b5f246_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_434e57b60932e8fd3d818a9eb9d7e8d0a67f3277aed90f612dbf328bdf9488ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434e57b60932e8fd3d818a9eb9d7e8d0a67f3277aed90f612dbf328bdf9488ed->enter($__internal_434e57b60932e8fd3d818a9eb9d7e8d0a67f3277aed90f612dbf328bdf9488ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f27c978c8c9a70594fff288881358e7003ca92121f523b702b54ae79b7eca14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27c978c8c9a70594fff288881358e7003ca92121f523b702b54ae79b7eca14d->enter($__internal_f27c978c8c9a70594fff288881358e7003ca92121f523b702b54ae79b7eca14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f27c978c8c9a70594fff288881358e7003ca92121f523b702b54ae79b7eca14d->leave($__internal_f27c978c8c9a70594fff288881358e7003ca92121f523b702b54ae79b7eca14d_prof);

        
        $__internal_434e57b60932e8fd3d818a9eb9d7e8d0a67f3277aed90f612dbf328bdf9488ed->leave($__internal_434e57b60932e8fd3d818a9eb9d7e8d0a67f3277aed90f612dbf328bdf9488ed_prof);

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
