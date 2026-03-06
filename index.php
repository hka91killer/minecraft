<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Killer Minecraft Server</title>

<style>

body{
margin:0;
font-family:Arial, sans-serif;
background:linear-gradient(135deg,#1f1f2e,#0f0f18);
color:white;
text-align:center;
}

header{
padding:20px;
font-size:28px;
font-weight:bold;
background:#111;
}

.hero{
padding:100px 20px;
}

.hero h1{
font-size:50px;
margin-bottom:10px;
}

.server-box{
background:#1a1a2e;
display:inline-block;
padding:30px;
border-radius:12px;
margin-top:30px;
}

.ip{
font-size:22px;
color:#00ff9d;
}

.btn{
margin-top:20px;
padding:15px 35px;
border:none;
border-radius:10px;
font-size:18px;
cursor:pointer;
background:#5865F2;
color:white;
}

.btn:hover{
background:#4752C4;
}

footer{
margin-top:100px;
padding:20px;
color:#aaa;
}

</style>
</head>

<body>

<header>
⚔ Killer Minecraft Server
</header>

<section class="hero">

<h1>Welcome Player</h1>
<p>우리 마인크래프트 서버에 오신 것을 환영합니다</p>

<div class="server-box">

<p>서버 IP</p>
<div class="ip">14.5.42.34</div>

<button class="btn" onclick="copyIP()">IP 복사</button>

</div>

<br><br>

<a href="https://discord.gg/YOURINVITE">
<button class="btn">Discord 참여</button>
</a>

</section>

<footer>
© 2026 Killer Server
</footer>

<script>
function copyIP(){
navigator.clipboard.writeText("14.5.42.34");
alert("IP가 복사되었습니다!");
}
</script>

</body>
</html>
