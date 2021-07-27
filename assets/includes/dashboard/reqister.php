<div id="layoutAuthentication_content">
    <main>
        <div class="container-xl px-4">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <!-- Basic registration form-->
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header justify-content-center"><h3 class="fw-light my-4">Create Account</h3></div>
                        <div class="card-body">
                            <!-- Registration form-->
                            <form>
                                <!-- Form Row-->
                                <div class="row gx-3">
                                    <div class="col-md-6">
                                        <!-- Form Group (first name)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputFirstName">First Name</label>
                                            <input class="form-control" id="inputFirstName" name="firstname" type="text" placeholder="Enter first name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Form Group (last name)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputLastName">Last Name</label>
                                            <input class="form-control" id="inputLastName" name="lastname" type="text" placeholder="Enter last name" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Group (email address)            -->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control" id="inputEmailAddress" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                </div>
                                <!-- Form Row    -->
                                <div class="row gx-3">
                                    <div class="col-md-6">
                                        <!-- Form Group (password)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Enter password" />
                                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Form Group (confirm password)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                            <input class="form-control" id="inputConfirmPassword" name="confirmpassword" type="password" placeholder="Confirm password" />
                                            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Group (create account submit)-->
                                <a class="btn btn-primary btn-block" href="/login.php">Create Account</a>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small"><a href="/login.php">Have an account? Go to login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>