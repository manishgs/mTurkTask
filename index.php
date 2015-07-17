<script src="jquery.js"></script>
<script type="text/javascript"
        src="http://www.jawish.org/blog/uploads/jquery.gdocsviewer.min.js"></script>;
<script type="text/javascript">
    $(document).ready(function () {
        $('#pdf_url').gdocsViewer({width: 450, height: 580});
    });
</script>

<style>
    .wrapper {overflow: hidden; width: 900px; padding: 20px;  margin:20px auto; border: 1px solid #ccc}
    .left {float: left; width: 49% ;}
    .right {float: right; width: 49%}
    .button{  margin-top: 20px;
        background-color: #eee);
        border: none;
        padding: 8px 10px;
        color: #484848; }
</style>


<div class="wrapper">
    <h3>Mturk</h3>
    <div class="left">

        <form id="mturk_form" method="post" action="https://workersandbox.mturk.com/mturk/externalSubmit">
            <input type="hidden" name="workerId" value=""/>
            <input type="hidden" name="assignmentId" value=""/>
            <textarea name="feedback" style="width: 100%" rows="38.5"
                      placeholder="Enter any feedback you have about the task here"></textarea>
            <br>
            <button type="submit" value="Submit" class="button">Finish and Submit HIT</button>
        </form>

    </div>
    <div class="right">
            <a href="https://rc-demo.s3-us-west-2.amazonaws.com/84/1.pdf" id="pdf_url" ></a>
    </div>
</div>

