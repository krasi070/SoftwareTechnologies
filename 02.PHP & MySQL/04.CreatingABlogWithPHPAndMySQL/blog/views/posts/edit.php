<?php $this->title = "Edit Existing Post"; ?>

<h2><?=htmlspecialchars($this->title)?></h2>

<form method="post">
    <div>Title:</div>
    <input type="text" value="<?=htmlspecialchars($this->post["title"])?>" name="post_title" />
    <div>Content:</div>
    <textarea rows="10" name="post_content"><?=htmlspecialchars($this->post["content"])?></textarea>
    <div>Date:</div>
    <input type="text" value="<?=htmlspecialchars($this->post["date"])?>" name="post_date" />
    <div>Author ID:</div>
    <input type="text" value="<?=htmlspecialchars($this->post["user_id"])?>" name="user_id" />
    <div>
        <input type="submit" value="Edit" />
        <a href="<?=APP_ROOT?>/posts">[Cancel]</a>
    </div>
</form>