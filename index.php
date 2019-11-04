<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Monsite</title>
</head>
<body>
    <div class="container">
    <h1 class="display-4 text-center text-info">Decouverte de Github </h1><hr>
    <p> 10 Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum reprehenderit rerum. Id, qui ab rerum hic quidem officiis minima nostrum molestias dolor voluptate itaque ad sit dolores doloremque et.git add --
    </p>
    <h2 class="text-success text-center"> utilistation de github</h2>
    <h2 class="display-4 text-center">Click</h2><hr class="py-4>"> 
        <div id="div1" class= "bg-dark p-4 text-white text-center">click</div>

        <h2 class="display-4 text-center ">dbcClick</h2><hr class="py-4>">
        <div id="div2" class="bg-success p-4 text-white text-center">dbclick</div>

        <h2 class="display-4 text-center ">mouseover</h2><hr class="py-4>">
        <div id="div3" class="bg-warning p-4 text-white text-center">mouseover</div>

        <h2 class="display-4 text-center ">mouseout</h2><hr class="py-4>">
        <div id="div4" class="bg-info p-4 text-white text-center">mouseout</div>

        <h2 class="display-4 text-center ">mousedown</h2><hr class="py-4>">
        <div id="div5" class="bg-danger p-4 text-white text-center">mousedown</div>

       

        <h2 clas="display-4 text-center">Keydown</h2>
        <form action="">
            <label for="form1">Keydown</label>
            <input type="text" id="form1">
        </form><hr>

        <h2 clas="display-4 text-center">Select</h2>
        <form action="">
            <label for="form2">Select</label>
            <input type="text" id="form2">
        </form><hr>

        <h2 clas="display-4 text-center">Submit</h2>
        <form action="" id="form3">
            
            <input type="submit" id="submit" value="submit">
        </form><hr>
    </div>

    <p>test</p>

    <script>
    
        var div1=document.getElementById('div1');
        console.info(div1);
    //on associe l'evenement 'click' à la div1 que nous venons de selectionner, et pour un click , la fonction anonyme déclarée s"execute automatiquement

        div1.onclick = function () {
        alert('Div1 (test1) - évènement CLICK');
        }
    //on selectionne la div1 et dans le même temps on associe l'évènement et la fonction anonyme s'execute autom
    
        document.getElementById('div1').onclick = function ()
        {
        alert('Div1 (test2) - évènement CLICK');
        }    

//------------------------------------------------------------
// addEventListner() fonction prédéfinie qui fait de l'objet selectionné (div1) et qui permet  d'associer un évènement
        document.getElementById('div1').addEventListener('click', function(){
        alert ('Div1 (test3)- évènement CLICK');
        });
  //on associel'évènement 
  
        document.getElementById('div1').addEventListener('click', div1);
        function div1 (){
        alert ('Div1 (test4)- évènement CLICK');
        }

// -------------EVENEMENT DBLCLICK-------------------------------

        //selectionner le div id 'div2'
            //associer l'évènement double click afficher une alerte en cas de double click sur la div

    var div2=document.getElementById('div2');
            console.info(div2);
    document.getElementById('div2').ondblclick = function ()
        {
       
        this.style.fontsize="xx-large";
        this.style.border="thick solid #0000FF";
        this.style.fontweight="900";
        this.innerHTML='vivement le week-end';
        }    
//-------------------ONMOUSEOVER----------------------------------------
    var div3=document.getElementById('div3');
            console.info(div3);
    document.getElementById('div3').onmouseover = function ()
        {
        
        this.style.boxShadow="13px 17px 23px -1px rgba(0,0,0,0.75";
        this.style.letterSpacing="15px";
        this.style.borderRadius="15px";
        this.style.cursor ="pointer";
        this.style.transition="all 2s";
        this.innerHTML='vivement le week-end';
        }   

    //-----------------ONMOUSEOUT------------------------ 
     var div4=document.getElementById('div4');
           
     document.getElementById('div4').onmouseout = function ()
        {
        
        this.style.boxShadow="none";//this represente  l'objet 'div3' 
        this.style.letterSpacing="0";
        this.style.borderRadius="0";
        this.style.cursor ="pointer";
        this.style.transition="all 2s";
        this.style.color="#ffffff";
        this.innerHTML='vivement le week-end';
        }  
    //-----------------ONMOUSdown----------------------------  
    var div5=document.getElementById('div5');
           
    document.getElementById('div5').onmousedown = function ()
        {
      
        this.style.boxShadow="none";
        this.style.fontsize="xx-large";
        this.style.border="0";
        this.style.cursor ="pointer";
        this.style.color="#000000";
        this.style.transition="all 2s";
        this.innerHTML='vivement le week-end';
        }  

// ----------------------KEYDOWN--------------------------------------
  
        document.getElementById("form1").onkeydown= function(){
            alert('evenement KEYDOWN form 1!!');
        }

// -------------------------SELECT---------------------------------------

        document.getElementById('form2').onselect= function(){
            alert('evenement SELECT form2 !!');
       }

//------------------------SUBMIT----------------------------------------
//event represente l'evenement submit
document.getElementById('form3').onsubmit= function(event){
            event.preventDefault();// fonction prédenie qui permet d'annuler le comportement du boutoun 'submit' qui a pour role de recharger le code/page
            alert('evenement Submit form3 !!');
        }






   </script>
    </div>
</body>
</html>