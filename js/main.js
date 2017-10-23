$(function() {

    var toggle = false;
    $('#collapse-menu').toggle(false);
    $('#collapse-button').click(
      function()
      {
          $('#collapse-menu').toggle('slow');
          if($('#desktop-collapse-menu').length == 0)
          {
            toggle = !toggle;
            $('#desktop-collapse-menu').toggle(toggle);
          }
      }
    );
});
