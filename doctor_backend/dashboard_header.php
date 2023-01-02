
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS LINK HERE -->
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="style/boostrap/bootstrap.min.css">
    <!-- OTHER LINKS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,900&family=Open+Sans:wght@500&display=swap"
        rel="stylesheet">
    
<style>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
a{
    text-decoration: none;
    font-size: 1vw;
    color: #000;
    
}
.clr{
    clear: both;
}
ul li{
    list-style: none;
    text-transform: capitalize;

}
:root{
    --primary_color:#1D9160;
    --secondary_color:#FFFFFF;
    --teritary_color:#9a9c94;
    
}

h1,h2,h3,h4,h5,h6{
    font-family: 'Montserrat', sans-serif;;
    font-weight: 400;
    margin-bottom: .85rem;


}
p{  
    
    font-size: .8rem;
    font-family: 'Montserrat', sans-serif;;
    font-weight: 400;
}

button{
    font-family: 'Montserrat', sans-serif;;
    font-weight: 900;
    margin: 1.25rem 1rem 0 0;
    padding: 0.5rem 1rem;

}
.key{
    border:1px var(--primary_color) solid ; 
    background-color: var(--secondary_color);
}
.card-body h5{
    font-size: 1rem;
    color: var(--primary_color);
    text-align: center;
    
}

.card-body h6{
    font-size: 0.85rem;
    text-align: center;
    color: var(--teritary_color);  
}

 #navbar nav{
    padding:0.25rem ;
    
}
#navbar nav ul li a{
    color: var(--primary_color);
}
#navbar nav ul li{
    font-family: 'Montserrat', sans-serif;;
    font-weight: 900;
    font-size: clamp(1rem, 0.75rem, 2rem);
    margin: 2rem 0.85rem 0 0;
    list-style: none;
    float: left;
}
#navbar nav .leftpart, #navbar nav .rightpart{
    display: flex;
    align-items: center;
    justify-content: flex-start;
}


#navbar nav .logo{
    display: flex;
    align-items: center;
    justify-content: flex-start;
}
#navbar nav .logo img{
    display: block;
    width: 15rem;
    max-width: 100%;
    margin: 0.75rem;
}

 .loginkey{
    border:1px var(--primary_color) solid ; 
    background-color: var(--secondary_color);
}

    </style>
    <title>Document</title>
</head>
