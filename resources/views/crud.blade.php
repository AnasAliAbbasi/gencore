<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Test Crud App</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    .project-tab {
    padding: 10%;
    margin-top: -8%;
}
.project-tab #tabs{
    background: #007b5e;
    color: #eee;
}
.project-tab #tabs h6.section-title{
    color: #eee;
}
.project-tab #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #0062cc;
    background-color: transparent;
    border-color: transparent transparent #f3f3f3;
    border-bottom: 3px solid !important;
    font-size: 16px;
    font-weight: bold;
}
.project-tab .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: #0062cc;
    font-size: 16px;
    font-weight: 600;
}
.project-tab .nav-link:hover {
    border: none;
}
.project-tab thead{
    background: #f3f3f3;
    color: #333;
}
.project-tab a{
    text-decoration: none;
    color: #333;
    font-weight: 600;
}
</style>
</head>
<body>
    


<h3 style="color:green;">{{session('inserted');}}</h3>
<h3 style="color:red;">{{session('deleted');}}</h3>
<h3 style="color:blue;">{{session('updated');}}</h3>


<section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                  
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>price</th>
                                            <th>delete</th>
                                            <th>update</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <h1><button class="btn btn-primary"><a href="insert"> INSERT ITEM </a> </button></h1>

                                    <h1><button class="btn btn-primary"><a href="/"> Goto Home </a> </button></h1>


                                    @foreach($appData as $item)
                                    
                                    <tr>
                                            <td><a href="#"> {{$item->title}}</a></td>
                                            <td>{{$item->description}}</td>
                                            <td>price</td>
                                            <td>  <button style="float:inline-end;" class="btn btn-danger"> 
                                            <a href="delete_item/{{$item->id}}" style="color:white;text-decoration:none;"> Delete </a> 
                                            </button>  
                                        </td>
                                            <td> <button style="float:right;" class="btn btn-primary"> 
                                                 <a href="edit_item/{{$item->id}}" style="color:white;text-decoration:none;"> Edit </a> 
                                            </button>  
                                         </td>
                                        </tr>

                                        @endforeach
                                  
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>


</body>
</html>