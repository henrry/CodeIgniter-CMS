
    <div class="admin_container grid_9">

       
        
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">
  tinyMCE.init({
    theme : "advanced",
    mode: "textareas",
    plugins: "preview, table, fullscreen, style",
    plugin_preview_width : "836px",
    plugin_preview_height : "600px",
    elements : "elm1",
    theme_advanced_toolbar_location : "top",
    theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,"
    + "justifyleft,justifycenter,justifyright,justifyfull,formatselect,"
    + "bullist,numlist,outdent,indent",
    theme_advanced_buttons2 : "link,unlink,anchor,image,separator,"
    +"undo,redo,cleanup,code,separator,sub,sup,charmap",
    theme_advanced_buttons3 : "preview,fullscreen,tablecontrols,styleprops",
    height:"650px",
    width:"836px",
    table_styles : "Header 1=header1;Header 2=header2;Header 3=header3",
    table_cell_styles : "Header 1=header1;Header 2=header2;Header 3=header3;Table Cell=tableCel1",
    table_row_styles : "Header 1=header1;Header 2=header2;Header 3=header3;Table Row=tableRow1",
    table_cell_limit : 100,
    table_row_limit : 5,
    table_col_limit : 5,
    content_css : "<?php echo base_url();?>css/reset.css?t=<?php echo strtotime('now'); ?>,<?php echo base_url();?>css/grid.css?t=<?php echo strtotime('now'); ?>,<?php echo base_url();?>css/style.css?t=<?php echo strtotime('now'); ?>"
});

</script>

<form method="post" action="">
    <textarea name="elm1" id="elm1">
    </textarea>
</form> 

    </div>

