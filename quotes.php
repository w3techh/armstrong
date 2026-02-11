<?php
/**
 * Hello Dolly - Minimalist Standalone with Fade-in
 */

function hello_dolly_get_lyric() {
    $lyrics = "Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
We feel the room swayin'
While the band's playin'
One of your old favourite songs from way back when
So, take her wrap, fellas
Find her an empty lap, fella
Dolly'll never go away again
Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
We feel the room swayin'
While the band's playin'
One of your old favourite songs from way back when
Golly, gee, fellas
Find her a vacant knee, fellas
Dolly'll never go away
Dolly'll never go away
Dolly'll never go away again";

    $lyrics = explode("\n", $lyrics);
    return htmlspecialchars(trim($lyrics[mt_rand(0, count($lyrics) - 1)]));
}

$chosen = hello_dolly_get_lyric();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Dolly</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #fafafa;
            font-family: serif;
            color: #333;
        }

        #dolly {
            font-size: 2rem;
            text-align: center;
            padding: 0 20px;
            opacity: 0;
            animation: fadeIn 2s ease-in forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .refresh-hint {
            position: fixed;
            bottom: 20px;
            font-family: sans-serif;
            font-size: 0.8rem;
            color: #999;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div id="dolly">
        <?php echo $chosen; ?>
    </div>

    <a href="?" class="refresh-hint">Refresh for more lyrics</a>

</body>
</html>