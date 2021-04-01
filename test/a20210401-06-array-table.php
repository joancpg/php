<?php include __DIR__. '/parts/config.php'; ?>
<?php

$title = '我的主頁';

$persons = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => 'David',
        'age' => 25,
        'gender' => 'male',
    ],
    [
        'name' => 'Flora',
        'age' => 22,
        'gender' => 'female',
    ],
    [
        'name' => 'Mary',
        'age' => 28,
        'gender' => 'female',
    ],
    [
        'name' => 'amy',
        'age' => 18,
        'gender' => 'gay',
    ]
];


?>
<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/nabar.php'; ?>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($persons as $p): ?>
            <tr>
                <td><?= $p['name'] ?></td>
                <td><?= $p['gender'] ?></td>
                <td><?= $p['age'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include __DIR__. '/parts/script.php'; ?>
<?php include __DIR__. '/parts/html-foot.php'; ?>


<!--調整資料庫~即可更新表格資料內容~-->



