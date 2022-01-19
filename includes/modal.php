<!-- Modal Inquiry-->
<div class="modal fade" id="inquiry_form1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="inquiry_form1" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <!-- forms -->
          <form class="inquiry-form needs-validation" action="index.php" method="POST" autocomplete="off" novalidate>
            <div class="col-md-12 mb-4">
                <h3 class="form-title-inquiry">Inquiry</h3>
            </div>
            <div class="col-md-12 mb-3">
                <input type="text" class="form-control" name="In_fName" placeholder="First Name" required>
            </div>
            <div class="col-md-12 mb-3">
                <input type="text" class="form-control" name="In_lName" placeholder="Last Name" required>
            </div>
            <div class="col-md-12 mb-3">
                <input type="email" class="form-control" name="In_email"placeholder="Email address" required>
                <div class="invalid-feedback">
                  *Enter a valid email
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <input type="text" class="form-control" name="In_phoneNumber" placeholder="Phone number (Optional)">
            </div>
            <div class="col-md-12 mb-3">
                <textarea class="form-control" name="In_message" rows="3" placeholder="Message" required></textarea>
            </div>
            <div class="form-check mb-4">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">I agree in <a href="#terms-and-condition">terms and condition</a>,
                I affirm that I have read, and understand hereby accept the Terms and Conditions of Ardci Microfinance Inc., (the “Company”) Website Privacy Policy and that I consent to the collection, storage, use, disclosure and processing by the company and any third party it authorizes, including its affiliates and their respective officers, employees, agents, representatives and personnel of such information disclosed.</label>
            </div>
            <div class="col-md-12 modal-next-btn-div">
              <button type="submit" name="In_send" class="btn btn-primary w-100 form-btn-main">Submit</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->


<!-- Modal RFQ-->
<div class="modal fade" id="request-for-quotation" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="inquiry_form1" tabindex="-1">
  <div class="modal-dialog modal-xl modal-fullscreen-lg-down">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <!-- forms -->
            <form class="rqf needs-validation" action="index.php" method="POST" autocomplete="off" novalidate> 
              <div class="row">
                <div class="col-md-12 mb-4">
                  <h3 class="form-title-rfq">Request for Quotation</h3>
                </div>
                  <label for="Fname" class="rqf-con-label">Contact Information</label>
                  <div class="col-md-5 inpt-box">
                      <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
                  </div>
                  <div class="col-md-5 inpt-box">
                      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
                  </div>
                  <div class="col-md-2 inpt-box">
                      <input type="text" class="form-control" id="prefix" name="prefix" placeholder="Prefix">
                  </div>
                  <div class="col-md-12 inpt-box">
                      <input type="text"  class="form-control" id="comName" name="comName" placeholder="Company Name" required>
                  </div>
                  <label for="street" class="rqf-con-label">Address</label>
                  <div class="col-md-4 inpt-box">
                      <input type="text"  class="form-control" id="street" name="purok" placeholder="Street/Purok" required>
                  </div>
                  <div class="col-md-4 inpt-box">
                      <input type="text"  class="form-control" id="brgy" name="barangay" placeholder="Barangay" required>
                  </div>
                  <div class="col-md-4 inpt-box">
                      <input type="text"  class="form-control" id="city" name="city" placeholder="Municipality/City" required>
                  </div>
                  <div class="col-md-5 inpt-box">
                      <input type="text"  class="form-control" id="province" name="province" placeholder="Province" required>
                  </div>
                  <div class="col-md-3 inpt-box">
                      <input type="text"  class="form-control" id="zipCode" name="zipcode" placeholder="Zip Code" required>
                  </div>
                  <div class="col-md-4 inpt-box">
                      <input type="text"  class="form-control" id="country" name="country" placeholder="Country" required>
                  </div>
                  <label for="areaCode" class="rqf-con-label">Socials</label>
                  <div class="col-md-4 inpt-box">
                      <input type="email"  class="form-control" id="areaCode" name="email" placeholder="Email" required>
                  </div>
                  <div class="col-md-4 inpt-box">
                      <input type="text"  class="form-control" id="pNumber" name="phoneNumber" placeholder="Phone Number" required>
                  </div>
                  <div class="col-md-4 inpt-box">
                      <input type="text"  class="form-control" id="facebook" name="facebook" placeholder="Facebook" required>
                  </div>
                  <div class="col-md-12 rqf-div-btn ">
                      <button type="submit" name="send" class="btn btn-primary form-rfq-btn">Submit</button>
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


<!-- Modal For Rent-->
<!-- store 1 -->
<div class="modal fade" id="fr_space1"  tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header fr-head">
        <h5 class="modal-title">Store 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fr-modal-body">
          <img src="assets/image/sr-2.jpg" class="card-img-top" alt="sixth card">
          <h3>More Details To Be Posted</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eos modi, cum saepe quasi ea porro soluta tempore tempora explicabo totam odio quidem assumenda impedit ipsam laudantium odit ratione repellendus quibusdam fugiat adipisci aliquid necessitatibus sed expedita. Accusamus fuga culpa, nostrum nulla voluptatibus atque libero molestias dolores quibusdam provident saepe animi consequuntur quia ut recusandae.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat at consequatur vel, accusamus culpa praesentium rerum libero quisquam quidem ad eum quod, quis autem non. Repellat quod fugit necessitatibus quos.</p>
          <div class="modal-body-btn">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#inquiry_form1">Inquiry</button>
            <button type="button" class="btn btn-secondary btn-close-modal" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- store 2 -->
