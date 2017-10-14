<?php

/* front/index.html.twig */
class __TwigTemplate_03f51ba91fd1c1ea96bbd8b2835796b0408a76eeac89b2329660c5b3f021c066 extends Twig_Template
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
        $__internal_d58b31449ad1667e24448c4c273113369664805b74e1ccc4a89d6e93ac6ff277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58b31449ad1667e24448c4c273113369664805b74e1ccc4a89d6e93ac6ff277->enter($__internal_d58b31449ad1667e24448c4c273113369664805b74e1ccc4a89d6e93ac6ff277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_b9c3e7135e117d00f88b44b4d4c0a18c19d99a72852eb9f1d2857c0040cc02a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c3e7135e117d00f88b44b4d4c0a18c19d99a72852eb9f1d2857c0040cc02a5->enter($__internal_b9c3e7135e117d00f88b44b4d4c0a18c19d99a72852eb9f1d2857c0040cc02a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d58b31449ad1667e24448c4c273113369664805b74e1ccc4a89d6e93ac6ff277->leave($__internal_d58b31449ad1667e24448c4c273113369664805b74e1ccc4a89d6e93ac6ff277_prof);

        
        $__internal_b9c3e7135e117d00f88b44b4d4c0a18c19d99a72852eb9f1d2857c0040cc02a5->leave($__internal_b9c3e7135e117d00f88b44b4d4c0a18c19d99a72852eb9f1d2857c0040cc02a5_prof);

    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_539509bbcae8314c3ce6b30734a125fffb4632047727faf3e2ffa8bc52939cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539509bbcae8314c3ce6b30734a125fffb4632047727faf3e2ffa8bc52939cf5->enter($__internal_539509bbcae8314c3ce6b30734a125fffb4632047727faf3e2ffa8bc52939cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_438623f145d1fbd9a6d7ca54abc082e04ea83c9e34039bf784eddedd716412c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438623f145d1fbd9a6d7ca54abc082e04ea83c9e34039bf784eddedd716412c3->enter($__internal_438623f145d1fbd9a6d7ca54abc082e04ea83c9e34039bf784eddedd716412c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.homepage"), "html", null, true);
        
        $__internal_438623f145d1fbd9a6d7ca54abc082e04ea83c9e34039bf784eddedd716412c3->leave($__internal_438623f145d1fbd9a6d7ca54abc082e04ea83c9e34039bf784eddedd716412c3_prof);

        
        $__internal_539509bbcae8314c3ce6b30734a125fffb4632047727faf3e2ffa8bc52939cf5->leave($__internal_539509bbcae8314c3ce6b30734a125fffb4632047727faf3e2ffa8bc52939cf5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_37b21f5d4595f5d3db2806bc74f41e9b8e9f6441bcceb7df149f32f863081623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b21f5d4595f5d3db2806bc74f41e9b8e9f6441bcceb7df149f32f863081623->enter($__internal_37b21f5d4595f5d3db2806bc74f41e9b8e9f6441bcceb7df149f32f863081623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_974d95a909ad46d1fdbf0b313119d009c9957295ce015c4f41a5153156d718b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974d95a909ad46d1fdbf0b313119d009c9957295ce015c4f41a5153156d718b2->enter($__internal_974d95a909ad46d1fdbf0b313119d009c9957295ce015c4f41a5153156d718b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container-full\" id=\"main\">
        <div class=\"col-lg-12 text-center\">
            <img src=";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/public/img/logo.png"), "html", null, true);
        echo " />
        </div>
        ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new Twig_Error_Runtime('Variable "beers" does not exist.', 8, $this->getSourceContext()); })())) > 0)) {
            // line 9
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new Twig_Error_Runtime('Variable "beers" does not exist.', 9, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["beer"]) {
                // line 10
                echo "                <div class=\"col-lg-6 item\">
                    <div class=\"col-lg-1\">";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "number", array()), "html", null, true);
                echo "</div>
                    <span class=\"flag-icon flag-icon-";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "country", array()), "html", null, true);
                echo "\"></span>
                    ";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["allemagne"]) || array_key_exists("allemagne", $context) ? $context["allemagne"] : (function () { throw new Twig_Error_Runtime('Variable "allemagne" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
                echo "
                    <div class=\"col-lg-11\">
                        <p class=\"title\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "brewery", array()), "html", null, true);
                echo " <span class=\"name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "name", array()), "html", null, true);
                echo "</span> </p>
                        <p class=\"subtitle\">";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "type", array()), "html", null, true);
                echo "  25cl:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "price", array()), "html", null, true);
                echo "€ 50cl:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "price2", array()), "html", null, true);
                echo "€</p>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.no_data"), "html", null, true);
            echo "
        ";
        }
        // line 23
        echo "    </div>
";
        
        $__internal_974d95a909ad46d1fdbf0b313119d009c9957295ce015c4f41a5153156d718b2->leave($__internal_974d95a909ad46d1fdbf0b313119d009c9957295ce015c4f41a5153156d718b2_prof);

        
        $__internal_37b21f5d4595f5d3db2806bc74f41e9b8e9f6441bcceb7df149f32f863081623->leave($__internal_37b21f5d4595f5d3db2806bc74f41e9b8e9f6441bcceb7df149f32f863081623_prof);

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
        return array (  129 => 23,  123 => 21,  120 => 20,  106 => 16,  100 => 15,  95 => 13,  91 => 12,  87 => 11,  84 => 10,  79 => 9,  77 => 8,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block meta_title %}{{ ('app.homepage')|trans }}{% endblock %}
{% block content %}
    <div class=\"container-full\" id=\"main\">
        <div class=\"col-lg-12 text-center\">
            <img src={{ asset('/assets/public/img/logo.png') }} />
        </div>
        {% if beers|length > 0 %}
            {% for beer in beers %}
                <div class=\"col-lg-6 item\">
                    <div class=\"col-lg-1\">{{ beer.number }}</div>
                    <span class=\"flag-icon flag-icon-{{ beer.country }}\"></span>
                    {{ allemagne }}
                    <div class=\"col-lg-11\">
                        <p class=\"title\">{{ beer.brewery }} <span class=\"name\">{{ beer.name }}</span> </p>
                        <p class=\"subtitle\">{{ beer.type }}  25cl:{{ beer.price }}€ 50cl:{{ beer.price2 }}€</p>
                    </div>
                </div>
            {% endfor %}
        {% else %}
            {{ 'app.no_data'|trans }}
        {% endif %}
    </div>
{% endblock %}
", "front/index.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/front/index.html.twig");
    }
}
