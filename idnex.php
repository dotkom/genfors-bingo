<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Bingo 2019</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
    <script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
    <script src="js/jquery-func.js" type="text/javascript"></script>
</head>
<body>
<style>
.wrapper {
 background-color: #302244;
  border: 5px solid transparent;
  border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  border-image-slice: 1;
  height: 200px;
  margin: 20px auto;
  width: 200px;
}
</style>
<div id="top-r">
    <div id="top">


        <div class="shell">


            <div id="header">
                <h1 id="logo"><a href="#">genfors bingo</a><span>2019</span></h1>



                <div id="navigation">

                </div>

            </div>


            <div id="main">

                <div class="post">
                    <h2>Velg et bingo valg</h2>
                    <table style="background-color: yellow;color:blue; padding:20px;">
                        <tr>
                            <td style="padding:10px;"><button onclick="addYourChoise(1)">akklamasjon</button></td>
                            <td style="padding:10px; font-size:20px; color:red;" class="wrapper"><button onclick="addYourChoise(1)">aslak</button></td>
                            <td style="padding:10px;"><button onclick="addYourChoise(1)">for mye SNAKKING!!</button></td>
                        </tr>
                    </table>

                </div>

                <div class="post">
                    <h2>highscore</h2>
                    <ul id="highscore">
                        <li id="tor">Tor: 8</li>
                        <li id="you">You: 0</li>
                    </ul>

                </div>


            </div>





        </div>


    </div>
</div>
<script>
    let highscore=document.getElementById("highscore");
    let tor=document.getElementById("tor");
    let you=document.getElementById("you");
    let score=0;
    function addYourChoise(choise){
        score++;
        tor.innerText="Tor: "+(8+score);
        you.innerText="You: "+score;

    }

</script>

</body>
</html>
