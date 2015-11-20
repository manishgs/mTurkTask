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
        #instructions {background-color: #F2F2F2; border-color: #D1D1D1}
        #instructions li {padding: 3px 0px}
        .see_other_instruction {color: red; text-decoration: none;}
    </style>
</head>
<body>
    <div class="wrapper">
        <p>In this HIT, you are to transcribe the text as shown in the scanned pdf on the right. It is possible that your HIT will be rejected if we find that there are number of spelling mistakes or missing text in the transcribed text.</p>
    
        <?php if($_GET['assignmentId'] == 'ASSIGNMENT_ID_NOT_AVAILABLE'):?>
            <p class="disclaimer">DISCLAIMER - IF YOU ARE NOT A FRENCH SPEAKER PLEASE DO NOT COMPLETE TASKS FOR FRENCH LANGUAGE DOCUMENTS. DUE TO ERRORS BY PREVIOUS TRANSCRIBERS, WE ARE NOT IN A POSITION TO PAY FOR TRANSCRIPTIONS OF FRENCH LANGUAGE DOCUMENTS BY NON-FRENCH SPEAKERS.</p>
            <div id="instructions" class="wrapper">
            <h4>Other instructions for transcribers: </h4>
            <ol>
                <li>1) Original letters and accents should be preserved (for example for French language contracts, the letter/ symbols “œ” and “æ” and the following accents should be transcribed: à ç è é ê ö)</li>
                <li>Original symbols should be transcribed where possible (for example: ° as used in “N°”, or in coordinates like 53°14’477’’)</li>
                <li>For non-transcribed objects such as maps, photos or illegible signatures, please provide a bracketed entry (for example: [map], [photo] or [signature])</li>
                <li>If you can read the handwritten signature, or any other handwriting, please transcribe it</li>
                <li>Tables should be transcribed with pipes ( | ) as separators (for example: “Royalties | 10% | 12% | 15%”)</li>
                <li>Please include any typed page numbers or other document references that appear on the page.</li>
                <li>Please include a single space only between each Article of the contract.</li>
            </ol>
            </div>
        <?php else:?>
            <p class="disclaimer">DISCLAIMER - IF YOU ARE NOT A FRENCH SPEAKER PLEASE DO NOT COMPLETE TASKS FOR FRENCH LANGUAGE DOCUMENTS. DUE TO ERRORS BY PREVIOUS TRANSCRIBERS, WE ARE NOT IN A POSITION TO PAY FOR TRANSCRIPTIONS OF FRENCH LANGUAGE DOCUMENTS BY NON-FRENCH SPEAKERS.</p>
            <p><a href="#instructions" class="see_other_instruction">See other instructions</a></p>
        <?php endif;?>

        <div class="left">
            <form id="mturk_form" method="post" accept-charset="utf-8" action="https://www.mturk.com/mturk/externalSubmit">
                <input type="hidden" name="workerId" value="<?php echo $_GET['workerId'];?>"/>
                <input type="hidden" name="assignmentId" value="<?php echo $_GET['assignmentId'];?>"/>
                <textarea name="feedback" id="feedback" style="width: 100%" rows="38.5"
                          placeholder="Write the text here"></textarea>
                <br>
    
            <?php if($_GET['assignmentId'] != 'ASSIGNMENT_ID_NOT_AVAILABLE'):?>
                <button type="submit" value="Submit" class="button">Finish and Submit HIT</button>
            <?php else:?>
                <p>You must accept HIT before you can submit the result.</p>
            <?php endif;?>
    
            </form>
        </div>
        <?php $pdf=isset($_GET['pdf'])?$_GET['pdf']:'';?>
        <div class="right">
           <iframe width="100%" height="590" src="/viewer#<?php echo $pdf;?>"></iframe>
        </div>
    </div>

    <?php if($_GET['assignmentId'] != 'ASSIGNMENT_ID_NOT_AVAILABLE'):?>
    <div id="instructions" class="wrapper">
        <h4>Other instructions for transcribers: </h4>
        <ol>
            <li>1) Original letters and accents should be preserved (for example for French language contracts, the letter/ symbols “œ” and “æ” and the following accents should be transcribed: à ç è é ê ö)</li>
            <li>Original symbols should be transcribed where possible (for example: ° as used in “N°”, or in coordinates like 53°14’477’’)</li>
            <li>For non-transcribed objects such as maps, photos or illegible signatures, please provide a bracketed entry (for example: [map], [photo] or [signature])</li>
            <li>If you can read the handwritten signature, or any other handwriting, please transcribe it</li>
            <li>Tables should be transcribed with pipes ( | ) as separators (for example: “Royalties | 10% | 12% | 15%”)</li>
            <li>Please include any typed page numbers or other document references that appear on the page.</li>
            <li>Please include a single space only between each Article of the contract.</li>
        </ol>
    </div>
    <?php endif;?>
</body>
</html>
