
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
    <title>birlaform</title>
</head>
<body>
        <div class="container  mt-5">
            <div class="row d-flex flex-column col"> 
                <div class="d-flex flex-end" style="border:none;">

                    <button class = "btn "><a href="home.php" target="_blank">Download pdf</a></button>
                    <!-- <button class = "btn "><a href="patientpdf.php" target="_blank"  >Download patient pdf</a></button>
                    <button class = "btn  " ><a href="doctorpdf.php" target="_blank"  >Download doctor pdf</a></button> -->
                </div>
                <form  action="insert.php" method="post">

                    <div class="form-group">
                        <h3>DETAILS OF THE THIRD PARTY ADMINISTRATOR</h3><P>(To be filled in block letters)</P>
                        <div class="col d-flex flex-row  form-group">
                            
                            <span class="alphabet">a.</span> Name of TPA/Insurance Company : Aditya Birla Insurance Company Limited 
                        </div>
                        <div class="col-md-6 aligninput form-group">
                        <span class="alphabet">b.</span>
                    <label for="">Toll free phone number</label>
                    <input type="text" class="form-control class autosave"  name="toll_number" id="toll_number" >
                     </div>
                        <div class="col-md-6 aligninput form-group">
                        <span class="alphabet">c.</span>

                        <!--  -->
                    <label for="">Toll free Fax</label>
                    <input type="text" class="form-control class autosave"   name="toll_fax" id="toll_fax" >
                    </div>
                    <!-- <div class="col-md-6 aligninput">
                    </div>
                    <div class="form-group">  
                        <input type="hidden" name="post_id" id="post_id">
                    </div>  -->
                </div>

                    

                <h3>TO BE FILLED BY THE INSURED/PATIENT</h3>
                <div class="col-md-6 aligninput">
                <span class="alphabet">a.</span>

                    <label for="">Name of the Patient</label>
                    <input type="text" class="form-control class" name="name_patient"  id="name_patient">
                </div>
                <div class="col-md-6 aligninput">
                <span class="alphabet">b.</span>
                    <label for="">Gender</label>
            
                        <div class="form-check checkwidth">
            <input  type="radio" class="form-check-input"   id="radio1" name="gender" value="Male" checked >Male
            <label class="form-check-label" for="radio1"></label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="radio2" name="gender" value="Female" >Female
            <label class="form-check-label" for="radio2" ></label>
            </div>
                        </div>
            </div>

            
                <div class="col-md-6 aligninput">
                     <span class="alphabet">c.</span>
                    <div class="age aligninput">
                        
                        <label for="">Age</label>
                        <input type="text" class="form-control class" id="age" name="age" > 
                        
                    </div>
                </div>
            
            <div class="col-md-6 aligninput">
                <span class="alphabet">d.</span>

                    <label for="">Date of Birth</label>
                    <input type="text" class="form-control class" id="dob"  name="dob" >
                </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">e.</span>

                    <label for="">Contact Number</label>
                    <input type="text" class="form-control class" id="contact_patient" name="contact_patient" >
                </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">f.</span>

                    <label for="">Contact number of attending relative</label>
                    <input type="text" class="form-control class" id="contact_relative" name="contact_relative" >
                </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">g.</span>

                    <label for="">Insured Card ID number</label>
                    <input type="text" class="form-control class" id="insured_number" name="insured_number" >
                </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">h.</span>

                    <label for="">Policy number / Name of corporate</label>
                    <input type="text" class="form-control class" id="policy_number" name="policy_number" ">
                </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">i.</span>

                    <label for="">Employee ID</label>
                    <input type="text" class="form-control class" id="employeeid" name="employeeid" >
                </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">j.</span>

                    <label for="">Currently do you have any other Mediclaim/Health insurance</label>
                    <div class="form-check checkwidth">
            <input  type="radio" class="form-check-input"   id="radio1" name="mediclaim" value="Yes" checked >Yes
            <label class="form-check-label" for="radio1"></label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="radio2" name="mediclaim" value="No" >No
            <label class="form-check-label" for="radio2" ></label>
            </div>

