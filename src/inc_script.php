<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='js/jquery.dcmegamenu.1.2.js'></script>
<script src="js/jquery-ui.js"></script>

<script src="./bootstrap-2.3.0/js/bootstrap-carousel.js"></script>
<script src="js/ui/jquery.ui.core.js"></script>
<script src="js/ui/jquery.ui.mouse.js"></script>
<script src="js/ui/jquery.ui.draggable.js"></script>
<script src="js/ui/jquery.ui.position.js"></script>
<script src="js/ui/jquery.ui.resizable.js"></script>
<script src="js/ui/jquery.ui.button.js"></script>
<script src="js/ui/jquery.ui.dialog.js"></script>
<script src="js/ui/jquery.ui.effect.js"></script>
<script src="js/ui/jquery.ui.effect-blind.js"></script>
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
</script>