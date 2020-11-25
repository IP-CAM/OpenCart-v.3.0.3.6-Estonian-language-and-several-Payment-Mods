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

/* default/template/extension/payment/everypay.twig */
class __TwigTemplate_8abd90fa94934ca042027c4326a9b05ea82342420ad1c104972409753e418192 extends \Twig\Template
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
        echo "<form action=\"";
        echo ($context["payment_url"] ?? null);
        echo "\" method=\"GET\">
\t<input class=\"btn btn­-primary pull-right\" type=\"submit\" value=\"Proceed to Payment\">
\t";
        // line 3
        echo ($context["checkout_title"] ?? null);
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/everypay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/everypay.twig", "");
    }
}
