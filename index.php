<!DOCTYPE html>
<html>
<head>
    <title>编辑文件</title>
</head>
<body>
    <?php
    $group_name_content = file_get_contents('GroupName');
    $group_score_content = file_get_contents('GroupScore');
    $group_scores = explode(' ', $group_score_content);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $group_name_content = $_POST['group_name'] ?? '';
        
        $group_score_content = '';
        for ($i = 1; $i <= 10; $i++) {
            $score_key = 'group_score_' . $i;
            $group_score_content .= $_POST[$score_key] ?? '';
            if ($i < 10) {
                $group_score_content .= ' ';
            }
        }

        file_put_contents('GroupName', $group_name_content);
        file_put_contents('GroupScore', $group_score_content);
    }
    ?>

    <form method="post" action="">
        <label for="group_name">GroupName:</label><br>
        <input type="text" id="group_name" name="group_name" value="<?php echo htmlspecialchars($group_name_content); ?>"><br><br>

        <label for="group_score">GroupScore:</label><br>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <input type="text" id="group_score_<?php echo $i; ?>" name="group_score_<?php echo $i; ?>" value="<?php echo isset($group_scores[$i - 1]) ? htmlspecialchars($group_scores[$i - 1]) : ''; ?>"><br><br>
        <?php endfor; ?>

        <input type="submit" name="read" value="读取">
        <input type="submit" name="write" value="写入">
    </form>
</body>
</html>
