$(document).ready(function() {
  show_product();
  show_customer();
  $("#signform").on('submit', function (e) {
    e.preventDefault();
        var email = $("#email");
      var password = $("#password");
    
      if (isNotEmpty(email) && isNotEmpty(password)) {
        $.ajax({
          url: "db/login.php",
          method: "POST",
          dataType: "text",
          data: {
            key: "login",
            email: email.val(),
            password: password.val()
          },
          success: function(response) {
            data = JSON.parse(response);
            if (data.status == 0) {
              alert(data.msg);
            } else {
              document.location = "index.php";
            }
          }
        });
      }
  });
  //add customer
  $("#addcustomer").on('submit', function (e) {
    e.preventDefault();
        var cmobile = $("#cmobile");
        var cemail = $("#cemail");
        var caddress = $("#caddress");
        var cname = $("#cname");
        var ctype = $("#ctype");
        var cdob = $("#cdob");
    
      if (isNotEmpty(cmobile) && isNotEmpty(cemail) && isNotEmpty(caddress) && isNotEmpty(cname) && isNotEmpty(ctype) && isNotEmpty(cdob)) {
        $.ajax({
          url: "db/customer.php",
          method: "post",
          dataType: "JSON",
          data: {
            key: "addcustomer",
            cmobile: cmobile.val(),
            cemail: cemail.val(),
            caddress: caddress.val(),
            cname: cname.val(),
            ctype: ctype.val(),
            cdob: cdob.val()
          },
          success: function(data) {
            alert(data["msg"]);
            if (data["key"] == 1) {
              document.location = "customer.php";
              show_customer()();
             }
          }
        });
      }
  });
   //add supplier
   $("#addsupplier").on('submit', function (e) {
    e.preventDefault();
        var mobile = $("#smobile");
        var email = $("#semail");
        var address = $("#saddress");
        var name = $("#sname");
        var company = $("#scompany");
        var dob = $("#sdob");
    
      if (isNotEmpty(mobile) && isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(company) && isNotEmpty(address) && isNotEmpty(dob)) {
        $.ajax({
          url: "db/supplier.php",
          method: "post",
          dataType: "JSON",
          data: {
            key: "addsupplier",
            mobile: mobile.val(),
            name: name.val(),
            email: email.val(),
            company: company.val(),
            address: address.val(),
            dob: dob.val()
          },
          success: function(data) {
            alert(data["msg"]);
            if (data["key"] == 1) {
              document.location = "supplier.php";
             }
          }
        });
      }
  });
    //add Product
    $("#addproduct").on('submit', function (e) {
      e.preventDefault();
          var pname = $("#pname");
          var pdesc = $("#pdesc");
          var pstq = $("#pstq");
          var pmstock = $("#pmstock");
          var ppprice = $("#ppprice");
          var psl = $("#psl");
          var pcategory = $("#pcategory");
          var psize = $("#psize");
          var pslprice = $("#pslprice");
          
      
        if (isNotEmpty(pname) && isNotEmpty(pdesc) && isNotEmpty(pstq) && isNotEmpty(pmstock) && isNotEmpty(ppprice) && isNotEmpty(psl) && isNotEmpty(pcategory) && isNotEmpty(psize) && isNotEmpty(pslprice)) {
          $.ajax({
            url: "db/product.php",
            method: "post",
            dataType: "JSON",
            data: {
              key: "addproduct",
              pname: pname.val(),
              pdesc: pdesc.val(),
              pstq: pstq.val(),
              pmstock: pmstock.val(),
              ppprice: ppprice.val(),
              psl: psl.val(),
              pcategory: pcategory.val(),
              psize: psize.val(),
              pslprice: pslprice.val()
            },
            success: function(data) {
              alert(data["msg"]);
              if (data["key"] == 1) {
                document.location = "product.php";
               }
            }
          });
        }
    });
  });
  function isNotEmpty(inpfield) {
    //for phone
    if (inpfield.val() == "") {
      inpfield.css("border", "2px solid red");
      return false;
    } else inpfield.css("border", "");
    return true;
  }
  //show Product data
function show_product() {
  $.ajax({
    url: "db/product.php",
    method: "post",
    dataType: "text",
    data: {
      key: "show_product"
    },
    success: function(data) {
      $("#show_product").html(data);
      
      $("#product_tbl").DataTable({
        responsive: true,

        lengthMenu: [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ], // page length options

        dom: "lBfrtip",
        buttons: ["copy", "csv", "excel", "pdf", "print"]
      });
    }
  });
}
  //show Customer data
  function show_customer() {
    $.ajax({
      url: "db/customer.php",
      method: "post",
      dataType: "text",
      data: {
        key: "show_customer"
      },
      success: function(data) {
        $("#show_customer").html(data);
        $("#customer_tbl").DataTable({
          responsive: true,
  
          lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
          ], // page length options
  
          dom: "lBfrtip",
          buttons: ["copy", "csv", "excel", "pdf", "print"]
        });
      }
    });
  }