<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>trash.ink</title>
    <meta name="description" content="Write some trash and publish it online.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/trash.css">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="icon" type="image/png" href="favicon.png">    
    <meta name="theme-color" content="#fafafa">
</head>

<body>
    <div id="main-scrollbar">
        <nav>
            <a class="intro-index" href="./">Trash.ink</a>
            <a class="intro-about" href="about/">?</a>
        </nav>
        
        <main>
            <div id="main--wrapper">
                <header>
                    <svg version="1.1" id="trash-logo_layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 541.7 80.7" style="enable-background:new 0 0 541.7 80.7;" xml:space="preserve">
                        <g>
                            <path class="trash-logo_new" d="M58.5,20.9h-18v54h-18v-54h-18V5.8h54.1V20.9z"/>
                            <path class="trash-logo_new" d="M126.9,74.9h-20.8l-13-25.7H87v25.7H69V5.8h29c5.3,0,9.8,1,13.5,3.1c3.7,2.1,6.6,4.8,8.6,8.2 c2,3.4,2.9,7,2.9,10.9c0,4.3-1.2,8-3.5,11.1c-2.3,3.1-5.1,5.4-8.4,6.9L126.9,74.9z M105,28c0-1.2-0.3-2.4-0.9-3.4 c-0.6-1.1-1.5-1.9-2.7-2.6s-2.6-1-4.2-1H87V35h10.2c1.6,0,3-0.3,4.2-1c1.2-0.6,2.1-1.5,2.7-2.5C104.7,30.4,105,29.3,105,28z"/>
                            <path class="trash-logo_new" d="M200.8,74.9H182l-3.4-10.3h-22.6l-3.6,10.3h-18.8l26.6-69.1h13.9L200.8,74.9z M173.9,50.4L167.7,32l-6.6,18.4 H173.9z"/>
                            <path class="trash-logo_new" d="M260.4,53.7c0,4.5-1.3,8.4-3.8,11.7c-2.5,3.3-5.9,5.8-10.3,7.5c-4.3,1.7-9.1,2.5-14.2,2.5 c-6.1,0-11.3-0.7-15.8-2c-4.5-1.4-8.5-3.7-12-7.1l11.6-10.9c1.8,1.7,4.2,2.9,7.1,3.7c2.9,0.8,6,1.2,9.2,1.2c7,0,10.5-2.1,10.5-6.2 c0-1.8-0.5-3.1-1.5-4.1c-1-0.9-2.6-1.6-4.8-1.8l-8.8-1.2c-6.5-0.9-11.4-2.9-14.7-6.1c-3.4-3.3-5-7.9-5-13.9c0-4.2,1.1-8,3.2-11.3 s5.3-5.9,9.3-7.7c4-1.9,8.8-2.8,14.2-2.8c5.4,0,10.1,0.7,14.1,2c4,1.3,7.6,3.4,10.6,6.3L248,24.1c-1.9-1.8-3.9-2.9-6.1-3.4 c-2.2-0.5-4.8-0.7-7.8-0.7c-2.9,0-5.1,0.6-6.6,1.9c-1.5,1.3-2.3,2.8-2.3,4.5c0,1.2,0.5,2.3,1.5,3.2c1.1,1.1,2.8,1.8,5,2l8.8,1.1 c6.4,0.9,11.2,2.8,14.4,5.7c1.9,1.7,3.3,3.8,4.1,6.3C260,47.4,260.4,50.3,260.4,53.7z"/>
                            <path class="trash-logo_new" d="M325.4,74.9h-18V47.5h-19.1v27.4h-18V5.8h18v26.6h19.1V5.8h18V74.9z"/>
                            <path class="trash-logo_new" d="M357.2,74.9h-18.5V57.4h18.5V74.9z"/>
                            <path class="trash-logo_new" d="M388.5,74.9h-18V5.8h18V74.9z"/>
                            <path class="trash-logo_new" d="M460.6,74.9h-15.7l-23.5-34.7v34.7h-18V5.8h15.7l23.5,34.7V5.8h18V74.9z"/>
                            <path class="trash-logo_new" d="M537.3,74.9h-21l-16.9-28.3l-6.2,6.7v21.6h-17.9V5.8h17.9v24.4l21.2-24.4h22l-25,27.9L537.3,74.9z"/>
                        </g>
                    </svg>

                    <h1>Write some trash and publish it online(*)</h1>
                    <p>This is a simple platform for you to write anything anonymously. Anything goes. <br> Just write something, hit PUBLISH and it is live:</p>                   
                </header>

                <div id="user-input">
                    <form method="post" action="" onsubmit="return post();">
                        <textarea id="comment" maxlength="270"></textarea>              
                        <input id="pushbutton" type="submit" value="Publish">
                    </form>
                </div>
            </div>
        
            <ol reversed id="all_comments">
                <?php                
                    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
                    $host="internal-db.s228714.gridserver.com";
                    $username="db228714";
                    $password="o!taI{K^f48";
                    $databasename="db228714_comments";
                
                    $connect=mysql_connect($host,$username,$password);
                    $db=mysql_select_db($databasename);
                        
                    $comm = mysql_query("select comment,post_time from comments order by post_time desc");
                        while($row=mysql_fetch_array($comm))
                        {
                            $comment=$row['comment'];
                            $time=$row['post_time'];
                    ?>

                    <li class="comment_div">
                        <div class="comment-wrapper">
                            <p class="comment"><?php echo htmlspecialchars($comment);?></p>
                            <p class="time"><?php echo date('M d Y - H:i a', strtotime($time));?></p>
                        </div>
                    </li>

                <?php
                }            
                ?>
            </ol>            
        </main>

        <footer>
            <div class="footer-privacy">* Nobody tracks you here — that is great! You can rest assured your privacy is being respected.</div> <div class="footer-date">© <?php echo date("Y"); ?> Some rights reserved. Only joking.</div>
        </footer>
    </div>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
    <script src="js/main.js"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '');
    </script>
</body>
</html>