<div class="modal fade" id="fr_space2"  tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header fr-head">
        <h5 class="modal-title">Store 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fr-modal-body">
          <img src="assets/image/sr-3.jpg" class="card-img-top" alt="sixth card">
          <h3>More Details To Be Posted</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eos modi, cum saepe quasi ea porro soluta tempore tempora explicabo totam odio quidem assumenda impedit ipsam laudantium odit ratione repellendus quibusdam fugiat adipisci aliquid necessitatibus sed expedita. Accusamus fuga culpa, nostrum nulla voluptatibus atque libero molestias dolores quibusdam provident saepe animi consequuntur quia ut recusandae.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat at consequatur vel, accusamus culpa praesentium rerum libero quisquam quidem ad eum quod, quis autem non. Repellat quod fugit necessitatibus quos.</p>
          <div class="modal-body-btn">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#inquiry_form1">Inquiry</button>
            <button type="button" class="btn btn-secondary btn-close-modal" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- store 3 -->
<div class="modal fade" id="fr_space3"  tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header fr-head">
        <h5 class="modal-title">Store 3</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fr-modal-body">
          <img src="assets/image/sr-5.jpg" class="card-img-top" alt="sixth card">
          <h3>More Details To Be Posted</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eos modi, cum saepe quasi ea porro soluta tempore tempora explicabo totam odio quidem assumenda impedit ipsam laudantium odit ratione repellendus quibusdam fugiat adipisci aliquid necessitatibus sed expedita. Accusamus fuga culpa, nostrum nulla voluptatibus atque libero molestias dolores quibusdam provident saepe animi consequuntur quia ut recusandae.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat at consequatur vel, accusamus culpa praesentium rerum libero quisquam quidem ad eum quod, quis autem non. Repellat quod fugit necessitatibus quos.</p>
          <div class="modal-body-btn">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#inquiry_form1">Inquiry</button>
            <button type="button" class="btn btn-secondary btn-close-modal" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- store 4 -->
<div class="modal fade" id="fr_space4"  tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header fr-head">
        <h5 class="modal-title">Store 4</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fr-modal-body">
          <img src="assets/image/sr-4.jpg" class="card-img-top" alt="sixth card">
          <h3>More Details To Be Posted</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eos modi, cum saepe quasi ea porro soluta tempore tempora explicabo totam odio quidem assumenda impedit ipsam laudantium odit ratione repellendus quibusdam fugiat adipisci aliquid necessitatibus sed expedita. Accusamus fuga culpa, nostrum nulla voluptatibus atque libero molestias dolores quibusdam provident saepe animi consequuntur quia ut recusandae.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat at consequatur vel, accusamus culpa praesentium rerum libero quisquam quidem ad eum quod, quis autem non. Repellat quod fugit necessitatibus quos.</p>
          <div class="modal-body-btn">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#inquiry_form1">Inquiry</button>
            <button type="button" class="btn btn-secondary btn-close-modal" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- store 5 -->
<div class="modal fade" id="fr_space5"  tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header fr-head">
        <h5 class="modal-title">Store 5</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fr-modal-body">
          <img src="assets/image/sr-6.jpg" class="card-img-top" alt="sixth card">
          <h3>More Details To Be Posted</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eos modi, cum saepe quasi ea porro soluta tempore tempora explicabo totam odio quidem assumenda impedit ipsam laudantium odit ratione repellendus quibusdam fugiat adipisci aliquid necessitatibus sed expedita. Accusamus fuga culpa, nostrum nulla voluptatibus atque libero molestias dolores quibusdam provident saepe animi consequuntur quia ut recusandae.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat at consequatur vel, accusamus culpa praesentium rerum libero quisquam quidem ad eum quod, quis autem non. Repellat quod fugit necessitatibus quos.</p>
          <div class="modal-body-btn">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#inquiry_form1">Inquiry</button>
            <button type="button" class="btn btn-secondary btn-close-modal" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- store 6 -->
<div class="modal fade" id="fr_space6"  tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header fr-head">
        <h5 class="modal-title">Store 6</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fr-modal-body">
          <img src="assets/image/sr-7.jpg" class="card-img-top" alt="sixth card">
          <h3>More Details To Be Posted</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eos modi, cum saepe quasi ea porro soluta tempore tempora explicabo totam odio quidem assumenda impedit ipsam laudantium odit ratione repellendus quibusdam fugiat adipisci aliquid necessitatibus sed expedita. Accusamus fuga culpa, nostrum nulla voluptatibus atque libero molestias dolores quibusdam provident saepe animi consequuntur quia ut recusandae.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat at consequatur vel, accusamus culpa praesentium rerum libero quisquam quidem ad eum quod, quis autem non. Repellat quod fugit necessitatibus quos.</p>
          <div class="modal-body-btn">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#inquiry_form1">Inquiry</button>
            <button type="button" class="btn btn-secondary btn-close-modal" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->
