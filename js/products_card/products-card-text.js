 $(document).ready(function () {
    $('.product-desc-btn').on('click', function () {
      $(this).next('.product-desc-text').toggleClass('hide');
    });

    $('.product-desc-text').on('click', '.see-more', function () {
      const $hiddenText = $(this).closest('.product-desc-text').find('.hidden-text');
      $hiddenText.toggleClass('show-text');

      if ($hiddenText.hasClass('show-text')) {
        $(this).text('Ukryj...');
      } else {
        $(this).text('Pokaż więcej...');
      }
    });
  });