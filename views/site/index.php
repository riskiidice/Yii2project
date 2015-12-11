<?php
use yii\widgets\ActiveForm;
use yii\web\Session;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>

<script type="text/javascript">
    function chooseItem(sender){
      var senderObject = $('#' + sender.id);   
      var slot = senderObject.attr('slot');
      var limit = senderObject.attr('limit');
      var start_date = senderObject.attr('start_date');
      var stop_date = senderObject.attr('stop_time');
      var start_time = senderObject.attr('start_time');
      var stop_time = senderObject.attr('stop_time');
      var task = senderObject.attr('task');
       // alert(limit);
       $('#target_id').val(sender.id);
       $('#target_slot').text("Slot :"+slot+" Task detail");
       $('#target_limit').val(limit);
       $('#target_start_date').val(start_date);
       $('#target_stop_date').val(stop_date);
       $('#target_start_time').val(start_time);
       $('#target_stop_time').val(stop_time);
       $('#target_task').val(task);
       
    }
</script>
<div class="main">
  <div class="hbg">
    <div class="hbg_resize">
      <img src="css/images/hbg_bg.jpg" width="970" height="215" alt="image" />
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
      
        <div class="article">
          <h2><span>SmartHome</span> Panel</h2>
          <div class="clr"></div>
         <!-- <p>Posted by <a href="#">Owner</a> | Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
          <p>This is a free CSS website template by <a href="http://www.bluewebtemplates.com/" title="Website Templates">BlueWebTemplates.com</a>. This 
work is distributed under the <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>, 
which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to 
<a href="http://www.bluewebtemplates.com/" title="Website Templates">BlueWebTemplates.com</a>.</p>
          <p><a href="#">Read more</a> | March 16, 2015</p>-->
        </div>
        <div class="article">
         <div class="bs-example" data-example-id="hoverable-table"> 
          <table class="table table-hover">
            <thead>
             <tr>
                 <th>No.</th>
                 <th>Slot</th>
                 <th>Status</th>
                 <th>Current</th>
                 <th>Action</th>
                 <th>Advance</th>
             </tr>
             </thead>
             <?php
              foreach ($data as $data_q) :
                 
             ?>
             <tr>
                 <td valign="middle"><?=$data_q->id?></td>
                 <td valign="middle"><?=$data_q->slot?></td>
                 <td valign="middle"><?=$data_q->status?></td>
                 <td valign="middle"><?=$data_q->current?></td>
                 <td valign="middle"><button class="btn btn-success"><span class="glyphicon glyphicon-play-circle"></span></button><button class="btn btn-danger" style="margin-left:5px"><span class="glyphicon glyphicon-off"></span></button></td>
                 <td valign="middle"><a class="btn btn-info" data-toggle="modal" data-target="#myModal"  id="<?=$data_q->id?>" slot="<?=$data_q->slot?>" limit="<?=$data_q->limit?>" start_date="<?=$data_q->start_date?>" stop_date="<?=$data_q->stop_date?>" start_time"<?=$data_q->stop_time?>" stop_time="<?=$data_q->stop_time?>" task="<?=$data_q->task?>" onclick="chooseItem(this)"><span class="glyphicon glyphicon-eye-open"></span></a></td>
             </tr>

            <?php
             endforeach;
            ?>
          </table>
        </div>
        </div>

   
      <div class="clr"></div>
    </div>
  </div>
  </div>
</div>
<!-- Start Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="chooseItem(this)"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" ></h4>
      <div class="modal-body">

<form method="post" action="index.php?r=site/update">
  <fieldset>
    <legend id="target_slot"></legend>
    Current Limit (A) : <input class="form-control" type="text" name="limit" id="target_limit">
    On Date : <input class="form-control" type="text" name="start_date">
    Off Date : <input class="form-control" type="text" name="stop_date">
    On Time : <input class="form-control" type="text" name="start_time">
    Off Time : <input class="form-control" type="text" name="stop_time">
    Task Active : <input type="checkbox" name="active" value="active">
  </fieldset>
</form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Modal -->