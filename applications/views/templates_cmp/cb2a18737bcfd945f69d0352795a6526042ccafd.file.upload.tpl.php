<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-02-06 03:27:36
         compiled from "W:\home\intrawork.loc\demo\applications\views\templates\files\upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138925c5a29f8e90786-86230569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb2a18737bcfd945f69d0352795a6526042ccafd' => 
    array (
      0 => 'W:\\home\\intrawork.loc\\demo\\applications\\views\\templates\\files\\upload.tpl',
      1 => 1448978964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138925c5a29f8e90786-86230569',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c5a29f8e9c304_83870989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c5a29f8e9c304_83870989')) {function content_5c5a29f8e9c304_83870989($_smarty_tpl) {?>
<form id="fileupload" action="files/upload/" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="folder_id" id="current_folder_id" value="0">
<div class="row">
    <div class="col-sm-12">
		<span class="btn btn-default btn-block fileinput-button" id="fileinput-button">
			<span><i class="fa fa-upload"></i> <?php echo L::text_add_files;?>
</span>
			<input type="file" name="file" multiple="">
		</span>
    </div>
</div>
</form>

<div class="row">
    <div class="col-sm-12 hidden" id="progress-upload">
        <div class="space space-sm"></div>
        <div id="progress-upload-files" class="progress progress-striped active">
            <div class="progress-bar progress-bar-success"  aria-valuemin="0" aria-valuemax="100" style="width: 0%;">0%</div>
        </div>
        <div id="progress-upload-files-status">Загружено: 0 / 0</div>
    </div>
</div>
<?php }} ?>
