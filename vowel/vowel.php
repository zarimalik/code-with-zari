<html>
    <body>
        <form method="post">
            Enter a string : <input type="text" name="string"  requrired><br>
            <input type="submit" value="submit" name="submit">
    </html>
</html>
<?php
    if(isset($_POST["submit"])) {
        $str = $_POST["string"];
        function vcount($x) {
            $nw=0;
            for($i=0;$i<strlen($x) ; $i++) {
                switch(substr(strtolower($x) ,$i, 1)) {
                    case 'a' :
                    case 'e' :
                    case 'i' :
                    case 'o' :
                    case 'u' : $nw++;
                }
            }
            echo "Number of vowels in '$x' in".$nw;

        }
        vcount($str);
    }
?>
