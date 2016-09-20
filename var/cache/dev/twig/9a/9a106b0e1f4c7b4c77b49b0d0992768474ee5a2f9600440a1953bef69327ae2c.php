<?php

/* CatchOfTheDayDevExamBundle:Default:index.html.twig */
class __TwigTemplate_03e44f6f5e02cb34c3e217340aed0700fd621cc38b1a8b1384be56f21b02a2de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CatchOfTheDayDevExamBundle::base.html.twig", "CatchOfTheDayDevExamBundle:Default:index.html.twig", 1);
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
        $__internal_c35ac7616a57424ea4273f3d198718b7bb89643516bf5dadb79632ca2e6b5882 = $this->env->getExtension("native_profiler");
        $__internal_c35ac7616a57424ea4273f3d198718b7bb89643516bf5dadb79632ca2e6b5882->enter($__internal_c35ac7616a57424ea4273f3d198718b7bb89643516bf5dadb79632ca2e6b5882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CatchOfTheDayDevExamBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c35ac7616a57424ea4273f3d198718b7bb89643516bf5dadb79632ca2e6b5882->leave($__internal_c35ac7616a57424ea4273f3d198718b7bb89643516bf5dadb79632ca2e6b5882_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1a20a0e3cd8608a9f96ae047a16f9ea2e06eee3692daca72bab7527cd794488 = $this->env->getExtension("native_profiler");
        $__internal_b1a20a0e3cd8608a9f96ae047a16f9ea2e06eee3692daca72bab7527cd794488->enter($__internal_b1a20a0e3cd8608a9f96ae047a16f9ea2e06eee3692daca72bab7527cd794488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Welcome";
        
        $__internal_b1a20a0e3cd8608a9f96ae047a16f9ea2e06eee3692daca72bab7527cd794488->leave($__internal_b1a20a0e3cd8608a9f96ae047a16f9ea2e06eee3692daca72bab7527cd794488_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40110292477224af4d0aecfef079fe4a82ce2b008c6b41fe016a0eed751e4743 = $this->env->getExtension("native_profiler");
        $__internal_40110292477224af4d0aecfef079fe4a82ce2b008c6b41fe016a0eed751e4743->enter($__internal_40110292477224af4d0aecfef079fe4a82ce2b008c6b41fe016a0eed751e4743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/catchofthedaydevexam/css/views/Default/index.css"), "html", null, true);
        echo "\"
";
        
        $__internal_40110292477224af4d0aecfef079fe4a82ce2b008c6b41fe016a0eed751e4743->leave($__internal_40110292477224af4d0aecfef079fe4a82ce2b008c6b41fe016a0eed751e4743_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_58d89858dc763c01894a33aa6ecd6baa6a9765902cf0cb4b2ee1d5eb60d2d9bc = $this->env->getExtension("native_profiler");
        $__internal_58d89858dc763c01894a33aa6ecd6baa6a9765902cf0cb4b2ee1d5eb60d2d9bc->enter($__internal_58d89858dc763c01894a33aa6ecd6baa6a9765902cf0cb4b2ee1d5eb60d2d9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <p>
                    This is an incomplete TODO list application based on Symfony 3 and Bootstrap 3. The TODO list items are to be serialised to JSON and saved in
                    <code>src/CatchOfTheDay/DevExamBundle/Resources/data/todo-list.json.</code> We have already provided the <code>TodoListManager</code> service to read and write
                    to this file. Look for <code>// TODO</code> comments inside <code>src/CatchOfTheDay/DevExamBundle</code> to complete the application. Please add validation to
                    the text field in the Add New Item form - do not allow blank items to be added. You're welcome to use Javascript (jQuery is also included here) for anything.
                </p>
                <p>
                    Bonus points:
                </p>
                <ul>
                    <li>Add pagination to the table of TODO list items below.</li>
                    <li>Provide the ability to edit existing TODO list items and change the text.</li>
                    <li>Use AJAX instead of POSTing/redirecting to <code>addAction()</code> or <code>markAsCompleteAction()</code>.</li>
                    <li>Provide a second interface to view Completed items, perhaps with the ability to 'uncomplete' items.</li>
                    <li>Surprise us!</li>
                </ul>
            </div>
        </div>


        <div class=\"row\">
            <div class=\"col-md-12\">
                <h4 class=\"app-header\">TODO List Application (UnComplete)</h4>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"well\">
                    <form class=\"form-horizontal\" method = \"post\" action=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("add");
        echo "\">
                        <h5>Add New Item</h5>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\">
                                <input type=\"text\" class=\"form-control\" id=\"todo-text-input\" name=\"todo-text\" placeholder=\"Text\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    Add
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
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !$this->getAttribute($context["item"], "complete", array())) {
                // line 91
                echo "                        <tr>
                            <td>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 93
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "created", array()), "d/m/Y g:i a"), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit", array("itemId" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" class=\" btn-edit\" id=\"edit_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">
                                ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                echo "
                                </a>
                            </td>
                            <td>
";
                // line 101
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
        // line 107
        echo "                    </tbody>
                </table>
            </div>
        </div>
                    
        <div class=\"col-md-12 navigation\">
            ";
        // line 113
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
        
    </div>
";
        
        $__internal_58d89858dc763c01894a33aa6ecd6baa6a9765902cf0cb4b2ee1d5eb60d2d9bc->leave($__internal_58d89858dc763c01894a33aa6ecd6baa6a9765902cf0cb4b2ee1d5eb60d2d9bc_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38bff53e04a2b87d4bda8c2d672d7ba2f4eec1b4468a2139aec2a5538997064b = $this->env->getExtension("native_profiler");
        $__internal_38bff53e04a2b87d4bda8c2d672d7ba2f4eec1b4468a2139aec2a5538997064b->enter($__internal_38bff53e04a2b87d4bda8c2d672d7ba2f4eec1b4468a2139aec2a5538997064b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        echo "    
    ";
        // line 121
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
                alert(\"Data Added successfully!!!\");
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
        
        $__internal_38bff53e04a2b87d4bda8c2d672d7ba2f4eec1b4468a2139aec2a5538997064b->leave($__internal_38bff53e04a2b87d4bda8c2d672d7ba2f4eec1b4468a2139aec2a5538997064b_prof);

    }

    public function getTemplateName()
    {
        return "CatchOfTheDayDevExamBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 121,  233 => 120,  227 => 119,  215 => 113,  207 => 107,  191 => 101,  184 => 96,  178 => 95,  173 => 93,  169 => 92,  166 => 91,  161 => 88,  121 => 51,  81 => 14,  76 => 11,  70 => 10,  61 => 7,  56 => 6,  50 => 5,  37 => 3,  11 => 1,);
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
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <p>*/
/*                     This is an incomplete TODO list application based on Symfony 3 and Bootstrap 3. The TODO list items are to be serialised to JSON and saved in*/
/*                     <code>src/CatchOfTheDay/DevExamBundle/Resources/data/todo-list.json.</code> We have already provided the <code>TodoListManager</code> service to read and write*/
/*                     to this file. Look for <code>// TODO</code> comments inside <code>src/CatchOfTheDay/DevExamBundle</code> to complete the application. Please add validation to*/
/*                     the text field in the Add New Item form - do not allow blank items to be added. You're welcome to use Javascript (jQuery is also included here) for anything.*/
/*                 </p>*/
/*                 <p>*/
/*                     Bonus points:*/
/*                 </p>*/
/*                 <ul>*/
/*                     <li>Add pagination to the table of TODO list items below.</li>*/
/*                     <li>Provide the ability to edit existing TODO list items and change the text.</li>*/
/*                     <li>Use AJAX instead of POSTing/redirecting to <code>addAction()</code> or <code>markAsCompleteAction()</code>.</li>*/
/*                     <li>Provide a second interface to view Completed items, perhaps with the ability to 'uncomplete' items.</li>*/
/*                     <li>Surprise us!</li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h4 class="app-header">TODO List Application (UnComplete)</h4>*/
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
/*                                 <input type="text" class="form-control" id="todo-text-input" name="todo-text" placeholder="Text">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-12">*/
/*                                 <button type="submit" class="btn btn-primary">*/
/*                                     Add*/
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
/*                                 <a href="{{ path('edit', { 'itemId': item.id }) }}" class=" btn-edit" id="edit_{{item.id}}">*/
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
/*                 alert("Data Added successfully!!!");*/
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
