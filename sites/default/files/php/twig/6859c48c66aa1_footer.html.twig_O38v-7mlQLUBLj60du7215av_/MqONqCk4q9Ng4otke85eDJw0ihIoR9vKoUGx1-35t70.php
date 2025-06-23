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
class __TwigTemplate_389e86a8288b6e7442dea7432ec3213a extends Template
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
  <div class=\"footer-upper-section\">
    <div class=\"footer-content-wrapper container\"> ";
        // line 13
        yield "
      ";
        // line 15
        yield "      <div class=\"footer-column-group\">
        ";
        // line 17
        yield "        <div class=\"footer-nav-column\">
          <h4 class=\"footer-column-title\">Kurumsal</h4>
          <ul class=\"footer-list\">
            <li><a href=\"#\">Hakkımızda</a></li>
            <li><a href=\"#\">Sürdürülebilirlik</a></li>
            <li><a href=\"#\">İnsan Kaynakları</a></li>
            <li><a href=\"#\">Haberler</a></li>
            <li><a href=\"#\">Site Haritası</a></li>
            <li><a href=\"#\">Bayi Girişi</a></li>
          </ul>
        </div>

        ";
        // line 30
        yield "        <div class=\"footer-nav-column\">
          <h4 class=\"footer-column-title\">Hizmetlerimiz</h4>
          <ul class=\"footer-list\">
            <li><a href=\"#\">Doping</a></li>
            <li><a href=\"#\">S - Param Güvende</a></li>
            <li><a href=\"#\">Güvenli E-Ticaret (GET)</a></li>
            <li><a href=\"#\">Toplu Ürün Girişi</a></li>
            <li><a href=\"#\">Reklam</a></li>
            <li><a href=\"#\">Mobil</a></li>
            <li><a href=\"#\">Auto King</a></li>
          </ul>
        </div>

        ";
        // line 44
        yield "        <div class=\"footer-nav-column\">
          <h4 class=\"footer-column-title\">Mağazalar</h4>
          <ul class=\"footer-list\">
            <li><a href=\"#\">Neden Mağaza?</a></li>
            <li><a href=\"#\">Mağaza Açmak İstiyorum</a></li>
          </ul>
        </div>

        ";
        // line 53
        yield "        <div class=\"footer-nav-column\">
          <h4 class=\"footer-column-title\">Gizlilik ve Kullanım</h4>
          <ul class=\"footer-list\">
            <li><a href=\"#\">Güvenli Alışveriş İpuçları</a></li>
            <li><a href=\"#\">Sözleşmeler ve Kurallar</a></li>
            <li><a href=\"#\">Hesap Kapatma</a></li>
            <li><a href=\"#\">Kullanım Koşulları</a></li>
            <li><a href=\"#\">Kişisel Verilerin Korunması</a></li>
            <li><a href=\"#\">Çerez Yönetimi</a></li>
            <li><a href=\"#\">Yardım ve İşlem Rehberi</a></li>
          </ul>
        </div>

        ";
        // line 67
        yield "        <div class=\"footer-nav-column footer-follow-us\">
          <h4 class=\"footer-column-title\">Bizi Takip Edin</h4>
          <ul class=\"footer-list social-icons-list\">
            <li><a href=\"#\"><i class=\"bi bi-facebook\"></i> Facebook</a></li>
            <li><a href=\"#\"><i class=\"bi bi-twitter-x\"></i> X</a></li> ";
        // line 72
        yield "            <li><a href=\"#\"><i class=\"bi bi-linkedin\"></i> Linkedin</a></li>
            <li><a href=\"#\"><i class=\"bi bi-instagram\"></i> Instagram</a></li>
            <li><a href=\"#\"><i class=\"bi bi-youtube\"></i> Youtube</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> ";
        // line 80
        yield "
  <div class=\"footer-middle-section\">
    <div class=\"container footer-middle-content\">
      ";
        // line 84
        yield "      <div class=\"footer-contact-info\">
        <div class=\"contact-item\">
          <div class=\"contact-icon-circle phone-icon\"><i class=\"bi bi-telephone-fill\"></i></div>
          <div class=\"contact-details\">
            <span class=\"contact-label\">7/24 Müşteri Hizmetleri</span>
            <a href=\"tel:08502224444\" class=\"contact-value\">0 850 222 44 44</a>
          </div>
        </div>
        <div class=\"contact-item\">
          <div class=\"contact-icon-circle help-icon\"><i class=\"bi bi-question-lg\"></i></div>
          <div class=\"contact-details\">
            <span class=\"contact-label\">Yardım Merkezi</span>
            <a href=\"mailto:yardim.sahibinden.com\" class=\"contact-value\">yardim.sahibinden.com</a>
          </div>
        </div>
      </div>

      ";
        // line 102
        yield "      <div class=\"footer-language-select\">
        <select class=\"form-select\" aria-label=\"Dil Seçimi\">
          <option selected>TR Türkçe (Turkish)</option>
          <option value=\"en\">EN English</option>
        </select>
      </div>

      ";
        // line 110
        yield "      <div class=\"footer-right-icons\">
        ";
        // line 112
        yield "        <img src=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/images/sahibinden-icon.png\" alt=\"Sahibinden Icon\" class=\"sahibinden-app-icon\" />
      </div>
    </div>
  </div> ";
        // line 116
        yield "
  <div class=\"footer-bottom-bar container\">
    <div class=\"footer-bottom-left\">
      <p class=\"legal-text\">
        sahibinden.com'da yer alan kullanıcıların oluşturduğu tüm içerik, bilgi ve fotoğrafların doğruluğu,
        içeriği ve bu içeriklerden doğabilecek zararlardan dolayı firmamız sorumlu tutulamaz.
        sahibinden.com içeriği ve dizaynı telif hakkı ile korunmaktadır.
        İnternet sitesi sözleşmesi, kullanıcı ve gizlilik politikası hükümlerini okuyunuz.
      </p>
      <p class=\"copyright-text\">&copy; ";
        // line 125
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " sahibinden.com</p>
    </div>
    <div class=\"footer-bottom-right\">
      ";
        // line 129
        yield "      <div class=\"qr-code-section\">
        <img src=\"";
        // line 130
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/images/qr-code.png\" alt=\"QR Code\" class=\"qr-code-img\" />
        <p class=\"qr-code-text\">Uygulamayı İndir</p>
      </div>
    </div>
  </div> ";
        // line 135
        yield "</footer>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["base_path", "directory"]);        yield from [];
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
        return array (  194 => 135,  187 => 130,  184 => 129,  178 => 125,  167 => 116,  160 => 112,  157 => 110,  148 => 102,  129 => 84,  124 => 80,  115 => 72,  109 => 67,  94 => 53,  84 => 44,  69 => 30,  55 => 17,  52 => 15,  49 => 13,  44 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@sogep/templates/footer.html.twig", "/Users/fatihapaydin/Documents/drupal/web/themes/custom/sogep/templates/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 112, "date" => 125];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
