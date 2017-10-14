<?php

/* pagelayout/page_footer_script.html.twig */
class __TwigTemplate_f64a2ce9cadaa7c96e0c3e60358a60b35ff4e17d29034d1339bdb605b7120c2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ca35b79aee76959068204fb24a04c7c5abc3db2282201db36cd9bdf7f097741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca35b79aee76959068204fb24a04c7c5abc3db2282201db36cd9bdf7f097741->enter($__internal_7ca35b79aee76959068204fb24a04c7c5abc3db2282201db36cd9bdf7f097741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_footer_script.html.twig"));

        $__internal_c02788ea18ef963fdcdc921db1474db60c0a7ccd8a16c8585364f19c15be445d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02788ea18ef963fdcdc921db1474db60c0a7ccd8a16c8585364f19c15be445d->enter($__internal_c02788ea18ef963fdcdc921db1474db60c0a7ccd8a16c8585364f19c15be445d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/page_footer_script.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/js/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7ca35b79aee76959068204fb24a04c7c5abc3db2282201db36cd9bdf7f097741->leave($__internal_7ca35b79aee76959068204fb24a04c7c5abc3db2282201db36cd9bdf7f097741_prof);

        
        $__internal_c02788ea18ef963fdcdc921db1474db60c0a7ccd8a16c8585364f19c15be445d->leave($__internal_c02788ea18ef963fdcdc921db1474db60c0a7ccd8a16c8585364f19c15be445d_prof);

    }

    public function getTemplateName()
    {
        return "pagelayout/page_footer_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
    <script src=\"{{ asset('assets/app/js/app.js') }}\" type=\"text/javascript\" ></script>
{% endspaceless %}
", "pagelayout/page_footer_script.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/pagelayout/page_footer_script.html.twig");
    }
}
