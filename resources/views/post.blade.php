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
<body class="d-flex flex-column h-100">

    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div id="post-list" class="col-lg-11 col-xl-9 col-xxl-8">
    
    
    
                </div>
            </div>
        </div>
    </section>

  

    <script>
        GetPostList();
        async function GetPostList(){
            
    
            try {
                let URL="/postData"
                const response = await axios.get(URL);
                console.log(response);
                response.data.forEach((item)=>{
                document.getElementById('post-list').innerHTML += (`<div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">${item['title']}</h2>
                                <p>${item['content']}</p>
                                <a class="text-decoration-none" target="_blank" href="${item['previewLink']}">View Project</a>
                            </div>
                            
                        </div>
                    </div>
                </div>`
                )
           })
    
                    
    
            } catch (error) {
                alert(error)
            }
    
    
    
    
        }
    </script>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    
</body>
</html>