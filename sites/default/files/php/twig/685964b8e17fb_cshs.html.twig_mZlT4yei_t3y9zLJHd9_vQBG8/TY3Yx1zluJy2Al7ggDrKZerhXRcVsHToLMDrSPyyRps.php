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

/* modules/contrib/cshs/templates/cshs.html.twig */
class __TwigTemplate_1cb8e31814406edb61f2d8a047bebc11 extends Template
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
        // line 15
        yield "<select";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 17
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, true, 17) == "optgroup")) {
                // line 18
                yield "      <optgroup label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 18), "html", null, true);
                yield "\">
        ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, true, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                    // line 20
                    yield "          <option value=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "value", [], "any", false, false, true, 20), "html", null, true);
                    yield "\" data-parent=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "parent", [], "any", false, false, true, 20), "html", null, true);
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "selected", [], "any", false, false, true, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected=\"selected\"") : ("")));
                    yield ">
            ";
                    // line 21
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 21), "html", null, true);
                    yield "
          </option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sub_option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                yield "      </optgroup>
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 25
$context["option"], "type", [], "any", false, false, true, 25) == "option")) {
                // line 26
                yield "      <option value=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 26), "html", null, true);
                yield "\" data-parent=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "parent", [], "any", false, false, true, 26), "html", null, true);
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected=\"selected\"") : ("")));
                yield ">
        ";
                // line 27
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 27), "html", null, true);
                yield "
      </option>
    ";
            }
            // line 30
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "</select>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "options"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/cshs/templates/cshs.html.twig";
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
        return array (  109 => 31,  103 => 30,  97 => 27,  88 => 26,  86 => 25,  83 => 24,  74 => 21,  65 => 20,  61 => 19,  56 => 18,  53 => 17,  49 => 16,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/cshs/templates/cshs.html.twig", "/Users/fatihapaydin/Documents/drupal/web/modules/contrib/cshs/templates/cshs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 16, "if" => 17];
        static $filters = ["escape" => 15];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                [],
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
