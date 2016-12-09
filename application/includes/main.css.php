*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html{
    background: #000 url(http://www.windowswolf.com/Themes/Wolf4/images/custom/320.jpg);
}

#container{
	width:960px;
	margin: 0 auto;
	border: 1px solid black;
	background-color:#fff;
    
}

#header{
	width: 960px;
	border: 1px solid black;
}

.navbar{
	width: 129px;
	float: left;
    background: #fff url(http://www.windowswolf.com/Themes/Wolf4/images/custom/windowbg.png) 0 100% repeat-x;
    border-bottom: solid 1px gray;
  
    margin: 1.1%;

}

    


.menunav h3{
    margin: 0px;
    background: #943c02 url(http://www.windowswolf.com/Themes/Wolf4/images/titlebg.gif) repeat-x;
    color:#ededed;
    font-style: normal;
    font-size: 15px;
    border-bottom: solid 2px #943c02;
    padding-left: 7px;
    padding-right: 10px;

    
}

.navbar ul{
	list-style: none;
	padding: 1px;
    margin: 7%;
}



.navbar ul a{

	text-decoration: none;
	margin: 0;
}

.navbar ul a:hover{
    color:red;
}

#active a{
	background-color: #600;
	display: block;
}


#main{
	float: left;
	border: 1px solid black;
	width: 80%;
	padding: 1em;
    background-color:white;
    margin-top: 1.1%;
    margin-bottom: 1.1%;
}

#footer{
	width: 960px;
	clear: both;
	border: 1px solid #000000;
	padding-top: 1em;
	padding-bottom: 1em;
	text-align: center;
    background-color:white;
    border-radius: 0px 0px 20px 20px;

}

.formregis label{
    display: inline-block;
    float: left;
    clear: left;
    width: 250px;
    text-align: right;
}
.formregis input{
  display: inline-block;
  float: left;
}

a {
    text-decoration: none !important;
}