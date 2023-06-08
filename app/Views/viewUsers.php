<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="p-5">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/user">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">View</li>
        </ol>
        </nav>
    </div>

<div class=" pt-5 d-flex flex-column  align-items-center ">

    <?php if ($isNewSaved) {
       echo '<div class="alert alert-success" role="alert">';
       echo 'A New User Added!';
       echo '</div>';
    }  ?> 

    <div class="w-50" >
        <table class="table">
         <thead>
             <tr>
                 <th scope="col">ID</th>
                 <th scope="col">First</th>
                 <th scope="col">Last</th>
                 <th scope="col">Address</th>
                 <th scope="col">City</th>
                 <th scope="col">#</th>
                 <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($UserData as $data){
                        echo '<tr>';
                        echo '<th scope="row">'.$data->PersonID.'</th>';
                        echo '<td scope="row">'.$data->FirstName.'</td>';
                        echo '<td scope="row">'.$data->LastName.'</td>';
                        echo '<td scope="row">'.$data->Address.'</td>';
                        echo '<td scope="row">'.$data->City.'</td>';
                        echo '<td scope="row"><a href="' . site_url('admin/user/view/' . $data->PersonID) . '" class="btn btn-success">View</a></td>';
                        echo '<td scope="row"><a href="' . site_url('admin/user/delete/' . $data->PersonID) . '" class="btn btn-primary">Delete</a></td>';
                        echo '<tr>';
                    }
                    ?>
            </tbody>
        </table>
    </div>  
</div>