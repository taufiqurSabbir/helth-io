<?php
session_start();
include "dashboard_header.php";


?>

<body>
<?php

include "doctor_menubar.php";

?> 

    <!-- BODY SECTION -->
    <div id="body_section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="request_blood">
                        <div class="card">
                            <div class="card-header">
                                Request Blood
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: left;">POST AN REQUEST FOR BLOOD IN OUR
                                    COMMUNITY</h5>
                                <a href="Student_Blood_post.html" class="btn btn-success">POST AN REQUEST</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="avail_nd_payment">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title" style="text-align: left;">TIME SCHEDULE FORM</h5>

                                    </div>
                                    <div class="col">
                                        <!-- <a href="" class="btn btn-success" 
                                            style=" display: block;float: right;">SET AVAILABLE TIME</a> -->
                                            <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            SET AVAILABLE TIME
                                        </button>
                                        </div>
                                </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Set Available Time Slot</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form>
                                                <div class="modal-body">



                                                    
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            8:00 - 10:00 AM
                                                        </label>
                                                        </div>
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            10:00 - 12:00 PM
                                                        </label>
                                                        </div>
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                                        <label class="form-check-label" for="exampleRadios3">
                                                            12:00 - 02:00 PM
                                                        </label>
                                                        </div>
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                                        <label class="form-check-label" for="exampleRadios4">
                                                            02:00 - 04:00 PM
                                                        </label>
                                                        </div>
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                                                        <label class="form-check-label" for="exampleRadios5">
                                                            04:00 - 06:00 PM
                                                        </label>
                                                        </div>
                                                
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success">Save</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-6">
                <section id="appointment_list">
                    <div class="schedule my-5" >
                        <div class="heading">
                            <h5 >Appointment Schedule</h5>
                        </div>
                        <table class="table table-success table-striped" style="border:1px #000 solid ;">
                            <thead>
                            <tr>
                                
                                <th scope="col">Doctor name</th>
                                <th scope="col">TIME SLOT</th>
                                <th scope="col">DATE</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">FARIAH HASIN</td>
                                <td>12:30-1:30</td>
                                <td>DD/MM?YY</td>
                            </tr>
                            <tr>
                                <td scope="row">SAIMA HASIN</td>
                                <td>12:30-1:30</td>
                                <td>DD/MM?YY</td>
                            </tr>
                            <tr>
                                <td scope="row">SUMAN HASIN</td>
                                <td>12:30-1:30</td>
                                <td>DD/MM?YY</td>
                            </tr>
                            
                            </tbody>
                        </table>
        
                    </div>
                </section>
            </div>
            <div class="col-6">
                <section>
                <div class="appointment_history m-5" >
                    <div class="schedule">
                        <div class="heading">
                            <h5 >Appointment History</h5>
                        </div>
                        <table class="table table-success table-striped" style="border:1px #000 solid ;">
                            <thead>
                              <tr>
                                
                                <th scope="col">Doctor Name</th>
                                <th scope="col">DATE</th>
                                <th scope="col">ATTENDED</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                
                                <td scope="row">SAIMA HASIN</td>
                                <td>DD/MM/YY</td>
                                <td>YES/NO</td>
                              </tr>
                              <tr>
                                
                                <td scope="row">SAIMA HASIN</td>
                                <td>DD/MM/YY</td>
                                <td>YES/NO</td>
                              </tr>
                              <tr>
                                
                                <td scope="row">SAIMA HASIN</td>
                                <td>DD/MM/YY</td>
                                <td>YES/NO</td>
                              </tr>
                              <tr>
                                
                                <td scope="row">SAIMA HASIN</td>
                                <td>DD/MM/YY</td>
                                <td>YES/NO</td>
                              </tr>
                            </tbody>
                          </table>
        
                    </div>
                </div>
                </section>
            </div>
        </div>
           
            <div class="row">
                <div class="receipt">
                    <div class="heading">
                        <h5 >Pharmacy Receipt</h5>
                    </div>
                    <table class="table table-success table-striped" style="border:1px #000 solid ;">
                        <thead>
                          <tr>
                            
                            <th scope="col">DATE</th>
                            <th scope="col">RECEIPT NUMBER</th>
                            <th scope="col">TOTAL AMOUNT</th>
                            <th scope="col">FILE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>DD/MM/YY</td>
                            <td>########################</td>
                            <td>$$$$$$$$$$$$$$$$$$</td>
                            <td><button type="button" class="btn btn-success"> Download Receipt</button></td>
                          </tr>
                          <tr>
                            <td>DD/MM/YY</td>
                            <td>########################</td>
                            <td>$$$$$$$$$$$$$$$$$$</td>
                            <td><button type="button" class="btn btn-success"> Download Receipt</button></td>
                          </tr>
                          <tr>
                            <td>DD/MM/YY</td>
                            <td>########################</td>
                            <td>$$$$$$$$$$$$$$$$$$</td>
                            <td><button type="button" class="btn btn-success"> Download Receipt</button></td>
                          </tr>
                          <tr>
                            <td>DD/MM/YY</td>
                            <td>########################</td>
                            <td>$$$$$$$$$$$$$$$$$$</td>
                            <td><button type="button" class="btn btn-success"> Download Receipt</button></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

    <!-- BOOTSRAP JS -->
    <script src="js/boostrap/bootstrap.bundle.js"></script>
</body>

</html>