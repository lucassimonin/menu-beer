<?php

/* front/index.html.twig */
class __TwigTemplate_8541402d88daf510aa6fcd9ce99b8f169a2b424f21a37cdc1747a199477eabd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/index.html.twig", 1);
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
        $__internal_edfbedae4938511fa20b269fee4b02a5d13a355ddc0eb5b93b5713235a54f4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfbedae4938511fa20b269fee4b02a5d13a355ddc0eb5b93b5713235a54f4e2->enter($__internal_edfbedae4938511fa20b269fee4b02a5d13a355ddc0eb5b93b5713235a54f4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_092c3a1299470ed92aff91c59c25402fe1e2e0d44aa80ce32310f616a6af2fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092c3a1299470ed92aff91c59c25402fe1e2e0d44aa80ce32310f616a6af2fd5->enter($__internal_092c3a1299470ed92aff91c59c25402fe1e2e0d44aa80ce32310f616a6af2fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edfbedae4938511fa20b269fee4b02a5d13a355ddc0eb5b93b5713235a54f4e2->leave($__internal_edfbedae4938511fa20b269fee4b02a5d13a355ddc0eb5b93b5713235a54f4e2_prof);

        
        $__internal_092c3a1299470ed92aff91c59c25402fe1e2e0d44aa80ce32310f616a6af2fd5->leave($__internal_092c3a1299470ed92aff91c59c25402fe1e2e0d44aa80ce32310f616a6af2fd5_prof);

    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_9ae3af4b0b33fe73d739ed5f11675ac7aed6c4ca1c4b0dfc2a85e17452c5fa9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae3af4b0b33fe73d739ed5f11675ac7aed6c4ca1c4b0dfc2a85e17452c5fa9a->enter($__internal_9ae3af4b0b33fe73d739ed5f11675ac7aed6c4ca1c4b0dfc2a85e17452c5fa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_45e6fca7cad8c4b6a2ae4c1d0039c693583d3ddacb619fc87aad73305185c44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e6fca7cad8c4b6a2ae4c1d0039c693583d3ddacb619fc87aad73305185c44c->enter($__internal_45e6fca7cad8c4b6a2ae4c1d0039c693583d3ddacb619fc87aad73305185c44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.homepage"), "html", null, true);
        
        $__internal_45e6fca7cad8c4b6a2ae4c1d0039c693583d3ddacb619fc87aad73305185c44c->leave($__internal_45e6fca7cad8c4b6a2ae4c1d0039c693583d3ddacb619fc87aad73305185c44c_prof);

        
        $__internal_9ae3af4b0b33fe73d739ed5f11675ac7aed6c4ca1c4b0dfc2a85e17452c5fa9a->leave($__internal_9ae3af4b0b33fe73d739ed5f11675ac7aed6c4ca1c4b0dfc2a85e17452c5fa9a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_364e3763d72683d7e7f2196a440e31b1c25cb5f20b042f3bc49ba715bdc6fc3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364e3763d72683d7e7f2196a440e31b1c25cb5f20b042f3bc49ba715bdc6fc3e->enter($__internal_364e3763d72683d7e7f2196a440e31b1c25cb5f20b042f3bc49ba715bdc6fc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_59b63d1206b78eba00defddd393d209d2aa55721bb26aacd512ff154371eb9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b63d1206b78eba00defddd393d209d2aa55721bb26aacd512ff154371eb9f1->enter($__internal_59b63d1206b78eba00defddd393d209d2aa55721bb26aacd512ff154371eb9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container-full\" id=\"main\">
        <div class=\"col-lg-12 text-center\" id=\"top\">
            <img src=";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/public/img/logo.png"), "html", null, true);
        echo " />
            <h2>ON TAP TO NIGHT</h2>
        </div>
        ";
        // line 9
        $context["color"] = "dark";
        // line 10
        echo "        ";
        $context["i"] = 0;
        // line 11
        echo "        <div id=\"beer-table\">
            ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new Twig_Error_Runtime('Variable "beers" does not exist.', 12, $this->getSourceContext()); })())) > 0)) {
            // line 13
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new Twig_Error_Runtime('Variable "beers" does not exist.', 13, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["beer"]) {
                // line 14
                echo "                    <div class=\"col-lg-6 item ";
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                        <div class=\"circle pull-left\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "number", array()), "html", null, true);
                echo "</div>
                        <div class=\"country-brewery pull-left text-center\">
                            ";
                // line 17
                $context["countryid"] = ("code_iso." . twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "country", array())), array("é" => "e", "è" => "e", "ï" => "i", "î" => "i", " " => "_")));
                // line 18
                echo "                            <span class=\"flag-icon flag-icon-";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getParameterString((isset($context["countryid"]) || array_key_exists("countryid", $context) ? $context["countryid"] : (function () { throw new Twig_Error_Runtime('Variable "countryid" does not exist.', 18, $this->getSourceContext()); })())), "html", null, true);
                echo "\"></span>
                            <p class=\"brewery\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "brewery", array()), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"pull-left text-center title-beer\">
                            <h3>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "name", array()), "html", null, true);
                echo "</h3>
                            <p class=\"subtitle\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "type", array()), "html", null, true);
                echo "   </p>
                        </div>
                        <div class=\"price pull-right\">
                            <p>25cl: ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "price", array()), "html", null, true);
                echo "€</p>
                            <p>50cl: ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "price2", array()), "html", null, true);
                echo "€</p>
                        </div>
                    </div>
                    ";
                // line 30
                if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 30, $this->getSourceContext()); })()) == 2)) {
                    // line 31
                    echo "                        ";
                    if (((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 31, $this->getSourceContext()); })()) == "dark")) {
                        // line 32
                        echo "                            ";
                        $context["color"] = "light-dark";
                        // line 33
                        echo "                        ";
                    } else {
                        // line 34
                        echo "                            ";
                        $context["color"] = "dark";
                        // line 35
                        echo "                        ";
                    }
                    // line 36
                    echo "                        ";
                    $context["i"] = 0;
                    // line 37
                    echo "                    ";
                } elseif (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                    // line 38
                    echo "                        ";
                    $context["color"] = "light-dark";
                    // line 39
                    echo "                    ";
                }
                // line 40
                echo "                    ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 40, $this->getSourceContext()); })()) + 1);
                // line 41
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            ";
        } else {
            // line 43
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.no_data"), "html", null, true);
            echo "
            ";
        }
        // line 45
        echo "        </div>
    </div>
