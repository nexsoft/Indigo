<html>
    <head>
        
    </head>
    <body>
        
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="frmCustomerReg">
                                        <table>
                                            <tr>
                                                <td>
                                                    <div class="form-group">

                                                        Name:
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">


                                                        <input type="text" id="txtname" class="form-control"
                                                               placeholder="Enter Name" required/>


                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        Type :

                                                    </div>

                                                </td>

                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control" id="type" onchange="gettypeid(this.value)">
                                                            <option value="0">--Select--</option>

                                                        </select>

                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">

                                                        Contact Info:
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" id="txtContactInfo" class="form-control"
                                                               placeholder="Enter Mobile No" required/>
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

                                                        <button type="button" id="btnAdd" class="form-control">Submit</button>
                                                    </div>

                                                </td>
                                            </tr>

                                        </table>


                                    </div>


                                </div>

                                <div class="col-md-6">
                                    <table class="table table-striped " id="tblCustomer">
                                        <tr>
                                            <th>
                                                Name

                                            </th>

                                            <th>
                                                Type

                                            </th>

                                        </tr>


                                    </table>

                                </div>


                            </div>
        
    </body>
</html>







