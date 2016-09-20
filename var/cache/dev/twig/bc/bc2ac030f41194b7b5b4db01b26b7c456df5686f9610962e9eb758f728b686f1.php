<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_108c23be78822fb19909d242d8139ec99c5121ea87e3fd1014f23eab7a0fe26a extends Twig_Template
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
        $__internal_bf1c6b1667acf1ff03c76c526d9b081f8742fea0aca8de4fd6938404b5f2766e = $this->env->getExtension("native_profiler");
        $__internal_bf1c6b1667acf1ff03c76c526d9b081f8742fea0aca8de4fd6938404b5f2766e->enter($__internal_bf1c6b1667acf1ff03c76c526d9b081f8742fea0aca8de4fd6938404b5f2766e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf1c6b1667acf1ff03c76c526d9b081f8742fea0aca8de4fd6938404b5f2766e->leave($__internal_bf1c6b1667acf1ff03c76c526d9b081f8742fea0aca8de4fd6938404b5f2766e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ebc920c9775493b830fe2e8554bdb8eef39e3727f5f4065303c6af57ad7c2fd = $this->env->getExtension("native_profiler");
        $__internal_7ebc920c9775493b830fe2e8554bdb8eef39e3727f5f4065303c6af57ad7c2fd->enter($__internal_7ebc920c9775493b830fe2e8554bdb8eef39e3727f5f4065303c6af57ad7c2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ebc920c9775493b830fe2e8554bdb8eef39e3727f5f4065303c6af57ad7c2fd->leave($__internal_7ebc920c9775493b830fe2e8554bdb8eef39e3727f5f4065303c6af57ad7c2fd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71cae70be32bdfd9a6566650df22a138baebb4517bdc50346a4f8c1117d11f11 = $this->env->getExtension("native_profiler");
        $__internal_71cae70be32bdfd9a6566650df22a138baebb4517bdc50346a4f8c1117d11f11->enter($__internal_71cae70be32bdfd9a6566650df22a138baebb4517bdc50346a4f8c1117d11f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_71cae70be32bdfd9a6566650df22a138baebb4517bdc50346a4f8c1117d11f11->leave($__internal_71cae70be32bdfd9a6566650df22a138baebb4517bdc50346a4f8c1117d11f11_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_616eb0995d40113eb92b7d59b6e5e473b911d228fcb61f03570bc43f376507bf = $this->env->getExtension("native_profiler");
        $__internal_616eb0995d40113eb92b7d59b6e5e473b911d228fcb61f03570bc43f376507bf->enter($__internal_616eb0995d40113eb92b7d59b6e5e473b911d228fcb61f03570bc43f376507bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_616eb0995d40113eb92b7d59b6e5e473b911d228fcb61f03570bc43f376507bf->leave($__internal_616eb0995d40113eb92b7d59b6e5e473b911d228fcb61f03570bc43f376507bf_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
