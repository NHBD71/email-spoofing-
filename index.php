
<!DOCTYPE html>

<html lang=en>

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       

        <title>NOOB । Email Spoofing</title>

    

            <div>

      <style>

      body {

      width: 100%;

      background-repeat: no-repeat;

      background: black;

        }

     </style>

     </div>

   <br>

       

        <body bgcolor=black text=00ff00>

           

        </head>

        <style>img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {  display:none;}</style>

        <body>

            <link rel="image_src" href="https://1.bp.blogspot.com/-R-Cl-Xm2TVE/YIUJuE8ydfI/AAAAAAAAANc/L7VMBKw73pAKcPbdvl_TTy3I7o0LZwx0gCLcBGAsYHQ/s840/1598842869195-02.jpeg" />

 <link rel = "icon" href = "/logo.png" type = "image/x-icon">

        <header align=center>

<img style="width: 30%; border-radius: 50%;" src="Imgg/1662749476812.jpg" alt="logo">

            <h1 > NOOB Email Spoofer </h1>

        </header>

        <section>

            <form method="post" action="#">

                <table border="0">

                    <tr><td>EMail To Show: </td><td><input style="padding: 5px;" type=email name=email placeholder="fakemail@noob.com" /></td></tr>

                    <tr><td>Email id of Person: </td><td><input style="padding: 5px;" type=email name=mail placeholder="Enter victim Email" /></td></tr>

                    <tr><td>Subject to EMail : </td><td><input style="padding: 5px;" type=text name=subj placeholder="Enter Subject for Mail" /></td></tr>

                    <tr><td valign=top>Message to Person : </td><td><textarea name=msg rows=8 cols=30 ></textarea></td></tr>

                 

                    <tr><td><input style="padding: 5px; background: skyblue; font-size: 15px;" type=reset value=" Reset All" /></td><td><input style="padding: 5px; background: skyblue; font-size: 15px;" type=submit name=sub

                      

 

                     value="Send Fake Mail" /></td></tr>

                </table>

            </form>

        </section>

        <footer align=center>

            <p> Modified by <a href="https://www.facebook.com/me.nhbd.admin.link.copy.kn.korso.mama"target="_blank" style="text-decoration: none; color: red;"><b>MN SHIDDIK<b></a> 

        </footer>

    </body>

</html>

<?php if (isset($_POST['sub']) || !empty($_POST['mail'])) {

    $Slave = $_POST['mail'];

    $msg = $_POST['msg'];

    $subj = $_POST['subj'];

    $spoo = $_POST['email'];

    $headers = 'From:'.$spoo. "\r\n" .

            'Reply-To:'.$spoo. "\r\n" .

            'X-Mailer: PHP/' . phpversion();

        $mail = mail($Slave, $subj, $msg, $headers);

    if($mail) {echo "Spoof Mail Sent successfully

";

    } else {

        echo "Mail was not Sent

";

    }

} else {

    echo "Please fill all the form Properly";

}

?>

<!-- hitwebcounter Code START -->

<a href="https://www.hitwebcounter.com" target="_blank">

<img src="https://hitwebcounter.com/counter/counter.php?page=7958707&style=0009&nbdigits=6&type=page&initCount=0" title="Free Counter" Alt="web counter"   border="0" /></a>

