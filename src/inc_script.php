    <script src="./bootstrap-2.3.0/js/jquery.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-transition.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-alert.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-modal.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-dropdown.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-scrollspy.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-tab.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-tooltip.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-popover.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-button.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-collapse.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-carousel.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-typeahead.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='js/jquery.dcmegamenu.1.2.js'></script>
  <script src="js/jquery-ui.js"></script>
  
<script type="text/javascript">
$(document).ready(function($){
	$('#mega-menu-tut').dcMegaMenu({
		rowItems: '3',
		speed: 'fast'
	});
});
$(function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
</script>