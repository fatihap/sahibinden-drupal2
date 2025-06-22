// themes/custom/sogep/js/menu.js

(function (Drupal, once) {
  // Drupal.behaviors nesnesi, Drupal'da JavaScript kodunu yönetmek için standart yoldur.
  // Her sayfa yüklemesinde (ve AJAX çağrılarında) 'attach' fonksiyonu çalışır.
  Drupal.behaviors.sogepMenu = {
    attach: function (context, settings) {
      // 'once' kütüphanesi, seçilen öğelere olay dinleyicilerinin yalnızca bir kez eklenmesini sağlar.
      // Bu, performansı artırır ve tekrar eden olay dinleyici ekleme sorunlarını önler.
      // '.js-post-ad-button' sınıfına sahip tüm butonları seçer.
      once('postAdButtonHandler', '.js-post-ad-button', context).forEach(function (element) {
        // Her bulunan butona bir 'click' olay dinleyicisi ekler.
        element.addEventListener('click', function () {
          // Tıklanan butonun 'data-url' niteliğindeki URL'yi alır.
          var url = this.getAttribute('data-url');
          // Eğer URL varsa, tarayıcıyı o URL'ye yönlendirir.
          if (url) {
            window.location.href = url;
          }
        });
      });
    }
  };
})(Drupal, once);