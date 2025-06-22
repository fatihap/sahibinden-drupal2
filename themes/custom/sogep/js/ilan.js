  document.addEventListener('DOMContentLoaded', function () {
    // ... (Mevcut galeri ve favori butonu kodlarınız) ...

    // YENİ Eklenecek: Açıklama Devamını Gör/Gizle JS (Daha Güvenilir Yaklaşım)
    const fullAciklamaContent = document.getElementById('fullAciklamaContent');
    const toggleAciklamaBtn = document.getElementById('toggleAciklamaBtn');
    const aciklamaToggleWrapper = document.getElementById('aciklamaToggleWrapper');
    const defaultCollapsedHeight = 150; // CSS'deki .aciklama-icerik.collapsed max-height ile uyumlu olmalı

    console.log("DOMContentLoaded: fullAciklamaContent", fullAciklamaContent);
    console.log("DOMContentLoaded: toggleAciklamaBtn", toggleAciklamaBtn);
    console.log("DOMContentLoaded: aciklamaToggleWrapper", aciklamaToggleWrapper);

    // Sayfa yüklendiğinde (veya DOM hazır olduğunda), açıklamanın gerçek yüksekliğini kontrol et
    // ve eğer yüksekse kısaltma sınıfını ekle.
    setTimeout(() => {
      if (!fullAciklamaContent) {
        console.error("Hata: fullAciklamaContent bulunamadı.");
        return; // Element yoksa daha fazla devam etme
      }
      
      const actualContentHeight = fullAciklamaContent.scrollHeight;
      console.log("setTimeout Çalıştı: actualContentHeight =", actualContentHeight);
      console.log("defaultCollapsedHeight =", defaultCollapsedHeight);

      if (actualContentHeight > defaultCollapsedHeight) {
        console.log("Açıklama uzun, kısaltılıyor...");
        fullAciklamaContent.classList.add('collapsed'); // Başlangıçta kısaltılmış hali
        if (aciklamaToggleWrapper) {
          aciklamaToggleWrapper.style.display = 'block'; // Butonu göster
          console.log("Buton gösterildi.");
        } else {
            console.error("Hata: aciklamaToggleWrapper bulunamadı.");
        }
      } else {
        console.log("Açıklama kısa, buton gizleniyor.");
        if (aciklamaToggleWrapper) {
          aciklamaToggleWrapper.style.display = 'none'; // Butonu gizle
        }
        fullAciklamaContent.classList.add('expanded'); // Kısa ise direkt expanded olarak bırak
      }
    }, 500); // Gecikmeyi artırdım, 500ms (0.5 saniye) olabilir. Gerekirse daha da artırın.

    // Buton tıklama olayı sadece buton varsa eklensin
    if (toggleAciklamaBtn) {
      toggleAciklamaBtn.addEventListener('click', function() {
          console.log("Butona tıklandı.");
          if (fullAciklamaContent.classList.contains('collapsed')) {
              // Kısaltılmış durumdayken tıklandı, genişlet
              fullAciklamaContent.classList.remove('collapsed');
              fullAciklamaContent.classList.add('expanded');
              toggleAciklamaBtn.textContent = 'Daha Az Göster';
              console.log("Açıklama genişletildi.");
          } else {
              // Genişletilmiş durumdayken tıklandı, kısalt
              fullAciklamaContent.classList.remove('expanded');
              fullAciklamaContent.classList.add('collapsed');
              toggleAciklamaBtn.textContent = 'Devamını Gör';
              console.log("Açıklama daraltıldı.");
          }
      });
    } else {
        console.error("Hata: toggleAciklamaBtn bulunamadı. Buton dinleyicisi eklenemedi.");
    }
  });
