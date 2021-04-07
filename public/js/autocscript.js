$(function() {
	$("#search").autocomplete("get_books.php",{
	  autoFill: true,
    selectFirst: true,
		max: 5,
    width: '240px'
  });
  
  
    $('input.clear').each(function() {
    $(this)
      .data('default', $(this).val())
      .addClass('inactive')
      .focus(function() {
        $(this).removeClass('inactive');
        if($(this).val() == $(this).data('default') || '') {
          $(this).val('');
        }
      })
      .blur(function() {
        var default_val = $(this).data('default');
        if($(this).val() == '') {
          $(this).addClass('inactive');
          $(this).val($(this).data('default'));
        }
      });
  });
});


