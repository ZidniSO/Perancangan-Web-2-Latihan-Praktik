<?php
include("conn.php");

// hitung total data
$query = mysqli_query($conn, "SELECT COUNT(userid) FROM `user`");
$row = mysqli_fetch_row($query);
$rows = $row[0];

// jumlah data per halaman
$page_rows = 10;

// total halaman
$last = ceil($rows / $page_rows);
if ($last < 1) {
    $last = 1;
}

// halaman yang aktif
$pagenum = 1;
if (isset($_GET['pn'])) {
    $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}

if ($pagenum < 1) {
    $pagenum = 1;
} elseif ($pagenum > $last) {
    $pagenum = $last;
}

// LIMIT untuk query
$limit = 'LIMIT ' . (($pagenum - 1) * $page_rows) . ',' . $page_rows;

// query data
$nquery = mysqli_query($conn, "SELECT * FROM `user` $limit");

// tombol pagination
$paginationCtrls = '';

if ($last != 1) {

    // tombol previous
    if ($pagenum > 1) {
        $previous = $pagenum - 1;
        $paginationCtrls .= '<a href="?pn=' . $previous . '" class="btn btn-default">Previous</a> &nbsp; ';
        
        for ($i = $pagenum - 4; $i < $pagenum; $i++) {
            if ($i > 0) {
                $paginationCtrls .= '<a href="?pn=' . $i . '" class="btn btn-default">' . $i . '</a> &nbsp; ';
            }
        }
    }

    // halaman aktif
    $paginationCtrls .= '<button class="btn btn-primary">' . $pagenum . '</button> &nbsp; ';

    // tombol next page
    for ($i = $pagenum + 1; $i <= $last; $i++) {
        $paginationCtrls .= '<a href="?pn=' . $i . '" class="btn btn-default">' . $i . '</a> &nbsp; ';
        if ($i >= $pagenum + 4) break;
    }

    // tombol next
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= '<a href="?pn=' . $next . '" class="btn btn-default">Next</a>';
    }
}
?>
