<form action="" method="get">
    Enter name : <input type="text" name="friend_name"/>
    <input type="submit" value="Add Friend"/>
</form>

<?php
    $f_name = $_GET['friend_name'];
    
    echo "$f_name";
?>