";
        
        $__internal_59b63d1206b78eba00defddd393d209d2aa55721bb26aacd512ff154371eb9f1->leave($__internal_59b63d1206b78eba00defddd393d209d2aa55721bb26aacd512ff154371eb9f1_prof);

        
        $__internal_364e3763d72683d7e7f2196a440e31b1c25cb5f20b042f3bc49ba715bdc6fc3e->leave($__internal_364e3763d72683d7e7f2196a440e31b1c25cb5f20b042f3bc49ba715bdc6fc3e_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 45,  198 => 43,  195 => 42,  181 => 41,  178 => 40,  175 => 39,  172 => 38,  169 => 37,  166 => 36,  163 => 35,  160 => 34,  157 => 33,  154 => 32,  151 => 31,  149 => 30,  143 => 27,  139 => 26,  133 => 23,  129 => 22,  123 => 19,  118 => 18,  116 => 17,  111 => 15,  106 => 14,  88 => 13,  86 => 12,  83 => 11,  80 => 10,  78 => 9,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block meta_title %}{{ ('app.homepage')|trans }}{% endblock %}
{% block content %}
    <div class=\"container-full\" id=\"main\">
        <div class=\"col-lg-12 text-center\" id=\"top\">
            <img src={{ asset('/assets/public/img/logo.png') }} />
            <h2>ON TAP TO NIGHT</h2>
        </div>
        {% set color = 'dark' %}
        {% set i = 0 %}
        <div id=\"beer-table\">
            {% if beers|length > 0 %}
                {% for beer in beers %}
                    <div class=\"col-lg-6 item {{ color }}\">
                        <div class=\"circle pull-left\">{{ beer.number }}</div>
                        <div class=\"country-brewery pull-left text-center\">
                            {% set countryid = 'code_iso.' ~ beer.country|lower|replace({'é': 'e', 'è': 'e', 'ï': 'i', 'î': 'i', ' ':'_'}) %}
                            <span class=\"flag-icon flag-icon-{{ countryid|getparameter }}\"></span>
                            <p class=\"brewery\">{{ beer.brewery }}</p>
                        </div>
                        <div class=\"pull-left text-center title-beer\">
                            <h3>{{ beer.name }}</h3>
                            <p class=\"subtitle\">{{ beer.type }}   </p>
                        </div>
                        <div class=\"price pull-right\">
                            <p>25cl: {{ beer.price }}€</p>
                            <p>50cl: {{ beer.price2 }}€</p>
                        </div>
                    </div>
                    {% if i == 2 %}
                        {% if color == 'dark' %}
                            {% set color = 'light-dark' %}
                        {% else %}
                            {% set color = 'dark' %}
                        {% endif %}
                        {% set i = 0 %}
                    {% elseif loop.first %}
                        {% set color = 'light-dark' %}
                    {% endif %}
                    {% set i = i + 1 %}
                {% endfor %}
            {% else %}
                {{ 'app.no_data'|trans }}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "front/index.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/front/index.html.twig");
    }
}
