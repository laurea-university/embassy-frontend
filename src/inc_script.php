<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='js/jquery.dcmegamenu.1.2.js'></script>
<script src="js/jquery-ui.js"></script>
<script src="./bootstrap-2.3.0/js/bootstrap-carousel.js"></script>
<script src="js/ui/jquery.ui.dialog.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>  


<script type="text/javascript">
    $(document).ready(function($){
        $('#mega-menu-tut').dcMegaMenu({
            rowItems: '3',
            speed: 'fast'
        });

        oTable = $('#example').dataTable({
            "jQueryUI": true,
            "paginationType": "full_numbers"
        });
        
        oTable2 = $('#example2').dataTable({
            "jQueryUI": true,
            "paginationType": "full_numbers"
        });
        
    } );
    
    function searchResultByCategory(id, stayChecked)
    {
        if (document.getElementById(id).checked == true)
        {
            $("#search").focus();
            $("#search").val(document.getElementById(id).name);
            $("#search").trigger("keyup");
                
        }
        else
        {
            $("#search").focus();
            $("#search").val("");
            $("#search").trigger("keyup");
        }

        with(document.myform)
        {
            for(i = 0; i < elements.length; i++)
            {
                if(elements[i].checked == true && elements[i].name != stayChecked.name)
                {
                    elements[i].checked = false;
                }
            }

        }
    }
</script>
