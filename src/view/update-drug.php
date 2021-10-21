<?php
include('header/header.php')
?>
<?php
include('/xampp/htdocs/KTGK/src/config/config.php')
?>
<main>
    <div class="main-content">
        <div class="d-flex justify-content-center d-flex align-items-center" style="height: 200px;">
            <p class="h1">Update Drug</p>
        </div>
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM drugs WHERE id=$id";
        $res = mysqli_query($conn, $sql);
        if ($res == true) {
            $count = mysqli_num_rows($res);
            if ($count == 1) {

                $row = mysqli_fetch_assoc($res);
                $name = $_POST['name'];
                $Type = $_POST['type'];
                $barcode = $_POST['barcode'];
                $dose = $_POST['dose'];
                $code = $_POST['code'];
                $cost_price = $_POST['cost_price'];
                $selling_price = $_POST['selling_price'];
                $expiry = $_POST['expiry'];
                $company_name = $_POST['company_name'];
                $production_date = $_POST['production_date'];
                $expiration_date = $_POST['expiration_date'];
                $place = $_POST['place'];
                $quantity = $_POST['quantity'];
            } else {
                //Redirect to Manage Admin PAge
                header('location:' . SITEURL . 'list-drugs.php');
            }
        }
        ?>
        <form action="/KTGK/src/process/process-update-drug.php" method="POST">
            <div class="row">
                <div class="col-md"></div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Type</label>
                        <input name="type" type="text" class="form-control" id="exampleInputEmail1">
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Barcode</label>
                        <input name="barcode" type="text" class="form-control" id="exampleInputEmail1">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dose</label>
                        <input name="dose" type="text" class="form-control" id="exampleInputEmail1">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Code</label>
                        <input name="code" type="text" class="form-control" id="exampleInputEmail1">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Cost Price</label>
                        <input name="cost_price" type="text" class="form-control" id="exampleInputEmail1">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Selling Price</label>
                        <input name="selling_price" type="text" class="form-control" id="exampleInputEmail1">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Expiry</label>
                        <input name="expiry" type="date" class="form-control" id="exampleInputEmail1">
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Company Name</label>
                        <input name="company_name" type="text" class="form-control" id="exampleInputEmail1">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Production Date</label>
                        <input name="production_date" type="date" class="form-control" id="exampleInputEmail1">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Expiration Date</label>
                        <input name="expiration_date" type="date" class="form-control" id="exampleInputEmail1">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Place</label>
                        <input name="place" type="text" class="form-control" id="exampleInputEmail1">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Quantity</label>
                        <input name="quantity" type="text" class="form-control" id="exampleInputEmail1">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-md"></div>
            </div>
        </form>
    </div>
</main>
<?php
include('footer/footer.php')
?>