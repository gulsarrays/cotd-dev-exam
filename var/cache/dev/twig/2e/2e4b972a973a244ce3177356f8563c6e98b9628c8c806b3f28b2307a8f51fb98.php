<?php

/* CatchOfTheDayDevExamBundle:Default:edit.html.twig */
class __TwigTemplate_18b53a264f98dad17e38270ba9b333080eb3b0b2c77ea59d0096651f128fa0f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CatchOfTheDayDevExamBundle::base.html.twig", "CatchOfTheDayDevExamBundle:Default:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CatchOfTheDayDevExamBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70fb8198530d59931b19708e64410261da01c8846024acb223ae78d344278d98 = $this->env->getExtension("native_profiler");
        $__internal_70fb8198530d59931b19708e64410261da01c8846024acb223ae78d344278d98->enter($__internal_70fb8198530d59931b19708e64410261da01c8846024acb223ae78d344278d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CatchOfTheDayDevExamBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70fb8198530d59931b19708e64410261da01c8846024acb223ae78d344278d98->leave($__internal_70fb8198530d59931b19708e64410261da01c8846024acb223ae78d344278d98_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0862693729904a7e06062655784bca6a6833109b9dbe634f46c725e6a01abbd3 = $this->env->getExtension("native_profiler");
        $__internal_0862693729904a7e06062655784bca6a6833109b9dbe634f46c725e6a01abbd3->enter($__internal_0862693729904a7e06062655784bca6a6833109b9dbe634f46c725e6a01abbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Welcome";
        
        $__internal_0862693729904a7e06062655784bca6a6833109b9dbe634f46c725e6a01abbd3->leave($__internal_0862693729904a7e06062655784bca6a6833109b9dbe634f46c725e6a01abbd3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95c1366e9807521adfd8b23474c09c082ebf9a9aa0e7609bbb7b1dd695803d41 = $this->env->getExtension("native_profiler");
        $__internal_95c1366e9807521adfd8b23474c09c082ebf9a9aa0e7609bbb7b1dd695803d41->enter($__internal_95c1366e9807521adfd8b23474c09c082ebf9a9aa0e7609bbb7b1dd695803d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/catchofthedaydevexam/css/views/Default/index.css"), "html", null, true);
        echo "\"
";
        
        $__internal_95c1366e9807521adfd8b23474c09c082ebf9a9aa0e7609bbb7b1dd695803d41->leave($__internal_95c1366e9807521adfd8b23474c09c082ebf9a9aa0e7609bbb7b1dd695803d41_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4fc907e636ef55719aece85c68b68ab20a6860634175a4c7c35680142d63a56 = $this->env->getExtension("native_profiler");
        $__internal_a4fc907e636ef55719aece85c68b68ab20a6860634175a4c7c35680142d63a56->enter($__internal_a4fc907e636ef55719aece85c68b68ab20a6860634175a4c7c35680142d63a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h3>
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/catchofthedaydevexam/images/cotd-logo.png"), "html", null, true);
        echo "\" />
                CatchOfTheDay Developer Exam
            </h3>
        </div>
                
        



        <div class=\"row\">
            <div class=\"col-md-12\">
                <h4 class=\"app-header\">TODO List Application (Edit)</h4>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"well\">
                    <form class=\"form-horizontal\" method = \"post\" action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("add");
        echo "\">
                        <h5>Add New Item</h5>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\">
                                <input type=\"text\" class=\"form-control\" id=\"todo-text-input\" name=\"todo-text\" placeholder=\"Text\"  value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["itemName"]) ? $context["itemName"] : $this->getContext($context, "itemName")), "html", null, true);
        echo "\">
                                <input type=\"hidden\" class=\"form-control\" id=\"todo-text-input_id\" name=\"todo-text-id\" placeholder=\"Text\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["itemId"]) ? $context["itemId"] : $this->getContext($context, "itemId")), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <table class=\"table table-striped table-hover\">
                    <colgroup>
                        <col style=\"width: 120px\" />
                        <col style=\"width: 200px\" />
                        <col />
                        <col style=\"width: 135px\" />
                    </colgroup>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Created Timestamp</th>
                        <th>Text</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !$this->getAttribute($context["item"], "complete", array())) {
                // line 73
                echo "                        <tr>
                            <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "created", array()), "d/m/Y g:i a"), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit", array("itemId" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-edit\" id=\"edit_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">
                                ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                echo "
                                </a>
                            </td>
                            <td>
";
                // line 83
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mark_as_complete", array("itemId" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success btn-mark-as-complete\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">
                                    Mark as Complete
                                </a>
                            </td>
                        </tr>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                    </tbody>
                </table>
            </div>
        </div>
                    
        <div class=\"col-md-12 navigation\">
            ";
        // line 95
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
        
    </div>
";
        
        $__internal_a4fc907e636ef55719aece85c68b68ab20a6860634175a4c7c35680142d63a56->leave($__internal_a4fc907e636ef55719aece85c68b68ab20a6860634175a4c7c35680142d63a56_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_232c20d00737acc59e5b42b84263555b1d5f28117f22904598bb0ca81d807419 = $this->env->getExtension("native_profiler");
        $__internal_232c20d00737acc59e5b42b84263555b1d5f28117f22904598bb0ca81d807419->enter($__internal_232c20d00737acc59e5b42b84263555b1d5f28117f22904598bb0ca81d807419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "    
    ";
        // line 103
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
<script type=\"text/javascript\">
    //<![CDATA[

\$(document).ready(function () {
    
    
    \$('body').on('submit', '.form-horizontal', function (e) {
        e.preventDefault();

        if(\$('#todo-text-input').val() == '') {
            alert(\"Input box must NOT be empty \");
            return false;
        }

        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize()+'&ajax=1',
            dataType: 'json',
            async: false,
            success: function(data) {                
                alert(\"Data updated successfully!!!\");
                \$(location).attr('href', '/');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        })
    });
    
    \$('body').on('click', '.btn-mark-as-complete', function (e) {

        e.preventDefault();
              
         \$.ajax({
            type: 'GET',
            url: \$(this).attr('href'),
            data: 'ajax=1',
            dataType: 'json',
            async: false,
            success: function(data) {  
                alert(\"Data successfully Marked as COMPLETE !!!\");
                \$(location).attr('href', '/');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
        
        
        
    });
    

});



//]]>
    </script>
";
        
        $__internal_232c20d00737acc59e5b42b84263555b1d5f28117f22904598bb0ca81d807419->leave($__internal_232c20d00737acc59e5b42b84263555b1d5f28117f22904598bb0ca81d807419_prof);

    }

    public function getTemplateName()
    {
        return "CatchOfTheDayDevExamBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 103,  221 => 102,  215 => 101,  203 => 95,  195 => 89,  179 => 83,  172 => 78,  166 => 77,  161 => 75,  157 => 74,  154 => 73,  149 => 70,  113 => 37,  109 => 36,  102 => 32,  81 => 14,  76 => 11,  70 => 10,  61 => 7,  56 => 6,  50 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'CatchOfTheDayDevExamBundle::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }} - Welcome{% endblock title %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/catchofthedaydevexam/css/views/Default/index.css') }}"*/
/* {% endblock stylesheets %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="page-header">*/
/*             <h3>*/
/*                 <img src="{{ asset('bundles/catchofthedaydevexam/images/cotd-logo.png') }}" />*/
/*                 CatchOfTheDay Developer Exam*/
/*             </h3>*/
/*         </div>*/
/*                 */
/*         */
/* */
/* */
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h4 class="app-header">TODO List Application (Edit)</h4>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-6">*/
/*                 <div class="well">*/
/*                     <form class="form-horizontal" method = "post" action="{{ path('add') }}">*/
/*                         <h5>Add New Item</h5>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-12">*/
/*                                 <input type="text" class="form-control" id="todo-text-input" name="todo-text" placeholder="Text"  value="{{ itemName }}">*/
/*                                 <input type="hidden" class="form-control" id="todo-text-input_id" name="todo-text-id" placeholder="Text" value="{{ itemId }}">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-12">*/
/*                                 <button type="submit" class="btn btn-primary">*/
/*                                     Save*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <colgroup>*/
/*                         <col style="width: 120px" />*/
/*                         <col style="width: 200px" />*/
/*                         <col />*/
/*                         <col style="width: 135px" />*/
/*                     </colgroup>*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>#</th>*/
/*                         <th>Created Timestamp</th>*/
/*                         <th>Text</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for item in pagination if not item.complete %}*/
/* {#                    {% for item in items if not item.complete %}#}*/
/* {#                    {% for item in items %}#}*/
/*                         <tr>*/
/*                             <td>{{ item.id }}</td>*/
/*                             <td>{{ item.created|date('d/m/Y g:i a') }}</td>*/
/*                             <td>*/
/*                                 <a href="{{ path('edit', { 'itemId': item.id }) }}" class="btn-edit" id="edit_{{item.id}}">*/
/*                                 {{ item.text }}*/
/*                                 </a>*/
/*                             </td>*/
/*                             <td>*/
/* {#                                <a href="{{ path('mark_as_complete', { 'itemId': item.id }) }}" class="btn btn-sm btn-success">#}*/
/*                                 <a href="{{ path('mark_as_complete', { 'itemId': item.id }) }}" class="btn btn-sm btn-success btn-mark-as-complete" id="{{item.id}}">*/
/*                                     Mark as Complete*/
/*                                 </a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*                     */
/*         <div class="col-md-12 navigation">*/
/*             {{ knp_pagination_render(pagination) }}*/
/*         </div>*/
/*         */
/*     </div>*/
/* {% endblock body %}*/
/* */
/* {% block javascripts %}*/
/*     */
/*     {{ parent() }}*/
/*     */
/* <script type="text/javascript">*/
/*     //<![CDATA[*/
/* */
/* $(document).ready(function () {*/
/*     */
/*     */
/*     $('body').on('submit', '.form-horizontal', function (e) {*/
/*         e.preventDefault();*/
/* */
/*         if($('#todo-text-input').val() == '') {*/
/*             alert("Input box must NOT be empty ");*/
/*             return false;*/
/*         }*/
/* */
/*         $.ajax({*/
/*             type: $(this).attr('method'),*/
/*             url: $(this).attr('action'),*/
/*             data: $(this).serialize()+'&ajax=1',*/
/*             dataType: 'json',*/
/*             async: false,*/
/*             success: function(data) {                */
/*                 alert("Data updated successfully!!!");*/
/*                 $(location).attr('href', '/');*/
/*             },*/
/*             error: function(jqXHR, textStatus, errorThrown) {*/
/*                 alert(errorThrown);*/
/*             }*/
/*         })*/
/*     });*/
/*     */
/*     $('body').on('click', '.btn-mark-as-complete', function (e) {*/
/* */
/*         e.preventDefault();*/
/*               */
/*          $.ajax({*/
/*             type: 'GET',*/
/*             url: $(this).attr('href'),*/
/*             data: 'ajax=1',*/
/*             dataType: 'json',*/
/*             async: false,*/
/*             success: function(data) {  */
/*                 alert("Data successfully Marked as COMPLETE !!!");*/
/*                 $(location).attr('href', '/');*/
/*             },*/
/*             error: function(jqXHR, textStatus, errorThrown) {*/
/*                 alert(errorThrown);*/
/*             }*/
/*         });*/
/*         */
/*         */
/*         */
/*     });*/
/*     */
/* */
/* });*/
/* */
/* */
/* */
/* //]]>*/
/*     </script>*/
/* {% endblock %}*/
