<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e7e895edc27d32496615345d868faf4d2d0558d22f7951778502b32a2951dded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_546cbec03f4ad3fc6d6859380207f2d85b650d1f5864595f3e010d811e514ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546cbec03f4ad3fc6d6859380207f2d85b650d1f5864595f3e010d811e514ba8->enter($__internal_546cbec03f4ad3fc6d6859380207f2d85b650d1f5864595f3e010d811e514ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_08c31dc3068d2dadfad408b19957c1d5fcb253259b6a43d007b3a9fc322d270b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c31dc3068d2dadfad408b19957c1d5fcb253259b6a43d007b3a9fc322d270b->enter($__internal_08c31dc3068d2dadfad408b19957c1d5fcb253259b6a43d007b3a9fc322d270b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_546cbec03f4ad3fc6d6859380207f2d85b650d1f5864595f3e010d811e514ba8->leave($__internal_546cbec03f4ad3fc6d6859380207f2d85b650d1f5864595f3e010d811e514ba8_prof);

        
        $__internal_08c31dc3068d2dadfad408b19957c1d5fcb253259b6a43d007b3a9fc322d270b->leave($__internal_08c31dc3068d2dadfad408b19957c1d5fcb253259b6a43d007b3a9fc322d270b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3035b05a5a56c158bd35fc03931c2d147bed942fe5a4141214daa962e6aabe99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3035b05a5a56c158bd35fc03931c2d147bed942fe5a4141214daa962e6aabe99->enter($__internal_3035b05a5a56c158bd35fc03931c2d147bed942fe5a4141214daa962e6aabe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f1a1e00d0529651d3419cf83bf227c0b488235187e25c41154abb7595f74b64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a1e00d0529651d3419cf83bf227c0b488235187e25c41154abb7595f74b64d->enter($__internal_f1a1e00d0529651d3419cf83bf227c0b488235187e25c41154abb7595f74b64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f1a1e00d0529651d3419cf83bf227c0b488235187e25c41154abb7595f74b64d->leave($__internal_f1a1e00d0529651d3419cf83bf227c0b488235187e25c41154abb7595f74b64d_prof);

        
        $__internal_3035b05a5a56c158bd35fc03931c2d147bed942fe5a4141214daa962e6aabe99->leave($__internal_3035b05a5a56c158bd35fc03931c2d147bed942fe5a4141214daa962e6aabe99_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8750c671dd03cf8a8d147c1043cbc0ef57c9083d028932edc1135598cb3d0304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8750c671dd03cf8a8d147c1043cbc0ef57c9083d028932edc1135598cb3d0304->enter($__internal_8750c671dd03cf8a8d147c1043cbc0ef57c9083d028932edc1135598cb3d0304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_abaef7e6d223eb891fb844f9843f4b93bd87867e8acc0b1d09be9b6b0f32f8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abaef7e6d223eb891fb844f9843f4b93bd87867e8acc0b1d09be9b6b0f32f8c8->enter($__internal_abaef7e6d223eb891fb844f9843f4b93bd87867e8acc0b1d09be9b6b0f32f8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_abaef7e6d223eb891fb844f9843f4b93bd87867e8acc0b1d09be9b6b0f32f8c8->leave($__internal_abaef7e6d223eb891fb844f9843f4b93bd87867e8acc0b1d09be9b6b0f32f8c8_prof);

        
        $__internal_8750c671dd03cf8a8d147c1043cbc0ef57c9083d028932edc1135598cb3d0304->leave($__internal_8750c671dd03cf8a8d147c1043cbc0ef57c9083d028932edc1135598cb3d0304_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_359ab136b1697b38fa1b9bfc0daf9857df29f0c7324c32d19e3a71e63b2714b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359ab136b1697b38fa1b9bfc0daf9857df29f0c7324c32d19e3a71e63b2714b8->enter($__internal_359ab136b1697b38fa1b9bfc0daf9857df29f0c7324c32d19e3a71e63b2714b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c233ae2e8fe3b20e9e4fbf9e2da93b2de22d2ce96d7c0a342d5137bb6c7e685d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c233ae2e8fe3b20e9e4fbf9e2da93b2de22d2ce96d7c0a342d5137bb6c7e685d->enter($__internal_c233ae2e8fe3b20e9e4fbf9e2da93b2de22d2ce96d7c0a342d5137bb6c7e685d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c233ae2e8fe3b20e9e4fbf9e2da93b2de22d2ce96d7c0a342d5137bb6c7e685d->leave($__internal_c233ae2e8fe3b20e9e4fbf9e2da93b2de22d2ce96d7c0a342d5137bb6c7e685d_prof);

        
        $__internal_359ab136b1697b38fa1b9bfc0daf9857df29f0c7324c32d19e3a71e63b2714b8->leave($__internal_359ab136b1697b38fa1b9bfc0daf9857df29f0c7324c32d19e3a71e63b2714b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
