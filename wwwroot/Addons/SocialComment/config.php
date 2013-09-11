<?php
return array(
	'comment_type'=>array(//配置在表单中的键名 ,这个会是config[random]
		'title'=>'集成类型:',	 //表单的文字
		'type'=>'select',		 //表单的类型：text、textarea、checkbox、radio、select等
		'options'=>array(		 //select 和radion、checkbox的子选项
			'1'=>'有言',		 //值=>文字
			'2'=>'多说',
		),
		'value'=>'1',			 //表单的默认值
	),
	'comment_uid_youyan'=>array(
		'title'=>'友言账号id:',
		'type'=>'text',
		'value'=>'',
		'tip'=>'填写自己登录友言后的uid'
	),
	'comment_short_name_duoshuo'=>array(
		'title'=>'多说短域名',
		'type'=>'text',
		'value'=>'',
		'tip'=>'每个站点一个域名'
	),
	'comment_form_pos_duoshuo'=>array(
		'title'=>'多说表单位置:',
		'type'=>'radio',
		'options'=>array(
			'top'=>'顶部',
			'buttom'=>'底部'
		),
		'value'=>'buttom'
	),
	'comment_data_list_duoshuo'=>array(
		'title'=>'多说单页显示评论数',
		'type'=>'text',
		'value'=>'10'
	),
	'comment_data_order_duoshuo'=>array(
		'title'=>'多说评论显示顺序',
		'type'=>'radio',
		'options'=>array(
			'asc'=>'从旧到新',
			'desc'=>'从新到旧'
		)
	)
);
