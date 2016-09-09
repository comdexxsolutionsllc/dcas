
<!-- Styles -->
<link href="/css/app.css" rel="stylesheet">

<link href="//cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" rel="stylesheet" />
<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" rel="stylesheet" />
<link href="/components/splash-screen/dist/splash.min.css" rel="stylesheet" />

<style>
body, html {
	height: 100%;
}

body {
	margin: 0;
	font-family: sans-serif;
}

header, footer {
	background: #c5c5c5;
}

main {
    display: flex;
    margin-top: 20px;
    margin-bottom: auto;
}

@media screen and (max-width: 768px) { 
    main { 
        flex-direction: column-reverse;
    }
}

main aside {
    margin-right: 40px;
}

.doccontainer {
	min-height: 100%;
	max-width: 1280px;
	margin: auto;
	display: flex;
	flex-direction: column;
/*        justify-content: space-between;*/
}

.doccontainer > * {
	padding: 0 5px;
}
</style>