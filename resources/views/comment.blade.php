<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <script src="{{asset('js/axios.min.js')}}"></script> 
</head>
<body>
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Get in touch</h1>
                    <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8   col-xl-6">
    
                        <form id="contactForm">
                            <!-- User id-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="userid" type="text" placeholder="Enter your name..."/>
                                <label for="name">User Id</label>
                            </div>
                            <!-- Post Id input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="postid" type="text" placeholder="Enter Post Id" />
                                <label for="email">Post Id</label>
                            </div>
                            
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="postcontent" type="text" placeholder="Enter your comment here..." style="height: 10rem"></textarea>
                                <label for="message">Comment</label>
                            </div>
                           <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>

        let element=document.getElementById('contactForm')
        contactForm.addEventListener('submit',async(event)=>{
           event.preventDefault();
           let userid=document.getElementById('userid').value;
           //console.log(userid)
           let postid = document.getElementById('postid').value;
           let postcontent = document.getElementById('postcontent').value;
           
    
           if(userid.length===0){
            alert("User Id is Required")
           }else if (postid.length === 0) {
              alert('Post Id is required')
           } else if (postcontent.length === 0) {
               alert('Post Content is required')
           }else{
    
               let formData={
                 user_id:userid,
                 post_id:postid,
                 content:postcontent
                
               }
    
               let URL="/comment-store";
             
               let result=await axios.post(URL,formData);
              
               if(result.status===200 && result.data===1){
                    alert("your request has been submitted successfully")
                    contactForm.reset();
               }
               else{
                 alert("Something went wrong");
               }
           }
           
           
        })
    </script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script> 
</body>
</html>