</div>
            <div class="col-md-6 aligninput">
                <span class="alphabet">k.</span>

                    <label for="">Company Name:</label>
                    <label for="">Give details</label>
                    <input type="text" class="form-control class" id="company_name" name="company_name" >
                </div>
                <div class="col-md-6 aligninput">
                <span class="alphabet">l.</span>

                    <label for="">Do you have any family  physician</label>
                    <div class="form-check checkwidth">
            <input  type="radio" class="form-check-input"   id="radio1" name="physician" value="Yes" checked >Yes
            <label class="form-check-label" for="radio1"></label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="radio2" name="physician" value="No" >No
            <label class="form-check-label" for="radio2" ></label>
            </div>
            </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">m.</span>

                    <label for="">Name of the family physician</label>
                    <input type="text" class="form-control class" id="name_physician" name="name_physician" >
                </div>
                <div class="col-md-6 aligninput">
                <span class="alphabet">n.</span>

                    <label for="">Contact number if any :</label>
                    <input type="text" class="form-control class" id="contact_physician" name="contact_physician" >
                    </div>
                    
                
                <p>PLEASE COMPLETE DECLARATION ON THE REVERSE SIDE OF THIS FORM</p>
                

                    <h2>TO BE FILLED BY THE TREATING DOCTOR/HOSPITAL</h2>
                    
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">a.</span>
                        
                        <label for="">Name of the treating doctor :</label>
                
                        <input type="text" class="form-control class" id="name_doctor" name="name_doctor">
                    </div> 
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">b.</span>
                        
                        <label for="">Contact number:</label>
                        <input type="text" class="form-control class" id="contact_doctor" name="contact_doctor">
                </div> 
                <div class="col-md-6 aligninput">
                    <span class="alphabet">c.</span>
                    
                    <label for="">Name of ILLNESS / Disease with presenting Complaints :</label>
                    <input type="text" class="form-control class" id="nature_illness" name="nature_illness" >
                </div> 
                <div class="col-md-6 aligninput">
                    <span class="alphabet">d.</span>
                    
                    <label for="">Relevant clinical findings :</label>
                    <input type="text" class="form-control class" id="relevant" name="relevant" >
                </div>
               
                <div class="col-md-6 aligninput">
                    <span class="alphabet">e.</span>
                    
                    <label for="">Duration of the present ailment :</label> 
                    <input type="text" class="form-control class d-flex flex-row-reverse" id="duration"  name="duration"  >
                    <span>Days</span>
</div>
<div class="col-md-6 alighinput d-flex">
                    <label for="">Date of first consultation :</label>
                    <input type="text" class="form-control class" id="date_consultation" name="date_consultation" style="min-width:16rem ; margin-right:10px"; >
                        
                    <label for="">Past history of present ailment if any :</label>
                    <input type="text" class="form-control class" id="past_history" name="past_history" style="min-width:16rem";>

                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">f.</span>
                    
                    <label for="">Provisional diagnosis :</label>
                    <input type="text" class="form-control class" id="diagnosis" name="diagnosis">
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">g.</span>
                    
                    <label for="">ICD 10 Code :</label>
                    <input type="text" class="form-control class" id="icd_code" name="icd_code" >
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">h.</span>
                    
                    <label for="" style="margin-right:12px";>Proposed line of treatment :</label>
                    <label for="" style="margin:auto ; margin-right:10px;">Medical Management Surgical Management Intensive care Investigation Non allopathic treatment.</label>
                    <input type="text" class="form-control class" id="line_treatment" name="line_treatment" >
                </div>
                <div class="col-md-6 aligninput" >
                    <span class="alphabet">I.</span>
                    
                    <label for="">If Investigation &/or Medical Management provide :</label>
                    <input type="text" class="form-control class" id="invest_medical" name="invest_medical" >
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">j.</span>
                    
                    <label for="">Route of drug administartion :</label>
                    <input type="text" class="form-control class" id="route_drug" name="route_drug" >
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">k.</span>
                    
                    <label for="">If Surgical, name of surgery :</label>
                    <input type="text" class="form-control class" id="name_surgery" name="name_surgery" > 
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">l.</span>
                    
                    <label for="">ICD 10 PCS Code :</label>
                    <input type="text" class="form-control class" id="icd_pcs" name="icd_pcs" >
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">m.</span>
                    
                    <label for="">If other treatments provide details :</label>
                    <input type="text" class="form-control class" id="other_treatment" name="other_treatment" >
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">n.</span>
                    
                    <label for="">How did injury occur :</label>
                    <input type="text" class="form-control class" id="injury_occur" name="injury_occur" >
                </div>
              
            

                    <input type="submit" name="submit" class="btn submitbtn btn-success">
           

            </div>

        </form>
    </div>
        </div>

        <!-- <script src="plugins/jquery/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script>
$(document).ready(function () {
    
    $('#submitbtn').click(function (e) { 
        e.preventDefault();
        alert("data saved Successfully");
        
    });
});
// $(document).ready(function () {
//     $('.autosave').on('change',function(){
//         var field_id = $(this).attr('id');
//         var field_val = $('#'+field_id).val();
//         var field_name = $('#'+field_id).attr('name');
//         var post_id = $('#post_id').val();
//         //alert(field_val); return false;
//         if(field_val != ''){
//             $.ajax({
//                 url: "admins.php",
//                 method: "POST",
//                 //dataType : 'text',
//                 data:{
//                     post_id : post_id,
//                     field_val:field_val,
//                     field_name:field_name,
//                 },
//                 success: function(data){
//                     {
//                         if(data !=''){
//                             console.log(data);
//                             $("#post_id").val(data);
//                         }
                        
//                     }
//                 }
//             });
//         }
//     });


          
// });
</script>

</body>
</html>