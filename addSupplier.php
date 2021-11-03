<?php include('inc/header.php');?>

        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li><a href="#">Supplier</a></li>                    
                    <li class="active">Add</li>
                </ol>
            </div>
        </div>        
        
        <div class="row">
            <div class="col-md-12">

                
                <div class="block">
                    <div class="header">
                        <h2>Add Supplier</h2>
                    </div>
                    <div class="content controls">
                   <form action="" method="post" id="addsupplier">
                       <div class="row">
                           <div class="col-md-6">
                                <div class="form-row">
                                    <div class="col-md-3">Mobile:</div>
                                    <div class="col-md-9">
                                        <input name="smobile" id="smobile" type="text" class="form-control"/>
                                    </div>
                                </div>
                               
                                <div class="form-row">
                                    <div class="col-md-3">Email:</div>
                                    <div class="col-md-9">
                                        <input name="semail" id="semail" type="email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Address:</div>
                                    <div class="col-md-9">
                                        <textarea name="saddress" id="saddress" id="pdesc" class="form-control" ></textarea>
                                    </div>
                                </div>
                                 
                           </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <div class="col-md-3">Name:</div>
                                    <div class="col-md-9"><input name="sname" id="sname" type="text" class="form-control"/></div>
                                </div>
    
                                <div class="form-row">
                                    <div class="col-md-3">Company Name</div>
                                    <div class="col-md-9"><input id="scompany" name="scompany" type="text" class="form-control"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Date of Birth:</div>
                                    <div class="col-md-9"><input id="sdob" name="sdob" type="text" class="form-control"/></div>
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