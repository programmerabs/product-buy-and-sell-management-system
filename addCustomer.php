<?php include('inc/header.php');?>

        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li><a href="#">Customer</a></li>                    
                    <li class="active">Add</li>
                </ol>
            </div>
        </div>        
        
        <div class="row">
            <div class="col-md-12">

                
                <div class="block">
                    <div class="header">
                        <h2>Add Customer</h2>
                    </div>
                    <div class="content controls">
                   <form action="" method="post" id="addcustomer">
                       <div class="row">
                           <div class="col-md-6">
                                <div class="form-row">
                                    <div class="col-md-3">Mobile:</div>
                                    <div class="col-md-9">
                                        <input id="cmobile" name="cmobile" type="text" class="form-control"/>
                                    </div>
                                </div>
                               
                                <div class="form-row">
                                    <div class="col-md-3">Email:</div>
                                    <div class="col-md-9">
                                        <input id="cemail" name="cemail" type="email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Address:</div>
                                    <div class="col-md-9">
                                        <textarea name="caddress" id="caddress" class="form-control" ></textarea>
                                    </div>
                                </div>
                                 
                           </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <div class="col-md-3">Name:</div>
                                    <div class="col-md-9">
                                        <input id="cname" name="cname" type="text" class="form-control"/>
                                    </div>
                                </div>
    
                                <div class="form-row">
                                    <div class="col-md-3">Customer Type:</div>
                                    <div class="col-md-9">
                                        <select id="ctype" name="ctype" class="form-control">
                                            <option>Retail </option>
                                            <option>WholeSale</option>
                                             
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-row">
                                    <div class="col-md-3">Date of Birth:</div>
                                    <div class="col-md-9">
                                        <input id="cdob" name="cdob" type="text" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form row">
                                    <div class="col-md-8"></div>
                                    <div class="col-md-3"  style="margin-top:25px">
                                    <input class="btn" type="submit" value="Add">

                                    </div>
                                </div>
                           </div>
                       </div>
                       
                   </form>
                   </div>

                </div>                                               
            </div>
           
          
        </div>
    </div>
    <script src="data.js"></script>

</body>
</html>