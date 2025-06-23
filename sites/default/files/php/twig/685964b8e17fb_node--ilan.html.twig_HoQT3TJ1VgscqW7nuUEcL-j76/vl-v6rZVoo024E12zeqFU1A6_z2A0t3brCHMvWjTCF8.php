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

/* themes/custom/sogep/components/ilanlar/templates/node--ilan.html.twig */
class __TwigTemplate_bbbdd19682a37bbadd2fa1a5a2aa06b9 extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sogep/ilan"), "html", null, true);
        yield "

";
        // line 31
        yield "
<div class=\"arac-detay container\">

  ";
        // line 35
        yield "  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"ilan-baslik-wrapper\">
        <h1 class=\"d-flex align-items-center justify-content-between\">
          <span id=\"ilanBaslik\">";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_ilan_baslik", [], "any", false, false, true, 39), "value", [], "any", false, false, true, 39)), "html", null, true);
        yield "</span>
          <button id=\"favButton\" class=\"btn p-0\" aria-label=\"Favorilere Ekle\">
            <i id=\"favIcon\" class=\"bi bi-star fs-2 text-warning\"></i>
          </button>
        </h1>
      </div>
    </div>
  </div>
  ";
        // line 48
        yield "
  <div id=\"favToast\" class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 9999;\">
    <div class=\"toast align-items-center text-white bg-success border-0\" role=\"alert\">
      <div class=\"d-flex\">
        <div class=\"toast-body\" id=\"favToastText\">Favorilere eklendi</div>
        <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\"></button>
      </div>
    </div>
  </div>

  <div class=\"row mt-4\"> ";
        // line 59
        yield "    <div class=\"col-lg-8 col-md-12\"> ";
        // line 60
        yield "      <div class=\"galeri-wrapper\">
        <div id=\"carGallery\" class=\"carousel slide\">
          <div class=\"carousel-inner\">
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_arac_galeri", [], "any", false, false, true, 63));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 64
            yield "            <div class=\"carousel-item ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\">
              <img src=\"";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "entity", [], "any", false, false, true, 65), "uri", [], "any", false, false, true, 65), "value", [], "any", false, false, true, 65)), "html", null, true);
            yield "\" alt=\"Araç Görseli\" class=\"main-gallery-image\"
                data-bs-toggle=\"modal\" data-bs-target=\"#imageModal\" data-image-index=\"";
            // line 66
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 66), "html", null, true);
            yield "\">
            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "          </div>
          <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carGallery\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\"></span>
          </button>
          <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carGallery\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\"></span>
          </button>
        </div>

        <div class=\"row mt-3 g-2\">
          ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_arac_galeri", [], "any", false, false, true, 79));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 80
            yield "          <div class=\"col-2\">
            <img src=\"";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "entity", [], "any", false, false, true, 81), "uri", [], "any", false, false, true, 81), "value", [], "any", false, false, true, 81)), "html", null, true);
            yield "\" class=\"img-thumbnail thumb-img\"
              data-bs-target=\"#carGallery\" data-bs-slide-to=\"";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 82), "html", null, true);
            yield "\">
          </div>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "        </div>
      </div>
    </div> ";
        // line 88
        yield "
      <script>
      document.addEventListener('DOMContentLoaded', function () {
        const mainImages = document.querySelectorAll('#carGallery img');
        const modalItems = document.querySelectorAll('#modalCarousel .carousel-item');

        mainImages.forEach((img, index) => {
          img.addEventListener('click', () => {
            modalItems.forEach(item => item.classList.remove('active'));
            modalItems[index].classList.add('active');
          });
        });

        // Favori butonu JS (mevcut kodunuz)
        const favButton = document.getElementById(\"favButton\");
        const favIcon = document.getElementById(\"favIcon\");
        const favToast = new bootstrap.Toast(document.querySelector(\"#favToast .toast\"));
        const favToastText = document.getElementById(\"favToastText\");
        const ilanBaslik = document.getElementById(\"ilanBaslik\").textContent.trim();

        let isFavorited = false;

        favButton.addEventListener(\"click\", () => {
          isFavorited = !isFavorited;

          if (isFavorited) {
            favIcon.classList.remove(\"bi-star\");
            favIcon.classList.add(\"bi-star-fill\");
            favToastText.textContent = `\"\${ilanBaslik}\" favorilere eklendi`;
          } else {
            favIcon.classList.remove(\"bi-star-fill\");
            favIcon.classList.add(\"bi-star\");
            favToastText.textContent = `\"\${ilanBaslik}\" favorilerden çıkarıldı`;
          }

          favToast.show();
        });

        // YENİ Eklenecek: Açıklama Devamını Gör/Gizle JS (Daha Güvenilir Yaklaşım)
        const fullAciklamaContent = document.getElementById('fullAciklamaContent');
        const toggleAciklamaBtn = document.getElementById('toggleAciklamaBtn');
        const aciklamaToggleWrapper = document.getElementById('aciklamaToggleWrapper');
        const defaultCollapsedHeight = 150; // CSS'deki .aciklama-icerik.collapsed max-height ile uyumlu olmalı

        // Sayfa yüklendiğinde (veya DOM hazır olduğunda), açıklamanın gerçek yüksekliğini kontrol et
        // ve eğer yüksekse kısaltma sınıfını ekle.
        // Bunun setTimeout içinde olması, bazı durumlarda DOM'un tamamen render olmasını beklemek için faydalı olabilir.
        setTimeout(() => {
          const actualContentHeight = fullAciklamaContent.scrollHeight;
          
          if (actualContentHeight > defaultCollapsedHeight) {
            fullAciklamaContent.classList.add('collapsed'); // Başlangıçta kısaltılmış hali
            aciklamaToggleWrapper.style.display = 'block'; // Butonu göster
          } else {
            aciklamaToggleWrapper.style.display = 'none'; // Butonu gizle
            fullAciklamaContent.classList.add('expanded'); // Kısa ise direkt expanded olarak bırak
          }
        }, 100); // Küçük bir gecikme ekleyerek sayfanın render olmasını bekleyelim

        // Buton tıklama olayı
        toggleAciklamaBtn.addEventListener('click', function() {
            if (fullAciklamaContent.classList.contains('collapsed')) {
                // Kısaltılmış durumdayken tıklandı, genişlet
                fullAciklamaContent.classList.remove('collapsed');
                fullAciklamaContent.classList.add('expanded');
                toggleAciklamaBtn.textContent = 'Daha Az Göster';
            } else {
                // Genişletilmiş durumdayken tıklandı, kısalt
                fullAciklamaContent.classList.remove('expanded');
                fullAciklamaContent.classList.add('collapsed');
                toggleAciklamaBtn.textContent = 'Devamını Gör';
            }
        });
      });
    </script>

    <div class=\"col-lg-4 col-md-12 d-flex align-items-start flex-column\"> ";
        // line 166
        yield "      <div class=\"card arac-kart mb-4 w-100\">
        <ul class=\"list-group list-group-flush\">
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>İlan No</strong></div>
            <div class=\"w-50 text-end\">";
        // line 170
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::random($this->env->getCharset(), 100000000, 999999999), "html", null, true);
        yield "</div>
          </li>

          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>İlan Tarihi</strong></div>
            <div class=\"w-50 text-end\">
              ";
        // line 176
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 176), "value", [], "any", false, false, true, 176), "d.m.Y"), "html", null, true);
        yield "
            </div>
          </li>

          ";
        // line 181
        yield "          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Marka</strong></div> ";
        // line 183
        yield "            <div class=\"w-50 text-end\">
              ";
        // line 184
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_marka", [], "any", false, false, true, 184))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 185
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_marka", [], "any", false, false, true, 185), "html", null, true);
            yield "
              ";
        }
        // line 187
        yield "              ";
        // line 188
        yield "              ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_model", [], "any", false, false, true, 188))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 189
            yield "              <br>
              ";
            // line 190
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_model", [], "any", false, false, true, 190), "html", null, true);
            yield "
              ";
        }
        // line 192
        yield "              ";
        // line 193
        yield "              ";
        if ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_marka", [], "any", false, false, true, 193)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_model", [], "any", false, false, true, 193)))) {
            // line 194
            yield "              Belirtilmedi
              ";
        }
        // line 196
        yield "            </div>
          </li>
          ";
        // line 199
        yield "
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Fiyat</strong></div>
            <div class=\"w-50 text-end\">";
        // line 202
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_fiyat", [], "any", false, false, true, 202), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Konum</strong></div>
            <div class=\"w-50 text-end\">
              ";
        // line 207
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_konum", [], "any", false, false, true, 207))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 208
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_konum", [], "any", false, false, true, 208), "html", null, true);
            yield "
              ";
        } else {
            // line 210
            yield "              Belirtilmedi
              ";
        }
        // line 212
        yield "            </div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Yıl</strong></div>
            <div class=\"w-50 text-end\">";
        // line 216
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_yil", [], "any", false, false, true, 216), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Yakıt Tipi</strong></div>
            <div class=\"w-50 text-end\">";
        // line 220
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_yakit_tipi", [], "any", false, false, true, 220), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Vites</strong></div>
            <div class=\"w-50 text-end\">
              ";
        // line 225
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_vites", [], "any", false, false, true, 225))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 226
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_vites_tipi", [], "any", false, false, true, 226), "html", null, true);
            yield "
              ";
        } else {
            // line 228
            yield "              Belirtilmedi
              ";
        }
        // line 230
        yield "            </div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Araç Durumu</strong></div>
            <div class=\"w-50 text-end\">
              ";
        // line 235
        if (((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_arac_sifir", [], "any", false, false, true, 235)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_arac_sifir", [], "any", false, false, true, 235), "#markup", [], "array", false, false, true, 235)) == "Evet")) {
            // line 236
            yield "              Araç Sıfır
              ";
        } else {
            // line 238
            yield "              İkinci El
              ";
        }
        // line 240
        yield "            </div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Kilometre</strong></div>
            <div class=\"w-50 text-end\">";
        // line 244
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_kilometre", [], "any", false, false, true, 244), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Motor Gücü</strong></div>
            <div class=\"w-50 text-end\">";
        // line 248
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_motor_gucu", [], "any", false, false, true, 248), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Renk</strong></div>
            <div class=\"w-50 text-end\">";
        // line 252
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_renk", [], "any", false, false, true, 252), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Kimden</strong></div>
            <div class=\"w-50 text-end\">
              ";
        // line 257
        if (((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_kimden", [], "any", false, false, true, 257)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_kimden", [], "any", false, false, true, 257), "#markup", [], "array", false, false, true, 257)) == "galeri")) {
            // line 258
            yield "              Galeriden
              ";
        } elseif (((($_v2 = CoreExtension::getAttribute($this->env, $this->source,         // line 259
($context["content"] ?? null), "field_kimden", [], "any", false, false, true, 259)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_kimden", [], "any", false, false, true, 259), "#markup", [], "array", false, false, true, 259)) == "sahibinden")) {
            // line 260
            yield "              Sahibinden
              ";
        } else {
            // line 262
            yield "              Bilinmiyor
              ";
        }
        // line 264
        yield "            </div>
          </li>
        </ul>
      </div>
    </div> ";
        // line 269
        yield "  </div> ";
        // line 270
        yield "
  <div class=\"row mt-4\"> ";
        // line 272
        yield "    <div class=\"col-lg-8 col-md-12\"> ";
        // line 273
        yield "      <div class=\"p-4 bg-light rounded border\">
        <h5 class=\"mb-3\">İlan Açıklaması</h5>
        <div class=\"aciklama-wrapper\">
          <div class=\"aciklama-icerik fs-5\" id=\"fullAciklamaContent\">
            ";
        // line 277
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_aciklama", [], "any", false, false, true, 277), "html", null, true);
        yield "
          </div>
          <div id=\"aciklamaToggleWrapper\" class=\"aciklama-devamini-gor-wrapper\" style=\"display: none;\">
            <button class=\"btn btn-link aciklama-devamini-gor-btn\" type=\"button\" id=\"toggleAciklamaBtn\">
              Devamını Gör
            </button>
          </div>
        </div>
      </div>
    </div> ";
        // line 287
        yield "
    <div class=\"col-lg-4 col-md-12 d-flex align-items-start flex-column\"> ";
        // line 290
        yield "      ";
        // line 291
        yield "      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_ilan_veren", [], "any", false, false, true, 291) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_ilan_veren", [], "any", false, false, true, 291), "empty", [], "any", false, false, true, 291))) {
            // line 292
            yield "      ";
            $context["ilan_veren_entity"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_ilan_veren", [], "any", false, false, true, 292), "entity", [], "any", false, false, true, 292);
            // line 293
            yield "      <div class=\"card ilan-veren-kart w-100 mb-4\">
        <div class=\"card-header\">
          <strong>İlan Veren Bilgileri</strong>
        </div>
        <ul class=\"list-group list-group-flush\">
          ";
            // line 298
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_adi", [], "any", false, false, true, 298) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_adi", [], "any", false, false, true, 298), "empty", [], "any", false, false, true, 298))) {
                // line 299
                yield "          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Adı Soyadı</strong></div>
            <div class=\"w-50 text-end\">
              ";
                // line 302
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_adi", [], "any", false, false, true, 302), "value", [], "any", false, false, true, 302), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_soyadi", [], "any", false, false, true, 302), "value", [], "any", false, false, true, 302), "html", null, true);
                yield "
            </div>
          </li>
          ";
            }
            // line 306
            yield "
          ";
            // line 307
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_e_posta_adresi", [], "any", false, false, true, 307) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_e_posta_adresi", [], "any", false, false, true, 307), "empty", [], "any", false, false, true, 307))) {
                // line 308
                yield "          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>E-Posta</strong></div>
            <div class=\"w-50 text-end\">
              <a href=\"mailto:";
                // line 311
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_e_posta_adresi", [], "any", false, false, true, 311), "value", [], "any", false, false, true, 311), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 312
($context["ilan_veren_entity"] ?? null), "field_e_posta_adresi", [], "any", false, false, true, 312), "value", [], "any", false, false, true, 312), "html", null, true);
                yield "</a>
            </div>
          </li>
          ";
            }
            // line 316
            yield "
          ";
            // line 317
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_telefon_numarasi", [], "any", false, false, true, 317) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_telefon_numarasi", [], "any", false, false, true, 317), "empty", [], "any", false, false, true, 317))) {
                // line 318
                yield "          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Telefon</strong></div>
            <div class=\"w-50 text-end d-flex align-items-center justify-content-end\">
              <span>";
                // line 321
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_telefon_numarasi", [], "any", false, false, true, 321), "value", [], "any", false, false, true, 321), "html", null, true);
                yield "</span>
              <a href=\"tel:";
                // line 322
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_telefon_numarasi", [], "any", false, false, true, 322), "value", [], "any", false, false, true, 322), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm ms-2\">
                <i class=\"bi bi-telephone\"></i> Ara
              </a>
            </div>
          </li>
          ";
            }
            // line 328
            yield "
          ";
            // line 330
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_kullanici_konum", [], "any", false, false, true, 330) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_kullanici_konum", [], "any", false, false, true, 330), "empty", [], "any", false, false, true, 330))) {
                // line 331
                yield "          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Konum</strong></div>
            <div class=\"w-50 text-end d-flex align-items-center justify-content-end\">
              ";
                // line 334
                $context["konum_values"] = [];
                // line 335
                yield "              ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_kullanici_konum", [], "any", false, false, true, 335));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 336
                    yield "              ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", true, true, true, 336) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, true, true, 336), "label", [], "any", true, true, true, 336))) {
                        // line 337
                        yield "              ";
                        $context["konum_values"] = Twig\Extension\CoreExtension::merge(($context["konum_values"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 337), "label", [], "any", false, false, true, 337)]);
                        // line 338
                        yield "              ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", true, true, true, 338)) {
                        // line 339
                        yield "              ";
                        $context["konum_values"] = Twig\Extension\CoreExtension::merge(($context["konum_values"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 339)]);
                        // line 340
                        yield "              ";
                    }
                    // line 341
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 342
                yield "              <span>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["konum_values"] ?? null), ", "), "html", null, true);
                yield "</span>
            </div>
          </li>
          ";
            }
            // line 346
            yield "        </ul>
      </div>
      ";
        }
        // line 349
        yield "
      ";
        // line 351
        yield "      <div class=\"modal fade\" id=\"imageModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-fullscreen\">
          <div class=\"modal-content bg-dark\">
            <div class=\"modal-header border-0\">
              <button type=\"button\" class=\"btn-close btn-close-white ms-auto\" data-bs-dismiss=\"modal\"
                aria-label=\"Kapat\"></button>
            </div>
            <div class=\"modal-body d-flex align-items-center justify-content-center p-0\">
              <div id=\"modalCarousel\" class=\"carousel slide w-100\" data-bs-interval=\"false\">
                <div class=\"carousel-inner\">
                  ";
        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_arac_galeri", [], "any", false, false, true, 361));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 362
            yield "                  <div class=\"carousel-item ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 362)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\">
                    <img src=\"";
            // line 363
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "entity", [], "any", false, false, true, 363), "uri", [], "any", false, false, true, 363), "value", [], "any", false, false, true, 363)), "html", null, true);
            yield "\" class=\"d-block mx-auto img-fluid\"
                      style=\"max-height: 90vh;\">
                  </div>
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        yield "                </div>
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#modalCarousel\"
                  data-bs-slide=\"prev\">
                  <span class=\"carousel-control-prev-icon\"></span>
                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#modalCarousel\"
                  data-bs-slide=\"next\">
                  <span class=\"carousel-control-next-icon\"></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div> ";
        // line 383
        yield "

    ";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "loop", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/sogep/components/ilanlar/templates/node--ilan.html.twig";
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
        return array (  684 => 383,  667 => 367,  649 => 363,  642 => 362,  625 => 361,  613 => 351,  610 => 349,  605 => 346,  597 => 342,  591 => 341,  588 => 340,  585 => 339,  582 => 338,  579 => 337,  576 => 336,  571 => 335,  569 => 334,  564 => 331,  561 => 330,  558 => 328,  549 => 322,  545 => 321,  540 => 318,  538 => 317,  535 => 316,  528 => 312,  525 => 311,  520 => 308,  518 => 307,  515 => 306,  506 => 302,  501 => 299,  499 => 298,  492 => 293,  489 => 292,  486 => 291,  484 => 290,  481 => 287,  469 => 277,  463 => 273,  461 => 272,  458 => 270,  456 => 269,  450 => 264,  446 => 262,  442 => 260,  440 => 259,  437 => 258,  435 => 257,  427 => 252,  420 => 248,  413 => 244,  407 => 240,  403 => 238,  399 => 236,  397 => 235,  390 => 230,  386 => 228,  380 => 226,  378 => 225,  370 => 220,  363 => 216,  357 => 212,  353 => 210,  347 => 208,  345 => 207,  337 => 202,  332 => 199,  328 => 196,  324 => 194,  321 => 193,  319 => 192,  314 => 190,  311 => 189,  308 => 188,  306 => 187,  300 => 185,  298 => 184,  295 => 183,  292 => 181,  285 => 176,  276 => 170,  270 => 166,  192 => 88,  188 => 85,  171 => 82,  167 => 81,  164 => 80,  147 => 79,  135 => 69,  118 => 66,  114 => 65,  107 => 64,  90 => 63,  85 => 60,  83 => 59,  71 => 48,  60 => 39,  54 => 35,  49 => 31,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/sogep/components/ilanlar/templates/node--ilan.html.twig", "/Users/fatihapaydin/Documents/drupal/web/themes/custom/sogep/components/ilanlar/templates/node--ilan.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 63, "if" => 64, "set" => 292];
        static $filters = ["escape" => 1, "upper" => 39, "date" => 176, "merge" => 337, "join" => 342];
        static $functions = ["attach_library" => 1, "file_url" => 65, "random" => 170];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 'upper', 'date', 'merge', 'join'],
                ['attach_library', 'file_url', 'random'],
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
