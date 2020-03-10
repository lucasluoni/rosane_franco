<script>
jQuery(function(jQuery) {
    /* jquery para repeatable fields (videos) na tela de autor */
    jQuery('.repeatable-add').click(function() {
        // The first function looks for the add button and adds a new blank field row to the end of the list of fields. 
        // This is set up generically so that you can have as many of these repeatable fields as you need.
        // "field" is a cloned version of the last field row
        field = jQuery(this).closest('td').find('.custom_repeatable li:last').clone(true);
        //"fieldLocation" reminds the script where the end of the list is
        fieldLocation = jQuery(this).closest('td').find('.custom_repeatable li:last');
        // Find the input within "field" and rest it's value to empty and add 1 to the numerical integer we'll use to save the data as an array
        Query('input', field).val('').attr('name', function(index, name) {
            return name.replace(/(\d+)/, function(fullMatch, n) {
                return Number(n) + 1;
            });
        })
        //Add the field after the fieldLocation
        field.insertAfter(fieldLocation, jQuery(this).closest('td'))
        return false;
    });
        //The next function gives each remove button the ability to remove that row when it is clicked. 
        jQuery('.repeatable-remove').click(function(){
        if($('.repeatable-remove').length > 1) {
        jQuery(this).parent().remove();
        return false;
        }
    });
    //set the lists to be sortable and define a handle so that you can drag and drop the rows.     
    jQuery('.custom_repeatable').sortable({
        opacity: 0.6,
        revert: true,
        cursor: 'move',
        handle: '.sort'
});
}
</script>

