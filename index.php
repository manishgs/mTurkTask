<!DOCTYPE html>
<html>
<head>
    <title>Task</title>
    <meta charset="utf-8">
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
        .wrapper {overflow: hidden; width: 900px; padding: 10px 20px;  margin:20px auto; border: 1px solid #ccc}
        .left {float: left; width: 48% ;}
        .right {float: right; width: 48%}
        .button{  margin-top: 20px;
            background-color: #eee);
            border: none;
            cursor: pointer;
            padding: 8px 10px;
            color: #484848; }
        .button:hover {background: #ccc}
        .disclaimer {font-size: 14px;   background-color: #ECECEC;  padding: 10px;}
        #feedback {padding: 10px;}
    </style>
</head>
<body>
    <div class="wrapper">
        <p>In this HIT, you are to transcribe the text as shown in the scanned pdf on the right. It is possible that your HIT will be rejected if we find that there are number of spelling mistakes or missing text in the transcribed text.</p>
        <p>You must accept HIT before you can submit the result.</p>
        <p class="disclaimer">DISCLAIMER - IF YOU ARE NOT A FRENCH SPEAKER PLEASE DO NOT COMPLETE TASKS FOR FRENCH LANGUAGE DOCUMENTS. DUE TO ERRORS BY PREVIOUS TRANSCRIBERS, WE ARE NOT IN A POSITION TO PAY FOR TRANSCRIPTIONS OF FRENCH LANGUAGE DOCUMENTS BY NON-FRENCH SPEAKERS.</p>
        <div class="left">
            <form id="mturk_form" method="post" accept-charset="utf-8" action="https://www.mturk.com/mturk/externalSubmit">
                <input type="hidden" name="workerId" value="<?php echo $_GET['workerId'];?>"/>
                <input type="hidden" name="assignmentId" value="<?php echo $_GET['assignmentId'];?>"/>
                <textarea name="feedback" id="feedback" style="width: 100%" rows="38.5"
                          placeholder="Write the text here"></textarea>
                <br>
                <button type="submit" value="Submit" class="button">Finish and Submit HIT</button>
            </form>
        </div>
        <?php $pdf=isset($_GET['pdf'])?$_GET['pdf']:'';?>
        <div class="right">
           <iframe width="100%" height="590" src="/viewer#<?php echo $pdf;?>"></iframe>
        </div>
    </div>
</body>
</html>
