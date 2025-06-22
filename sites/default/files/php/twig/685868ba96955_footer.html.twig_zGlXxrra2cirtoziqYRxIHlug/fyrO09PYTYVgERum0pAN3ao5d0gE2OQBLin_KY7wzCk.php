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

/* @sogep/templates/footer.html.twig */
class __TwigTemplate_74655a064be22070140703867339c954 extends Template
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
<footer class=\"main-footer-section\">
  <div class=\"footer-content-wrapper\">
    <div class=\"footer-logo-area\">
      ";
        // line 14
        yield "      <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\" rel=\"home\">
        <img src=\"";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/logo.png\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        yield "\" class=\"footer-logo\" />
      </a>
    </div>

    ";
        // line 20
        yield "    <div class=\"footer-nav-columns\">
      ";
        // line 22
        yield "      <div class=\"footer-nav-column\">
        <h4 class=\"footer-column-title\">Hakkında</h4>
        <ul class=\"footer-list\">
          <li><a href=\"#\">Nam urna nequ</a></li>
          <li><a href=\"#\">Nam urna nequ</a></li>
          <li><a href=\"#\">Nam urna nequ</a></li>
        </ul>
      </div>

      ";
        // line 32
        yield "      <div class=\"footer-nav-column\">
        <h4 class=\"footer-column-title\">Fiyatlandırma</h4>
        <ul class=\"footer-list\">
          <li><a href=\"#\">Nam urna nequ</a></li>
          <li><a href=\"#\">Nam urna nequ</a></li>
          <li><a href=\"#\">Nam urna nequ</a></li>
        </ul>
      </div>

      ";
        // line 42
        yield "      <div class=\"footer-nav-column\">
        <h4 class=\"footer-column-title\">Teknoloji</h4>
        <ul class=\"footer-list\">
          <li><a href=\"#\">Altyapı</a></li>
          <li><a href=\"#\">Ölçekleme</a></li>
          <li><a href=\"#\">Kullanıcı Yönetimi</a></li>
        </ul>
      </div>
    </div>

    ";
        // line 53
        yield "    <div class=\"footer-social-contact\">
      <div class=\"social-icons\">
        <a href=\"#\" class=\"social-icon-link\"><i class=\"fab fa-linkedin-in\"></i></a> ";
        // line 56
        yield "        <a href=\"#\" class=\"social-icon-link\"><i class=\"fab fa-instagram\"></i></a> ";
        // line 57
        yield "        <a href=\"#\" class=\"social-icon-link\"><i class=\"fab fa-medium-m\"></i></a> ";
        // line 58
        yield "      </div>
      <a href=\"mailto:info@eduport.io\" class=\"email-button\">info@eduport.io</a>
    </div>
  </div>

  ";
        // line 64
        yield "  <div class=\"footer-bottom-bar\">
    ";
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "      <div class=\"footer-region-content\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 66), "html", null, true);
            yield "</div>
    ";
        }
        // line 68
        yield "    <p class=\"copyright-text\"> &copy; ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Tüm Hakları Saklıdır.</p>
  </div>
</footer>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["base_path", "directory", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@sogep/templates/footer.html.twig";
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
        return array (  127 => 68,  121 => 66,  119 => 65,  116 => 64,  109 => 58,  107 => 57,  105 => 56,  101 => 53,  89 => 42,  78 => 32,  67 => 22,  64 => 20,  55 => 15,  50 => 14,  44 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@sogep/templates/footer.html.twig", "/Users/fatihapaydin/Documents/drupal/web/themes/custom/sogep/templates/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 65];
        static $filters = ["escape" => 15, "t" => 15, "date" => 68];
        static $functions = ["path" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'date'],
                ['path'],
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
