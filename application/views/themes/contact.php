

	<div class="breadcumb-area-contact d-flex align-items-center">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-12">
					<div class="breadcumb-content">
						<h1> Contact Us </h1>
						<ul>
							<li><a href="<?php echo base_url();?>Site/index">Home</a></li>
							<li> Contact Us </li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!--==================================================-->
	<!-- Start Appoinment Section -->
	<!--===================================================-->
	<div class="contact-us pt-90 pb-90">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0">
					<div class="contact_from_box">
						<div class="contact_title pb-4">
							<h3>Get In Touch</h3>
						</div>
						<form action="<?php echo base_url();?>Site/formhandler" method="POST">
							<div class="row">
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text"
											oninput="this.value = this.value.toUpperCase().replace(/[^a-z,A-Z]/g, '').replace(/(\  *?)\  */g, '$1')"
											id="name" name="name" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="email" oninput="this.value = this.value.toUpperCase()" id="email"
											name="email" placeholder="Email Address">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text"
											oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
											maxlength="10" id="phone" name="phone" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="subject" id="subject" placeholder="Subject">
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form_box mb-30">
										<textarea name="message" id="message" cols="30" rows="10"
											placeholder="Your Message"></textarea>
									</div>
									<div class="col-sm-12 mt-3">
										<div class="outer-box">
											<div class="inner-box1 d-flex justify-content-around  align-items-center "
												style="border:0.2px solid black;padding: 8px 10px;border-radius:10px">
												<span class="text-black fw-bolder">Enter Captcha:-</span>
												<div class="captcha-box-in d-flex align-items-center ">
													<div class="in-colo">
														<span id="first"></span>
														<span id="plus">+</span>
														<span id="second"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 my-3">
										<input type="text" id="num" placeholder="Enter Captcha Here"
											class="set-sum p-2 w-100" onkeyup="myFunction()" />
									</div>
									<div class="quote_button">
										<button class="btn" onClick="return validate();" name="submit"
											type="submit">Submit
										</button>
									</div>
								</div>
							</div>
						</form>
						<div id="status"></div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 d-flex align-items-center">
					<div class=" ">
						<div class="cda-single-content cda-single-content22 d-flex">
							<div class="cda-icon">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="cda-content-inner">
								<h4>Address</h4>
								<p>No 36, 6th Cross, 10th Main, 4th Phase, 7th Block, BSK 3rd Stage, Bangalore - 560085
								</p>
							</div>
						</div>
						<div class="cda-single-content cda-single-content22 hr d-flex">
							<div class="cda-icon">
								<i class="fas fa-phone-alt"></i>
							</div>
							<div class="cda-content-inner">
								<h4>Contact Number</h4>
								<a href="tel:+91 9663383550, +91 8861794443, +91 08042123550" class="text-slate"> +91
									9663383550, +91 8861794443, +91 08042123550 </a>
							</div>
						</div>
						<div class="cda-single-content cda-single-content22 hr d-flex">
							<div class="cda-icon">
								<i class="fas fa-envelope"></i>
							</div>
							<div class="cda-content-inner">
								<h4>Our Email</h4>
								<a href="mailto:  benakacapital@gmail.com"
									class="text-slate">benakacapital@gmail.com</a>
							</div>
						</div>
						<div class="cda-single-content hr d-flex">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- Start Contact Location Section -->
	<!--===================================================-->
	<div class="map-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 p-0">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31109.174916539847!2d77.50686173298527!3d12.930403616141652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3e377cba0bcf%3A0xdb3bbb98336b5b5e!2sBengaluru%2C%20Karnataka%20560085!5e0!3m2!1sen!2sin!4v1720772025016!5m2!1sen!2sin"
						width="100%" height="450" style="border:0;filter: invert(90%);" allowfullscreen=""
						loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
				</div>
			</div>
		</div>
	</div>

	<script>

		var firstNu = document.getElementById("first");
		var num1 = (firstNu.innerHTML = Math.floor(Math.random() * 100));
		console.log("number1", num1);
		var secNum = document.getElementById("second");
		var num2 = (secNum.innerHTML = Math.floor(Math.random() * 10));
		console.log("number2", num2);

		function myFunction() {
			var userInput = document.getElementById("num");
			var inputValu = userInput.value;
			return inputValu;
		}

		var storeRandomValue = parseInt(num1) + parseInt(num2);

		function validate() {
			const Name = document.getElementById("name").value;
			const Email = document.getElementById("email").value;
			const Phone = document.getElementById("phone").value;
			const Message = document.getElementById("message").value;
			var namePattern = /^[A-Za-z\s\-]+$/;
			var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
			var dued = myFunction();
			if (!Name) {
				alert("Enter Name");
				return false;
			} else if (!namePattern.test(!Name)) {
				alert("Enter Correct Name");
				return false;
			} else if (!Email) {
				alert("Enter Email Here");
				return false;
			} else if (!emailRegex.test(Email)) {
				alert("Enter Correct Email");
				return false;
			}
			else if (!Phone) {
				alert("Enter Phone Number");
				return false;
			} if (Phone.length < 10) {
				alert("Enter Correct Number");
				return false;
			}
			else if (!Message) {
				alert("Enter Message");
				return false;
			}
			else if (!dued) {
				alert("Please Enter Captcha");
				return false;
			} else if (namePattern.test(dued)) {
				alert("Enter Only Number");
				return false;
			}
			else if (dued != storeRandomValue) {
				alert("Enter Correct Captcha");
				return false;
			}
		}
	</script>


