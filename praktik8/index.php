<?php include('pagination.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h3 class="text-center">Data User dengan Pagination</h3>
    <hr>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>UserID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($nquery)) { ?>
                <tr>
                    <td><?php echo $row['userid']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div id="pagination_controls">
        <?php echo $paginationCtrls; ?>
    </div>
</div>

</body>
</html>
