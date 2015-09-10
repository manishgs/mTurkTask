<!DOCTYPE html>
<html>
<head>
    <title>Task</title>

    <script src="jquery.js"></script>
    <script type="text/javascript">
     $(function () {

        $('#mturk_form').on('submit', function(e){
            if($('#feedback').val() == '')
            {
                e.preventDefault();
                alert('Text can\'t be empty')            
            }            
        });
    })
    </script>
    <style>
        .wrapper {overflow: hidden; width: 900px; padding: 20px;  margin:20px auto; border: 1px solid #ccc}
        .left {float: left; width: 49% ;}
        .right {float: right; width: 49%}
        .button{  margin-top: 20px;
            background-color: #eee);
            border: none;
            cursor: pointer;
            padding: 8px 10px;
            color: #484848; }
            .button:hover {background: #ccc}
    </style>
</head>
<body>
    <div class="wrapper">
        <p>In this HIT, you are to transcribe the text as shown in the scanned pdf on the right. It is possible that your HIT will be rejected if we find that there are number of spelling mistakes or missing text in the transcribed text.</p>
        <p>You must accept HIT before you can submit the result.</p>
        <div class="left">
            <form id="mturk_form" method="post" action="https://www.mturk.com/mturk/externalSubmit">
                <input type="hidden" name="workerId" value="<?php echo $_GET['workerId'];?>"/>
                <input type="hidden" name="assignmentId" value="<?php echo $_GET['assignmentId'];?>"/>
                <textarea name="feedback" id="feedback" style="width: 100%" rows="38.5"
                          placeholder="Write the text here"></textarea>
                <br>
                <button type="submit" value="Submit" class="button">Finish and Submit HIT</button>
            </form>
        </div>
        <?php  $pdf=isset($_GET['pdf'])?$_GET['pdf']:'';?>
        <div class="right">
           <iframe width="100%" height="575" src="/viewer#<?php echo $pdf;?>"></iframe>
        </div>
    </div>
</body>
</html>
