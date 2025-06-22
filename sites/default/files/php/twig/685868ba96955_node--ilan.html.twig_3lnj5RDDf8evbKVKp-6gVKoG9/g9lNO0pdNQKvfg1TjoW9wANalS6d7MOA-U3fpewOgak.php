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
class __TwigTemplate_19321a811a8381e2081e5bda33cfb340 extends Template
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
        // line 65
        yield "
<div class=\"arac-detay container\">
  <div class=\"ilan-baslik-wrapper\">
    <h1 class=\"d-flex align-items-center justify-content-between\">
      <span id=\"ilanBaslik\">";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_ilan_basligi", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69)), "html", null, true);
        yield "</span>
      <button id=\"favButton\" class=\"btn p-0\" aria-label=\"Favorilere Ekle\">
        <i id=\"favIcon\" class=\"bi bi-star fs-2 text-warning\"></i>
      </button>
    </h1>
  </div>


  <div id=\"favToast\" class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 9999;\">
    <div class=\"toast align-items-center text-white bg-success border-0\" role=\"alert\">
      <div class=\"d-flex\">
        <div class=\"toast-body\" id=\"favToastText\">Favorilere eklendi</div>
        <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\"></button>
      </div>
    </div>
  </div>


  <div class=\"row\">


    <div class=\"col-md-8\">
      <div class=\"galeri-wrapper\">

        <div id=\"carGallery\" class=\"carousel slide\">
          <div class=\"carousel-inner\">
            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_arac_galeri", [], "any", false, false, true, 95));
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
            // line 96
            yield "            <div class=\"carousel-item ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\">
              <img src=\"";
            // line 97
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "entity", [], "any", false, false, true, 97), "uri", [], "any", false, false, true, 97), "value", [], "any", false, false, true, 97)), "html", null, true);
            yield "\" alt=\"Araç Görseli\" data-bs-toggle=\"modal\"
                data-bs-target=\"#imageModal\" data-image-index=\"";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 98), "html", null, true);
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
        // line 101
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
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_arac_galeri", [], "any", false, false, true, 112));
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
            // line 113
            yield "          <div class=\"col-2\">
            <img src=\"";
            // line 114
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "entity", [], "any", false, false, true, 114), "uri", [], "any", false, false, true, 114), "value", [], "any", false, false, true, 114)), "html", null, true);
            yield "\" class=\"img-thumbnail thumb-img\"
              data-bs-target=\"#carGallery\" data-bs-slide-to=\"";
            // line 115
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 115), "html", null, true);
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
        // line 118
        yield "        </div>

        ";
        // line 121
        yield "        <div class=\"row mt-4\">
          <div class=\"col-12\">
            <div class=\"p-4 bg-light rounded border\">
              <h5 class=\"mb-3\">İlan Açıklaması</h5>
              
              ";
        // line 127
        yield "              <div class=\"aciklama-wrapper\">
                <div class=\"aciklama-icerik fs-5\" id=\"fullAciklamaContent\">
                  ";
        // line 129
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_aciklama", [], "any", false, false, true, 129), "html", null, true);
        yield "
                </div>
                
                ";
        // line 133
        yield "                <div id=\"aciklamaToggleWrapper\" class=\"aciklama-devamini-gor-wrapper\" style=\"display: none;\">
                  <button class=\"btn btn-link aciklama-devamini-gor-btn\" type=\"button\" id=\"toggleAciklamaBtn\">
                    Devamını Gör
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        ";
        // line 143
        yield "
      </div>
    </div>

    <div class=\"modal fade\" id=\"imageModal\" tabindex=\"-1\" aria-hidden=\"true\">
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
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_arac_galeri", [], "any", false, false, true, 157));
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
            // line 158
            yield "                <div class=\"carousel-item ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\">
                  <img src=\"";
            // line 159
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "entity", [], "any", false, false, true, 159), "uri", [], "any", false, false, true, 159), "value", [], "any", false, false, true, 159)), "html", null, true);
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
        // line 163
        yield "              </div>
              <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#modalCarousel\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\"></span>
              </button>
              <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#modalCarousel\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\"></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

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


    <div class=\"col-md-4 d-flex align-items-start justify-content-end\">
      <div class=\"card arac-kart mb-4\"> ";
        // line 254
        yield "        <ul class=\"list-group list-group-flush\">
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>İlan No</strong></div>
            <div class=\"w-50 text-end\">";
        // line 257
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::random($this->env->getCharset(), 100000000, 999999999), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Marka</strong></div>
            <div class=\"w-50 text-end\">";
        // line 261
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_marka", [], "any", false, false, true, 261), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Fiyat</strong></div>
            <div class=\"w-50 text-end\">";
        // line 265
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_fiyat", [], "any", false, false, true, 265), "html", null, true);
        yield "</div>
          </li>

          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Marka</strong></div>
            <div class=\"w-50 text-end\">
              ";
        // line 271
        $context["marka"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_marka", [], "any", false, false, true, 271))));
        // line 272
        yield "              ";
        yield ((($context["marka"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["marka"], "html", null, true)) : ("Belirtilmedi"));
        yield "
            </div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Model</strong></div>
            <div class=\"w-50 text-end\">
              ";
        // line 278
        $context["model"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_model", [], "any", false, false, true, 278))));
        // line 279
        yield "              ";
        yield ((($context["model"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["model"], "html", null, true)) : ("Belirtilmedi"));
        yield "
            </div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Yıl</strong></div>
            <div class=\"w-50 text-end\">";
        // line 284
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_yil", [], "any", false, false, true, 284), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Yakıt Tipi</strong></div>
            <div class=\"w-50 text-end\">";
        // line 288
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_yakit_tipi", [], "any", false, false, true, 288), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Vites</strong></div>
            <div class=\"w-50 text-end\">";
        // line 292
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_vites", [], "any", false, false, true, 292), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Araç Durumu</strong></div>
            <div class=\"w-50 text-end\">
              ";
        // line 297
        if (((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_arac_sifir", [], "any", false, false, true, 297)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_arac_sifir", [], "any", false, false, true, 297), "#markup", [], "array", false, false, true, 297)) == "Evet")) {
            // line 298
            yield "              Araç Sıfır
              ";
        } else {
            // line 300
            yield "              İkinci El
              ";
        }
        // line 302
        yield "            </div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Kilometre</strong></div>
            <div class=\"w-50 text-end\">";
        // line 306
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_kilometre", [], "any", false, false, true, 306), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Motor Gücü</strong></div>
            <div class=\"w-50 text-end\">";
        // line 310
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_motor_gucu", [], "any", false, false, true, 310), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Renk</strong></div>
            <div class=\"w-50 text-end\">";
        // line 314
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_renk", [], "any", false, false, true, 314), "html", null, true);
        yield "</div>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <div class=\"w-50\"><strong>Kimden</strong></div>
            <div class=\"w-50 text-end\">
              ";
        // line 319
        if (((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_kimden", [], "any", false, false, true, 319)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_kimden", [], "any", false, false, true, 319), "#markup", [], "array", false, false, true, 319)) == "galeri")) {
            // line 320
            yield "              Galeriden
              ";
        } elseif (((($_v2 = CoreExtension::getAttribute($this->env, $this->source,         // line 321
($context["content"] ?? null), "field_kimden", [], "any", false, false, true, 321)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_kimden", [], "any", false, false, true, 321), "#markup", [], "array", false, false, true, 321)) == "sahibinden")) {
            // line 322
            yield "              Sahibinden
              ";
        } else {
            // line 324
            yield "              Bilinmiyor
              ";
        }
        // line 326
        yield "            </div>
          </li>
        </ul>
      </div>

      ";
        // line 332
        yield "      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_ilan_veren", [], "any", false, false, true, 332) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_ilan_veren", [], "any", false, false, true, 332), "empty", [], "any", false, false, true, 332))) {
            // line 333
            yield "        ";
            $context["ilan_veren_entity"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_ilan_veren", [], "any", false, false, true, 333), "entity", [], "any", false, false, true, 333);
            // line 334
            yield "        <div class=\"card ilan-veren-kart\">
          <div class=\"card-header\">
            <strong>İlan Veren Bilgileri</strong>
          </div>
          <ul class=\"list-group list-group-flush\">
            ";
            // line 339
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_adi", [], "any", false, false, true, 339) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_adi", [], "any", false, false, true, 339), "empty", [], "any", false, false, true, 339))) {
                // line 340
                yield "            <li class=\"list-group-item d-flex justify-content-between\">
              <div class=\"w-50\"><strong>Adı Soyadı</strong></div>
              <div class=\"w-50 text-end\">
                ";
                // line 343
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_adi", [], "any", false, false, true, 343), "value", [], "any", false, false, true, 343), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_soyadi", [], "any", false, false, true, 343), "value", [], "any", false, false, true, 343), "html", null, true);
                yield "
              </div>
            </li>
            ";
            }
            // line 347
            yield "
            ";
            // line 348
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_e_posta_adresi", [], "any", false, false, true, 348) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_e_posta_adresi", [], "any", false, false, true, 348), "empty", [], "any", false, false, true, 348))) {
                // line 349
                yield "            <li class=\"list-group-item d-flex justify-content-between\">
              <div class=\"w-50\"><strong>E-Posta</strong></div>
              <div class=\"w-50 text-end\">
                <a href=\"mailto:";
                // line 352
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_e_posta_adresi", [], "any", false, false, true, 352), "value", [], "any", false, false, true, 352), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_e_posta_adresi", [], "any", false, false, true, 352), "value", [], "any", false, false, true, 352), "html", null, true);
                yield "</a>
              </div>
            </li>
            ";
            }
            // line 356
            yield "
            ";
            // line 357
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_telefon_numarasi", [], "any", false, false, true, 357) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_telefon_numarasi", [], "any", false, false, true, 357), "empty", [], "any", false, false, true, 357))) {
                // line 358
                yield "            <li class=\"list-group-item d-flex justify-content-between\">
              <div class=\"w-50\"><strong>Telefon</strong></div>
              <div class=\"w-50 text-end d-flex align-items-center justify-content-end\">
                <span>";
                // line 361
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_telefon_numarasi", [], "any", false, false, true, 361), "value", [], "any", false, false, true, 361), "html", null, true);
                yield "</span>
                <a href=\"tel:";
                // line 362
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ilan_veren_entity"] ?? null), "field_telefon_numarasi", [], "any", false, false, true, 362), "value", [], "any", false, false, true, 362), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm ms-2\">
                  <i class=\"bi bi-telephone\"></i> Ara
                </a>
              </div>
            </li>
            ";
            }
            // line 368
            yield "          </ul>
        </div>
      ";
        }
        // line 371
        yield "
    </div>
  </div>
