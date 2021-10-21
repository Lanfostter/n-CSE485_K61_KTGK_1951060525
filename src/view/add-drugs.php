<?php
include('header/header.php')
?>
<main>
    <form action="/KTGK/src/process/process-add-drugs.php" method="POST">
        <div class="container-fluid clear">
            <div class="d-flex justify-content-center d-flex align-items-center" style="height: 200px;">
                <p class="h1">Add Drug</p>
            </div>
            <div class="row">
                <div class="col-md"></div>
                <div class="col-md">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Type</label>
                    <input name="type" type="text" class="form-control" id="exampleInputEmail1" >
                    <div class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Barcode</label>
                    <input name="barcode" type="text" class="form-control" id="exampleInputEmail1" >
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Dose</label>
                    <input name="dose" type="text" class="form-control" id="exampleInputEmail1" >
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Code</label>
                    <input name="code" type="text" class="form-control" id="exampleInputEmail1" >
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
                    <div  class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Company Name</label>
                    <input name="company_name" type="text" class="form-control" id="exampleInputEmail1" >
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Production Date</label>
                    <input name="production_date" type="date" class="form-control" id="exampleInputEmail1" >
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Expiration Date</label>
                    <input name="expiration_date" type="date" class="form-control" id="exampleInputEmail1" >
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Place</label>
                    <input name="place" type="text" class="form-control" id="exampleInputEmail1" >
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Quantity</label>
                    <input name="quantity" type="text" class="form-control" id="exampleInputEmail1" >
                    <div id="emailHelp" class="form-text"></div>
                </div>
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