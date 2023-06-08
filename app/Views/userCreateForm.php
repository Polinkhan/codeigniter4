<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="p-5">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/user">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
        </nav>
    </div>

    <div class="container w-25 pt-5">
    <form method="POST" action="/admin/user/save/<?php echo $dynamic_id ?>">
            <div class="mb-3">
                <label for="" class="form-label">User ID</label>
                <input type="number" class="form-control" id="" name="UserID" value=<?php echo $dynamic_id ?> disabled>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input class="form-control" id="firstname" name="FirstName" required/>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input class="form-control" id="lastname" name="LastName"/>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input class="form-control" id="address" name="Address"/>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">City</label>
                <select class="form-select" aria-label="Default select example" name="City">
                    <option selected disabled>Open this select menu</option>
                    <?php
                        $citys = array("Dhaka","Chattogram","Rajshahi","Khulna","Sylhet");
                        foreach($citys as $city){
                            echo '<option value='.$city.'>'.$city.'</option>';
                        }
                    ?>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add User</button>
        </form>
    </div>