<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/export_import.twig */
class __TwigTemplate_18e2603017fa190b47ff56144b3b93910125df05404f60d163ac40d4e9e8066a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"";
        // line 6
        echo ($context["back"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t<li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 22
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 23
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t";
        if (( !($context["error_warning"] ?? null) &&  !($context["success"] ?? null))) {
            // line 28
            echo "\t\t<div id=\"export_import_notification\" class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
\t\t\t<div id=\"export_import_loading\"><img src=\"view/image/export-import/loading.gif\" />";
            // line 29
            echo ($context["text_loading_notifications"] ?? null);
            echo "</div>
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 33
        echo "
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">

\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\"><a href=\"#tab-export\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_export"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-import\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_import"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>

\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-export\">
\t\t\t\t\t\t<form action=\"";
        // line 46
        echo ($context["export"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"export\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<table class=\"form\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 49
        echo ($context["entry_export"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"vertical-align:top;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 53
        echo ($context["entry_export_type"] ?? null);
        echo "<br />
\t\t\t\t\t\t\t\t\t\t";
        // line 54
        if ((($context["export_type"] ?? null) == "c")) {
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"c\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"c\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_category"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t";
        // line 61
        if ((($context["export_type"] ?? null) == "p")) {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"p\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"p\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_product"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t";
        // line 68
        if ((($context["export_type"] ?? null) == "o")) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"o\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"o\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_option"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t";
        // line 75
        if ((($context["export_type"] ?? null) == "a")) {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"a\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"a\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_attribute"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t";
        // line 82
        if (($context["exist_filter"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((($context["export_type"] ?? null) == "f")) {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"f\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"f\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_export_type_filter"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ((($context["export_type"] ?? null) == "u")) {
            // line 92
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"u\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"u\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_customer"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr id=\"category_filter\">
\t\t\t\t\t\t\t\t\t<td style=\"vertical-align:top;\">";
        // line 102
        echo ($context["entry_category_filter"] ?? null);
        echo "<span class=\"help\">";
        echo ($context["help_category_filter"] ?? null);
        echo "</span><br />
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 103
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<div id=\"categories\" class=\"well well-sm\" style=\"height: 100px; overflow: auto;\"> 
\t\t\t\t\t\t\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 106
            echo "\t\t\t\t\t\t\t\t\t\t\t<div id=\"category";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 106);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 106);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"categories[]\" value=\"";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 107);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr id=\"range_type\">
\t\t\t\t\t\t\t\t\t<td style=\"vertical-align:top;\">";
        // line 115
        echo ($context["entry_range_type"] ?? null);
        echo "<span class=\"help\">";
        echo ($context["help_range_type"] ?? null);
        echo "</span><br />
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"range_type\" value=\"id\" id=\"range_type_id\">";
        // line 116
        echo ($context["button_export_id"] ?? null);
        echo " &nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"range_type\" value=\"page\" id=\"range_type_page\">";
        // line 117
        echo ($context["button_export_page"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t\t\t\t\t<span class=\"id\">";
        // line 119
        echo ($context["entry_start_id"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"page\">";
        // line 120
        echo ($context["entry_start_index"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"min\" value=\"";
        // line 122
        echo ($context["min"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<span class=\"id\">";
        // line 124
        echo ($context["entry_end_id"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"page\">";
        // line 125
        echo ($context["entry_end_index"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"max\" value=\"";
        // line 127
        echo ($context["max"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"buttons\"><a onclick=\"downloadData();\" class=\"btn btn-primary\"><span>";
        // line 132
        echo ($context["button_export"] ?? null);
        echo "</span></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-import\">
\t\t\t\t\t\t<form action=\"";
        // line 139
        echo ($context["import"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"import\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<table class=\"form\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
        // line 143
        echo ($context["entry_import"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 144
        echo ($context["help_import"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 145
        echo ($context["help_format"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
        // line 150
        echo ($context["entry_incremental"] ?? null);
        echo "<br />
\t\t\t\t\t\t\t\t\t\t";
        // line 151
        if (($context["incremental"] ?? null)) {
            // line 152
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 153
            echo ($context["text_yes"] ?? null);
            echo " ";
            echo ($context["help_incremental_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 156
            echo ($context["text_no"] ?? null);
            echo " ";
            echo ($context["help_incremental_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 158
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 159
            echo ($context["text_yes"] ?? null);
            echo " ";
            echo ($context["help_incremental_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 162
            echo ($context["text_no"] ?? null);
            echo " ";
            echo ($context["help_incremental_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 164
        echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 167
        echo ($context["entry_upload"] ?? null);
        echo "<br /><br /><input type=\"file\" name=\"upload\" id=\"upload\" /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"buttons\"><a onclick=\"uploadData();\" class=\"btn btn-primary\"><span>";
        // line 170
        echo ($context["button_import"] ?? null);
        echo "</span></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-settings\">
\t\t\t\t\t\t<form action=\"";
        // line 177
        echo ($context["settings"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"settings\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<table class=\"form\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
        // line 182
        if (($context["settings_use_option_id"] ?? null)) {
            // line 183
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_id\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_option_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 185
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_id\" value=\"1\" /> ";
            echo ($context["entry_settings_use_option_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 187
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
        // line 193
        if (($context["settings_use_option_value_id"] ?? null)) {
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_value_id\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_option_value_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 196
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_value_id\" value=\"1\" /> ";
            echo ($context["entry_settings_use_option_value_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 198
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
        // line 204
        if (($context["settings_use_attribute_group_id"] ?? null)) {
            // line 205
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_group_id\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_attribute_group_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 207
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_group_id\" value=\"1\" /> ";
            echo ($context["entry_settings_use_attribute_group_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 209
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
        // line 215
        if (($context["settings_use_attribute_id"] ?? null)) {
            // line 216
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_id\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_attribute_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 218
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_id\" value=\"1\" /> ";
            echo ($context["entry_settings_use_attribute_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 220
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        // line 223
        if (($context["exist_filter"] ?? null)) {
            // line 224
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
            // line 227
            if (($context["settings_use_filter_group_id"] ?? null)) {
                // line 228
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_group_id\" value=\"1\" checked=\"checked\" /> ";
                echo ($context["entry_settings_use_filter_group_id"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 230
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_group_id\" value=\"1\" /> ";
                echo ($context["entry_settings_use_filter_group_id"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 232
            echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
            // line 238
            if (($context["settings_use_filter_id"] ?? null)) {
                // line 239
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_id\" value=\"1\" checked=\"checked\" /> ";
                echo ($context["entry_settings_use_filter_id"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 241
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_id\" value=\"1\" /> ";
                echo ($context["entry_settings_use_filter_id"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 243
            echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        // line 247
        echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
        // line 250
        if (($context["settings_use_export_cache"] ?? null)) {
            // line 251
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_export_cache\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_export_cache"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 253
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_export_cache\" value=\"1\" /> ";
            echo ($context["entry_settings_use_export_cache"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 255
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
        // line 261
        if (($context["settings_use_import_cache"] ?? null)) {
            // line 262
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_import_cache\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_import_cache"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 264
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_import_cache\" value=\"1\" /> ";
            echo ($context["entry_settings_use_import_cache"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 266
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"buttons\"><a onclick=\"updateSettings();\" class=\"btn btn-primary\"><span>";
        // line 270
        echo ($context["button_settings"] ?? null);
        echo "</span></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>

<script type=\"text/javascript\"><!--

function getNotifications() {
\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> <div id=\"export_import_loading\"><img src=\"view/image/export-import/loading.gif\" />";
        // line 285
        echo ($context["text_loading_notifications"] ?? null);
        echo "</div>');
\tsetTimeout(
\t\tfunction(){
\t\t\t\$.ajax({
\t\t\t\ttype: 'GET',
\t\t\t\turl: 'index.php?route=extension/export_import/getNotifications&user_token=";
        // line 290
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+json['error']+' <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        // line 294
        echo ($context["text_retry"] ?? null);
        echo "</span>');
\t\t\t\t\t} else if (json['message']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+json['message']+'<br /><br />";
        // line 296
        echo ($context["text_used_category_ids"] ?? null);
        echo " ";
        echo ($context["text_used_product_ids"] ?? null);
        echo "');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+'";
        // line 298
        echo ($context["error_no_news"] ?? null);
        echo "');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tfailure: function(){
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+'";
        // line 302
        echo ($context["error_notifications"] ?? null);
        echo " <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        echo ($context["text_retry"] ?? null);
        echo "</span>');
\t\t\t\t},
\t\t\t\terror: function() {
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+'";
        // line 305
        echo ($context["error_notifications"] ?? null);
        echo " <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        echo ($context["text_retry"] ?? null);
        echo "</span>');
\t\t\t\t}
\t\t\t});
\t\t},
\t\t500
\t);
}

function check_category_filter(export_type) {
\tif (export_type=='p') {
\t\t\$('#category_filter').show();
\t} else {
\t\t\$('#category_filter').hide();
\t}
}

function check_range_type(export_type) {
\tif ((export_type=='p') || (export_type=='c') || (export_type=='u')) {
\t\t\$('#range_type').show();
\t\t\$('#range_type_id').prop('checked',true);
\t\t\$('#range_type_page').prop('checked',false);
\t\t\$('.id').show();
\t\t\$('.page').hide();
\t} else {
\t\t\$('#range_type').hide();
\t}
}

\$(document).ready(function() {

\tcheck_category_filter(\$('input[name=export_type]:checked').val());
\tcheck_range_type(\$('input[name=export_type]:checked').val());

\t\$(\"#range_type_id\").click(function() {
\t\t\$(\".page\").hide();
\t\t\$(\".id\").show();
\t});

\t\$(\"#range_type_page\").click(function() {
\t\t\$(\".id\").hide();
\t\t\$(\".page\").show();
\t});

\t\$('input[name=export_type]').click(function() {
\t\tcheck_category_filter(\$(this).val());
\t\tcheck_range_type(\$(this).val());
\t});

\t\$('span.close').click(function() {
\t\t\$(this).parent().remove();
\t});

\t\$('a[data-toggle=\"tab\"]').click(function() {
\t\t\$('#export_import_notification').remove();
\t});

\tgetNotifications();
});

function checkFileSize(id) {
\t// See also http://stackoverflow.com/questions/3717793/javascript-file-upload-size-validation for details
\tvar input, file, file_size;

\tif (!window.FileReader) {
\t\t// The file API isn't yet supported on user's browser
\t\treturn true;
\t}

\tinput = document.getElementById(id);
\tif (!input) {
\t\t// couldn't find the file input element
\t\treturn true;
\t}
\telse if (!input.files) {
\t\t// browser doesn't seem to support the `files` property of file inputs
\t\treturn true;
\t}
\telse if (!input.files[0]) {
\t\t// no file has been selected for the upload
\t\talert( \"";
        // line 384
        echo ($context["error_select_file"] ?? null);
        echo "\" );
\t\treturn false;
\t}
\telse {
\t\tfile = input.files[0];
\t\tfile_size = file.size;
\t\t";
        // line 390
        if (((isset($context["post_max_size"]) || array_key_exists("post_max_size", $context)) && ($context["post_max_size"] ?? null))) {
            // line 391
            echo "\t\t// check against PHP's post_max_size
\t\tpost_max_size = ";
            // line 392
            echo ($context["post_max_size"] ?? null);
            echo ";
\t\tif (file_size > post_max_size) {
\t\t\talert( \"";
            // line 394
            echo ($context["error_post_max_size"] ?? null);
            echo "\" );
\t\t\treturn false;
\t\t}
\t\t";
        }
        // line 398
        echo "\t\t";
        if (((isset($context["upload_max_filesize"]) || array_key_exists("upload_max_filesize", $context)) && ($context["upload_max_filesize"] ?? null))) {
            // line 399
            echo "\t\t// check against PHP's upload_max_filesize
\t\tupload_max_filesize = ";
            // line 400
            echo ($context["upload_max_filesize"] ?? null);
            echo ";
\t\tif (file_size > upload_max_filesize) {
\t\t\talert( \"";
            // line 402
            echo ($context["error_upload_max_filesize"] ?? null);
            echo "\" );
\t\t\treturn false;
\t\t}
\t\t";
        }
        // line 406
        echo "\t\treturn true;
\t}
}

function uploadData() {
\tif (checkFileSize('upload')) {
\t\t\$('#import').submit();
\t}
}

function isNumber(txt){ 
\tvar regExp=/^[\\d]{1,}\$/;
\treturn regExp.test(txt); 
}

count_product = ";
        // line 421
        echo ($context["count_product"] ?? null);
        echo ";

function updateCountProducts() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/export_import/getCountProduct&user_token=";
        // line 425
        echo ($context["user_token"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"input[name='categories[]']\").serialize(),
\t\tsuccess: function(json) {
\t\t\tif (json['count']) {
\t\t\t\tcount_product = json['count'];
\t\t\t} else {
\t\t\t}
\t\t\tconsole.log(\"success: count_product='\"+count_product+\"'\");
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

function validateExportForm(id) {
\tvar export_type = \$('input[name=export_type]:checked').val();
\tif ((export_type!='c') && (export_type!='p') && (export_type!='u')) {
\t\treturn true;
\t}

\tvar val = \$(\"input[name=range_type]:checked\").val();
\tvar min = \$(\"input[name=min]\").val();
\tvar max = \$(\"input[name=max]\").val();

\tif ((min=='') && (max=='')) {
\t\treturn true;
\t}

\tif (!isNumber(min) || !isNumber(max)) {
\t\talert(\"";
        // line 457
        echo ($context["error_param_not_number"] ?? null);
        echo "\");
\t\treturn false;
\t}

\tvar count_item;
\tswitch (export_type) {
\t\tcase 'p': count_item = count_product-1;  break;
\t\tcase 'c': count_item = ";
        // line 464
        echo (($context["count_category"] ?? null) - 1);
        echo "; break;
\t\tdefault:  count_item = ";
        // line 465
        echo (($context["count_customer"] ?? null) - 1);
        echo "; break;
\t}
\tvar batchNo = parseInt(count_item/parseInt(min))+1; // Maximum number of item-batches, namely, item number/min, and then rounded up (that is, integer plus 1)
\tvar minItemId;
\tswitch (export_type) {
\t\tcase 'p': minItemId = parseInt( ";
        // line 470
        echo ($context["min_product_id"] ?? null);
        echo " );  break;
\t\tcase 'c': minItemId = parseInt( ";
        // line 471
        echo ($context["min_category_id"] ?? null);
        echo " ); break;
\t\tdefault:  minItemId = parseInt( ";
        // line 472
        echo ($context["min_customer_id"] ?? null);
        echo " ); break;
\t
\t}
\tvar maxItemId;
\tswitch (export_type) {
\t\tcase 'p': maxItemId = parseInt( ";
        // line 477
        echo ($context["max_product_id"] ?? null);
        echo " );  break;
\t\tcase 'c': maxItemId = parseInt( ";
        // line 478
        echo ($context["max_category_id"] ?? null);
        echo " ); break;
\t\tdefault:  maxItemId = parseInt( ";
        // line 479
        echo ($context["max_customer_id"] ?? null);
        echo " ); break;
\t
\t}

\tif (val==\"page\") {  // Min for the batch size, Max for the batch number
\t\tif (parseInt(max) <= 0) {
\t\t\talert(\"";
        // line 485
        echo ($context["error_batch_number"] ?? null);
        echo "\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(max) > batchNo) {        
\t\t\talert(\"";
        // line 489
        echo ($context["error_page_no_data"] ?? null);
        echo "\"); 
\t\t\treturn false;
\t\t} else {
\t\t\t\$(\"input[name=max]\").val(parseInt(max)+1);
\t\t}
\t} else {
\t\tif (minItemId <= 0) {
\t\t\talert(\"";
        // line 496
        echo ($context["error_min_item_id"] ?? null);
        echo "\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(min) > maxItemId || parseInt(max) < minItemId || parseInt(min) > parseInt(max)) {  
\t\t\talert(\"";
        // line 500
        echo ($context["error_id_no_data"] ?? null);
        echo "\"); 
\t\t\treturn false;
\t\t}
\t}
\treturn true;
}

function downloadData() {
\tif (validateExportForm('export')) {
\t\t\$('#export').submit();
\t}
}

function updateSettings() {
\t\$('#settings').submit();
}

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 521
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');
\t\t\$('#category' + item['value']).remove();
\t\t\$('#categories').append('<div id=\"category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"categories[]\" value=\"' + item['value'] + '\" /></div>');
\t\tupdateCountProducts();
\t}
});

\$('#categories').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
\tupdateCountProducts();
});
//--></script>

</div>
";
        // line 548
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/export_import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1008 => 548,  978 => 521,  954 => 500,  947 => 496,  937 => 489,  930 => 485,  921 => 479,  917 => 478,  913 => 477,  905 => 472,  901 => 471,  897 => 470,  889 => 465,  885 => 464,  875 => 457,  840 => 425,  833 => 421,  816 => 406,  809 => 402,  804 => 400,  801 => 399,  798 => 398,  791 => 394,  786 => 392,  783 => 391,  781 => 390,  772 => 384,  688 => 305,  680 => 302,  673 => 298,  666 => 296,  661 => 294,  654 => 290,  646 => 285,  628 => 270,  622 => 266,  616 => 264,  610 => 262,  608 => 261,  600 => 255,  594 => 253,  588 => 251,  586 => 250,  581 => 247,  575 => 243,  569 => 241,  563 => 239,  561 => 238,  553 => 232,  547 => 230,  541 => 228,  539 => 227,  534 => 224,  532 => 223,  527 => 220,  521 => 218,  515 => 216,  513 => 215,  505 => 209,  499 => 207,  493 => 205,  491 => 204,  483 => 198,  477 => 196,  471 => 194,  469 => 193,  461 => 187,  455 => 185,  449 => 183,  447 => 182,  439 => 177,  429 => 170,  423 => 167,  418 => 164,  411 => 162,  403 => 159,  400 => 158,  393 => 156,  385 => 153,  382 => 152,  380 => 151,  376 => 150,  368 => 145,  364 => 144,  360 => 143,  353 => 139,  343 => 132,  335 => 127,  330 => 125,  326 => 124,  321 => 122,  316 => 120,  312 => 119,  307 => 117,  303 => 116,  297 => 115,  290 => 110,  281 => 107,  274 => 106,  270 => 105,  265 => 103,  259 => 102,  249 => 96,  245 => 94,  241 => 92,  238 => 91,  231 => 88,  227 => 86,  223 => 84,  220 => 83,  218 => 82,  212 => 80,  208 => 78,  204 => 76,  202 => 75,  196 => 73,  192 => 71,  188 => 69,  186 => 68,  180 => 66,  176 => 64,  172 => 62,  170 => 61,  164 => 59,  160 => 57,  156 => 55,  154 => 54,  150 => 53,  143 => 49,  137 => 46,  128 => 40,  124 => 39,  120 => 38,  113 => 33,  106 => 29,  103 => 28,  100 => 27,  92 => 23,  89 => 22,  81 => 18,  79 => 17,  73 => 13,  62 => 11,  58 => 10,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/export_import.twig", "");
    }
}
