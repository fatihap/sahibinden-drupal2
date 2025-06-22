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

/* @sogep/templates/menu.html.twig */
class __TwigTemplate_5dfde91035f9280f407d8e82fc4b8acc extends Template
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
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sogep/menu"), "html", null, true);
        yield " ";
        // line 22
        yield "
";
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        yield "
";
        // line 29
        yield "<nav class=\"navbar-main\">
  <div class=\"navbar-container\">
    ";
        // line 32
        yield "    <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\" class=\"navbar-logo-link\" rel=\"home\">
      ";
        // line 33
        if ((($tmp = ($context["site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "        <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" class=\"site-branding__logo\" />
      ";
        } else {
            // line 36
            yield "        ";
            // line 37
            yield "        <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
            yield "/logo.png\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" class=\"site-branding__logo\" />
      ";
        }
        // line 39
        yield "    </a>

    ";
        // line 42
        yield "    <div class=\"search-and-details-section\">
      <div class=\"search-bar-wrapper\">
        <input
          type=\"text\"
          placeholder=\"Kelime, ilan no veya mağaza adı ile ara\"
          class=\"search-input\"
        />
        <button class=\"search-button\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" class=\"search-icon\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z\" />
          </svg>
        </button>
      </div>
      <a href=\"#\" class=\"detailed-search-link\">Detaylı Arama</a>
    </div>

    ";
        // line 59
        yield "    <div class=\"auth-buttons-section\">
      ";
        // line 61
        yield "      ";
        $context["register_link_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("node.add", ["node_type" => "kullanicilar"]);
        yield " ";
        // line 62
        yield "      ";
        $context["register_link_title"] = "Kayıt Ol";
        // line 63
        yield "      
      ";
        // line 65
        yield "      ";
        $context["ilanlar_page_url"] = "/ilanlar";
        yield " ";
        // line 66
        yield "      ";
        $context["ilanlar_page_title"] = "İlanlar Sayfası";
        // line 67
        yield "
      ";
        // line 69
        yield "      ";
        $context["post_ad_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("node.add", ["node_type" => "ilan"]);
        // line 70
        yield "      ";
        $context["post_ad_title"] = "Ücretsiz İlan Ver";
        // line 71
        yield "
      ";
        // line 73
        yield "      ";
        $context["found_register"] = false;
        // line 74
        yield "      ";
        $context["found_ilanlar"] = false;
        // line 75
        yield "      ";
        $context["found_post_ad"] = false;
        // line 76
        yield "
      ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 78
            yield "        ";
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 78)) == "kayıt ol")) {
                // line 79
                yield "          ";
                $context["register_link_url"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 79);
                // line 80
                yield "          ";
                $context["found_register"] = true;
                // line 81
                yield "        ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 81)) == "ilanlar sayfası")) {
                // line 82
                yield "          ";
                $context["ilanlar_page_url"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 82);
                // line 83
                yield "          ";
                $context["found_ilanlar"] = true;
                // line 84
                yield "        ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 84)) == "ücretsiz ilan ver")) {
                // line 85
                yield "          ";
                $context["post_ad_url"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 85);
                yield " ";
                // line 86
                yield "          ";
                $context["found_post_ad"] = true;
                // line 87
                yield "        ";
            }
            // line 88
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "
      ";
        // line 91
        yield "      <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["register_link_url"] ?? null), "html", null, true);
        yield "\" class=\"auth-link auth-link-hide-on-lg\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["register_link_title"] ?? null), "html", null, true);
        yield "</a>
      <span class=\"separator auth-link-hide-on-lg\">|</span>
      ";
        // line 94
        yield "      <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["ilanlar_page_url"] ?? null), "html", null, true);
        yield "\" class=\"auth-link auth-link-hide-on-lg\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["ilanlar_page_title"] ?? null), "html", null, true);
        yield "</a>

      ";
        // line 97
        yield "      <button class=\"post-ad-button js-post-ad-button\" data-url=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["post_ad_url"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["post_ad_title"] ?? null), "html", null, true);
        yield "
      </button>
    </div>

    ";
        // line 103
        yield "    <div class=\"mobile-toggle-button-wrapper\">
      <button class=\"hamburger-button\">
        <svg fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" class=\"hamburger-icon\">
          <path strokeLinecap=\"round\" strokeLinejoin=\"round\" strokeWidth=\"2\" d=\"M4 6h16M4 12h16M4 18h16\"></path>
        </svg>
      </button>
    </div>
  </div>
</nav>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "site_logo", "base_path", "directory", "items", "menu_level", "attributes"]);        yield from [];
    }

    // line 118
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 119
            yield "  ";
            $macros["menus"] = $this;
            // line 120
            yield "  ";
            if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 121
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 122
                    yield "      ";
                    // line 123
                    yield "      <ul class=\"main-menu-list\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["nav", "flex-column"], "method", false, false, true, 123), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 125
                    yield "      ";
                    // line 126
                    yield "      <ul class=\"submenu-list nav flex-column level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                    yield "\">
    ";
                }
                // line 128
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 129
                    yield "      ";
                    $context["classes"] = ["nav-item", (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 131
$context["item"], "in_active_trail", [], "any", false, false, true, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 132
$context["item"], "is_expanded", [], "any", false, false, true, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("expanded") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 133
$context["item"], "is_collapsed", [], "any", false, false, true, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""))];
                    // line 135
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 135), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 135), "html", null, true);
                    yield ">
        <a class=\"nav-link ";
                    // line 136
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fw-bold text-primary") : ("")));
                    yield "\" href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 136), "html", null, true);
                    yield "\">
          ";
                    // line 137
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 137), "html", null, true);
                    yield "
          ";
                    // line 138
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 139
                        yield "            ";
                        // line 140
                        yield "            <span class=\"dropdown-toggle float-end\"></span>
          ";
                    }
                    // line 142
                    yield "        </a>
        ";
                    // line 143
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 144
                        yield "          ";
                        // line 145
                        yield "          <div class=\"submenu-wrapper\">
            ";
                        // line 146
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 146, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 146), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                        yield "
          </div>
        ";
                    }
                    // line 149
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 151
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@sogep/templates/menu.html.twig";
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
        return array (  334 => 151,  327 => 149,  321 => 146,  318 => 145,  316 => 144,  314 => 143,  311 => 142,  307 => 140,  305 => 139,  303 => 138,  299 => 137,  293 => 136,  288 => 135,  286 => 133,  285 => 132,  284 => 131,  282 => 129,  277 => 128,  271 => 126,  269 => 125,  263 => 123,  261 => 122,  258 => 121,  255 => 120,  252 => 119,  238 => 118,  222 => 103,  215 => 98,  210 => 97,  202 => 94,  194 => 91,  191 => 89,  185 => 88,  182 => 87,  179 => 86,  175 => 85,  172 => 84,  169 => 83,  166 => 82,  163 => 81,  160 => 80,  157 => 79,  154 => 78,  150 => 77,  147 => 76,  144 => 75,  141 => 74,  138 => 73,  135 => 71,  132 => 70,  129 => 69,  126 => 67,  123 => 66,  119 => 65,  116 => 63,  113 => 62,  109 => 61,  106 => 59,  88 => 42,  84 => 39,  76 => 37,  74 => 36,  66 => 34,  64 => 33,  59 => 32,  55 => 29,  52 => 24,  50 => 23,  47 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@sogep/templates/menu.html.twig", "/Users/fatihapaydin/Documents/drupal/web/themes/custom/sogep/templates/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 23, "if" => 33, "set" => 61, "for" => 77, "macro" => 118];
        static $filters = ["escape" => 21, "t" => 34, "lower" => 78];
        static $functions = ["attach_library" => 21, "path" => 32];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'set', 'for', 'macro'],
                ['escape', 't', 'lower'],
                ['attach_library', 'path'],
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
