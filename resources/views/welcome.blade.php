<!DOCTYPE html>
<html>
<head>

    <title>paytabs task </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src = "{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>


<div class="container">
    <h1>paytabs handle category sub-category</h1>
    <form action="" class="btn-submit" method="POST" id="form">

        <div class="form-group" id="categories">
            <label>main category</label>
            <select name="category" id="category" class="form-control input-lg dynamic">
                <option name="cat" value="0">choose main category</option>
                @foreach ($category as $cat)
                <option name="cat" value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                    
                @endforeach

            </select>
        </div>

        <div class="form-group" id="categories_1" style='display:none'>
            <label>sub category</label>
            <select name="category-1" id="category_1" class="form-control input-lg dynamic">
                
            </select>
        </div>

        <div class="form-group" id="categories_2" style='display:none'>
            <label>sub category</label>
            <select  id="category_2" class="form-control input-lg dynamic">
            
            </select>
        </div>

        
        <div class="form-group" id="categories_3" style='display:none'>
            <label>sub category</label>
            <select  id="category_3" class="form-control input-lg dynamic">
                
            </select>
        </div>

        <div class="form-group" id="categories_4" style='display:none'>
            <label>sub category</label>
            <select  id="category_4" class="form-control input-lg dynamic">
                
            </select>
        </div>

        <div class="form-group" id="categories_5" style='display:none'>
            <label>sub category</label>
            <select  id="category_5" class="form-control input-lg dynamic">
                
            </select>
        </div>

        <div class="form-group" id="categories_6" style='display:none'>
            <label>sub category</label>
            <select  id="category_6" class="form-control input-lg dynamic">
         
            </select>
        </div>
    </form>
</div>
<script type="text/javascript" >
    var subcategorydiv =['categories_1','categories_2','categories_3','categories_4','categories_5','categories_6'];
    var subcategoryids = ['category_1','category_2','category_3','category_4','category_5','category_6'];
    
    $(document).ready(function ()
    {

        $.ajaxSetup({
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        $('.dynamic').change(function (){

            var url = '{{ url('ajax') }}'; //url return data           
            var select =$(this).attr("id"); // get the id of the current select box
            var value = $('#'+select+'').val();// get the value on select box
            var indexofId=subcategoryids.indexOf(select)+1; //get the index to add next values on the next id in the arrays 
            var newid = subcategoryids[indexofId];//id of the next selectbox
            var newdivID = subcategorydiv[indexofId];//id of the next div that contain select box to display it
            
            
            $.ajax({
                url:url,
                method:'get',
                data:{
                    category:value,

                },

                success:function(response){
                        
                        if(response.data.length ==0)//check on response to stop 
                        {
                            alert('no more subcategory');
                            //this loop to disappear select boxes again
                            for(let i = indexofId;i < subcategoryids.length; i++)
                            {
                                var divid = subcategorydiv[i];
                                var selectbox= document.getElementById(divid);
                                selectbox.style.display = 'none'; 

                            } 
                        }
                        else
                        {
                            var selectbox= document.getElementById(newdivID);
                            if(indexofId == subcategoryids.length)//this to check if length  of array achieve max so need to create new selectboxes
                            {
                                var newone= subcategoryids.indexOf(select)+2;
                                createbox(newone);//this function create new select box 
                                var newcreateIdDiv = 'categories_'+newone;//the new div id 
                                var newcreateId = 'category_'+newone;// new select id 
                                // var index = subcategoryids.indexOf(select)+1;
                                subcategorydiv.push(newcreateIdDiv);//push new id of div in array to complete the loop again
                                subcategoryids.push(newcreateId);// push new id of selectbox in array to complete the loop as needed in the first variables
                                //just append new data 
                                $('#'+newcreateId+'').empty();
                                $('#'+newcreateId+'').append('<option   value="">'+"choose sub-category"+' </option>')
                                $.each(response.data,function (key,item)
                                {   
                                $('#'+newcreateId+'').append('<option   value="'+item.id+'">'+item.category_name+' </option>');
                                })    
                            }
                            else
                            {
                            selectbox.style.display = '';//acceess the hardcoded div style to appear it 
                            $('#'+newid+'').empty();
                            $('#'+newid+'').append('<option   value="">'+"choose sub-category"+' </option>')
                            $.each(response.data,function (key,item)
                            {   
                                $('#'+newid+'').append('<option   value="'+item.id+'">'+item.category_name+' </option>');
                            })
                            }
                            
                        
                        }

                },
                error:function(error){
                    console.log(response.error)
                }
            });

            })
    });

    function createbox(id)
    {
        //create div and append to form 
        const div = document.createElement('div');
        div.className = `form-group`;
        div.id = 'categories_'+id;
        document.getElementById("form").appendChild(div);
        var selectid= 'categories_'+id;
        //create lable and append to div
        const newLabel = document.createElement("label");
        newLabel.innerHTML = "sub category";
        document.getElementById(selectid).appendChild(newLabel);

        
        const box = document.createElement('select');
        box.className = 'form-control input-lg dynamic' ;
        box.id = 'category_'+id ;        
        document.getElementById(selectid).appendChild(box);

     }
    
   
</script>
</body>
