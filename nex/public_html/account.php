<html>
    <head>
        
    </head>
    <body>
         <!--//////////////////////////////////start bank////////////////////-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div id="frmbank">
                                        <table>

                                            <tr>
                                                <td>
                                                    <div class="form-group">

                                                        Account Name:
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" id="txtAccountname" class="form-control"
                                                               placeholder="Enter Account Name" required/>
                                                    </div>

                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        Account Type :

                                                    </div>

                                                </td>

                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control" id="cmbBankPaytype">
                                                            <option value="0">--Select--</option>
                                                            <option value="Credit">Credit</option>
                                                            <option value="Debit">Debit</option>

                                                        </select>

                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">

                                                        Opening Balance:
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" id="txtBankOpeningBalance" class="form-control"
                                                               placeholder="Enter Opening Balance" required/>
                                                    </div>

                                                </td>

                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="form-group">

                                                        Amount:
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" id="txtBankAmount" placeholder="Enter Amount" class="form-control"
                                                               required/>
                                                    </div>

                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">

                                                        Description :
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" id="txtBankDescription" placeholder="Enter Description" class="form-control"/>
                                                    </div>

                                                </td>

                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="form-group">


                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">

                                                        <button type="button" id="btnBankAdd" class="form-control">Submit
                                                        </button>
                                                    </div>

                                                </td>
                                            </tr>


                                        </table>


                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <table class="table table-striped " id="tblbank">
                                        <tr>
                                            <th>
                                                Name

                                            </th>

                                            <th>
                                                Type

                                            </th>
                                            <th>
                                                Amount

                                            </th>

                                        </tr>


                                    </table>

                                </div>


                            </div>

                            <!--/////////////////////////////////////End of bank//////////////////////////// -->
    </body>
</html>







