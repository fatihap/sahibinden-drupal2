/**
 * @file
 * ilan.js
 *
 * Provides functionality for image gallery, favorite button, and description toggle on ilan nodes.
 */

(function ($, Drupal) {
  Drupal.behaviors.ilanNodeScripts = {
    attach: function (context, settings) {
      // --- Galeri İşlevselliği ---
      // ... (Mevcut galerİ kodlarınız) ...
      $('#carGallery img', context).once('gallery-img-click').each(function () {
        $(this).on('click', function () {
          const index = $(this).data('image-index');
          $('#modalCarousel .carousel-item', context).removeClass('active');
          $($('#modalCarousel .carousel-item', context)[index]).addClass('active');
        });
      });

      // --- Favori Butonu İşlevselliği ---
      $('#favButton', context).once('fav-button-click').each(function () {
        const $favButton = $(this);
        const $favIcon = $('#favIcon', context);
        const $favToastElement = $('#favToast .toast', context);
        // bootstrap.Toast doğrudan erişim sağlamak yerine jQuery nesnesinin ilk elemanını kullanın
        const favToast = new bootstrap.Toast($favToastElement[0]);
        const $favToastText = $('#favToastText', context);
        const ilanBaslik = $('#ilanBaslik', context).text().trim();

        let isFavorited = false;

        $favButton.on('click', function () {
          isFavorited = !isFavorited;

          if (isFavorited) {
            $favIcon.removeClass("bi-star").addClass("bi-star-fill");
            $favToastText.text(`"${ilanBaslik}" favorilere eklendi`);
          } else {
            $favIcon.removeClass("bi-star-fill").addClass("bi-star");
            $favToastText.text(`"${ilanBaslik}" favorilerden çıkarıldı`);
          }
          favToast.show();
        });
      });


      // --- Açıklama Devamını Gör/Gizle İşlevselliği ---
      $('#fullAciklamaContent', context).once('description-toggle').each(function () {
        const $fullAciklamaContent = $(this);
        const $toggleAciklamaBtn = $('#toggleAciklamaBtn', context);
        const $aciklamaToggleWrapper = $('#aciklamaToggleWrapper', context);
        const defaultCollapsedHeight = 150;

        if ($fullAciklamaContent.length && $toggleAciklamaBtn.length && $aciklamaToggleWrapper.length) {
          const actualContentHeight = $fullAciklamaContent[0].scrollHeight;

          if (actualContentHeight > defaultCollapsedHeight) {
            $fullAciklamaContent.addClass('collapsed');
            $aciklamaToggleWrapper.css('display', 'block');
          } else {
            $aciklamaToggleWrapper.css('display', 'none');
            $fullAciklamaContent.addClass('expanded');
          }

          $toggleAciklamaBtn.on('click', function () {
            if ($fullAciklamaContent.hasClass('collapsed')) {
              $fullAciklamaContent.removeClass('collapsed').addClass('expanded');
              $(this).text('Daha Az Göster');
            } else {
              $fullAciklamaContent.removeClass('expanded').addClass('collapsed');
              $(this).text('Devamını Gör');
            }
          });
        }
      });
    }
  };
})(jQuery, Drupal);