<?php require_once APP_ROOT . '/views/header.php'; ?>
<?php require_once APP_ROOT . '/views/search.php'; ?>


    <div class="d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <h1>Szczegóły zadania:</h1>
            <?php if ($task === null) {
                echo "<h4>Zadanie nie istnieje</h4>";
            } else { ?>
                <?php
                if ($task->completed === false) {
                    $statusClass = 'text-danger';
                    $statusText = 'W trakcie realizacji';
                } else {
                    $statusClass = 'text-success';
                    $statusText = 'Zrealizowano';
                }
                ?>
                <dl class="row d-flex flex-row">
                    <dt class="col-sm-3">Identyfikator</dt>
                    <dd class="col-sm-9"><a href="<?php echo $task->id; ?>"><?php echo $task->id; ?></a></dd>

                    <dt class="col-sm-3">Opis</dt>
                    <dd class="col-sm-9"><?php echo $task->description; ?></dd>

                    <dt class="col-sm-3">Zawartość</dt>
                    <dd class="col-sm-9"><?php echo $task->content; ?></dd>

                    <dt class="col-sm-3">Data utworzenia</dt>
                    <dd class="col-sm-9"><?php echo $task->created; ?></dd>

                    <dt class="col-sm-3">Due Data</dt>
                    <dd class="col-sm-9"><?php echo isset($task->due->date) ? $task->due->date : ''; ?></dd>

                    <dt class="col-sm-3">Status</dt>
                    <dd class="col-sm-9 <?php echo $statusClass; ?>"><?php echo $statusText; ?></dd>


                </dl>
            <?php } ?>
        </div>
    </div>

<?php require_once APP_ROOT . '/views/footer.php'; ?>