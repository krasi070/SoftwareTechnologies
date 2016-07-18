<?php $this->title = $this->post["title"]; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<main id="posts">
    <article>
        <div class="date"><i>Posted on</i>
            <?=(new DateTime($this->post["date"]))->format("d-M_Y")?>
            <i>by</i> <?=htmlspecialchars($this->post["full_name"])?>
        </div>
        <p><?=$this->post["content"]?></p>
    </article>
</main>