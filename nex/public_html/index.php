<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="js/libs/bootstrap-modal/bootstrap-modal.css" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Mega Service</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .selectword:hover {
                display: block;
                background: #08c;
                cursor: pointer;

            }

            /* Start by setting display:none to make this hidden.
   Then we position it in relation to the viewport window
   with position:fixed. Width, height, top and left speak
   for themselves. Background we set to 80% white with
   our animation centered, and no-repeating */
            .loading {
                display:    none;
                position:   fixed;
                z-index:    1000;
                top:        0;
                left:       0;
                height:     100%;
                width:      100%;
                background: rgba( 255, 255, 255, .8 ) 
                    url('http://i.stack.imgur.com/FhHRx.gif') 
                    50% 50% 
                    no-repeat;
            }

            /* When the body has the loading class, we turn
               the scrollbar off with overflow:hidden */
            body.loading {
                overflow: hidden;   
            }

            /* Anytime the body has the loading class, our
               modal element will be visible */
            body.loading {
                display: block;
            }


        </style>


    </head>
    <body>



        <div id="loading" style="position: fixed;z-index: 1000;top: 0;left: 0;height: 100%;width: 100%;text-align: center;margin-top: 20%; ">
            <p><img src='img/loading_spinner.gif'/> Please Wait</p>
        </div>





        <div class="container-fluid hidden" id="maindiv">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header" style="background-color: #3c79b4;padding-top: 5px;padding-left: 20px;">
                        <h1>
                            <a href="index.php" style="color: black;">Mega Service</a>




                        </h1>


                    </div>

                    <div class="row">
                        <div class="col-md-1">


                        </div>
                        <div class="col-md-10" id="home" style="background-color: #9ed4f8; align-items: center;">
                            <div id="customerReg" style="float:left; margin-left: 5%;">

                                <img src="img/images.png" width="200" height="200" class="img-circle" alt=""/>
                                <p style="text-align: center;">Customer Registration</p>

                            </div>
                            <!-- <div id="cashinout" style="float:left;margin-left: 5%;">
         
                                 <img src="img/payment.png" width="200" height="200" class="img-circle" alt=""/>
                                 <p style="text-align: center;">Cash IN-OUT</p>
         
                             </div>-->

                            <div id="accounts" style="float:left;margin-left: 5%;">

                                <img src="img/payment.png" width="200" height="200" class="img-circle" alt=""/>
                                <p style="text-align: center;">Accounts</p>

                            </div>
                            <!-- <div id="viewer" style="float:left;margin-left: 5%;">
         
                                 <img src="img/booking-icon.png" width="200" height="200" class="img-circle" alt=""/>
                                 <p style="text-align: center;">View</p>
         
                             </div>-->

                            <div id="viewer1" style="float:left;margin-left: 5%;">

                                <img src="img/booking-icon.png" width="200" height="200" class="img-circle" alt=""/>
                                <p style="text-align: center;">View Category</p>


                            </div>


                            <div id="help" style="float:left;margin-left: 5%;">

                                <img src="img/hall.png" width="200" height="200" class="img-circle" alt=""/>
                                <p style="text-align: center;">Help</p>


                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div id="frmcatdisplay">
                                        <table class="table table-responsive " id="tblviewdisplay">
                                            <tr>
                                                <td>
                                                    <div class="form-group" id="viewbycustomer" >

                                                        <label style="color: #0f0f0f;">View By Customer >>></label>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group" id="viewbydate">
                                                        <label style="color: #0f0f0f;">View By Date >>></label>
                                                    </div>
                                                </td>

                                            </tr>

                                        </table>


                                    </div>


                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div id="frmaccount">
                                        <table class="table table-responsive " id="tblaccountbank">
                                            <tr>
                                                <td>
                                                    <div class="form-group" id="accountbank" >

                                                        <label style="color: #0f0f0f;">Accounts >>></label>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group" id="accountcash">
                                                        <label style="color: #0f0f0f;">Cash >>></label>
                                                    </div>
                                                </td>

                                            </tr>

                                        </table>


                                    </div>


                                </div>


                            </div>

                            <?php
                            include './help.php';
                            include './customer.php';
                            include './cash.php';
                            include './account.php';
                            include './viewbycustomer.php';
                            include './viewbydate.php';
                            ?>

                           


                           
                            <!--//////////////////////////////////////////////////////////////////////////////////view by date///////////////////////////////////
        
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div id="frmviewbydate">
        
                                                                    <div class="form-group">
                                                                        Customer Name :
        
                                                                    </div>
        
        
                                                                    <div class="form-group">
                                                                        <input type="text" id="txtViewNamedate" class="form-control"  />
                                                                        <div id="displayCustomerdate" >
        
        
        
                                                                        </div>
        
                                                                    </div><br>
        
        
        
        
        
        
        
        
                                                                    <div class="form-group">
        
        
                                                                    </div>
        
                            <!--   <div class="form-group">

                                   <button type="button" id="btnView" class="form-control" >View</button>
                               </div>

                        </div>

                    </div>

                    <div class="col-md-6">
                        <table class="table table-striped" id="tblviewbydate" >
                            <tr>
                                <th>
                                    ID

                                </th>

                                <th>
                                    Date

                                </th>
                                <th>
                                    Payment Type

                                </th>
                                <th>
                                    Amount

                                </th>
                                <th>
                                    Description

                                </th>

                            </tr>


                        </table>

                    </div>

                    <div class="col-md-3" id="tbltotalbydate">
                        <table>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        Total Credit:
                                    </div>

                                </td>

                                <td>
                                    <div class="form-group">
                                        <input type="text" id="txttotalcreditbydate" class="form-control" required />
                                    </div>

                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <div class="form-group">
                                        Total Debit:
                                    </div>

                                </td>

                                <td>
                                    <div class="form-group">
                                        <input type="text" id="txttotaldebitbydate" class="form-control" required />
                                    </div>

                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <div class="form-group">
                                        Balance:
                                    </div>

                                </td>

                                <td>
                                    <div class="form-group">
                                        <input type="text" id="txtbalancebydate" class="form-control" required />
                                    </div>

                                </td>

                            </tr>

                        </table>


                    </div>


                </div>-->


                            <!--////////////////////////////////////////////////////////////////////////////////model-->
                            <div id="msg">
                                <div class="modal fade" id="modal-container-592882" role="dialog" aria-labelledby="largeModal"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    ×
                                                </button>
                                                <h4 class="modal-title" id="msgTitle">
                                                    Modal title
                                                </h4>
                                            </div>
                                            <div class="modal-body" id="msgBody">
                                                ...
                                            </div>

                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-default" data-dismiss="modal"
                                                        id="msgbtnClose">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary" id="msgbtnSave">
                                                    Yes
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!--////////////////////////////////////////////////////////////formhelp start////////////////////////////////////////////////////////////-->
                         

                            <!--     ////////////////////////////////////////////////////////////////////////////end formhelp//////////////-->

                         

                        </div>
                        <div class="col-md-1">


                        </div>





                    </div>


                </div>


            </div>
            <div class="row">
                <div class="container text-center">
                    <h3></h3>
                    <p><em></em></p>
                    <p></p>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><strong></strong></p><br>
                            <img src="img/back1.jpg" alt="Random Name">
                        </div>
                        <div class="col-sm-4">
                            <p><strong></strong></p><br>
                            <img src="img/back2.jpg" alt="Random Name">
                        </div>
                        <div class="col-sm-4">
                            <p><strong></strong></p><br>
                            <img src="img/back3.jpg" alt="Random Name">
                        </div>
                    </div>
                </div>
            </div>

            <br>






        </div>





        <script src="js/boostrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/boostrap/jquery.min.js" type="text/javascript"></script>
        <script src="js/boostrap/scripts.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">



        <script>


            $(document).ready(function () {
                $("#frmCustomerReg").hide();
                $("#tblCustomer").hide();
                $("#frmcashinout").hide();
                $("#tblcashinout").hide();
                $("#frmview").hide();
                $("#tblview").hide();
                $("#tbltotal").hide();
                $("#txtViewName").hide();
                $("#viewbycustomer").hide();
                $("#viewbydate").hide();
                $("#tblviewdisplay").hide();
                $("#frmhelp").hide();
                $("#frmviewbydate").hide();
                $("#tblviewbydate").hide();
                $("#tbltotalviewbydate").hide();
                $("#frmaccount").hide();
                $("#frmbank").hide();
                $("#tblbank").hide();
                // $("#maindiv").show();
                $("#maindiv").removeClass('hidden');
                $('#loading').hide();
/////////////////////////////////////////////////////////////////////////////////




////////////////////////////////////////////////////////////////////////////

                $("#btnAdd").click(function () {


                    if (customer_id == 0) {
                        var contact = $("#txtContactInfo").val();
                        // alert(checkalreadyexistname(contact));

                        $.ajax({
                            type: 'POST',
                            url: "php/setcustomer.php",
                            data: {
                                typeid: typeid,
                                name: $("#txtname").val(),
                                type: typename,
                                contactinfo: $("#txtContactInfo").val()
                            },
                            success: function (data) {
                                // alert(data);
                                getcustomer();
                                clear();
                            }


                        });


                    } else {
                        //  alert("on update "+customer_id);
                        $.ajax({
                            type: 'POST',
                            url: "php/updatecustomer.php",
                            data: {
                                id: customer_id,
                                typeid: typeid,
                                name: $("#txtname").val(),
                                type: typename,
                                contactinfo: $("#txtContactInfo").val()
                            },
                            success: function (data) {
                                alert("Data Updated!");
                                getcustomer();
                                clear();


                            }
                        });


                    }

                    customer_id = 0;
                });

                $("#btnCashinoutAdd").click(function () {
                    //alert("onclick  cus id "+cashcustomerid);

                    if (cashinout_idd == 0) {
                        //alert("working");
                        $.ajax({
                            type: 'POST',
                            url: "php/setcashinout.php",
                            data: {
                                customerid: cashcustomerid,
                                cashinouttype: $("#cashinoutPaytype").val(),
                                amount: $("#txtCashinoutAmount").val(),
                                description: $("#txtCashinoutDescription").val(),
                                openingbalance: $("#txtcashOpeningBalance").val()
                            },
                            success: function (data) {
                                alert("saved!");
                                getcashinout();
                                clear();

                            }


                        });


                    } else {
                        //   alert("cash id"+cashinout_idd+"   cus id "+cashcustomerid);
                        // alert("cash id"+cashinout_idd);
                        $.ajax({
                            type: 'POST',
                            url: "php/updatecashinout.php",
                            data: {
                                cashinout_idd: cashinout_idd,
                                cusid: cashcustomerid,
                                type: $("#cashinoutPaytype").val(),
                                amount: $("#txtCashinoutAmount").val(),
                                description: $("#txtCashinoutDescription").val(),
                                openingbalance: $("#txtcashOpeningBalance").val()
                            },
                            success: function (data) {
                                alert("Data Updated!");
                                getcashinout();
                                clear();
                            }
                        });


                    }





                });

            });




            /////////////////////////////////////////////start add bank details/////////////////////////////////////
            var account_id = 0;
            $("#btnBankAdd").click(function () {
                //alert("onclick  cus id "+cashcustomerid);
                if (account_id === 0) {
                    //alert("working");
                    $.ajax({
                        type: 'POST',
                        url: "php/setAccountDetails.php",
                        data: {
                            //customerid: cashcustomerid,
                            account_name: $("#txtAccountname").val(),
                            account_type: $("#cmbBankPaytype").val(),
                            opening_balance: $("#txtBankOpeningBalance").val(),
                            amount: $("#txtBankAmount").val(),
                            description: $("#txtBankDescription").val()

                        },
                        success: function (data) {
                            alert("saved!");
                            getBankDetails();
                            clear();

                        }


                    });


                } else {
                    //   alert("cash id"+cashinout_idd+"   cus id "+cashcustomerid);
                    // alert("cash id"+cashinout_idd);
                    $.ajax({
                        type: 'POST',
                        url: "php/updateaccounts.php",
                        data: {
                            account_id: account_id,
                            account_name: $("#txtAccountname").val(),
                            account_type: $("#cmbBankPaytype").val(),
                            opening_balance: $("#txtBankOpeningBalance").val(),
                            amount: $("#txtBankAmount").val(),
                            description: $("#txtBankDescription").val()
                        },
                        success: function (data) {
                            alert("Data Updated!");
                            getBankDetails();
                            clear();
                        }
                    });


                }


            });



            ////////////////////////////////////////////end bank details/////////////////////////////////////



            $("#btnback").click(function () {
                $(this).slideUp(1000);

                $("#customerReg").slideDown();
                $("#cashinout").slideDown();
                $("#viewer").slideDown();
                $("#tblcashinout").slideUp();
                $("#frmcashinout").slideUp();


            });


            var customer_id = 0;
            function setid(id, type_id) {
                // alert(id);
                $.ajax({
                    type: 'POST',
                    url: "php/setcustomerupdate.php",
                    dataType: 'xml',
                    data: {id: id},
                    success: function (xml) {
                        $(xml).find('customer').each(function () {
                            $("#txtname").val($(this).find('name').text());
                            $("#type").val($(this).find('type').text());
                            $("#txtContactInfo").val($(this).find('contactinfo').text());


                        });
                    }

                });

                customer_id = id;
                typeid = type_id;
            }


            function del(id) {

                var r = confirm("Are you sure want to delete?");

                if (r == true) {
                    $.ajax({
                        type: 'POST',
                        url: "php/deletecustomer.php",
                        data: {id: id},
                        success: function (data) {
                            alert("Delete Successfully!");
                            getcustomer();
                        }

                    });


                }


            }

            var cashinout_idd = 0;
            function setcashid(id, cusid) {
                // alert(id);
                $.ajax({
                    type: 'POST',
                    url: "php/setcashinoutupdate.php",
                    dataType: 'xml',
                    data: {id: id},
                    success: function (xml) {


                        $(xml).find('cashinout').each(function () {

                            $("#cashinoutCustomername").val($(this).find('name').text());
                            $("#cashinoutPaytype").val($(this).find('type').text());
                            $("#txtCashinoutAmount").val($(this).find('amount').text());
                            $("#txtCashinoutDescription").val($(this).find('description').text());
                            $("#txtcashOpeningBalance").val($(this).find('openingbalance').text());



                        });

                    }


                });

                cashinout_idd = id;
                cashcustomerid = cusid;

            }


            function setBankId(id) {
                $.ajax({
                    type: 'POST',
                    url: "php/setbankupdate.php",
                    dataType: 'xml',
                    data: {id: id},
                    success: function (xml) {
                        $(xml).find('bank').each(function () {

                            $("#txtAccountname").val($(this).find('account_name').text());
                            $("#cmbBankPaytype").val($(this).find('account_type').text());
                            $("#txtBankOpeningBalance").val($(this).find('opening_balance').text());
                            $("#txtBankAmount").val($(this).find('amount').text());
                            $("#txtBankDescription").val($(this).find('description').text());



                        });

                    }

                });

                account_id = id;

            }

            function delcashid(id) {

                var r = confirm("Are you sure want to delete?");
                if (r == true) {
                    $.ajax({
                        type: 'POST',
                        url: "php/deletecashinout.php",
                        data: {id: id},
                        success: function (data) {
                            alert("Delete Successfully!");
                            getcashinout();
                        }

                    });


                }


            }

            function getcustomer() {
                $.ajax({
                    type: 'POST',
                    url: "php/getcustomer.php",
                    data: {},
                    success: function (data) {
                        $("#tblCustomer").html(data);
                    }


                });


            }

            function clear() {

                $("#txtname").val('');
                $("#type").prop('selectedIndex', 0);
                $("#txtContactInfo").val('');

                $("#txtCashinoutAmount").val('');
                $("#txtCashinoutDescription").val('');
                $("#txtcashOpeningBalance").val('');

                $("#cashinoutCustomername").prop('selectedIndex', 0);
                $("#cashinoutPaytype").prop('selectedIndex', 0);

                $("#txtAccountname").val('');
                $("#cmbBankPaytype").prop('selectedIndex', 0);
                $("#txtBankOpeningBalance").val('');
                $("#txtBankAmount").val('');
                $("#txtBankDescription").val('');



            }

            function getcashinout() {
                $.ajax({
                    type: 'POST',
                    url: "php/getcushinout.php",
                    data: {},
                    success: function (data) {
                        $("#tblcashinout").html(data);
                    }

                });


            }

            function getBankDetails() {
                $.ajax({
                    type: 'POST',
                    url: "php/getBankDetails.php",
                    data: {},
                    success: function (data) {
                        $("#tblbank").html(data);
                    }

                });


            }



            $("#customerReg").click(function () {
                $(this).slideUp(1000);
                $("#accounts").slideUp(1000);
                $("#viewer1").slideUp(1000);
                $("#help").slideUp(1000);

                $("#frmCustomerReg").slideDown();
                $("#tblCustomer").slideDown();


                $.ajax({
                    type: 'POST',
                    url: "php/gettype.php",
                    data: {},
                    success: function (data) {
                        $("#type").html(data);
                    }
                });

                getcustomer();
            });

            $("#cashinout").click(function () {
                $(this).slideUp(1000);
                $("#customerReg").slideUp(1000);
                $("#viewer1").slideUp(1000);
                $("#help").slideUp(1000);
                $("#frmcashinout").slideDown();
                $("#tblcashinout").slideDown();


                $.ajax({
                    type: 'POST',
                    url: "php/getcustomerforcashinout.php",
                    data: {},
                    success: function (data) {
                        $("#cashinoutCustomername").html(data);

                    }

                });

                getcashinout();


            });





            $("#viewer1").click(function () {
                $(this).slideUp(1000);
                $("#customerReg").slideUp(1000);
                $("#accounts").slideUp(1000);
                $("#viewer").slideUp(1000);
                $("#frmview").slideUp(1000);

                $("#tbltotal").slideUp(1000);
                $("#help").slideUp(1000);



                $("#tblviewdisplay").slideDown();
                $("#viewbycustomer").slideDown();
                $("#viewbydate").slideDown();


            });

            $("#accounts").click(function () {
                $(this).slideUp(1000);
                $("#customerReg").slideUp(1000);

                $("#viewer1").slideUp(1000);
                $("#frmview").slideUp(1000);

                $("#tbltotal").slideUp(1000);
                $("#help").slideUp(1000);
                $("#frmaccount").slideDown();


            });




            $("#help").click(function () {
                $(this).slideUp(1000);
                $("#customerReg").slideUp(1000);
                $("#cashinout").slideUp(1000);
                $("#frmview").slideUp(1000);
                $("#viewer1").slideUp(1000);
                $("#accounts").slideUp(1000);

                $("#frmhelp").slideDown();





            });


            $("#viewbycustomer").click(function () {
                $(this).slideUp(1000);
                $("#viewbydate").slideUp(1000);

                $("#frmview").slideDown();
                $("#tblview").slideDown();
                $("#tbltotal").slideDown();
                $("#txtViewName").slideDown();


            });

            $("#viewbydate").click(function () {
                $(this).slideUp(1000);
                $("#viewbycustomer").slideUp(1000);

                $("#frmviewbydate").slideDown();
                $("#tblviewbydate").slideDown();
                $("#tbltotalviewbydate").slideDown();




            });

            $("#accountcash").click(function () {
                $(this).slideUp(1000);
                $("#customerReg").slideUp(1000);
                $("#viewer1").slideUp(1000);
                $("#help").slideUp(1000);
                $("#accountbank").slideUp(1000);
                $("#frmcashinout").slideDown();
                $("#tblcashinout").slideDown();


                $.ajax({
                    type: 'POST',
                    url: "php/getcustomerforcashinout.php",
                    data: {},
                    success: function (data) {
                        $("#cashinoutCustomername").html(data);

                    }

                });

                getcashinout();


            });
            $("#accountbank").click(function () {
                $(this).slideUp(1000);
                $("#customerReg").slideUp(1000);
                $("#viewer1").slideUp(1000);
                $("#help").slideUp(1000);
                $("#accountcash").slideUp(1000);

                $("#accountbank").slideUp(1000);
                $("#frmbank").slideDown();
                $("#tblbank").slideDown();

                getBankDetails();

            });


            var typeid = 0;
            var typename = 0;
            function gettypeid(id) {
                // alert(id);
                var arr = 0;
                arr = id.split(":");

                typeid = arr[0];
                typename = arr[1];


            }
            var cashcustomerid = 0;
            var cashcusname = 0;
            function getcustomerid(id) {

                var arr = 0;
                arr = id.split(":");

                cashcustomerid = arr[0];
                cashcusname = arr[1];

                //alert("alert on getcustomer id function"+cashcustomerid);
            }

            var options = {
                "backdrop": "static"


            };

            function getword() {

                $.ajax({
                    url: "php/getcustomername.php",
                    type: 'POST',
                    data: {word: $("#txtViewName").val()},
                    success: function (data) {
                        $("#displayCustomer").html(data);
                        document.getElementById("displayCustomer").style.border = "1px solid #A5ACB2";
                    }


                });


            }

            $("#txtViewName").keyup(function () {
                $("#displayCustomer").show();
                getword();


            });

            var customerid = 0;
            function setcustomerid(id) {

                $.ajax({
                    type: 'POST',
                    url: "php/viewcashinout.php",
                    data: {id: id},
                    success: function (data) {
                        $("#tblview").html(data);

                    }

                });

                $.ajax({
                    type: 'POST',
                    url: "php/viewtotalbalance.php",
                    // data: JSON.stringify({id: id}),
                    data: {id: id},
                    // dataType: 'json',
                    success: function (data) {

                        var spl = data.split(":");
                        //    alert(spl[0]);
                        if (spl[0] === '0' && spl[1] === '0') {

                            $("#txtbalance").val(0);
                            $("#txttotalcredit").val(spl[0]);
                            $("#txttotaldebit").val(spl[1]);

                        } else if (spl[0] === '0' && spl[1] != '0') {
                            $("#txtbalance").val(spl[1]);
                            $("#txttotalcredit").val(spl[0]);
                            $("#txttotaldebit").val(spl[1]);

                        } else if (spl[1] === '0' && spl[0] != '0') {
                            $("#txtbalance").val("-" + spl[0]);
                            $("#txttotalcredit").val(spl[0]);
                            $("#txttotaldebit").val(spl[1]);

                        } else {
                            $("#txtbalance").val(spl[2]);
                            $("#txttotalcredit").val(spl[0]);
                            $("#txttotaldebit").val(spl[1]);

                        }


                    }

                });


            }

            function validatecustomer() {
                var x = document.forms["frmCustomerReg"]["txtname"].value;
                if (x == null || x == "") {
                    alert("Name must be filled out");
                    return false;
                }
            }

            $(function () {


                $("#datepickerfrom").datepicker();
                $("#datepickerto").datepicker();


            });

            $(function () {
                $("#tabs").tabs();
            });


        </script>

        <div class="modal">

        </div>
    </body>
</html>
