<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/sogep/templates/page.html.twig */
class __TwigTemplate_fd0527032ed435254a9bc3cd3eeeb819 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "
<div class=\"main_layout\">
  <div class=\"container\"> ";
        // line 12
        yield "
    ";
        // line 14
        yield "    <header class=\"site-header\">
      <div class=\"row align-items-center\">
        <div class=\"col-md-2\">";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 16), "html", null, true);
        yield "</div>
        <div class=\"col-md-8 menu-region\"> ";
        // line 18
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sogep/menu"), "html", null, true);
        yield " ";
        // line 19
        yield "          ";
        // line 20
        yield "          ";
        yield from $this->load("@sogep/templates/menu.html.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "        </div>
        <div class=\"col-md-2 header-actions\">
            ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_actions", [], "any", false, false, true, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_actions", [], "any", false, false, true, 23), "html", null, true);
        }
        // line 24
        yield "        </div>
      </div>
    </header>

    ";
        // line 28
        if ((($tmp =  !($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "    <div class=\"page-title-wrapper\">
      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 31), "html", null, true);
            yield "</div>
      </div>
    </div>
    ";
        }
        // line 35
        yield "
    ";
        // line 37
        yield "    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 38), "html", null, true);
        yield "</div>
    </div>

    <div class=\"row\">
      ";
        // line 42
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "      <div class=\"col-md-2\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 43), "html", null, true);
            yield "</div> 
      <div class=\"col-md-10\">";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 44), "html", null, true);
            yield "</div>
      ";
        } else {
            // line 46
            yield "      <div class=\"col-md-12\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 46), "html", null, true);
            yield "</div>
      ";
        }
        // line 48
        yield "    </div>

    ";
        // line 51
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sogep/footer"), "html", null, true);
        yield "
    ";
        // line 52
        yield from $this->load("@sogep/templates/footer.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "
  </div> </div> ```
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "is_front"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/sogep/templates/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  137 => 53,  135 => 52,  130 => 51,  126 => 48,  120 => 46,  115 => 44,  110 => 43,  108 => 42,  101 => 38,  98 => 37,  95 => 35,  88 => 31,  84 => 29,  82 => 28,  76 => 24,  72 => 23,  68 => 21,  65 => 20,  63 => 19,  59 => 18,  55 => 16,  51 => 14,  48 => 12,  44 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/sogep/templates/page.html.twig", "/Users/fatihapaydin/Documents/drupal/web/themes/custom/sogep/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 20, "if" => 23];
        static $filters = ["escape" => 16];
        static $functions = ["attach_library" => 18];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['attach_library'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
