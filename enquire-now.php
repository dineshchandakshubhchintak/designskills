<!-- Appilication Form Start-->
                                        <form class="mt-20" method="post" action="includes/mail.php" id="contactForm" >
                                          <div class="row">
                                            <div class="col-sm-12">
                                              <div class="form-group mb-20">
                                                <input placeholder="ENTER NAME" type="text" name="name" class="form-control" required oninvalid="this.setCustomValidity('Please Enter Name')"
  oninput="this.setCustomValidity('')" > </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="form-group mb-20">
                                                <input placeholder="EMAIL" type="email" name="email" class="form-control" required oninvalid="this.setCustomValidity('Please provide an Email ')"
  oninput="this.setCustomValidity('')"> </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="form-group mb-20">
                                                <input placeholder="PHONE" type="text" name="phone" class="form-control" pattern="[0-9]{1}[0-9]{9}" maxlength="10" required oninvalid="this.setCustomValidity('Please provide Phone Number')"
  oninput="this.setCustomValidity('')"> </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="form-group mb-20">
                                                <div class="styled-select">
                                                  <select id="reservation_course" name="select" class="form-control font-12" required>
                                                    <option value="select">COURSE</option>
                                                    <option value="DIGITAL FILM PRODUCTION">DIGITAL FILM PRODUCTION</option>
                                                    <option value="COMMUNICATION DESIGN">COMMUNICATION DESIGN</option>
                                                    <option value="ANIMATION FILM DESIGN">ANIMATION FILM DESIGN</option>
                                                    <option value="VISUAL EFFECT FILM DESIGN">VISUAL EFFECT FILM DESIGN</option>
                                                    <option value="GAME, AR, VR, DESIGN">GAME, AR, VR, DESIGN</option>
                                                    <option value="CERTIFICATION IN COMPOSITING">CERTIFICATION IN COMPOSITING</option>
                                                    <option value="CERTIFICATION IN 3D MAYA">CERTIFICATION IN 3D MAYA</option>
                                                    <option value="CERTIFICATION GRAPHIC DESIGN">CERTIFICATION GRAPHIC DESIGN</option>
                                                    <option value="CERTIFICATION IN ART & DESIGN">CERTIFICATION IN ART & DESIGN</option>
                                                    <option value="INDUSTRIAL DESIGN">INDUSTRIAL DESIGN</option>
                                                    <option value="PRINTING & PACKAGING">PRINTING & PACKAGING</option>
                                                    <option value="WEB DESIGN TECHNOLOGY">WEB DESIGN TECHNOLOGY</option>
                                                  </select>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="form-group mb-20">
                                                <input placeholder="YOUR CITY" type="text"name="reservation_city"  class="form-control" required oninvalid="this.setCustomValidity('Please Enter your City')"
  oninput="this.setCustomValidity('')"> </div>
                                            </div>
                                            <div class="col-sm-12">
                                              <div class="form-group">
                                                <textarea placeholder="ENTER MESSAGE" rows="3" class="form-control required" name="msg" aria-required="true"></textarea>
                                              </div>
                                            </div>
                                            <div id='recaptcha' class="g-recaptcha"
                                              data-sitekey="6LcsQ0MlAAAAAEni3S-cJDjELpuavlfiBnq7wk0g"
                                              data-callback="onCompleted"
                                              data-size="invisible"></div>
                                            <div class="col-sm-12">
                                              <div class="form-group mb-0 mt-10">
                                                <!--<button type="submit" class="btn btn-colored btn-default text-black btn-lg btn-block">SUBMIT</button>-->
                                                <button type="submit" class="btn btn-colored btn-default text-black btn-lg btn-block" id="submit" name="submit">SUBMIT</button>
                                              </div>
                                            </div>
                                          </div>
                                        </form>

                                        <script src="https://www.google.com/recaptcha/api.js" async>
                                        </script>
                                          <script>
                                              var form = document.getElementById("contactForm")
                                              form.addEventListener("submit", function(event) {
                                                console.log('form submitted.');
                                                if (!grecaptcha.getResponse()) {
                                                    console.log('captcha not yet completed.');
                                                    event.preventDefault(); //prevent form submit
                                                    grecaptcha.execute();
                                                   
                                                } else {
                                                    console.log('form really submitted.');
                                                }
                                            });
                                            onCompleted = function() {
                                                console.log('captcha completed.');
                                                document.getElementById("submit").click();
                                                // document.getElementById("message-success").style.display = "flex"
                                            }
                                        </script>
                                        <!-- Application Form End-->