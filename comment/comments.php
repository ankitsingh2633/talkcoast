<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '763410system@';
$DATABASE_NAME = 'ankit';
try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
} catch (PDOException $exception) {
   
    exit('Failed to connect to database!');
}


function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
    $string = array('y' => 'year', 'm' => 'month', 'w' => 'week', 'd' => 'day', 'h' => 'hour', 'i' => 'minute', 's' => 'second');
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}


function show_comments($comments, $parent_id = -1) {
    $html = '';
    if ($parent_id != -1) {
        
        array_multisort(array_column($comments, 'submit_date'), SORT_ASC, $comments);
    }
   
    foreach ($comments as $comment) {
        if ($comment['parent_id'] == $parent_id) {
            
            $html .= '
            <div class="comment">
                <div>
                    <h3 class="name">' . htmlspecialchars($comment['name'], ENT_QUOTES) . '</h3>
                    <span class="date">' . time_elapsed_string($comment['submit_date']) . '</span>
                </div>
                <p class="content">' . nl2br(htmlspecialchars($comment['content'], ENT_QUOTES)) . '</p>
                <a class="reply_comment_btn" href="#" data-comment-id="' . $comment['id'] . '">Reply</a>
                ' . show_write_comment_form($comment['id']) . '
                <div class="replies">
                ' . show_comments($comments, $comment['id']) . '
                </div>
                <hr>
            </div>
            ';
        }
    }
    return $html;
}


function show_write_comment_form($parent_id = -1) {
    $html = '
    <div class="write_comment" data-comment-id="' . $parent_id . '">
        <form>
            <input name="parent_id" type="hidden" value="' . $parent_id . '">
            <input name="name" type="text" placeholder="Your Name" required>
            <textarea name="content" placeholder="Write your comment here..." required></textarea>
            <button type="submit">Submit Comment</button>
            
        </form>
    </div>
    ';
    return $html;
}


if (isset($_GET['page_id'])) {
  
    if (isset($_POST['name'], $_POST['content'])) {
    
        $stmt = $pdo->prepare('INSERT INTO comments (page_id, parent_id, name, content, submit_date) VALUES (?,?,?,?,NOW())');
        $stmt->execute([ $_GET['page_id'], $_POST['parent_id'], $_POST['name'], $_POST['content'] ]);
        exit('Your comment has been submitted!');
    }
    
    $stmt = $pdo->prepare('SELECT * FROM comments WHERE page_id = ? ORDER BY submit_date DESC');
    $stmt->execute([ $_GET['page_id'] ]);
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $stmt = $pdo->prepare('SELECT COUNT(*) AS total_comments FROM comments WHERE page_id = ?');
    $stmt->execute([ $_GET['page_id'] ]);
    $comments_info = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    exit('No page ID specified!');
}
?>

<div class="comment_header">
    <span class="total"><?=$comments_info['total_comments']?> QUESTIONS</span>
    <a href="#" class="write_comment_btn" data-comment-id="-1" style="margin-left:200px; ">ask doubts</a>
</div>

<?=show_write_comment_form()?>


<?=show_comments($comments)?>


