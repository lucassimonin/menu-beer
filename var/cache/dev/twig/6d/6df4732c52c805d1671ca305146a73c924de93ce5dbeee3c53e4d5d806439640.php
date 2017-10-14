<?php

/* pagelayout/flashmessage.html.twig */
class __TwigTemplate_d7852d7abbaedf51ff6673ad53e5807da37b96cedd6595e8275f22b480c0a76d extends Twig_Template
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
        $__internal_0ccceb48a3958515766add89a0b00c6696285be16b893831dc81f885e4723aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ccceb48a3958515766add89a0b00c6696285be16b893831dc81f885e4723aff->enter($__internal_0ccceb48a3958515766add89a0b00c6696285be16b893831dc81f885e4723aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/flashmessage.html.twig"));

        $__internal_05c6675fbc2ade36c5c7f651c8081d14f1be727ef85c7124bea0a77c8f291721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c6675fbc2ade36c5c7f651c8081d14f1be727ef85c7124bea0a77c8f291721->enter($__internal_05c6675fbc2ade36c5c7f651c8081d14f1be727ef85c7124bea0a77c8f291721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagelayout/flashmessage.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 3
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
            ";
                // line 4
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0ccceb48a3958515766add89a0b00c6696285be16b893831dc81f885e4723aff->leave($__internal_0ccceb48a3958515766add89a0b00c6696285be16b893831dc81f885e4723aff_prof);

        
        $__internal_05c6675fbc2ade36c5c7f651c8081d14f1be727ef85c7124bea0a77c8f291721->leave($__internal_05c6675fbc2ade36c5c7f651c8081d14f1be727ef85c7124bea0a77c8f291721_prof);

    }

    public function getTemplateName()
    {
        return "pagelayout/flashmessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  34 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\">
            {{ message|trans }}
        </div>
    {% endfor %}
{% endfor %}
", "pagelayout/flashmessage.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/pagelayout/flashmessage.html.twig");
    }
}
