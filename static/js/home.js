
$(document).ready(function () {
     // alert("great");
 
 
       $("#addBeneficiarybtn").click(function() {
          // alert("gre");
         var newElement = '<tr><td> <input type="text" name="beneficiary_fullname[]" class="beneficiary_fullname" style="padding-left:5px;" placeholder="" ></td>'+
                          '<td> <input type="text" name="beneficiary_address[]" class="beneficiary_address" style="padding-left:5px;" placeholder="" ></td>'+
                          '<td> <input type="number" name="beneficiary_phone[]" class="beneficiary_phone"  placeholder=""  style="padding-left:5px;"></td>'+
                          '<td><input type="text" name="beneficiary_email[]" class="beneficiary_email" style="padding-left:5px;" placeholder=""></td>'+
                          '<td><input type="text" name="beneficiary_shareValues[]" class="beneficiary_shares"  style="padding-left:5px;" placeholder=""></td></tr>';
         $( "#beneficiaryTable" ).append( $(newElement) );
          // $("#beneficiaryTable").append('<tr><td> <input type="text" name="beneficiary_fullname1"  style="padding-left:5px;" placeholder=""  required=""></td>');
      // $("#beneficiaryTable").append('<td> <input type="text" name="beneficiary_address1" style="padding-left:5px;" required="" placeholder=""></td>');
      // $("#beneficiaryTable").append('<td> <input type="text" id="" name="beneficiary_phone1" placeholder="" required=""   style="padding-left:5px;"></td>');
     //  $("#beneficiaryTable").append('<td> <input type="text" name="beneficiary_email1" style="padding-left:5px;" placeholder=""></td>');
     //  $("#beneficiaryTable").append('<td> <input type="text" name="beneficiary_shareValues" style="padding-left:5px;" placeholder=""></td></tr>');
       
        });
        
      //   var x = 1; 
      //   var max_fields = 10; //maximum input boxes allowed
      //  $("#addBankbtn").click(function(e) {
      //     // alert("gre"); country1'<td><input type="text" name="ItemPrice[]" id="ItemPrice-' + i + '"></td>';
         
      //    // console.log($('[id^=person_moreBank_]:last').val());
      //    //   var i = $('table tbody tr select').length;
      //  //   var j = $('table tbody tr input #person_moreAccountNumber_'+ i).length;
      //   //  var k = $('#person_moreBranch_').length;
      //   //  console.log("i: "+i +" j: "+ j + " k: " + k);
      //   //  console.log("0: "+ $('#person_moreBank_' + i).val());
 
          
      //   e.preventDefault();
      //   if (x <= max_fields) 
      //   { 
      //    var newElement = '<tr>'+
      //                         '<td>'+
      //                             '<div class="book_date">'+
      //                                '<select id="country1" name="person_bankName[]"  class="person_bankName frm-field required sect" style="height:40px;border-radius:0px">'+
      //                   '<option value=""> -- Select Bank -- </option>'+
      //                                     '<option value="Access Bank">Access Bank</option>'+
      //                                     '<option value="Diamond Bank">Diamond Bank</option>'+   
      //                           '<option value="EcoBank">EcoBank</option>'+
      //                           '<option value="FirstBank">First Bank</option>'+
      //                           '<option value="FCMB Bank">FCMB Bank</option>'+
      //                           '<option value="Fidelity Bank">Fidelity Bank</option>'+
      //                           '<option value="GTBank">GTBank</option>'+
      //                           '<option value="Heritage Bank">Heritage Bank</option>'+
      //                           '<option value="Polaris Bank">Polaris Bank</option>'+
      //                           '<option value="Providus Bank">Providus Bank</option>'+
      //                           '<option value="Stanbic IBTC Bank">Stanbic IBTC Bank</option>'+ 
      //                           '<option value="Sterling Bank">Sterling Bank</option>'+
      //                           '<option value="SunTrust Bank">SunTrust Bank</option>'+
      //                           '<option value="Unity Bank">Unity Bank</option>'+ 
      //                           '<option value="Union Bank">Union Bank</option>'+
      //                           '<option value="UBA Bank">UBA Bank</option>'+
      //                           '<option value="Wema Bank">Wema Bank</option>'+ 
      //                           '<option value="Zenith Bank">Zenith Bank</option>'+
      //                           '<option value="Others">Others</option>'+
      //                       '</select>'+ 
      //                   '</div>'+
      //               '</td>'+
      //         '<td>'+
      //           '<div class="book_date">'+
                    
      //                   '<input  name="person_accountNumber[]" type="number" id="person_moreAccountNumber" class="person_moreAccountNumber">'+
      //           '</div>'+
      //         '</td>'+
      //         '<td>'+
      //           '<div class="book_date">'+
      //               '<input  name="person_accountBranch[]" type="text" id="person_moreBranch" class="person_moreBranch">'+
      //           '</div>'+
      //           '</td></tr>';
        
      //    $( "#bankDetails" ).append( $(newElement) );
      //    x++;
      //  }
      //  else{
      //      alert("maximum bank reached .....")
      //  }
         
 
      //   });
 
 
       
      var x = 1; 
      var max_fields = 10; //maximum input boxes allowed
     $("#addBankbtn").click(function(e) {
        // alert("gre"); country1'<td><input type="text" name="ItemPrice[]" id="ItemPrice-' + i + '"></td>';
       
       // console.log($('[id^=person_moreBank_]:last').val());
       //   var i = $('table tbody tr select').length;
     //   var j = $('table tbody tr input #person_moreAccountNumber_'+ i).length;
      //  var k = $('#person_moreBranch_').length;
      //  console.log("i: "+i +" j: "+ j + " k: " + k);
      //  console.log("0: "+ $('#person_moreBank_' + i).val());
      
      e.preventDefault();
      if (x <= max_fields) 
      { 
       var newElement = '<tr>'+
                            '<td>'+
                            '<div class="book_date">'+
                            '<input  name="person_bankName[]" type="text" id="country1"          class="person_bankName" style="height:35px;border-radius:3px">'+
                        '</div>'+
                  '</td>'+
            '<td>'+
              '<div class="book_date">'+
                  
                      '<input  name="person_accountNumber[]" type="number" id="person_moreAccountNumber" class="person_moreAccountNumber">'+
              '</div>'+
            '</td>'+
            '<td>'+
              '<div class="book_date">'+
                  '<input  name="person_accountBranch[]" type="text" id="person_moreBranch" class="person_moreBranch">'+
              '</div>'+
              '</td></tr>';
      
       $( "#bankDetails" ).append( $(newElement) );
       x++;
     }
     else{
         alert("maximum bank reached .....")
     }
       
 
      });
           
     $("#submitReviewbtn").click(function(){
 
        
      var person_title = $("#person_title").val();
      var person_surname = $("#person_surname").val();
      var person_firstname = $("#person_firstname").val();
      var person_othername = $("#person_othername").val();
      var person_allname = person_firstname + ", " + person_othername;
      var person_phone =  $("#person_phone").val();
      var person_address =  $("#person_address").val();
      var person_companyName =  $("#person_company").val();
      var person_companyAddress =  $("#person_companyAddress").val();
      var person_companyID =  $("#country1").val();
      var person_companyIDnumber =  $("#person_idNumber").val();
      var person_pfa = $("#person_pfa").val();
      var person_rsaNumber = $("#person_rsaNumber").val();
      var person_bankName = $("#country1").val();
      var person_accountNumber = $("#person_accountNumber").val();
      var person_accountBranch = $("#person_accountBranch").val();
      var beneficiary_fullname = $("#beneficiary_fullname").val();
      var beneficiary_address = $("#beneficiary_address").val();
      var beneficiary_phone = $("#beneficiary_phone").val();
      var beneficiary_email = $("#beneficiary_email").val();
      var beneficiary_shareValues = $("#beneficiary_shareValues").val();
      var will_executors = $("#will_executors").val();
     
    //  var will_executors_others = $("#will_executors_others").val();
      
 
 
 
 
 
 
 if(person_surname=="")
 {
     $('#person_surname').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#person_surname').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#person_surname').attr("placeholder", "This field is compulsory..");
      return false;
 } else{
      $('#person_surname').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 } 
 if(person_firstname=="")
 {
     $('#person_firstname').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#person_firstname').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#person_firstname').attr("placeholder", "This field is compulsory..");
      return false;
 } else{
      $('#person_firstname').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }
 if(person_phone=="")
 {
     $('#person_phone').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#person_phone').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#person_phone').attr("placeholder", "This field is compulsory..");
      return false;
 } else{
      $('#person_phone').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }     
  if(person_address=="")
 {
     $('#person_address').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#person_address').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#person_address').attr("placeholder", "This field is compulsory..");
      return false;
 } else{
      $('#person_address').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }     
 /*if(person_companyName=="")
 {
     $('#person_companyName').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
    // var top = $('#person_companyName').offset().top;
      $('html, body').animate({ scrollTop: ($('#person_companyName').offset().top) - 10 }, 800);
      $('#person_companyName').attr("placeholder", "This field is compulsory..");
      return false;
 } else{
      $('#person_companyName').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }    */
 if(person_companyAddress=="")
 {
     $('#person_companyAddress').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#person_companyAddress').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#person_companyAddress').attr("placeholder", "This field is compulsory..");
      return false;
 } else{
      $('#person_companyAddress').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }    
  if(person_pfa=="")
 {
     $('#person_pfa').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#person_pfa').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#person_pfa').attr("placeholder", "This field is compulsory..");
      return false;
 } else{
      $('#person_pfa').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }   
 if(person_rsaNumber=="")
 {
     $('#person_rsaNumber').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#person_rsaNumber').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#person_rsaNumber').attr("placeholder", "This field is compulsory..");
      return false;
 } else{
      $('#person_rsaNumber').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }    
      if(person_accountNumber=="")
 {
     
     $('#person_accountNumber').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#person_accountNumber').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#person_accountNumber').attr("placeholder", "This field is compulsory...");
      return false;
 }
 else{
      $('#person_accountNumber').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }  
 if(person_accountBranch=="")
 {
     
     $('#person_accountBranch').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#person_accountNumber').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#person_accountBranch').attr("placeholder", "This field is compulsory...");
      return false;
 }
 else{
      $('#person_accountBranch').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }
 
 
 if(beneficiary_fullname=="")
 {
     
     $('#beneficiary_fullname').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#beneficiary_fullname').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#beneficiary_fullname').attr("placeholder", "This field is compulsory...");
      return false;
 }
 else{
      $('#beneficiary_fullname').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }
  if(beneficiary_address=="")
 {
     
     $('#beneficiary_address').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#beneficiary_address').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#beneficiary_address').attr("placeholder", "This field is compulsory...");
      return false;
 }
 else{
      $('#beneficiary_address').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }
 
  if(beneficiary_phone=="")
 {
     
     $('#beneficiary_phone').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#beneficiary_phone').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#beneficiary_phone').attr("placeholder", "This field is compulsory...");
      return false;
 }
 else{
      $('#beneficiary_phone').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }
 
 
 if(beneficiary_email=="")
 {
     
     $('#beneficiary_email').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#beneficiary_email').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#beneficiary_email').attr("placeholder", "This field is compulsory...");
      return false;
 }
 else{
      $('#beneficiary_email').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }
 
  
 if(beneficiary_shareValues=="")
 {
     
     $('#beneficiary_shareValues').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#beneficiary_shareValues').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#beneficiary_shareValues').attr("placeholder", "This field is compulsory...");
      return false;
 }
 else{
      $('#beneficiary_shareValues').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }
 
   
 if(person_bankName=="")
 {
     
     $('#country1').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#country1').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#country1').attr("placeholder", "This field is compulsory...");
      return false;
 }
 else{
      $('#country1').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }
 
  
  /* 
 if(will_executor=="")
 {
     
     $('#will_executor').css({"border-color": "red","border-width":"1px", "border-style":"solid"}); 
      var top = $('#country1').offset().top;
      $('html, body').animate({ scrollTop: top - 10 }, 800);
      $('#will_executor').attr("placeholder", "This field is compulsory...");
      return false;
 }
 else{
      $('#will_executor').css({"border-color": "#154d34","border-width":"1px", "border-style":"solid"}); 
    
 }
 
 */
 
 
    
    if(person_title !="" && person_surname!="" && person_firstname!="" &&  person_phone!="" &&  person_address!="" && 
    person_companyAddress!="" &&  person_pfa!="" &&  person_rsaNumber!=""  && person_accountNumber !="" && person_accountBranch!="" 
    && beneficiary_fullname !="" && beneficiary_address !="" && beneficiary_phone !="" && beneficiary_email !="" && beneficiary_shareValues !=""
    && person_bankName !="")
    {
        
    
     // console.log(person_title);
      if(person_title==""){
         $("#person_title_review").html("-");
      }else{
            $("#person_title_review").html(person_title);
      } 
      if(person_surname==""){
         $("#person_surname_review").html("-");
      }else{
            $("#person_surname_review").html(person_surname);
      } 
      if(person_othername==""){
         $("#person_firstname_review").html("-");
      }else{
            $("#person_othername_review").html(person_allname);
      } 
      
      
      if(person_companyName==""){
         $("#person_companyName_review").html("-");
      }else{
            $("#person_companyName_review").html(person_companyName);
      } 
      
      if(person_phone==""){
         $("#person_phone_review").html("-");
      }else{
            $("#person_phone_review").html(person_phone);
      } 
      
      if(person_address==""){
         $("#person_address_review").html("-");
      }else{
            $("#person_address_review").html(person_address);
      } 
      
       if(person_companyAddress==""){
         $("#person_companyAddress_review").html("-");
      }else{
            $("#person_companyAddress_review").html(person_companyAddress);
      } 
      
     if(person_companyID==""){
      $("#person_idtype_review").html("-");
      }else{
            $("#person_idtype_review").html(person_companyID);
      } 
      
      if(person_companyIDnumber==""){
         $("#person_idnumber_review").html("-");
      }else{
            $("#person_idnumber_review").html(person_companyIDnumber);
      } 
      
     if(person_pfa==""){
      $("#person_pfa_review").html("-");
      }else{
            $("#person_pfa_review").html(person_pfa);
      } 
       if(person_rsaNumber==""){
         $("#person_rsaNumber_review").html("-");
      }else{
            $("#person_rsaNumber_review").html(person_rsaNumber);
      } 
      
     /** for(var i=0; i< )
     var i = $('table tbody tr select').length;
          console.log(i);
     for(var i=0; i< count; i++) {
         
     }
     */
     var banklist = $('#bankDetails').find('input.person_bankName').map(function() {
          return $(this).val();
        }).get();
    var accountlist = $('#bankDetails').find('input.person_moreAccountNumber').map(function() {
          return $(this).val();
        }).get();
        
    var branchlist = $('#bankDetails').find('input.person_moreBranch').map(function() {
          return $(this).val();
        }).get();
        
         var beneficiary_fullnamelist = $('#beneficiaryTable').find('input.beneficiary_fullname').map(function() {
          return $(this).val();
        }).get();
        
        var beneficiary_addresslist = $('#beneficiaryTable').find('input.beneficiary_address').map(function() {
          return $(this).val();
        }).get();
        
         var beneficiary_phonelist = $('#beneficiaryTable').find('input.beneficiary_phone').map(function() {
          return $(this).val();
        }).get();
  
         var beneficiary_emaillist = $('#beneficiaryTable').find('input.beneficiary_email').map(function() {
          return $(this).val();
        }).get();
     var beneficiary_shareslist = $('#beneficiaryTable').find('input.beneficiary_shares').map(function() {
          return $(this).val();
        }).get();
        
 
 
        // send to server here
      /*  console.log(banklist);
        console.log(accountlist);
        console.log(branchlist);
        console.log(beneficiary_fullnamelist);
        console.log(beneficiary_addresslist);
        console.log(beneficiary_phonelist);
        console.log(beneficiary_emaillist);
        console.log(beneficiary_shareslist);
        */
 
       for(var i=0; i<beneficiary_fullnamelist.length; i++)
        {
            var detail1 ="<tr><td>"+ beneficiary_fullnamelist[i] +"</td><td>"+ beneficiary_addresslist[i]+ "</td><td>"+ beneficiary_phonelist[i] +
            "</td><td>"+ beneficiary_emaillist[i] + '</td><td>'+ beneficiary_shareslist[i] + "</td></tr>"; 
           // console.log(i);
            $("#beneficiaryReviewDetails").append(detail1);
            
          
        }
       // $('table tbody tr select').length;
       //console.log( "grrrrrrr: " + $('#bankDetails div select').length);
      
      
       for(var i=0; i<banklist.length; i++)
        {
            var detail2 ="<tr><td>"+ banklist[i] +"</td><td>"+ accountlist[i]+ "</td><td>"+ branchlist[i] + "</td></tr>"; 
           // console.log(i);
            $("#bankReviewDetails").append(detail2);
    
          
        }
    
        
        
       
      
       document.getElementById('light').style.display='block';
        document.getElementById('fade').style.display='block';
        
    }
    
   
   });
    
    
     
 $('#close').click(function(){
     
     //$(this).unbind("click");
     
      document.getElementById('light').style.display='none';
      document.getElementById('fade').style.display='none';
       //onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"
     
 });
 
   });
 
 
 
  