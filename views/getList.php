<!DOCTYPE html>
<html lang="">

<?php require_once APP_ROOT . '/views/header.php'; ?>

<body>

<section>
    <h1>Lista</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Opis</th>
            <th scope="col">Zawartość</th>
            <th scope="col">Rodzic Id</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($productList as $lp => $product) { ?>
                <?php $product->parent_id = isset($product->parent_id)?$product->parent_id:null; ?>
            <tr>
                <th scope="row"><?php echo $lp ?></th>
                <td><a href="product/<?php echo $product->id; ?>"><?php echo $product->id; ?></a></td>
                <td><?php echo $product->description; ?></td>
                <td><?php echo $product->content; ?></td>
                <td><a href="product/<?php echo $product->parent_id; ?>"><?php echo $product->parent_id; ?></a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>


    <section>

        <!--    <script src="https://code.jquery.com/jquery-3.6.0.min.js" -->
        <!--		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" -->
        <!--		crossorigin="anonymous"></script>-->
        <!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
</body>

</html>