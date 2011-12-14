<?php

    // action hook for placing content above the footer
    thematic_abovefooter(); 


    // action hook creating the footer 
    thematic_footer();

    
    // action hook for placing content below the footer
    thematic_belowfooter();
    
    // calling WordPress' footer action hook
    wp_footer();

?>  

<?php 

// action hook for placing content before closing the BODY tag
thematic_after(); ?>


</body>
</html>
