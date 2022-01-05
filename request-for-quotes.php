<?php include 'includes/nav-header.php'?>

<section id="rfq" data-aos="fade">
    <div class="container col-md-12 rqf-div">
        <div class="row rqf-form-div">
        <h3 class="rqf-title-page">Request for Quotation</h3>
            <form class="rqf">
                <div class="row">
                    <label for="Fname" class="rqf-con-label">Contact Information</label>
                    <div class="col-md-5 mb-5">
                        <input type="text" class="form-control" id="Fname" placeholder="First Name" required>
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="Lname" placeholder="Last Name" required>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="prefix" placeholder="Prefix">
                    </div>
                    <div class="col-md-12 mb-4">
                        <input type="text"  class="form-control" id="comName" placeholder="Company Name" required>
                    </div>
                    <label for="street" class="rqf-con-label">Address</label>
                    <div class="col-md-4 mb-4">
                        <input type="text"  class="form-control" id="street" placeholder="Street/Purok" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text"  class="form-control" id="brgy" placeholder="Barangay" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text"  class="form-control" id="city" placeholder="City" required>
                    </div>
                    <div class="col-md-5">
                        <input type="text"  class="form-control" id="province" placeholder="Province" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text"  class="form-control" id="zipCode" placeholder="Zip Code" required>
                    </div>
                    <div class="col-md-4 mb-5">
                        <input type="text"  class="form-control" id="country" placeholder="Country" required>
                    </div>
                    <label for="areaCode" class="rqf-con-label">Phone Number</label>
                    <div class="col-md-2 mb-4">
                        <input type="text"  class="form-control" id="areaCode" placeholder="Area Code" required>
                    </div>-
                    <div class="col-md-4">
                        <input type="text"  class="form-control" id="pNumber" placeholder="Phone Number" required>
                    </div>
                    <div class="col-md-5">
                        <input type="email"  class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="col-md-12 rqf-div-btn">
                        <button type="submit" class="btn btn-primary rqf-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>



<section style="height: 100vmin; border-top: 2px solid black;"></section>
<section style="height: 100vmin; border-top: 2px solid red;"></section>
<section style="height: 100vmin; border-top: 2px solid green;"></section>
<section style="height: 100vmin; border-top: 2px solid yellow;"></section>



<?php include 'includes/footer.php' ?>