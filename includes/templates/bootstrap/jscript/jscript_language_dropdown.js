document.addEventListener('DOMContentLoaded', function () {
  var btn = document.querySelector('.lanbtn');
  var content = document.querySelector('.language-header-content');

  if (!btn || !content) return;

  btn.addEventListener('click', function (e) {
    e.stopPropagation();
    var isOpen = content.style.display === 'block';
    content.style.display = isOpen ? 'none' : 'block';
  });

  // Schließen bei Klick außerhalb
  document.addEventListener('click', function () {
    content.style.display = 'none';
  });
});
