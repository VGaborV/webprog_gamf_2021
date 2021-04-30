<?php
if (!empty($rows)) {
    foreach($rows as $row) {
        ?>
        <div class="message">
            <div class="head">
                <span class="id">#<?php echo $row['id']?></span>
                <span class="name"><?php echo $row['nev']?></span>
                (<span class="email"><?php echo $row['email']?></span>):
                <span class="subject"><?php echo $row['targy']?></span>
            </div>
            <div class="content">
                <?php echo nl2br($row['message']); ?>
            </div>
        </div>
        <?php
    }
}
?>