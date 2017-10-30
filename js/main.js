$(function() {
    $('#collapse-menu').toggle(false);
    $('#collapse-button').click(
      function()
      {
          $('#collapse-menu').toggle('slow');
      }
    );
});
