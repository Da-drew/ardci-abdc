<!-- Modal RFQ-->
<div class="modal fade" id="request-for-quotation" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="inquiry_form1" tabindex="-1">
  <div class="modal-dialog modal-m" id="modal-change">
    <div class="modal-content">
      <!-- overlay -->
    <div class="rfq-overlay" id="loadGifModalDiv" style="display:none" >
      <div id="loadGifModal"> <img src="assets/image/load.gif" alt="" /> </div>
    </div>
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnModalClose"> <img src="assets/image/close.png" alt=""> </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <!-- forms -->
            <form class="rqf needs-validation" id="rfqForm" action="index.php" method="POST" autocomplete="off" novalidate> 
              <div class="row">
                <div class="col-md-12">
                  <h3 class="form-title-rfq">Request for Quotation</h3>
                </div>
                  <label for="Fname" class="rqf-con-label">Contact Information</label>
                  <div class="col-xl-5 inpt-box">
                      <input type="text" class="form-control to-upper" id="fname" name="fname" placeholder="First Name" pattern="[a-zA-Z-'-'\s]{2,}" autofocus required>
                  </div>
                  <div class="col-xl-5 inpt-box">
                      <input type="text" class="form-control to-upper" id="lname" name="lname" placeholder="Last Name" pattern="[a-zA-Z-'-'\s]{2,}" required>
                  </div>
                  <div class="col-xl-2 inpt-box">
                      <input type="text" class="form-control to-upper" id="prefix" name="prefix" placeholder="Prefix (Optional)">
                  </div>
                  <div class="col-xl-6 inpt-box">
                      <input type="text"  class="form-control to-upper" id="comName" name="comName" placeholder="Company Name" required>
                  </div>
                  <div class="col-xl-6 inpt-box">
                      <input type="text"  class="form-control to-upper" id="typeBusiness" name="typeBusiness" placeholder="Type of Business" required>
                  </div>
                  <label for="street" class="rqf-con-label">Address</label>
                  <div class="col-xl-4 inpt-box">
                      <input type="text"  class="form-control to-upper" id="street" name="purok" placeholder="Street/Purok" required>
                  </div>
                  <div class="col-xl-4 inpt-box">
                      <input type="text"  class="form-control to-upper" id="brgy" name="barangay" placeholder="Barangay" required>
                  </div>
                  <div class="col-xl-4 inpt-box">
                      <input type="text"  class="form-control to-upper" id="city" name="city" placeholder="Municipality/City" required>
                  </div>
                  <div class="col-xl-5 inpt-box">
                      <input type="text"  class="form-control to-upper" id="province" name="province" placeholder="Province" required>
                  </div>
                  <div class="col-xl-3 inpt-box">
                      <input type="text"  class="form-control" id="zipCode" name="zipcode" placeholder="Zip Code" pattern="[0-9]{3,}" oninput="numberOnly(this.id);" required>
                  </div>
                  <div class="col-xl-4 inpt-box">
                      <input type="text"  class="form-control to-upper" id="country" name="country" placeholder="Country" value="Philippines" required>
                  </div>
                  <label for="areaCode" class="rqf-con-label">Socials</label>
                  <div class="col-xl-4 inpt-box">
                      <input type="email"  class="form-control" id="eemail" name="email" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                  </div>
                  <div class="col-xl-4 inpt-box">
                      <input type="tel" maxlength="11" class="form-control" id="pNumber" name="phoneNumber" placeholder="Phone Number" oninput="numberOnly(this.id);" required>
                  </div>
                  <div class="col-xl-4 inpt-box">
                      <input type="text"  class="form-control to-upper" id="facebook" name="facebook" placeholder="Facebook" required>
                  </div>
                  <div class="col-12 rqf-div-btn">
                      <button type="submit" name="send" class="btn btn-primary form-rfq-btn" onclick='showGifModal()'>Submit</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->