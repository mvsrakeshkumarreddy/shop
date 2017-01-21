<!DOCTYPE html>
<html>
    <head>
        <title>contact</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Contact Page</div>
                <input type="text">
                {!! Form::text('price') !!}
                <br>
                {!! Form::text('price','50$',[
                        'class'=> "form-control",
                        'placeholder'=>"give a price"
                        ])!!}
                        <br>
                {!!Form::number('level',50,['max'=>55,'min'=>45])!!}
                <br>
               {!!Form::password('password')!!}
               <br>
               {!!Form::radio('rakesh','male')!!}
               <br>
               {!!Form::select('size',array('l'=>'large','s'=>'small'))!!}
               <br>
               {!!Form::select('animal',array(
                'cats'=>array('leopard'=>'LEO'),
                'dogs'=>array('span'=>'SPA'),
                ))!!}
                {!!Form::selectMonth('month')!!}
                <br>
                {!!Form::submit('submit')!!}
            </div>
        </div>
    </body>
</html>
