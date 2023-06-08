
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="p-5">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/user">User</a></li>
            <li class="breadcrumb-item"><a href="/admin/user/view">View</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $UserData[0]->PersonID ?></li>
        </ol>
        </nav>
    </div>

    <div class="p-5">
        <?php
            echo "<pre>";
            echo print_r($UserData);
            echo "</pre>";
        ?>
    </div>