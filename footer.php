	</div> <!-- starts in header -->
    </body>
</html>

<?php

    //print_r($slng);
    
    //lngMsg('slogan', $slng);
    
    function lngMsg($lngMsg, $slng)
    {
	echo $slng[$lngMsg];
    }
?>