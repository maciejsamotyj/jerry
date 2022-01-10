<form id="search" action="<?php echo $routes->get('product')->getPath(); ?>">
    <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="search"><i class="fa fa-search"></i>
                <input type="text" class="form-control" name="search_word" placeholder="Podaj identyfikator zadania">
                <button class="btn btn-primary">Szukaj</button>
            </div>
        </div>
    </div>
</form>

<script>
    $( "#search" ).submit(function(field) {
        let id = $(this).find('input[name=search_word]').val();
        location.href = $(this).attr('action').replace('{id}', id)
        return false;
    });
</script>