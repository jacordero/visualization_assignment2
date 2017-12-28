<html>
<head>
    <meta charset="utf-8">
    <style>
        .state{
            fill: none;
            stroke: #a9a9a9;
            stroke-width: 1;
        }
        .state:hover{
            fill-opacity:0.5;
        }
        #tooltip {
            position: absolute;
            text-align: center;
            padding: 20px;
            margin: 10px;
            font: 12px sans-serif;
            background: lightsteelblue;
            border: 1px;
            border-radius: 2px;
            pointer-events: none;
        }
        #tooltip h4{
            margin:0;
            font-size:14px;
        }
        #tooltip{
            background:rgba(0,0,0,0.9);
            border:1px solid grey;
            border-radius:5px;
            font-size:12px;
            width:auto;
            padding:4px;
            color:white;
            opacity:0;
        }
        #tooltip table{
            table-layout:fixed;
        }
        #tooltip tr td{
            padding:0;
            margin:0;
        }
        #tooltip tr td:nth-child(1){
            width:50px;
        }
        #tooltip tr td:nth-child(2){
            text-align:center;
        }
    </style>
    <script src="/js/uStates.js"></script>
    <script src="http://d3js.org/d3.v3.min.js"></script>
</head>
<body>

    <div id="app">
        <us-map></us-map>
    </div>

    <script src="{!! asset('js/app.js') !!}"></script>

</body>
</html>