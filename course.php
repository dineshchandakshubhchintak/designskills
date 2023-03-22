<!-- Appilication Form Start-->
    <form class="mt-20" method="post" action="mail/course-mail.php">
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group mb-20">
            <input placeholder="ENTER NAME" type="text" name="name" required  class="form-control" oninvalid="this.setCustomValidity('Please Enter Name')"
  oninput="this.setCustomValidity('')"> </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group mb-20">
            <input placeholder="EMAIL" type="email" name="email" class="form-control" required oninvalid="this.setCustomValidity('Please provide an Email ')"
  oninput="this.setCustomValidity('')"> </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group mb-20">
            <input placeholder="PHONE" type="text" name="phone" class="form-control" pattern="[0-9]{1}[0-9]{9}" maxlength="10" required="" oninvalid="this.setCustomValidity('Please provide Phone Number')" oninput="this.setCustomValidity('')"> </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group mb-20">
            <input name="course" type="text" placeholder="Course" value="<?php echo $course; ?>" readonly="readonly" class="form-control" aria-invalid="false">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group mb-20">
            <input placeholder="YOUR CITY" type="text"name=" reservation_city"  class="form-control" required oninvalid="this.setCustomValidity('Please Enter your City')"
  oninput="this.setCustomValidity('')"> </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <textarea placeholder="ENTER MESSAGE" rows="3" class="form-control required" name="msg" aria-required="true"></textarea>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group mb-0 mt-10">
            <!--<button type="submit" class="btn btn-colored btn-default text-black btn-lg btn-block">SUBMIT</button>-->
            <button type="submit" class="btn btn-colored btn-default text-black btn-lg btn-block" name="submit">SUBMIT</button>
          </div>
        </div>
      </div>
    </form>
<!-- Application Form Validation Start-->