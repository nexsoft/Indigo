<html>
    <head>
        
    </head>
    <body>
        
                            <!--//////////////////////////////////cashinout////////////////////-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div id="frmcashinout">
                                        <table>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        Customer Name :

                                                    </div>

                                                </td>

                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control" id="cashinoutCustomername"
                                                                onchange="getcustomerid(this.value)">
                                                            <option value="0">--Select--</option>

                                                        </select>

                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        Pay Type :

                                                    </div>

                                                </td>

                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control" id="cashinoutPaytype">
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

                                                        <input type="text" id="txtcashOpeningBalance" class="form-control"
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

                                                        <input type="text" id="txtCashinoutAmount" placeholder="Enter Amount" class="form-control"
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

                                                        <input type="text" id="txtCashinoutDescription" placeholder="Enter Description" class="form-control"/>
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

                                                        <button type="button" id="btnCashinoutAdd" class="form-control">Submit
                                                        </button>
                                                    </div>

                                                </td>
                                            </tr>


                                        </table>


                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <table class="table table-striped " id="tblcashinout">
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

        
    </body>
</html>







