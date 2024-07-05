<!DOCTYPE html>
<html>
<head>
    <title>App 1.0.4,Web 1.0.6</title>
</head>
<body>
    <a href='https://github.com/lanlan1530/justaprogram'>Star on Github</a>
    <?php
    function encryptDecrypt($key, $string, $decrypt){  
        if($decrypt){  
            $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "12");  
            return $decrypted;  
        }else{  
            $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));  
            return $encrypted;  
        }  
    }  
    $group_name_content = file_get_contents('GroupName');
    $group_score_content = file_get_contents('GroupScore');
    $group_scores = explode(' ', $group_score_content);
    $group_names=explode(' ',$group_name_content);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $group_name_content = $_POST['group_name'] ?? '';
        
        $group_score_content = '';
        for ($i = 1; $i <= 11; $i++) {
            $score_key = 'group_score_' . $i;
            $group_score_content .= $_POST[$score_key] ?? '';
            if ($i < 11) {
                $group_score_content .= ' ';
            }
        }

        file_put_contents('GroupName', $group_name_content);
        file_put_contents('ScoreBack', $group_score_content);
        file_put_contents('GroupScore', $group_score_content);
    }
    ?>
    <form method="post" action="">
        <label for="group_name"></label>
        <input type="text" id="group_name" name="group_name" value="<?php echo htmlspecialchars($group_name_content); ?>"><br>

        <label for="group_score"></label>
        <?php for ($i = 1; $i <= 11; $i++) : ?>
            <?php echo $group_names[$i-1]; ?> 
            <input type="text" id="group_score_<?php echo $i; ?>" name="group_score_<?php echo $i; ?>" value="<?php echo isset($group_scores[$i - 1]) ? htmlspecialchars($group_scores[$i - 1]) : ''; ?>"><br>
        <?php endfor; ?>
        <input type="submit" name="write" value="写入">
    </form>
</body>
</html>
