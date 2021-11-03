<?php include('inc/header.php');?>

        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li><a href="#">Products</a></li>                    
                    <li class="active">Create</li>
                </ol>
            </div>
        </div>        
        
        <div class="row">
            <div class="col-md-12">

                
                <div class="block">
                    <div class="header">
                        <h2>Add Product</h2>
                    </div>
                    <div class="content controls">
                   <form action="" method="post" id="addproduct">
                       <div class="row">
                           <div class="col-md-6">
                                <div class="form-row">
                                    <div class="col-md-3">Product Name:</div>
                                    <div class="col-md-9">
                                        <input name="pname" id="pname" type="text" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Product Description:</div>
                                    <div class="col-md-9">
                                        <textarea name="pdesc" id="pdesc" class="form-control" ></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Product Stock QTY:</div>
                                    <div class="col-md-9">
                                        <input name="pstq" id="pstq" type="text" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Product Minimum Stock:</div>
                                    <div class="col-md-9">
                                        <input name="pmstock" id="pmstock" type="text" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Product Purchase Price:</div>
                                    <div class="col-md-9">
                                        <input name="ppprice" id="ppprice" type="text" class="form-control"/>
                                    </div>
                                </div>
                           </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <div class="col-md-3">Product SL:</div>
                                    <div class="col-md-9"><input id="psl" name="psl" type="text" class="form-control"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Category:</div>
                                    <div class="col-md-9">
                                        <select id="pcategory" name="pcategory" class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-row">
                                    <div class="col-md-3">Product Size:</div>
                                    <div class="col-md-9"><input id="psize" name="psize" type="text" class="form-control"/></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">Product Sale Price:</div>
                                    <div class="col-md-9"><input id="pslprice" name="pslprice" type="text" class="form-control"/></div>
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