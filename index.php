<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="pic">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <table class="table table-borderless">

                    <tr>
                        <td class="text">Select a juice</td> 
                        <td class="text">
                            <input type="radio" id="j1" class="form-check-input" name="juice" value="mango">mango 
                            <input type="radio" id="j2" class="form-check-input" name="juice" value="orange">Orange
                            <input type="radio" id="j3" class="form-check-input" name="juice" value="apple">apple
                            <input type="radio" id="j4" class="form-check-input" name="juice" value="grape">grape
                            <input type="radio" id="j5" class="form-check-input" name="juice" value="pineappple">pineapple
                        
                        
                        
                        
                        
                        </td>
                    </tr>
                    <tr>
                        <td class="text">Select Pizza</td>
                        <td class="text">
                            <input type="radio" id="p1" class="form-check-input" name="Pizza" value="Neapolitan">Neapolitan Pizza
                            <input type="radio" id="p2" class="form-check-input" name="Pizza" value="Chicago">Chicago Pizza
                            <input type="radio" id="p3" class="form-check-input" name="Pizza" value="California">California Pizza
                            <input type="radio" id="p4" class="form-check-input" name="Pizza" value="Greek">Greek Pizza
                            
                        
                        
                        
                        
                        </td>
                    </tr>
                    <tr>
                        <td class="text">Select Dessert</td>
                        <td class="text"><input type="radio" id="d1" class="form-check-input" name="Dessert" value="Coconut">Coconut Pudding
                            <input type="radio" id="d2" class="form-check-input" name="Dessert" value="Icecream">Fried Icecream
                            <input type="radio" id="d3" class="form-check-input" name="Dessert" value="Coffee">Cold Coffee
                            <input type="radio" id="d4" class="form-check-input" name="Dessert" value="AFalooda">Arabian Falooda
                            <input type="radio" id="d5" class="form-check-input" name="Dessert" value="RFalooda">Royal Falooda
                     
                        </td>

                    </tr>
                    <tr>
                        <td class="text">Select Salad</td>
                        <td class="text"> 
                            <input type="radio" id="s1" class="form-check-input" name="Salad" value="Chicken">Chicken Salad
                            <input type="radio" id="s2" class="form-check-input" name="Salad" value="Fajitha">Fajitha Salad
                            <input type="radio" id="s3" class="form-check-input" name="Salad" value="Beef">Beef Salad
                            <input type="radio" id="s4" class="form-check-input" name="Salad" value="Vegitable">Vegitable Salad


                        </td>
                    </tr>
                    <tr>
                        <td class="text">Select Soup</td>
                        <td class="text">
                            <input type="radio" id="SS1" class="form-check-input" name="Soup" value="Chicken">Chicken Soup
                            <input type="radio" id="SS2" class="form-check-input" name="Soup" value="Blackbeans">Blackbeans Soup
                            <input type="radio" id="SS3" class="form-check-input" name="Soup" value="Chilly">Chilly Soup
                            <input type="radio" id="SS4" class="form-check-input" name="Soup" value="Vegitables">Vegitables Soup


                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="select()" class="btn btn-success">Submit</button></td>
                    </tr>


                </table>


            </div>

        </div>

    </div>
    <script>
        function select()
        {
            var a=document.getElementById("j1").checked
            var b=document.getElementById("j2").checked
            var c=document.getElementById("j3").checked
            var d=document.getElementById("j4").checked
            var e=document.getElementById("j5").checked
            var jprice=0


            if(a==true)
            {
                var getju1=document.getElementById("j1").value
                jprice=40

            }
            else if(b==true)
            {
                var getju1=document.getElementById("j2").value
                jprice=50

            }
            else if(c==true)
            {
                var getju1=document.getElementById("j3").value
                jprice=55

            }
            else if(d==true)
            {
                var getju1=document.getElementById("j4").value
                jprice=45

            }
            else if(e==true)
            {
                var getju1=document.getElementById("j5").value
                jprice=60

            }

            console.log(getju1)
            console.log(jprice)

            var p1=document.getElementById("p1").checked
            var p2=document.getElementById("p2").checked
            var p3=document.getElementById("p3").checked
            var p4=document.getElementById("p4").checked
            var pprice=0



            if(p1==true)
            {
                var getp1=document.getElementById("p1").value
                var pprice=100

            }
            else if(p2==true)
            {
                var getp1=document.getElementById("p2").value
                var pprice=120

            }
            else if(p3==true)
            {
                var getp1=document.getElementById("p3").value
                var pprice=140

            }
            else if(p4==true)
            {
                var getp1=document.getElementById("p4").value
                var pprice=160

            }


            console.log(getp1)
            console.log(pprice)

            var d1=document.getElementById("d1").checked
            var d2=document.getElementById("d2").checked
            var d3=document.getElementById("d3").checked
            var d4=document.getElementById("d4").checked
            var d5=document.getElementById("d5").checked
            var dprice=0



            if(d1==true)
            {
                var getd1=document.getElementById("d1").value
                var dprice=200
            }
            else if(d2==true)
            {
                var getd1=document.getElementById("d2").value
                var dprice=210
                
            }
            else if(d3==true)
            {
                var getd1=document.getElementById("d3").value
                var dprice=220

            }
            else if(d4==true)
            {
                var getd1=document.getElementById("d4").value
                var dprice=230
            }
            else if(d5==true)
            {
                var getd1=document.getElementById("d5").value
                var dprice=240

            }
            console.log(getd1)
            console.log(dprice)

            var s1=document.getElementById("s1").checked
            var s2=document.getElementById("s2").checked
            var s3=document.getElementById("s3").checked
            var s4=document.getElementById("s4").checked
            var sprice=0

            if(s1==true)
            {
                var gets1=document.getElementById("s1").value
                var sprice=150
            }
            else if(s2==true)
            {
                var gets1=document.getElementById("s2").value
                var sprice=170
            }
            else if(s3==true)
            {
                var gets1=document.getElementById("s3").value
                var sprice=160
            }
            else if(s4==true)
            {
                var gets1=document.getElementById("s4").value
                var sprice=140
            } 
           

            console.log(gets1)
            console.log(sprice)

            var ss1=document.getElementById("SS1").checked
            var ss2=document.getElementById("SS2").checked
            var ss3=document.getElementById("SS3").checked
            var ss4=document.getElementById("SS4").checked
            var ssprice=0

            if (ss1==true)
            {
                var getss1=document.getElementById("SS1").value
                var ssprice=200
    
            }
            else if(ss2==true)
            {
                var getss1=document.getElementById("SS2").value
                var ssprice=250

            }
            else if(ss3==true)
            {
                var getss1=document.getElementById("SS3").value
                var ssprice=300

            }
            else  if(ss4==true)
            {
                var getss1=document.getElementById("SS4").value
                var ssprice=350

            }

            console.log(getss1)
            console.log(ssprice)

            var sum=0

           var sum=pprice+ssprice+sprice+dprice+jprice

            console.log(sum)


        }
        

    </script>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>