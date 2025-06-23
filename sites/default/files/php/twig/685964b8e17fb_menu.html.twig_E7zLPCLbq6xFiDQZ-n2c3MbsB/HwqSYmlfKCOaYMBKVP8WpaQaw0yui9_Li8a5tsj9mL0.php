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
class __TwigTemplate_c7e2fffb60a256f5d1c87a1df2579295 extends Template
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
            yield "/images/logo.png\" alt=\"";
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
          placeholder=\"Araç Ara\"
          class=\"search-input\"
        />
        <button class=\"search-button\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" class=\"search-icon\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z\" />
          </svg>
        </button>
      </div>
    </div>

    ";
        // line 58
        yield "    <div class=\"auth-buttons-section\">
      ";
        // line 60
        yield "      ";
        $context["register_link_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("node.add", ["node_type" => "kullanicilar"]);
        yield " ";
        // line 61
        yield "      ";
        $context["register_link_title"] = "Kayıt Ol";
        // line 62
        yield "      
      ";
        // line 64
        yield "      ";
        $context["ilanlar_page_url"] = "/ilanlar";
        yield " ";
        // line 65
        yield "      ";
        $context["ilanlar_page_title"] = "İlanlar Sayfası";
        // line 66
        yield "
      ";
        // line 68
        yield "      ";
        $context["post_ad_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("node.add", ["node_type" => "ilan"]);
        // line 69
        yield "      ";
        $context["post_ad_title"] = "Ücretsiz İlan Ver";
        // line 70
        yield "
      ";
        // line 72
        yield "      ";
        $context["found_register"] = false;
        // line 73
        yield "      ";
        $context["found_ilanlar"] = false;
        // line 74
        yield "      ";
        $context["found_post_ad"] = false;
        // line 75
        yield "
      ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 77
            yield "        ";
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 77)) == "kayıt ol")) {
                // line 78
                yield "          ";
                $context["register_link_url"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 78);
                // line 79
                yield "          ";
                $context["found_register"] = true;
                // line 80
                yield "        ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 80)) == "ilanlar sayfası")) {
                // line 81
                yield "          ";
                $context["ilanlar_page_url"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 81);
                // line 82
                yield "          ";
                $context["found_ilanlar"] = true;
                // line 83
                yield "        ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 83)) == "ücretsiz ilan ver")) {
                // line 84
                yield "          ";
                $context["post_ad_url"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 84);
                yield " ";
                // line 85
                yield "          ";
                $context["found_post_ad"] = true;
                // line 86
                yield "        ";
            }
            // line 87
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "
      ";
        // line 90
        yield "      <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["register_link_url"] ?? null), "html", null, true);
        yield "\" class=\"auth-link auth-link-hide-on-lg\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["register_link_title"] ?? null), "html", null, true);
        yield "</a>
      <span class=\"separator auth-link-hide-on-lg\">|</span>
      ";
        // line 93
        yield "      <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["ilanlar_page_url"] ?? null), "html", null, true);
        yield "\" class=\"auth-link auth-link-hide-on-lg\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["ilanlar_page_title"] ?? null), "html", null, true);
        yield "</a>

      ";
        // line 96
        yield "      <button class=\"post-ad-button js-post-ad-button\" data-url=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["post_ad_url"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["post_ad_title"] ?? null), "html", null, true);
        yield "
      </button>
    </div>

    ";
        // line 102
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

    // line 117
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
            // line 118
            yield "  ";
            $macros["menus"] = $this;
            // line 119
            yield "  ";
            if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 120
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 121
                    yield "      ";
                    // line 122
                    yield "      <ul class=\"main-menu-list\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["nav", "flex-column"], "method", false, false, true, 122), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 124
                    yield "      ";
                    // line 125
                    yield "      <ul class=\"submenu-list nav flex-column level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                    yield "\">
    ";
                }
                // line 127
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 128
                    yield "      ";
                    $context["classes"] = ["nav-item", (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 130
$context["item"], "in_active_trail", [], "any", false, false, true, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 131
$context["item"], "is_expanded", [], "any", false, false, true, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("expanded") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 132
$context["item"], "is_collapsed", [], "any", false, false, true, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""))];
                    // line 134
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 134), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 134), "html", null, true);
                    yield ">
        <a class=\"nav-link ";
                    // line 135
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fw-bold text-primary") : ("")));
                    yield "\" href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 135), "html", null, true);
                    yield "\">
          ";
                    // line 136
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 136), "html", null, true);
                    yield "
          ";
                    // line 137
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 138
                        yield "            ";
                        // line 139
                        yield "            <span class=\"dropdown-toggle float-end\"></span>
          ";
                    }
                    // line 141
                    yield "        </a>
        ";
                    // line 142
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 143
                        yield "          ";
                        // line 144
                        yield "          <div class=\"submenu-wrapper\">
            ";
                        // line 145
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 145, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 145), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                        yield "
          </div>
        ";
                    }
                    // line 148
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
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
        return array (  333 => 150,  326 => 148,  320 => 145,  317 => 144,  315 => 143,  313 => 142,  310 => 141,  306 => 139,  304 => 138,  302 => 137,  298 => 136,  292 => 135,  287 => 134,  285 => 132,  284 => 131,  283 => 130,  281 => 128,  276 => 127,  270 => 125,  268 => 124,  262 => 122,  260 => 121,  257 => 120,  254 => 119,  251 => 118,  237 => 117,  221 => 102,  214 => 97,  209 => 96,  201 => 93,  193 => 90,  190 => 88,  184 => 87,  181 => 86,  178 => 85,  174 => 84,  171 => 83,  168 => 82,  165 => 81,  162 => 80,  159 => 79,  156 => 78,  153 => 77,  149 => 76,  146 => 75,  143 => 74,  140 => 73,  137 => 72,  134 => 70,  131 => 69,  128 => 68,  125 => 66,  122 => 65,  118 => 64,  115 => 62,  112 => 61,  108 => 60,  105 => 58,  88 => 42,  84 => 39,  76 => 37,  74 => 36,  66 => 34,  64 => 33,  59 => 32,  55 => 29,  52 => 24,  50 => 23,  47 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@sogep/templates/menu.html.twig", "/Users/fatihapaydin/Documents/drupal/web/themes/custom/sogep/templates/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 23, "if" => 33, "set" => 60, "for" => 76, "macro" => 117];
        static $filters = ["escape" => 21, "t" => 34, "lower" => 77];
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
