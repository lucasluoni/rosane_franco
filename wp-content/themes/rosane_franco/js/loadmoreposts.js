<script type="text/javascript">
var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
var page = 2;
jQuery(function($) {
  $('body').on('click', '.loadmore', function() {
    var data = {
      'action': 'load_posts_by_ajax',
      'page': page,
      'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
    };

    $.post(ajaxurl, data, function(response) {
      $('.my-posts').append(response);
      page++;
    });
  });
});
</script>