</div>";
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
        return array (  574 => 371,  569 => 368,  560 => 362,  556 => 361,  551 => 358,  549 => 357,  546 => 356,  537 => 352,  532 => 349,  530 => 348,  527 => 347,  518 => 343,  513 => 340,  511 => 339,  504 => 334,  501 => 333,  498 => 332,  491 => 326,  487 => 324,  483 => 322,  481 => 321,  478 => 320,  476 => 319,  468 => 314,  461 => 310,  454 => 306,  448 => 302,  444 => 300,  440 => 298,  438 => 297,  430 => 292,  423 => 288,  416 => 284,  407 => 279,  405 => 278,  395 => 272,  393 => 271,  384 => 265,  377 => 261,  370 => 257,  365 => 254,  273 => 163,  255 => 159,  248 => 158,  231 => 157,  215 => 143,  204 => 133,  198 => 129,  194 => 127,  187 => 121,  183 => 118,  166 => 115,  162 => 114,  159 => 113,  142 => 112,  129 => 101,  112 => 98,  108 => 97,  101 => 96,  84 => 95,  55 => 69,  49 => 65,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/sogep/components/ilanlar/templates/node--ilan.html.twig", "/Users/fatihapaydin/Documents/drupal/web/themes/custom/sogep/components/ilanlar/templates/node--ilan.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 95, "if" => 96, "set" => 271];
        static $filters = ["escape" => 1, "upper" => 69, "trim" => 271, "striptags" => 271, "render" => 271];
        static $functions = ["attach_library" => 1, "file_url" => 97, "random" => 257];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 'upper', 'trim', 'striptags', 'render'],
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
