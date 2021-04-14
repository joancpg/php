<?php include __DIR__. '/parts/config.php'; ?>
<?php
$title = '列表';
$pageName = 'ab-list';

$perPage = 5;
$t_sql = "SELECT COUNT(1) FROM address_book";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows/$perPage);

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if($page<1) $page=1;
if($page>$totalPages) $page=$totalPages;



$sql = sprintf("SELECT * FROM address_book ORDER BY sid DESC LIMIT %s, %s", ($page-1)*$perPage, $perPage);

$rows = $pdo->query($sql)->fetchAll();

?>
<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/nabar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item <?= $page<=1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page-1 ?>">
                            <i class="fas fa-arrow-circle-left"><=</i>
                        </a>
                    </li>
                    <?php for($i=1; $i<=$totalPages; $i++): ?>
                        <li class="page-item <?= $i==$page ? 'active' : '' ?>">
                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item <?= $page>=$totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page+1 ?>">
                            <i class="fas fa-arrow-circle-right">=></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"><i class="fas fa-trash-alt">de</i></th>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Birthday</th>
            <th scope="col">Address</th>
            <th scope="col"><i class="fas fa-edit">edit</i></th>

        </tr>
        </thead>
        <tbody>
        <?php foreach($rows as $r): ?>
            <tr>
                <td class="trash">
                    <a href="javascript:delete_it(<?= $r['sid'] ?>)">
                        <i class="fas fa-trash-alt">de</i>
                    </a>
                </td>
                <td><?= $r['sid'] ?></td>
                <td><?= $r['name'] ?></td>
                <td><?= $r['email'] ?></td>
                <td><?= $r['mobile'] ?></td>
                <td><?= $r['birthday'] ?></td>
                <td><?= htmlentities($r['address']) ?>
                    <?php // echo '<br>'. strip_tags($r['address']) ?>
                </td>
                <td>
                    <a href="ab-edit.php?sid=<?= $r['sid'] ?>">
                        <i class="fas fa-edit">edit</i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include __DIR__. '/parts/script.php'; ?>
<script>
    function delete_it(sid){
        if(confirm(`確定要刪除編號為 ${sid} 的資料嗎?`)){
            location.href = 'ab-delete.php?sid=' + sid;
        }
    }
</script>
<?php include __DIR__. '/parts/html-foot.php'; ?>
