@template('auth.layout')

@section('content')
    @php
        extract($request->all());
    @endphp
    <div class="card o-hnameden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->

            <div class="row">

                <div class="col-lg-12">

                    <div class="p-5">
                        <div class="progress-container row justify-center align-center items-center col-md-12 px-5 py-4">
                            <?php 
            if($step == 1)
            {
              ?>

                            <div class="oval passed">step 1</div>
                            <div class="bar "></div>
                            <div class="oval">Step 2</div>
                            <div class="bar"></div>
                            <div class="oval">Step 3</div>
                            {{-- wa gbemi soke, titilai
ma ju mi sile, lai lai --}}
                            <?php
            }
            if($step == 2)
            {
              ?>

                            <div class="oval passed">step 1</div>
                            <div class="bar passed"></div>
                            <div class="oval passed">Step 2</div>
                            <div class="bar"></div>
                            <div class="oval">Step 3</div>

                            <?php
            }
            if($step == 3)
            {
              ?>

                            <div class="oval passed">step 1</div>
                            <div class="bar passed"></div>
                            <div class="oval passed">Step 2</div>
                            <div class="bar passed"></div>
                            <div class="oval passed">Step 3</div>

                            <?php
            }
            ?>
                        </div>
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><b><b>TENANT REGISTRATION</b></b></h1>
                        </div>
                        <form class="user" action="/register/{{ $step }}/" method = "POST">
                            <?php 

            if($step == 1){ ?>
                            <p><span style = "color:#4e73df;"><b><b>PERSONAL DETAILS</b></b></span></p>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="FirstName"
                                        value="<?php echo @$fname; ?>" placeholder="First Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="LastName"
                                        value="<?php echo @$lname; ?>" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    Are you a student?&nbsp&nbsp&nbsp
                                    <input type="radio" name="radio" value="Enable" required>Yes
                                </div>
                                <div class="col-sm-6">
                                    <input type="radio" name="radio" value="Disable">No
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="programme"
                                        value="<?php echo @$prog; ?>"placeholder="Programme e.g; BEDA" disabled>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="regno"
                                        value="<?php echo @$reg; ?>" placeholder="Registration Number" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="occupation"
                                        value="<?php echo @$occ; ?>" placeholder="Occupation" disabled>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="pno1"
                                        value="<?php echo @$pno1; ?>" placeholder="Phone Number 1 e.g; 255717******"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="pno2"
                                        value="<?php echo @$pno2; ?>" placeholder="Phone Number 2 e.g; 255717******"
                                        required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control form-control-user" name="email"
                                        value="<?php echo @$email; ?>" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="postal"
                                        value="<?php echo @$postal; ?>" placeholder="Postal Address" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="city"
                                        value="<?php echo @$city; ?>" placeholder="City" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="region"
                                        value="<?php echo @$region; ?>" placeholder="Region" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="uname"
                                        value="<?php echo @$uname; ?>" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" name="password"
                                        placeholder="Password" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" name="repeatPassword"
                                        placeholder="Repeat Password" required>
                                </div>
                            </div>
                            <?php }

              if($step == 2){ ?>
                            <p><span style = "color:#4e73df;"><b><b>CONTRACT (rental agreement)</b></b></span></p>
                            <div class="form-group row" align = "center">
                                {{-- <center>Please click the price of the house you want to rent:<br /></center> --}}
                                {{-- <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="radio" name="price" value = "50000" required>NGN.
                                    50,000&nbsp&nbsp&nbsp
                                    <input type="radio" name="price" value = "60000">NGN. 60,000<br />&nbsp
                                    <input type="radio" name="price" value = "70000">NGN. 70,000&nbsp&nbsp&nbsp
                                    <input type="radio" name="price" value = "80000">NGN. 80,000&nbsp&nbsp
                                </div> --}}
                            </div>
                            <div class="form-group row" align = "center">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="input" class="form-control form-control-user" readonly id="price"
                                        value = "0">
                                    <input type="hidden" name="price" id="fprice" value="" required>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Select House:</label><br />
                                <input type="hidden" name="tID" value="{{ $_SESSION['tID'] }}">

                                @php
                                    $houses = Codx\Comic\Model\House::get();
                                @endphp
                                <select class="form-control custom-select " style='width:300px;' name="house"
                                    id="house">
                                    <option value="">Select house</option>
                                    @foreach ($houses as $house)
                                        <option id="v_{{ $house->house_id }}" value="{{ $house->house_id }}"
                                            price="{{ $house->rent_per_month }}">{{ $house->house_name }}</option>
                                    @endforeach
                                </select>
                                {{-- <p id = "values">
                                </p> --}}
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    Contract Duration:<br />
                                    <select class="custom-select" name="duration" id="durations" style="width:300px;">
                                        {{-- <option value = "3">3 months</option>
                                        <option value = "6">6 months</option> --}}
                                        <option selected value = "12">12 months</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    Payment Terms:<br />
                                    <select class="custom-select" name="term" id="terms" style="width:300px;">
                                        <option value = "1" id="1" selected>1 term</option>
                                        {{-- <option value = "2" id="2">2 terms</option>
                                        <option value = "4" id="4">4 terms</option> --}}
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <p>Check "I agree" if
                                you agree with the TERMS AND CONDITIONS.</p><br />
                            {{-- <div class="form-group">
                                <iframe src="contract.pdf" width="1000px" height="400px" style="border: none;"></iframe>
                            </div> --}}

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="checkbox" name="contract" value = "Occupied" required>I
                                    agree&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                </div>
                            </div>
                            <?php }
              if($step == 3){ ?>
                            <p><span style = "color:#4e73df;"><b><b>CONTACTS' INFORMATION</b></b></span></p>
                            <p>Please provide below, contacts of two(2) people to cantact in case of emmergency</p>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="hidden" name="tID" value="<?= $_SESSION['tID'] ?>">
                                    <input type="text" class="form-control form-control-user" name="fname1"
                                        value="<?php echo @$cfname1; ?>" placeholder="First Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="fname2"
                                        value="<?php echo @$cfname2; ?>"placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="lname1"
                                        value="<?php echo @$clname1; ?>"placeholder="Last Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="lname2"
                                        value="<?php echo @$clname2; ?>" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="occu1"
                                        value="<?php echo @$c_occu1; ?>"placeholder="Occupation" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="occu2"
                                        value="<?php echo @$c_occu1; ?>" placeholder="Occupation" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="cpno1"
                                        value="<?php echo @$cpno1; ?>" placeholder="Phone Number 1 e.g; 255717******"
                                        required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="cpno2"
                                        value="<?php echo @$cpno2; ?>" placeholder="Phone Number 1 e.g; 255717******"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="cpno3"
                                        value="<?php echo @$cpno3; ?>" placeholder="Phone Number 2 e.g; 255717******">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="cpno4"
                                        value="<?php echo @$cpno4; ?>" placeholder="Phone Number 2 e.g; 255717******">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="nature1"
                                        value="<?php echo @$nature1; ?>" placeholder="Nature of the Relationship" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="nature2"
                                        value="<?php echo @$nature2; ?>" placeholder="Nature of the Relationship" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="city1"
                                        value="<?php echo @$city1; ?>" placeholder="City" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="city2"
                                        value="<?php echo @$city2; ?>" placeholder="City" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="region1"
                                        value="<?php echo @$region1; ?>" placeholder="Region" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="region2"
                                        value="<?php echo @$region2; ?>" placeholder="Region" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="email" class="form-control form-control-user" name="email1"
                                        value="<?php echo @$cemail1; ?>" placeholder="Email Address">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control form-control-user" name="email2"
                                        value="<?php echo @$cemail2; ?>" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="p_address1"
                                        value="<?php echo @$p_address1; ?>" placeholder="Postal Address" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="p_address2"
                                        value="<?php echo @$p_address2; ?>" placeholder="Postal Address" required>
                                </div>
                            </div>

                            <center>

                                <input class="btn btn-primary btn-user btn-sm mb-5" type="submit" name="submit"
                                    value="I'm Done">
                            </center>
                            <?php }else{
                ?>
                            <center>
                                <input class="btn btn-primary btn-user btn-sm mb-5" type="submit" name="submit"
                                    value="Proceed">
                            </center>
                            <?php
              } ?>


                        </form>

                        <div class="text-center">
                            <a class="small" href="forgot-password.php">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.php">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('input[name = "radio"]').on('change', function() {
            $('input[name = "programme"]').attr('disabled', this.value != "Enable");
            $('input[name = "regno"]').attr('disabled', this.value != "Enable");
            $('input[name = "occupation"]').attr('disabled', this.value != "Disable");
            $('input[name = "programme"]').attr('required', this.value == "Enable");
            $('input[name = "regno"]').attr('required', this.value == "Enable");
            $('input[name = "occupation"]').attr('required', this.value == "Disable");
        });
    </script>
    <script type="text/javascript">
        $("#durations").on('change', function() {
            $('#terms option[value = 2]').attr('disabled', this.value == 3);
            $('#terms option[value = 4]').attr('disabled', this.value == 3);
            $('#terms option[value = 4]').attr('disabled', this.value == 6);

        });
    </script>
    <script>
        $('#house').on('change', function(e) {
            let option = e.target.children['v_' + e.target.value]
            let pricen = option.attributes['price'].value
            price = Intl.NumberFormat().format(pricen * 12)
            $('#price')[0].value = price
            $('#fprice')[0].setAttribute('value',pricen*12)
        })
    </script>
@endsection
