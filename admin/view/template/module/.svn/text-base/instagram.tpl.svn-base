<!--
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
 * */
-->
<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-instagram" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-instagram" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-name"><?php echo $entry_name; ?></label>
            <div class="col-sm-10">
              <input type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $entry_name; ?>" id="input-name" class="form-control" />
              <?php if ($error_name) { ?>
              <div class="text-danger"><?php echo $error_name; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-user-id"><?php echo $entry_user_id; ?></label>
            <div class="col-sm-10">
              <input type="text" name="user_id" value="<?php echo $user_id; ?>" placeholder="<?php echo $entry_user_id; ?>" id="input-user-id" class="form-control" />
              <?php if ($error_user_id) { ?>
              <div class="text-danger"><?php echo $error_user_id; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-access-token"><?php echo $entry_access_token; ?></label>
            <div class="col-sm-10">
              <input type="text" name="access_token" value="<?php echo $access_token; ?>" placeholder="<?php echo $entry_access_token; ?>" id="input-user-id" class="form-control" />
              <?php if ($error_access_token) { ?>
              <div class="text-danger"><?php echo $error_access_token; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-dimension"><?php echo $entry_dimension; ?></label>
            <div class="col-sm-10">
              <select name="dimension" id="input-dimension" class="form-control" />
                <?php 
                if($dimension=='50x50') 
				echo "<option value='50x50' selected>50x50</option>";
				else echo "<option value='50x50' >50x50</option>";
				 if($dimension=='100x100,') 
				echo "<option value='100x100' selected>100x100</option>";
				else echo "<option value='100x100' >100x100</option>";
				 if($dimension=='150x150') 
				echo "<option value='150x150' selected>150x150</option>";
				else echo "<option value='150x150' >150x150</option>";
				 if($dimension=='200x200') 
				echo "<option value='200x200' selected>200x200</option>";
				else echo "<option value='200x200' >200x200</option>";
				 if($dimension=='350x350') 
				echo "<option value='350x350' selected>350x350</option>";
				else echo "<option value='350x350' >350x350</option>";
				 if($dimension=='640x640') 
				echo "<option value='640x640' selected>640x640</option>";
				else echo "<option value='640x640' >640x640</option>";
				 if($dimension=='1080x1080') 
				echo "<option value='1080x1080' selected>1080x1080</option>";
				else echo "<option value='1080x1080' >1080x1080</option>";
				?>
              </select>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-autoplay"><?php echo $entry_autoplay; ?></label>
            <div class="col-sm-10">
              <select name="autoplay" id="input-autoplay" class="form-control" />
                <?php 
                if($autoplay=='true') 
				echo "<option value='true' selected>Yes</option>";
				else echo "<option value='true' >Yes</option>";
				if($autoplay=='false') 
				echo "<option value='false' selected>No</option>";
				else echo "<option value='false' >No</option>";
				?>
              </select>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-navigation"><?php echo $entry_navigation; ?></label>
            <div class="col-sm-10">
              <select name="navigation" id="input-navigation" class="form-control" />
                <?php 
                if($navigation=='true') 
				echo "<option value='true' selected>Yes</option>";
				else echo "<option value='true' >Yes</option>";
				if($navigation=='false') 
				echo "<option value='false' selected>No</option>";
				else echo "<option value='false' >No</option>";
				?>
              </select>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-pagination"><?php echo $entry_pagination; ?></label>
            <div class="col-sm-10">
              <select name="pagination" id="input-pagination" class="form-control" />
                <?php 
                if($pagination=='true') 
				echo "<option value='true' selected>Yes</option>";
				else echo "<option value='true' >Yes</option>";
				if($pagination=='false') 
				echo "<option value='false' selected>No</option>";
				else echo "<option value='false' >No</option>";
				?>
              </select>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-rewindnav"><?php echo $entry_rewindnav; ?></label>
            <div class="col-sm-10">
              <select name="rewindnav" id="input-rewindnav" class="form-control" />
                <?php 
                if($rewindnav=='true') 
				echo "<option value='true' selected>Yes</option>";
				else echo "<option value='true' >Yes</option>";
				if($rewindnav=='false') 
				echo "<option value='false' selected>No</option>";
				else echo "<option value='false' >No</option>";
				?>
              </select>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-item"><?php echo $entry_item; ?></label>
            <div class="col-sm-10">
              <input type="text" name="item" min='1' value="<?php echo $item; ?>" placeholder="<?php echo $entry_item; ?>" id="input-item" class="form-control" />
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
            <div class="col-sm-10">
              <select name="status" id="input-status" class="form-control">
                <?php if ($status) { ?>
                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                <option value="0"><?php echo $text_disabled; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_enabled; ?></option>
                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?>
